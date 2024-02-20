<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Infermeira;
use App\Models\Medico;
use App\Models\Paciente;

class InfermeiraController extends Controller
{
    public function index() {
        $infermeiras = Infermeira::all();
        
        $totalMedicos = Medico::count();
        $totalInfermeiras = Infermeira::count();
        $totalPacientes = Paciente::count();
        return view('infermeiras.index',
        [
            'infermeiras'=>$infermeiras,
            'totalMedicos'=>$totalMedicos,
            'totalInfermeiras'=>$totalInfermeiras,
            'totalPacientes'=>$totalPacientes
        ]);
    }

    public function create() {
        $infermeiras = Infermeira::all();
        return view('infermeiras.create', ['infermeiras'=>$infermeiras]);
    }

    public function store(Request $request) {
        Infermeira::create($request->all());
        return redirect()->route('infermeiras-index');
    }

    public function edit($id) {
        $infermeiras = Infermeira::where('id', $id)->first();
        return view('infermeiras.edit', ['infermeiras'=>$infermeiras]);
    }

    public function update(Request $request, $id) {
       $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone
       ];
        $infermeiras = Infermeira::where('id', $id)->update($data);
        return redirect()->route('infermeiras-index');
    }

    public function destroy($id) {
        $infermeiras = Infermeira::where('id', $id)->delete();
        return redirect()->route('infermeiras-index');
    }
}
