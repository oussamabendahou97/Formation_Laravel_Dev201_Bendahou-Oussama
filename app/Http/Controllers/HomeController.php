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
    
    
        return view('posts.show', ['data' => $posts[$id]]);
    }
    
}
