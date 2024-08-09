<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostcodeController extends Controller
{
    public function lookup(Request $request)
    {
        $request->validate([
            'postcode' => 'required|string|max:10',
        ]);

        // Get postcode from form input
        $postcode = $request->input('postcode');

        // make the API request to Postcodes.io
        $response = Http::withOptions(['verify' => false])->get('https://api.postcodes.io/postcodes/'. urlencode($postcode));

        if ($response->successful()) {
            // extract info from response
            $data = $request->json();
            $address = $data['result']['admin_ward'] . ', ' . $data['result']['admin_district'] . ', ' . $data['result']['country'];

            return redirect()->back()->with('address', $address);
        } else {
            // Handle errors
            return redirect()->back()->with('error', 'Invalid Post code or no data');
        }
    }
}
