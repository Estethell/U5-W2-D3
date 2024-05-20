<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibriController extends Controller
{
    public function lista() 
    {
        $libri = Libro::paginate();
        dump($libri);
        return view('lista', [
            'libri' => $libri,
        ]);
    }
    public function dettaglio($id) 
    {
        $libro = Libro::findOrFail($id);
        return view('dettaglio', [
            'libro' => $libro
        ]);
    }
    public function add() 
    {
        return view("add");
    }
    public function delete($id) 
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return view("delete");
    }
    public function modify() 
    {
        return view("modify");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        $newBook = new Libro();
        $newBook->title = $data['title'];
        $newBook->author = $data['author'];
        $newBook->price = $data['price'];
        $newBook->save();

        
        return redirect()->route('lista');
    }
}
