@extends('layouts.app')

@section('title', 'Painel Inícial')

@section('content')
<main>
    <div class="container-fluid p-4" style="background-color: #F5F5F5;">
        <h4 class="">Painel Inícial</h4>
        <div class="row">
            <div class="col-12 d-flex justify-content-between my-2">
                <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-stethoscope"  style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Médicos</div>
                </div>
                <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-user" style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Parcientes</div>
                </div>
                <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-notes-medical" style="color: #008B8B; font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Infermeira(o)s</div>
                </div>
                <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-hand-holding-medical" style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Farmaceutico(o)s</div>
                </div>
                <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-flask-vial" style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Laboratórios</div>
                </div>
                <div class="card p-2" style="width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-money-check-dollar" style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Contabilidade</div>
                </div>  
            </div>

            <div class="col-12 d-flex justify-content-between my-2">
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-calendar-check" style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Compromissos</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-regular fa-credit-card" style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Pagamentos</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i class="fa-solid fa-droplet"  style="color: #008B8B;font-size: 30px;"></i></div>
                    <div class="card-title" style="font-size: 12px;">Banco de Sangue</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-pills"></i></div>
                    <div class="card-title" style="font-size: 12px;">Medicamentos</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-compass"></i></div>
                    <div class="card-title" style="font-size: 12px;">Relatório de Operação</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-child"></i></div>
                    <div class="card-title" style="font-size: 12px;">Relatório de Nascimento</div>
                </div>  
            </div>

            <div class="col-12 d-flex justify-content-between mt-2 mb-4">
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-skull-crossbones"></i></div>
                    <div class="card-title" style="font-size: 12px;">Relatório de Óbitos</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-bed"></i></div>
                    <div class="card-title" style="font-size: 12px;">Alocação de Cama</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-newspaper"></i></div>
                    <div class="card-title" style="font-size: 12px;">Quadro de Notícia</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-gears"></i></div>
                    <div class="card-title" style="font-size: 12px;">Configurações</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-hands"></i></div>
                    <div class="card-title" style="font-size: 12px;">Linguagens</div>
                </div>
                <div class="card p-2" style="width: 160px; width: 160px; background-color: #F8F8FF;">
                    <div class="card-icon"><i style="color: #008B8B;font-size: 30px;" class="fa-solid fa-download"></i></div>
                    <div class="card-title" style="font-size: 12px;">Backup</div>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                    <i class="fa-solid fa-calendar-days" style="color: #008B8B;font-size: 20px;"></i>
                        Agenda do calendário
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                    <i style="color: #008B8B;font-size: 20px;" class="fa-solid fa-newspaper"></i>
                        Quadro de Notícia
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
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