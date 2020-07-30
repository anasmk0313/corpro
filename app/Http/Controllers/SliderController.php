<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session()->has('data')){
            return redirect('index');
        }else{
            $arr['slider'] = Slider::all();
            return view('admin.edit_slider',$arr);
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if($request->slideid1 == 1 ){
            if(isset($request->slide1) && $request->slide1->getClientOriginalName()){
                $slider1Ext = $request->slide1->getClientOriginalExtension();
                $slider1Name = 'slider1.'.$slider1Ext;
                $request->slide1->storeAs('public/images/slider', $slider1Name);
            }else{
                $slider1Name = "";
            }
            $slider->image1 = $slider1Name;
            $slider->save();
            return redirect()->route('slider.index');
        }elseif($request->slideid2 == 2){
            if(isset($request->slide2) && $request->slide2->getClientOriginalName()){
                $slider2Ext = $request->slide2->getClientOriginalExtension();
                $slider2Name = 'slider2.'.$slider2Ext;
                $request->slide2->storeAs('public/images/slider', $slider2Name);
            }else{
                $slider2Name = "";
            }
            $slider->image2 = $slider2Name;
            $slider->save();
            return redirect()->route('slider.index');
        }else{
            if(isset($request->slide3) && $request->slide3->getClientOriginalName()){
                $slider3Ext = $request->slide3->getClientOriginalExtension();
                $slider3Name = 'slider3.'.$slider3Ext;
                $request->slide3->storeAs('public/images/slider', $slider3Name);
            }else{
                $slider3Name = "";
            }
            $slider->image3 = $slider3Name;
            $slider->save();
            return redirect()->route('slider.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
