<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Builder or eloquent
use App\Product;
use App\Category;


class CategoryController extends Controller
{
    public function getcategory($id){
    	//join

    	$products=Product::join('categories','categories.id','products.category_id')
    	                 ->where('categories.id',$id)
    	                 ->paginate(6);

    	  return view('category')->with('products',$products);
    }
}
