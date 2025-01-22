<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    public function index()
    {
        try {
            return Shop::all();
        } catch (\Exception $e) {
            Log::error('Error fetching shops: ' . $e->getMessage());
            return response()->json(['error' => 'Error fetching shops: ' . $e->getMessage()], 500);
        }
    }
}
