<?php

namespace App\Http\Controllers;

use App\Models\Adds; // import Adds model
use Illuminate\Http\Request;

class AddsController extends Controller
{

      // Method to fetch all active ads
public function getAllAdds()
{
    try {
        $allAdds = Adds::where('status', 1)->get()->map(function ($ad) {
            $ad->Logo = url('api/images/' . basename($ad->Logo)); // Ensure only filename is appended
            return $ad;
        });
        return response()->json($allAdds);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error fetching ads', 'error' => $e->getMessage()], 500);
    }
}




}
