<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
class PageController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        $newProducts = Product::where('new', 1)->get(); 
        $topProducts = Product::orderBy('unit_price', 'desc')->take(10)->get(); 
        return view('page.trangchu', compact('slide', 'newProducts', 'topProducts'));
    }
				
    public function getProductType(){	
        $newProducts = Product::where('new', 1)->get(); 
        $topProducts = Product::orderBy('unit_price', 'desc')->take(10)->get(); 				
    	return view('page.productType',compact('newProducts', 'topProducts'));				
    }					
  
    public function getProductDetail($id) {
        $sanpham = Product::find($id);
        $relatedProducts = $sanpham->relatedProducts();
        $newProducts = $sanpham->newProducts();
        return view('page.productDetail', compact('sanpham', 'relatedProducts', 'newProducts'));
    }           
   					
}					
					