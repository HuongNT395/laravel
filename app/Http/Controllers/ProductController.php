<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function getListProduct() {
        $products = Product::all();//lay tat ca du lieu trong bang Product
        return view("list",["products" => $products]);
    }

    public function showAddForm() {
        $cateId = Category::select('id')->get();
        return view('addProduct',["cateIDs" => $cateId]);
    }

    public function addProduct(Request $request) {
        $product = new Product();
        $product->cateID = $request->input('cateID');
        $product->name = $request->input('name');
        $product->save();
        return redirect(route("product.list"));
    }

    public function showEditForm(Request $request, $id) {
        $product = Product::find($id);
        $case = $product->cateID;
        $cateIDs = Category::where('id', '!=', $case)->get();
        return view('editProduct',["cateIDs" => $cateIDs, "product" => $product]);
    }

    public function editProduct(Request $request, $id) {
        $product = Product::find($id);
        $product->cateID = $request->input('cateID');
        $product->name = $request->input('name');
        $product->save();
        return redirect(route("product.list"));
    }

    public function deleteProduct(Request $request, $id) {
//        $result = 0;
//        echo "<script type='language'>";
//        echo("confirm('are you sure delete this product?')");
//        echo $result;
//        echo "</script>";
//        if($result) {
            $product = Product::find($id);
            $product->delete();
//        }
      return redirect(route('product.list'));
    }
}
