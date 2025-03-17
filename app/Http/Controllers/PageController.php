<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\BillDetail;
use App\Models\Comment;


class PageController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        $newProducts = Product::where('new', 1)->paginate(8);
        $topProducts = Product::orderBy('unit_price', 'desc')->take(10)->paginate(4);
        return view('page.trangchu', compact('slide', 'newProducts', 'topProducts'));
    }
				
    public function getProductType($id){	
        $product_type = Product::where('id_type', $id)->get();									
        $type_product = ProductType::all();									
        $other_product = Product::where('id_type', '<>', $id)->paginate(3);									
                                            
        return view('page.productType', compact('product_type', 'type_product', 'other_product'));				
    }
                    
  
    public function getProductDetail($id) {
        $sanpham = Product::find($id);
        $relatedProducts = $sanpham->relatedProducts();
        $newProducts = $sanpham->newProducts();
        $comments = Comment::where('id_product',$id)->paginate(4);
        return view('page.productDetail', compact('sanpham', 'relatedProducts', 'newProducts', 'comments'));
    }
    public function getIndexAdmin() {													
	     $products = Product::all();													
	     return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => count(BillDetail::all())]);													
	}													
    public function getAdminAdd(){						
         return view('pageadmin.formAdd');						
    }						
                                                 
    public function postAdminAdd(Request $request)
    {
        $product = new Product();
        $file_name = null;

        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $file_name = $file->getClientOriginalName();
            $file->move('source/image/product', $file_name);
        }

        $product->name = $request->inputName;
        $product->image = $file_name;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();

        return $this->getIndexAdmin();
    }
    public function getAdminEdit($id)											
    {											
        $product = Product::find($id);											
        return view('pageadmin.formEdit')->with('product', $product);											
    }											
    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product = Product::find($id);
        
        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
        }

        if ($request->file('editImage') != null) {
            $product->image = $fileName;
        }

        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;

        $product->save();

        return $this->getIndexAdmin();
    }
    public function postAdminDelete($id) {
        $product = Product::find($id);
        $product->delete();
        return $this->getIndexAdmin();
    }
    public function getAboutUs(){						
        return view('about');						
    }
    public function getContact(){						
        return view('lienhe');						
   }		
   public function newComment($id, Request $request){
    $comment = new Comment;
    $comment->id_product = $id;
    $comment->username = "android 1";
    $comment->comment = $request->comment;
    $comment->save();
    return redirect()->back();
   }			
}					
					