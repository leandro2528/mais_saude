<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;
use App\Models\Departamento;

class MedicoController extends Controller
{
    public function index() {
        $medicos = Medico::orderBy('created_at', 'desc')->with('departamento')->get();
        $departamentos = Departamento::all();

        $totalMedicos = Medico::count();
        return view('medicos.index', ['medicos'=>$medicos, 'departamentos'=>$departamentos, 'totalMedicos'=>$totalMedicos]);
    }

    public function create() {
        $medicos = Medico::all();
        $departamentos = Departamento::all();
        return view('medicos.create', ['medicos'=>$medicos, 'departamentos'=>$departamentos]);
    }

    public function store(Request $request) {
        Medico::create($request->all());
        return redirect()->route('medicos-index');
    }
}
