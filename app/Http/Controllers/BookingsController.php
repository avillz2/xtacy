<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bookings.index');
       // $bookings = DB::select('SELECT * FROM bookings');
        //return view('bookings.index',["bookings"=>$bookings,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $booking = new Booking;
        $booking ->firstname = $request->input('firstname');
        $booking ->lastname = $request->input('lastname');
        $booking ->moblie = $request->input('moblie');
        $booking ->email = $request->input('email');
        $booking ->gender = $request->input('gender');
        $booking ->address = $request->input('address');
        $booking ->age = $request->input('age');
        $booking ->timein = $request->input('timein');
        $booking ->timeout = $request->input('timeout');
        $booking ->roomtype = $request->input('roomtype');
        $booking ->adult = $request->input('adult');
        $booking ->children = $request->input('children');
        $booking ->roomno = $request->input('roomno');
        $booking ->status = $request->input('status');
        $booking -> save();
        return redirect('/bookings/index')->with('success','Post Booking was successful.');
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
        //
    }
}
