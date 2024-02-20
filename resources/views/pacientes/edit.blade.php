@extends('layouts.app')

@section('title', 'Gerenciar Pacientes')

@section('content')
<div class="container-fluid px-5" style="overflow: hidden;">
    <div class="row my-3">
        <div class="col-9">
            <h6 style="color: #999;">Gerenciar Pacientes</h6>
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
            <a class="btn btn-secondary btn-sm" href="{{ route('pacientes-index') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Lista de Pacientes</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            <form action="{{ route('pacientes-update', ['id'=>$pacientes->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" value="{{ $pacientes->nome }}" name="nome">
                </div>
                
                <div class="form-group my-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="{{ $pacientes->email }}" name="email">
                </div>
                
                <div class="form-group my-3">
                    <label for="">Senha</label>
                    <input type="password" class="form-control" value="{{ $pacientes->senha }}"  name="senha">
                </div>
                
                <div class="form-group my-3">
                    <label for="">Endereço</label>
                    <input type="text" class="form-control" value="{{ $pacientes->endereco }}" name="endereco">
                </div>
                
                <div class="form-group my-3">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" value="{{ $pacientes->telefone }}" name="telefone">
                </div>
                
                <div class="form-group my-3">
                    <label for="">Sexo</label>
                    <select class="form-select" name="sexo_id" id="sexo_id">
                        <option value="select">-- Selecione um sexo --</option>
                        @foreach($sexos as $sexo)
                        <option value="{{ $sexo->id }}">{{ $sexo->nome }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group my-3">
                    <label for="">Data do Nascimento</label>
                    <input type="date" class="form-control" value="{{ $pacientes->data_nascimento }}" name="data_nascimento">
                </div>
                
                <div class="form-group my-3">
                    <label for="">Grupo Sanguineo</label>
                    <select class="form-select" name="gruposangue_id" id="gruposangue_id">
                        <option value="select">-- Selecione seu grupo Sanguineo --</option>
                        @foreach($gruposangues as $gruposangue)
                        <option value="{{ $gruposangue->id }}">{{ $gruposangue->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-warning btn-sm" value="Editar Paciente">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection