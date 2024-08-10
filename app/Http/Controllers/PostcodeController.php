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
        $response = Http::withOptions(['verify' => false])->get('https://api.postcodes.io/postcodes/' . urlencode($postcode));

        if ($response->successful()) {
            // extract info from response
            $data = $response->json();

             // Ensure that the 'result' key exists in the response data
             if (isset($data['result'])) {
                $result = $data['result'];
                $address = $result['admin_ward'] . ', ' . $result['admin_district'] . ', ' . $result['parliamentary_constituency'] . ', ' . $result['region'] . ', ' . $result['country'];
                // Pass the address data to the view
                return redirect()->back()->with('address', $address);
            } else {
                return redirect()->back()->with('error', 'No data found for the provided postcode.');
            }
        } else {
            // Handle errors (e.g., invalid postcode)
            return redirect()->back()->with('error', 'Invalid postcode or no data found.');
        }
    }
}
