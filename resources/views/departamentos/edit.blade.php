@extends('layouts.app')

@section('title', 'Gerenciar Departamento')

@section('content')
<div class="container-fluid px-5" style="overflow: hidden;">
    <div class="row my-3">
        <div class="col-9">
            <h6 style="color: #999;">Gerenciar Departamento</h6>
        </div>
        <div class="col-3  d-flex justify-content-between ">
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span>Médicos</span>
                <span>00</span>
            </div>
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span>Infermeiras</span>
                <span>00</span>
            </div>
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span>Parcientes</span>
                <span>00</span>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <a class="btn btn-secondary btn-sm" href="{{ route('departamentos-index') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Lista de Departamento</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            <form action="{{ route('departamentos-update', ['id'=>$departamentos->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" value="{{ $departamentos->nome }}" name="nome">
                </div>
                <div class="form-group my-3">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control" value="{{ $departamentos->descricao }}" name="descricao">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-warning btn-sm" title="Editar Departamento" value="Editar Departamento">
                </div>

            </form>
        </div>
    </div>

</div>
@endsection