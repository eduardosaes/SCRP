<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class TrabajadorController extends Controller
{
    public function index()
    {
        $usr=User::all();
        //dd($users);
        return view('trabajador.perfil', array('users' => $usr));
    }

    public function edit($id) 
    {

        $user = User::find($id);
        return view('trabajador.editar')->with('user', $user);

    }

    public function update($id) 
    {

       $user = User::find($id);
	   $user->name = Input::get('name');
	   $user->email = Input::get('email');
	   $user->user = Input::get('user');
	   $user->save();
	   return view('trabajador.perfil')->with('users', $user);

    }

}
