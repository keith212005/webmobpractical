<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', [])->with('products', $products);
    }

    public function add()
    {
        return view('add-product', []);
    }

    public function create(Request $request)
    {
//        $input = $request->all();
//        dd($input);
        $product = new Product();
        $product->name = $request->input('name');
        $product->sku = $request->input('sku');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->qty = $request->input('qty');
        $product->image = $request->input('image');
        $product->save();
        return redirect('product')->with('product-created','Product created Successfully!');
    }

    public function edit($id)
    {
//        dd('id');
        $product = Product::where('id',$id)->first();

        return view('edit-product', compact('product'));
    }

    public function delete($id)
    {
//        dd('delete');
        Product::where('id',$id)->delete();
        return back()->with('product_deleted', 'Product has been deleted Successfully!');
    }

    public function update(Request $request, $id)
    {
//        dd('udpate');
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->sku = $request->input('sku');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->qty = $request->input('qty');
        $product->image = $request->input('image');
        $product->save();
        return redirect('product');
//        return view('product', ['']);
    }

}
