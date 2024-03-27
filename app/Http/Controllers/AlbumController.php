<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function hal(){
        return view('album');
    }

    public function index(){
        return view('pages.albumaction.createalbum');
    }

}
