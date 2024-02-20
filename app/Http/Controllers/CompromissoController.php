<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compromisso;
use App\Models\Medico;
use App\Models\Infermeira;
use App\Models\Paciente;

class CompromissoController extends Controller
{
    public function index() {
        $compromissos = Compromisso::all();

        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('compromissos.index', 
        [
            'compromissos'=>$compromissos,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function create() {
        $compromissos = Compromisso::all();

        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('compromissos.create', 
        [
            'compromissos'=>$compromissos,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function store(Request $request) {
        Compromisso::create($request->all());
        return redirect()->route('compromissos-index');
    }

    public function edit($id) {
        $compromissos = Compromisso::where('id', $id)->first();

        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('compromissos.edit',
        [
            'compromissos'=>$compromissos,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'noticia' => $request->noticia,
            'data_hora' => $request->data_hora
        ];

        $compromissos = Compromisso::where('id', $id)->update($data);
        return redirect()->route('compromissos-index');
    }

    public function destroy($id) {
        $compromissos = Compromisso::where('id', $id)->delete();
        return redirect()->route('compromissos-index');
    }
}
