<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller {
    
    public function index(){
        return view("auth.registrar");
    }
    public function store(Request $request){
        //Modificar el request para agregar username. Modificar el request solo si es realmente necesario. Lo reescribimos para que el validor lo tome en cuenta antes de insertarlo a la base de datos
        $request->request->add(["username" => Str::slug($request->username)]);
        $this->validate($request, [
            "name" => ["required", "max:30"],
            "username" =>["required", "unique:users", "min:3", "max:20"],
            "email" => ["required", "unique:users", "email", "max:70"],
            "password" => ["required", "confirmed", "min:8"]
        ]);

        User::create([
            "name"=> $request->get("name"),
            "username" => $request->username,
            "email" => $request->email,
            "password"=> Hash::make($request->password)
        ]);
        //Redireccionamiento
        return redirect()->route("post.index");
    }
}
