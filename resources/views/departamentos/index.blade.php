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
            <a class="btn btn-primary btn-sm" href="{{ route('departamentos-create') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Add Departamento</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            @if(count($departamentos))
            <table class="table table-bordrred table- hover">
                <thead style="font-size: 14px; color: #777;">
                    <tr>
                        <th>#</th>
                        <th>Departamento</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px; color: #777;">
                    @foreach($departamentos as $departamento)
                    <tr>
                        <td>{{ $departamento->id }}</td>
                        <td>{{ $departamento->nome }}</td>
                        <td>{{ $departamento->descricao }}</td>
                        <td class="d-flex">
                            <a class="btn btn-warning btn-sm" href="{{ route('departamentos-edit', ['id'=>$departamento->id]) }}"  title="Editar Departamento"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('departamentos-destroy', ['id'=>$departamento->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ms-3" title="Excluir Departamento"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="alert alert-info">Não existem departamentos cadastrados nessa tabela</div>
            @endif
        </div>
    </div>

</div>
@endsection