<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Departamento;
use App\Models\Infermeira;
use App\Models\Medico;
use App\Models\Paciente;

class DepartamentoController extends Controller
{
    public function index() {
        $departamentos = Departamento::all();
        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('departamentos.index', 
        [
            'departamentos'=>$departamentos,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function create() {
        $departamentos = Departamento::all();
        return view('departamentos.create', ['departamentos'=>$departamentos]);
    }

    public function store(Request $request) {
        Departamento::create($request->all());
        return redirect()->route('departamentos-index');
    }

    public function edit($id) {
        $departamentos = Departamento::where('id', $id)->first();
        return view('departamentos.edit', ['departamentos'=>$departamentos]);
    } 

    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'descricao' => $request->descricao
        ];

        $departamentos = Departamento::where('id', $id)->update($data);
        return redirect()->route('departamentos-index');
    }

    public function destroy($id) {
        $departamentos = Departamento::where('id', $id)->delete();
        return redirect()->route('departamentos-index');
    }

}
