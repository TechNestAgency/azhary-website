<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function checkRoom(Request $request)
    {
        // Placeholder implementation for check-room functionality
        return response()->json(['status' => 'success', 'message' => 'Room check endpoint']);
    }

    public function test()
    {
        // Placeholder implementation for test functionality
        return response()->json(['status' => 'success', 'message' => 'Test endpoint working']);
    }
} 