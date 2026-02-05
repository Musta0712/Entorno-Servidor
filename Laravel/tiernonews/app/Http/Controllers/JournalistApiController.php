<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Journalist;

class JournalistApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Devuelve JSON con el Journalist creado
     * $request contiene el JSON de la petición POST
     */
    public function store(Request $request)
    {
        $j = new Journalist($request->all());
        $j->save();
        return response()->json($j);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 1. Busco el journalist con ese id
        $j = Journalist::find($id);

        if ($j != null) {
            // 2. lo devuelve en forma de JSON
            return response()->json([
                "message" => "Journalist found",
                "data" => $j
            ]); //codigo 200 OK
        } else {
            return response()->json([
                "message" => "Not found",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);  // 404 error cliente
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 1. busco por id
        $j = Journalist::find($id);
        if ($j!=null) {
            $j->name = $request->name; //request->$name aquí está lo rellenado en el input name
            $j->surname = $request->surname;
            $j->email = $request->email;
            $j->update();
            return response()->json([
                "message" => "Updated",
                "data" => $j
            ]); //codigo 200 OK
        } else {
            return response()->json([
                "message" => "Not found",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);  // 404 error cliente
        }
    }

    /**
     * Remove the specified resource from storage.
     * Cuando lo elimino, devuelvo codigo 200 y el JSON con el periodista eliminado
     * Si no existe ese id, codigo 404
     */
    public function destroy(string $id)
    {
        $j = Journalist::find($id);
        if ($j!=null) {
            $j->delete();
            return response()->json([
                "message" => "Deleted",
                "data" => $j
            ]);
        } else {
            return response()->json([
                "message" => "Not found",
                "data" => null
            ], JsonResponse::HTTP_NOT_FOUND);  // 404 error cliente
        }
    }
}
