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
                <span style="color: #999;">Médicos</span>
                <span style="color: green;"><h5>0{{ $totalMedicos }}</h5></span>
            </div>
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span style="color: #999;">Infermeiras</span>
                <span style="color: blue;"><h5>00</h5></span>
            </div>
            <div class="title-info-medico d-flex flex-column align-items-center">
                <span style="color: #999;">Parcientes</span>
                <span style="color: red;"><h5>00</h5></span>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <a class="btn btn-primary btn-sm" href="{{ route('medicos-create') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Add Médicos</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            @if(count($medicos))
            <table class="table table-bordrred table- hover">
                <thead style="font-size: 14px; color: #777;">
                    <tr>
                        <th>#</th>
                        <th>nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Departamento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px; color: #777;">
                  @foreach($medicos as $medico)
                    <tr>
                        <td>{{ $medico->id }}</td>
                        <td>{{ $medico->nome }}</td>
                        <td>{{ $medico->email }}</td>
                        <td>{{ $medico->senha }}</td>
                        <td>{{ $medico->endereco }}</td>
                        <td>{{ $medico->telefone }}</td>
                        <td>{{ $medico->departamento->nome }}</td>
                        <td class="d-flex">
                            <a class="btn btn-warning btn-sm" href="{{ route('medicos-edit', ['id'=>$medico->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('medicos-destroy', ['id'=>$medico->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ms-2">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="alert alert-info">
                Não possui médicos cadastrados nessa tabela
            </div>
            @endif
        </div>
    </div>

</div>
@endsection