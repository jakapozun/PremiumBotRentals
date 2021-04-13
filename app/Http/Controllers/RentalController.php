<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return view('admin.rentals', compact('rentals'));
    }

    public function create(Listing $listing, Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'terms_conditions' => 'required|accepted'
        ]);

        $newRental = [
            'user_id' => $user->id,
            'listing_id' => $listing->id,
            'status' => 'active'
        ];

        $statusUpdate = [
            'status' => 'rented'
        ];
        $listing->update($statusUpdate);
        $listing->save();
        Rental::create($newRental);

        return redirect()->route('settings', $user );
    }
}
