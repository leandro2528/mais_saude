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
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
          
        </div>
    </div>

</div>
@endsection