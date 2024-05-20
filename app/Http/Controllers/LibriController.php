<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibriController extends Controller
{
    public function lista() 
    {
       
        return view("lista");
    }
    public function dettaglio() 
    {
        return view("dettaglio");
    }
    public function add() 
    {
        return view("add");
    }
    public function delete() 
    {
        return view("delete");
    }
    public function modify() 
    {
        return view("modify");
    }
}
