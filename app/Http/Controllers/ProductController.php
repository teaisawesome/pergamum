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

    public function create()
    {
        $isVendor = Vendor::where('user_id', Auth::id())->exists();

        if( $isVendor )
        {
            return view("createproduct");
        }
        else
        {
            return redirect()->back();
        }
    }

    public function createNewBook(Request $request)
    {
        
        $filename = $request->image->getClientOriginalName();

        # store image in storage/app/public/ProductImages
        $request->image->storeAs('ProductImages', $filename, 'public');

        $book = [
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'theme' => $request->theme,
            'publisher' => $request->publisher,
            'isbn' => $request->isbn,
            'language' => $request->language,
            'release_year'=> $request->release_year,
            'image' => $filename
        ];
        
        Product::insert($book);

        return redirect()->back();
    }
}
