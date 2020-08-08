<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\Slider;
use App\Branches;
use Illuminate\Support\Facades\DB;
use App\ProductsDetail;

class HomeController extends Controller
{
    //

    public function index()

    {
        $data['products']=Products::latest()->get();
        $data['category']=Category::all();

        $data['slider']=Slider::all();
    
          $data['branches'] = Branches ::join('state', 'branches.state', '=', 'state.StCode')
          ->select('branches.state', 'state.StateName')
          ->distinct()
          ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
          ->get();
        
        return view("welcome",$data);
        //

    }

    
    public function about()

    {
    
          $data['branches'] = Branches ::join('state', 'branches.state', '=', 'state.StCode')
          ->select('branches.state', 'state.StateName')
          ->distinct()
          ->getQuery() 
          ->get();
        
        return view("about",$data);
        //

    }

    public function gallery()

    {
    
          $data['branches'] = Branches ::join('state', 'branches.state', '=', 'state.StCode')
          ->select('branches.state', 'state.StateName')
          ->distinct()
          ->getQuery() 
          ->get();
        
        return view("gallery",$data);
        //

    }


    public function products()

    {
       //$articles=Article::all();
        $data['products']=Products::latest()->get();
        $data['category']=Category::all();
        $data['branches'] = Branches ::join('state', 'branches.state', '=', 'state.StCode')
        ->select('branches.state', 'state.StateName')
        ->distinct()
        ->getQuery() 
        ->get();
 
        return view("products",$data);
        //

    }

    public function colorselector()

    {
        
        $data['category']=Category::get();
        $data['products']=Products::latest()->get();
        $data['single__product'] = Products::Limit(1)->get();
        $data['slider']=Slider::latest()->get();
        $data['branches'] = Branches ::join('state', 'branches.state', '=', 'state.StCode')
        ->select('branches.state', 'state.StateName')
        ->distinct()
        ->getQuery() 
        ->get();
        $data['product_detail'] = ProductsDetail::get();

        return view("color-selector",$data);

     
      
        //

    }



}
