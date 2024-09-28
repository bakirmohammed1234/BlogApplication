<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BakirController extends Controller
{
    public function index(){
        return view("bakir.index");
    }
    public function show(){
        return view("bakir.show");
    }
    public function edit(){
        return view("bakir.edit");
    }
    public function create(){
        return view("bakir.create");
    }
}
