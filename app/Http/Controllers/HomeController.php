<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function home(){
        return view('home');
    }
    public function blog($id){
        $posts = [
            1 => ['title' => 'laravel'],
            2 => ['title' => 'react']
        ];
    
        if (!array_key_exists($id, $posts)) {
            abort(404); // Retourne une erreur 404 si l’ID n’existe pas
        }
    
        return view('posts.show', ['data' => $posts[$id]]);
    }
    
}
