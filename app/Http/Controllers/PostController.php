<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Al momento de ser instanciado el constructor ejecuta lo que hay dentro de este método
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index(User $user){
        return view("dashboard", [
            "user"=> $user 
        ]);
    }
    public function create(){
        return view("posts.create");
    }
    public function store(Request $request){
        $this->validate($request, [
            "titulo" => "required|max:125",
            "descripcion" => "required|max:2500",
            "imagen" => "required"
        ]);
    }

}
