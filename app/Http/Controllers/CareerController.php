<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::all();
        return view('careers.index', compact('careers'));
    }

    public function create()
    {
        return view('careers.create');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nombre_carrera' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);
    
        Career::create([
            'nombreCarrera' => $request->input('nombre_carrera'),
            'descripcion' => $request->input('descripcion'),
        ]);
    
        return redirect('/home')->with('success', 'Career added successfully.');
    }

    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect()->route('careers.index')->with('success', 'Career deleted successfully.');
    }

    
    
    



    // Otros métodos como show, edit, update, destroy según sea necesario
}
