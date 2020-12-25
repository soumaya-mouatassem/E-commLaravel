<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // import the database
use App\Models\Product;       //import the model 

class PagesController extends Controller
{
    public function home() {
        return view('pages.index');
        
    }
    public function about(){
        return view('pages.about');
    }
    public function services($name){
      /*  $products=DB::table('products')
                    ->get();*/

           $products =Product::orderBy('product_name','asc')->paginate(10);

       /* $products=Product::inRandomOrder()->paginate(1);*/
        return view('pages.services') ->with('products',$products);
    }
    public function show($id){
      /*  $product= DB::table('products')
                      ->where('id',$id)
                      ->first();*/
        $product=Product::find($id);
                      return view('pages.show')->with('product',$product);
    
    }
}
