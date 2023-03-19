<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = User::all();
        //dd(Auth::user()->name);        
        //$op = $user->name;
        //$this->authorize('viewAny');

        return view('admin.funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modo = '';
        $funcionario = new User();
        
        return view('admin.funcionarios.create', compact('funcionario', 'modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(User $funcionario)
    {
        $modo = 'disabled';
        
        return view('admin.funcionarios.show', compact('funcionario', 'modo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $funcionario)
    {
        $modo = '';
        
        return view('admin.funcionarios.edit', compact('funcionario', 'modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $funcionario)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $funcionario->update($data);
        
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $funcionario)
    {
        $funcionario->delete();
        
        return redirect()->route('funcionarios.index');
    }
}
