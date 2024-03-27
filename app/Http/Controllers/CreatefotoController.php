<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatefotoController extends Controller
{
    public function index(){
        return view('pages.fotoaction.createfoto');
    }

}