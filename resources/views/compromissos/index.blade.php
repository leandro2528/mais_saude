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
            <a class="btn btn-primary btn-sm" href="{{ route('compromissos-create') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Add Compromissos</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
            
            <table class="table table-bordrred table- hover">
                <thead style="font-size: 14px; color: #777;">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Notícia</th>
                        <th>Data e Hora</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px; color: #777;">
                    @foreach($compromissos as $compromisso)
                    <tr>
                        <td>{{ $compromisso->id }}</td>
                        <td>{{ $compromisso->nome }}</td>
                        <td>{{ $compromisso->noticia }}</td>
                        <td>{{ $compromisso->data_hora }}</td>
                        <td class="d-flex">
                            <a class="btn btn-warning btn-sm" href="{{ route('compromissos-edit', ['id'=>$compromisso->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('compromissos-destroy', ['id'=>$compromisso->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm ms-2"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
            
        </div>
    </div>

</div>
@endsection