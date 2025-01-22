<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function index()
    {
        try {
            $drinks = Drink::all();
            return response()->json($drinks);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error retrieving drinks data'], 500);
        }
    }
}
