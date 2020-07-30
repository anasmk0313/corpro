<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Branches;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;





class ProductsController extends Controller
{
    //
    public function mail(Request $request)

    {
        request()->validate([
            'title' => ['required','max:255'],
            'color'  =>'required',
            'number'  =>'required',
            'quantity'  =>'required',
            'place'  =>'required',
            'message'  =>'required'
        ]);
        
        $data = array(
            'name'      =>  $request->title,
            'number'      =>  $request->number,
            'quantity'      =>  $request->quantity,
            'place'      =>  $request->place,
            'color'   =>   $request->color,
            'mail'   =>   $request->mail,
            'message'   =>   $request->message
        );

     Mail::to('jobingeorge1693@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');        return redirect("/");


    }

    public function getproducts(Request $request)

    {
      
        $id = request('cat_id');
        $Products=Products::where("category_id",$id)
                             ->get(); 
        return json_encode($Products);
        
        //

    }

    public function getproductsby_id(Request $request)

    {
       
        $id = request('a_id');
        $Productsby_id=Products::where("category_id",$id)
                             ->get(); 
        return json_encode($Productsby_id);


    }
    public function getproduct_details()

    {
        $id = request('p_id');
    $products = Products::where('id', $id)->get();
    return json_encode($products);
    
     }

     public function get_districts()

     {
         $id = request('state_id');
     $districts = Branches::where('state', $id)->get();
     return json_encode($districts);
     
  }

  public function get_branches()

     {
         $id = request('district_id');
     $branches = Branches::where('district', $id)->get();
     return json_encode($branches);
     
  }

  public function get_branch_details()

     {
         $id = request('branch_id');
     $branches = Branches::where('b_name', $id)->get();
     return json_encode($branches);
     
  }
}
