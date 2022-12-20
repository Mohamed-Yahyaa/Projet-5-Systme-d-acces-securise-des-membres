<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index (){
        return Todo::all();
    }

    public function create(){
        
    }

    public function store(Request $request){

    }
}
