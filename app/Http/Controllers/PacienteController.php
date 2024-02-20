<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Sexo;
use App\Models\Gruposangue;
use App\Models\Medico;
use App\Models\Infermeira;

class PacienteController extends Controller
{
    public function index() {
        $pacientes = Paciente::orderBy('created_at', 'desc')->with('sexo', 'gruposangue')->get();
        $sexos = Sexo::all();
        $gruposangues = Gruposangue::all();

        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();

        return view('pacientes.index', 
        [
            'pacientes'=>$pacientes,
            'sexos'=>$sexos,
            'gruposangues'=>$gruposangues,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function create() {
        $pacientes = Paciente::all();
        $sexos = Sexo::all();
        $gruposangues = Gruposangue::all();

        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('pacientes.create',
        [
            'pacientes'=>$pacientes, 
            'sexos'=>$sexos, 
            'gruposangues'=>$gruposangues,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'sexo_id' => 'required',
            'data_nascimento' => 'required',
            'gruposangue_id' => 'required'
        ]);

        Paciente::create($request->all());

        return redirect()->route('pacientes-index');
    }

    public function edit($id) {
        $pacientes = Paciente::findOrFail($id);
        $sexos = Sexo::all();
        $gruposangues = Gruposangue::all();

        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('pacientes.edit', 
        [
            'pacientes'=>$pacientes, 
            'sexos'=>$sexos, 
            'gruposangues'=>$gruposangues, 
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'sexo_id' => 'required',
            'data_nascimento' => 'required',
            'gruposangue_id' => 'required'
        ]);
        $pacientes = Paciente::findOrFail($id);
        $pacientes->update($request->all());
        return redirect()->route('pacientes-index');
    }

    public function destroy($id) {
        $pacientes = Paciente::findOrFail($id);
        $pacientes->delete();
        return redirect()->route('pacientes-index');
    }
}
