@extends('layouts.app')

@section('title', 'Painel Inícial')

@section('content')
<main>
    <div class="container-fluid p-4" style="background-color: #F5F5F5;">
        <h4 class="">Painel Inícial</h4>
        <div class="row">
            <div class="col-12 d-flex justify-content-between my-2">
                <a class="text-decoration-none" href="{{ route('medicos-index') }}">
                    <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-stethoscope"  style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Médicos</div>
                    </div>
                </a>
                <a class="text-decoration-none" href="{{ route('pacientes-index') }}">
                    <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-user" style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Parcientes</div>
                    </div>
                </a>
                <a class="text-decoration-none" href="{{ route('infermeiras-index') }}">
                    <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-notes-medical" style="color: #008B8B; font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Infermeira(o)s</div>
                    </div>
                </a>
               <a class="text-decoration-none" href="#">
                    <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-hand-holding-medical" style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Farmaceutico(o)s</div>
                    </div>
               </a>
               <a class="text-decoration-none" href="">
                <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-flask-vial" style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Laboratórios</div>
                    </div>
               </a>
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-money-check-dollar" style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Contabilidade</div>
                    </div>  
                </a>
            </div>

            <div class="col-12 d-flex justify-content-between my-2">
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-calendar-check" style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Compromissos</div>
                    </div>
                </a>
               <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-regular fa-credit-card" style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Pagamentos</div>
                    </div>
               </a>
               <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i class="fa-solid fa-droplet"  style="color: #008B8B;font-size: 30px;"></i></div>
                        <div class="card-title" style="font-size: 12px;">Banco de Sangue</div>
                    </div>
               </a>
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-pills"></i></div>
                        <div class="card-title" style="font-size: 12px;">Medicamentos</div>
                    </div>
                </a>
               <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-compass"></i></div>
                        <div class="card-title" style="font-size: 12px;">Relatório de Operação</div>
                    </div>
               </a>
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-child"></i></div>
                        <div class="card-title" style="font-size: 12px;">Relatório de Nascimento</div>
                    </div> 
                </a> 
            </div>

            <div class="col-12 d-flex justify-content-between mt-2 mb-4">
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-skull-crossbones"></i></div>
                        <div class="card-title" style="font-size: 12px;">Relatório de Óbitos</div>
                    </div>
                </a>
               <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-bed"></i></div>
                        <div class="card-title" style="font-size: 12px;">Alocação de Cama</div>
                    </div>
               </a>
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-newspaper"></i></div>
                        <div class="card-title" style="font-size: 12px;">Quadro de Notícia</div>
                    </div>
                </a>
               <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-gears"></i></div>
                        <div class="card-title" style="font-size: 12px;">Configurações</div>
                    </div>
               </a>
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-hands"></i></div>
                        <div class="card-title" style="font-size: 12px;">Linguagens</div>
                    </div>
                </a>
                <a class="text-decoration-none" href="">
                    <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                        <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-download"></i></div>
                        <div class="card-title" style="font-size: 12px;">Backup</div>
                    </div> 
                </a> 
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                    <i class="fa-solid fa-calendar-days" style="color: #008B8B;font-size: 20px;"></i>
                    Departamento
                        
                    </div>
                    <div class="card-body">
                        @if(count($departamentos))
                    <table class="table table-hover">
                            <thead style="font-size: 10px;">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 10px;">
                                @foreach($departamentos as $departamento)
                                <tr>
                                    <td>{{ $departamento->id }}</td>
                                    <td>{{ $departamento->nome }}</td>
                                    <td>{{ $departamento->descricao }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-info">
                            Não exitem dados nessa tabela
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                    <i style="color: #008B8B;font-size: 20px;" class="fa-solid fa-newspaper"></i>
                        Notícias
                    </div>
                    <div class="card-body">
                        @if(count($departamentos))
                    <table class="table table-hover">
                            <thead style="font-size: 10px;">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Notícia</th>
                                    <th>Data / Hora</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 10px;">
                                @foreach($compromissos as $compromisso)
                                <tr>
                                    <td>{{ $compromisso->id }}</td>
                                    <td>{{ $compromisso->nome }}</td>
                                    <td>{{ $compromisso->noticia }}</td>
                                    <td>{{ $compromisso->data_hora }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-info">
                           Não existem dados nessa tabela
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection