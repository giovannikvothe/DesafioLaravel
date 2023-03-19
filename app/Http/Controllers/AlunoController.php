<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();

        return view('admin.alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modo = '';
        $aluno = new Aluno();
        
        return view('admin.alunos.create', compact('aluno', 'modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
        $data = $request->all();

        $data["pagamento"] = $data["cadastro"];

        $auxPagamento = $data["pagamento"];
        $auxPeriodo = $data["periodo"];
        $auxValidade = date('Y/m/d', strtotime("+{$auxPeriodo} days",strtotime($auxPagamento)));
        
        $data["validade"] = $auxValidade;
        
        Aluno::create($data);
        
        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        $modo = 'disabled';
        
        return view('admin.alunos.show', compact('aluno', 'modo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        $modo = '';
        
        return view('admin.alunos.edit', compact('aluno', 'modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $data = $request->all();

        $auxVencimento = $data["validade"];
        $auxPeriodo = $data["periodo"];
        $auxValidade = date('Y/m/d', strtotime("+{$auxPeriodo} days",strtotime($auxVencimento)));
        
        $data["validade"] = $auxValidade;

        $aluno->update($data);

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        
        return redirect()->route('alunos.index');
    }
}
