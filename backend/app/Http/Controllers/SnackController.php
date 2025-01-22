<?php
namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SnackController extends Controller
{
    public function index()
    {
        try {
            return Snack::all();
        } catch (\Exception $e) {
            Log::error('Error fetching snacks: ' . $e->getMessage());
            return response()->json(['error' => 'Error fetching snacks'], 500);
        }
    }
}
