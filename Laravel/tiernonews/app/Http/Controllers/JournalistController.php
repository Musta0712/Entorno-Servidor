<?php

namespace App\Http\Controllers;

use App\Models\Journalist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JournalistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //todo
        //return "estoy en el index del JournalistController";
        //1. Buscar todos los journalists de la bd
        $journalists = Journalist::all();
        //return $journalists;

        //2. Devolver una vista que los contenga
        return view("journalist.index", compact("journalists"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // devuelvo una vista con una formulario de creación
        return view("journalist.create");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return "Ahora te lo guardo";
        //use Illuminate\Support\Facades\Log;
        Log::channel('stderr')->debug("Variable request:", [$request->name, $request->password2]);
        //todo $fillable
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //todo
        return "no esta hecho";
    }

    /**
     * Show the form for editing the journalist.
     * Va a devolver una vista con un formulario rellenado con los datos del periodista en cuestion, y un botón de Actualizar.
     */
    public function edit(string $id)
    {
        //todo
    }

    /**
     * Update the specified resource in storage.
     * Recibe en la petición POST (o PUT) los datos del periodista que queremos editar y lo lleva a la bd
     */
    public function update(Request $request, string $id)
    {
        //todo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //todo
    }

    public function sayName($name)
    {
        return "hola $name";
    }
}
