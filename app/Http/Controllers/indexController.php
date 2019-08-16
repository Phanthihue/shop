<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    //
    /*
	* get all Product for Index Page
    */
    public function index() {
    	dd('sss');
    	$products = Product::where('status', Product::ACTIVE)
    						->paginate(6);
    	// dd($products);
    	return view('index')->with('products', $products);
    }

    public function category() {
    	$products = Product::where('status', Product::ACTIVE)
    	                   ->where('category_id',1)
							->paginate(6);
							    	// dd($products);
    	return view('category')->with('products', $products);
    }
}


