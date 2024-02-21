<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compromisso;
use App\Models\Departamento;

class DashboardController extends Controller
{
    public function index() {
        $compromissos = Compromisso::orderBy('created_at', 'desc')->get();
        $departamentos = Departamento::orderBy('created_at', 'desc')->get();
        return view('dashboards.index', 
        [
            'departamentos'=>$departamentos,
            'compromissos'=>$compromissos
        ]);
    }
}
