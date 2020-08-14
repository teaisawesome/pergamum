<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Vendor;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $isVendor = Vendor::where('user_id', Auth::id())->exists();

        $products = Product::get();

        if( $isVendor )
        {
            return view("product")->with(['products' => $products]);
        }
        else
        {
            return redirect()->back();
        }
        
    }

    public function edit($id)
    {
        $isVendor = Vendor::where('user_id', Auth::id())->exists();

        $book = Product::find($id);

        if( $isVendor )
        {
            return view("editproduct")->with(['book' => $book]);
        }
        else
        {
            return redirect()->back();
        }
    }
}
