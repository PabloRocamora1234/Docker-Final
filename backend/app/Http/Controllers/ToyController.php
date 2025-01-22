<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Toys retrieved successfully',
            'data' => Toy::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'name' => 'required|string|max:32',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'battery' => 'required|boolean',
        ]);

        // Crear un nuevo registro en la tabla 'toys'
        $toy = Toy::create($validatedData);

        // Devolver una respuesta JSON con los datos creados
        return response()->json([
            'success' => true,
            'message' => 'Toy created successfully',
            'data' => $toy
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toy  $toy
     * @return \Illuminate\Http\Response
     */
    public function show(Toy $toy)
    {
        return response()->json([
            'success' => true,
            'message' => 'Toy retrieved successfully',
            'data' => $toy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toy  $toy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toy $toy)
    {
        $toy->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Toy updated successfully',
            'data' => $toy
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toy  $toy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toy $toy)
    {
        $toy->delete();
        return response()->json([
            'success' => true,
            'message' => 'Toy deleted successfully',
            'data' => null
        ]);
    }
}
