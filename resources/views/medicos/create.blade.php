@extends('layouts.app')

@section('title', 'Gerenciar Médicos')

@section('content')
<div class="container-fluid px-5" style="overflow: hidden;">
    <div class="row my-3">
        <div class="col-9">
            <h6 style="color: #999;">Gerenciar Medicos</h6>
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
            <a class="btn btn-secondary btn-sm" href="{{ route('medicos-index') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Lista de Médicos</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            
            <form action="{{ route('medicos-store') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group my-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group my-3">
                    <label for="">Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>
                <div class="form-group my-3">
                    <label for="">Endereço</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <div class="form-group my-3">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="form-group my-3">
                    <label for="">Departamento</label>
                    <select class="form-select" name="departamento_id" id="departamento_id">
                        <option value="select">-- Selecione um departamento --</option>
                        @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Add médico">
                </div>
               
            </form>
          
        </div>
    </div>

</div>
@endsection