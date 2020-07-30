<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branches;
use Illuminate\Support\Facades\DB;


class BranchController extends Controller
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
            $branch['branch'] = Branches::all();
            $state['state'] = DB::select('select * from state');
            return view('admin.branches', $branch, $state);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        $data = DB::select('select * from district where StCode=?', [$id]);
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = new Branches;
        $branch->b_name = $request->branch;
        $branch->state = $request->state;
        $branch->district = $request->district;
        $branch->add_one = $request->add1;
        $branch->add_two = $request->add2;
        $branch->pincode = $request->pincode;
        $branch->save();
        return redirect()->back()->with('branchAdd', 'Branch added successfully');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Branches::destroy($id);
        return redirect()->back();
    }
}
