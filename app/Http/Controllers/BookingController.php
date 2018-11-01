<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Calendar;
use App\boats;
use App\trips;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'seats'=>'required',
            'nic'=>'required',
            'telephone'=>'required',
            'email'=>'required',
        ]);

        $invoice->f_name=$request->input('first_name');
        $invoice->l_name=$request->input('last_name');
        $invoice->name=$request->input('first_name');
        $invoice->name=$request->input('first_name');
        $invoice->name=$request->input('first_name');
        $invoice->name=$request->input('first_name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $price=300;
       $data=trips::find($id);
       return view('reservation.pricing', compact('data','price'));
    //    return view('reservation.pricing')->with('resid',$data);

       
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
        //
    }
}
