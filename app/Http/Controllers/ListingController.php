<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Index (Show All Listing)
    public function index() {
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}
