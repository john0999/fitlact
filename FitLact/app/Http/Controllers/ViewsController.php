<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    // NIVEL 1
    public function index_inicio(){
        return view('inicio'); 
    } 

    // NIVEL 2
    public function index_acerca(){
        return view('acerca'); 
    } 

    public function index_contacto(){
        return view('contacto'); 
    } 

    public function index_servicios(){
        return view('servicios'); 
    } 

    public function index_ayuda(){
        return view('ayuda'); 
    } 

    // NIVEL 3
}
