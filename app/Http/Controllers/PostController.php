<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $posts = Post::where("user_id", $user->id)->paginate(5);

        return view("dashboard", [
            "user"=> $user,
            "posts" => $posts 
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
        Post::create([
            "titulo" => $request->titulo,
            "descripcion" => $request->descripcion,
            "imagen" => $request->imagen,
            "user_id" => auth()->user()->id
        ]);
        return redirect()->route("posts.index", auth()->user()->username);
    }

    public function show(User $user, Post $post){
        return view("posts.show", [
            "post" =>$post
        ]);
        
    }

}
