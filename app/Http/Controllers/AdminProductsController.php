<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Products;
use Illuminate\Support\Facades\DB;
use App\ProductsDetail;

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
        if(isset($request->p_image1) && $request->p_image1->getClientOriginalName()){
            $imgname1 = $request->p_image1->getClientOriginalName();
            $request->p_image1->storeAs('public/images/products', $imgname1);
        }
        else{
            $imgname1 = '';
        }
        if(isset($request->p_image2) && $request->p_image2->getClientOriginalName()){
            $imgname2 = $request->p_image2->getClientOriginalName();
            $request->p_image2->storeAs('public/images/products', $imgname2);
        }
        else{
            $imgname2 = '';
        }
        if(isset($request->p_image3) && $request->p_image3->getClientOriginalName()){
            $imgname3 = $request->p_image3->getClientOriginalName();
            $request->p_image3->storeAs('public/images/products', $imgname3);
        }
        else{
            $imgname3 = '';
        }
        if(isset($request->p_image4) && $request->p_image4->getClientOriginalName()){
            $imgname4 = $request->p_image4->getClientOriginalName();
            $request->p_image4->storeAs('public/images/products', $imgname4);
        }
        else{
            $imgname4 = '';
        }
        $products = new Products;
        $products->category_id = $request->category;
        $products->title = $request->p_name;
        $products->image = $imgname1;
        $products->image1 = $imgname2;
        $products->image2 = $imgname3;
        $products->image3 = $imgname4;
        $products->save();

        $p_name = $request->p_name;
        $category_id = $request->category;

        $product_id = DB::select('select id from products where title = ? and category_id = ?',[$p_name,$category_id]);
        
        $specification = $request->spec;
        $value = $request->value;

        foreach($product_id as $product_id){
            $id = $product_id->id;
        }

        for($i=0; $i<count($specification) && $i<count($value); $i++){
            $data = array(
                'product_id' => $id,
                'specifications' => $specification[$i],
                'values' => $value[$i]
            );
            $insert_data[] = $data;
        }
        
        ProductsDetail::insert($insert_data);

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
            $category = Category::all();
            $products = Products::all()
            ->where('id', $id);
            $product_details = ProductsDetail::all()
            ->where('product_id', $id);
            return view('admin.edit_products', compact('category', 'products', 'product_details'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(isset($request->p_image1) && $request->p_image1->getClientOriginalName()){
            $imgname1 = $request->p_image1->getClientOriginalName();
            $request->p_image1->storeAs('public/images/products', $imgname1);
        }
        else{
            $img = DB::select('select image from products where id = ?', [$id]);
            foreach($img as $img){
                $imgname1 = $img->image;
            }
        }
        if(isset($request->p_image2) && $request->p_image2->getClientOriginalName()){
            $imgname2 = $request->p_image2->getClientOriginalName();
            $request->p_image2->storeAs('public/images/products', $imgname2);
        }
        else{
            $img = DB::select('select image1 from products where id = ?', [$id]);
            foreach($img as $img){
                $imgname2 = $img->image1;
            }
        }
        if(isset($request->p_image3) && $request->p_image3->getClientOriginalName()){
            $imgname3 = $request->p_image3->getClientOriginalName();
            $request->p_image3->storeAs('public/images/products', $imgname3);
        }
        else{
            $img = DB::select('select image2 from products where id = ?', [$id]);
            foreach($img as $img){
                $imgname3 = $img->image2;
            }
        }
        if(isset($request->p_image4) && $request->p_image4->getClientOriginalName()){
            $imgname4 = $request->p_image4->getClientOriginalName();
            $request->p_image4->storeAs('public/images/products', $imgname4);
        }
        else{
            $img = DB::select('select image3 from products where id = ?', [$id]);
            foreach($img as $img){
                $imgname4 = $img->image3;
            }
        }
        Products::where('id', $id)
        ->update([
            'title'     => $request->p_name,
            'image'     => $imgname1,
            'image1'    => $imgname2,
            'image2'    => $imgname3,
            'image3'    => $imgname4,
        ]);
        
        $specification = $request->spec;
        $value = $request->value;
        $product_details_id = $request->id;

        for($i=0; $i<count($specification) && $i<count($value); $i++){
            $details_id = $product_details_id[$i];
            $specifications = $specification[$i];
            $values = $value[$i]; 
            ProductsDetail::where('id', $details_id)
            ->update([
                'specifications' => $specifications,
                'values' =>$values
                ]);
        
        }
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
        ProductsDetail::where('product_id', $id)
        ->delete();
        return redirect()->back();
    }

}
