<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Products;
use Illuminate\Support\Facades\DB;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr["category"] = Category::All();
        if(!session()->has('data')){
            return redirect('index');
        }else{
            return view('admin.add_products')->with($arr);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['product'] = Products::all();
        return view('admin.view_products')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->image) && $request->image->getClientOriginalName()){
            $imgname = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images/products', $imgname);
        }
        else{
            $imgname = '';
        }
        $products = new Products;
        $products->category_id = $request->category;
        $products->title = $request->p_name;
        $products->image = $imgname;
        $products->size = $request->size;
        $products->weight = $request->weight;
        $products->thickness = $request->thickness;
        $products->water_absorption = $request->water_absorption;
        $products->composition = $request->composition;
        $products->installation = $request->installation;
        $products->working_life = $request->working_life;
        $products->save();
        return redirect()->back()->with('productAdd', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!session()->has('data')){
            return redirect('index');
        }else{
            $category['category'] = Category::all();
            $products['product'] = Products::all()
            ->where('id', $id);
            return view('admin.edit_products', $category, $products);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        if(isset($request->image) && $request->image->getClientOriginalName()){
            $imgname = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images/products', $imgname);
        }
        else{
            $imgname = '';
        }
        
        $product->category_id = $request->category;
        $product->title = $request->title;
        $product->image = $imgname;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->thickness = $request->thickness;
        $product->water_absorption = $request->water_absorption;
        $product->composition = $request->composition;
        $product->installation = $request->installation;
        $product->working_life = $request->working_life;
        $product->save();
        return redirect()->route('product.create')->with('productUpdate', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect()->back();
    }
}
