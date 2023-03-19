<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Promo;
use App\Models\Aluno;

//use App\Http\Controllers\Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('admin.mail.create');
    }

    public function send(Request $request)
    {

        $data = $request->all();

        $user = (object)[
            'nome'=>'giovanni',
            'email'=>'gikrei@email.com'
        ];
        $email = new Promo($user);

        //dd($data);
        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        return redirect()->route('mail.create');
    }
}
