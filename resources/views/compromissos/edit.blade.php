@extends('layouts.app')

@section('title', 'Gerenciar Departamento')

@section('content')
<div class="container-fluid px-5" style="overflow: hidden;">
    <div class="row my-3">
        <div class="col-9">
            <h6 style="color: #999;">Gerenciar Compromissos</h6>
        </div>
        <div class="col-3  d-flex justify-content-between ">
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span style="color: #999;">Médicos</span>
                <span style="color: green;"><h5>0{{ $totalMedicos }}</h5></span>
            </div>
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span style="color: #999;">Infermeiras</span>
                <span style="color: blue;"><h5>0{{ $totalInfermeiras }}</h5></span>
            </div>
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span style="color: #999;">Parcientes</span>
                <span style="color: red;"><h5>0{{ $totalPacientes }}</h5></span>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <a class="btn btn-secondary btn-sm" href="{{ route('compromissos-index') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Atualizarção de Compromissos</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            <form action="{{ route('compromissos-update', ['id'=>$compromissos->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" value="{{ $compromissos->nome }}" name="nome">
                </div>
                <div class="form-group my-3">
                    <label for="">Notícia</label>
                    <input type="text" class="form-control" value="{{ $compromissos->noticia }}" name="noticia">
                </div>
                <div class="form-group my-3">
                    <label for="">Data e Hora</label>
                    <input type="text" class="form-control" value="{{ $compromissos->data_hora }}" name="data_hora">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-warning btn-sm" value="Editar Compromisso">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection