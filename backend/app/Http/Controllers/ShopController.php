<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ShopController extends Controller
{
    public function getById($id)
    {
        $shop = Shop::getById($id);
        return response()->json($shop);
    }

    public function create(Request $request)
    {
        try {
            $shop = Shop::create($request->all());
            return response()->json($shop, 201);
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return response()->json(['error' => 'Duplicate entry for email'], 409);
            }
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
}
