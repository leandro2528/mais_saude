@extends('layouts.app')

@section('title', 'Gerenciar Infermeira(o)')

@section('content')
<div class="container-fluid px-5" style="overflow: hidden;">
    <div class="row my-3">
        <div class="col-9">
            <h6 style="color: #999;">Gerenciar Infermeira(o)</h6>
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
            <a class="btn btn-primary btn-sm" href="{{ route('infermeiras-create') }}">
                <span><i class="fa-solid fa-plus"></i></span>
                <span class="ms-2">Add Infermeira(o)</span>
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="card-body">
          @if(count($infermeiras))
            <table class="table table-bordrred table- hover">
                <thead style="font-size: 14px; color: #777;">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12px; color: #777;">
                @foreach($infermeiras as $infermeira)
                    <tr>
                        <td>{{ $infermeira->id }}</td>
                        <td>{{ $infermeira->nome }}</td>
                        <td>{{ $infermeira->email }}</td>
                        <td>{{ $infermeira->senha }}</td>
                        <td>{{ $infermeira->endereco }}</td>
                        <td>{{ $infermeira->telefone }}</td>
                        <td class="d-flex">
                            <a class="btn btn-warning btn-sm" href="{{ route('infermeiras-edit', ['id'=>$infermeira->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('infermeiras-destroy', ['id'=>$infermeira->id]) }}" method="POST">
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
            Não existe infermeira(o) cadastrada(o) nessa tabela
          </div>
          @endif
        </div>
    </div>

</div>
@endsection