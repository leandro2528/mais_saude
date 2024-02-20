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
            <a class="btn btn-primary btn-sm" href="{{ route('pacientes-create') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Add Pacientes</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            @if(count($pacientes))
            <table class="table table-bordrred table- hover">
                <thead style="font-size: 14px; color: #777;">
                    <tr>
                        <th>#</th>
                        <th>nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Grupo Sanguineo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px; color: #777;">
                    @foreach($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->id }}</td>
                        <td>{{ $paciente->nome }}</td>
                        <td>{{ $paciente->email }}</td>
                        <td>{{ $paciente->senha }}</td>
                        <td>{{ $paciente->endereco }}</td>
                        <td>{{ $paciente->telefone }}</td>
                        <td>{{ $paciente->sexo->nome }}</td>
                        <td>{{ $paciente->data_nascimento }}</td>
                        <td>{{ $paciente->gruposangue->nome }}</td>
                        <td class="d-flex">
                            <a class="btn btn-warning btn-sm" href="{{ route('pacientes-edit', ['id'=>$paciente->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('pacientes-destroy', ['id'=>$paciente->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ms-2"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           @else
           <div class="alert alert-info">
            Não exitem pacientes cadastrados nessa tabela.
           </div>
           @endif
        </div>
    </div>

</div>
@endsection