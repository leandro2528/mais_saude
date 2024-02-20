<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;
use App\Models\Infermeira;
use App\Models\Paciente;
use App\Models\Departamento;

class MedicoController extends Controller
{
    public function index() {
        $medicos = Medico::orderBy('created_at', 'desc')->with('departamento')->get();
        $departamentos = Departamento::all();
        
        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('medicos.index', 
        [
            'medicos'=>$medicos, 
            'departamentos'=>$departamentos,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
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

    public function edit($id) {
        $medicos = Medico::findOrFail($id);
        $departamentos = Departamento::all();
        return view('medicos.edit', ['medicos'=>$medicos, 'departamentos'=>$departamentos]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'departamento_id' => 'required'
        ]);
        $medicos = Medico::findOrFail($id);
        $medicos->update($request->all());

        return redirect()->route('medicos-index');
    }

    public function destroy($id) {
        $medicos = Medico::findOrFail($id);
        $medicos->delete();

        return redirect()->route('medicos-index');
    }
}
