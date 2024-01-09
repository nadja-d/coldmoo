<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Product; // Use the Product model
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $outlets = Location::pluck('outletName');
        return view('index', compact('outlets'));
    }

    public function findRooms(Request $request)
    {
        // Store form inputs in the session if the form is submitted with GET method
        if ($request->isMethod('get')) {
            session([
                'selectedOutlet' => $request->input('outlet', session('selectedOutlet'))
            ]);
        }

        // Initialize variables
        $products = [];
        $productIDs = [];

        // Query all products
        $products = Product::select('productID', 'productName', 'productPrice', 'productDescription', 'productImageURL')
            ->distinct('productName')
            ->get();

        // Store product IDs
        $productIDs = $products->pluck('productID')->toArray();

        // Filter only one product per product type
        $products = $products->unique('productName');

        // Fetch outlets for the dropdown
        $outlets = Location::pluck('outletName');

        // Return the view with the required data
        return view('options', compact('products', 'outlets', 'productIDs'));
    }
}
