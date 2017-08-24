<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrador.menu');
    }

    public function crearNoticia()
    {
     //
    }
    public function litaNoticia()
    {
        return view('notic.table');
    }




}
