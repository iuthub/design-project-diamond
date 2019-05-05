<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;

class ReservesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserves=Reserve::orderBy('name', 'desc')->paginate(5);
        return view('reserves')->with('reserves', $reserves);
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
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'amount' => 'required',
            'phone' => 'required|regex:/(998)[0-9]{9}/',
            'date' => 'required',
            'body' => 'required'
        ]);

        // Create Reservation
        $reserve = new Reserve;
        $reserve->name = $request->input('name');
        $reserve->surname = $request->input('surname');
        $reserve->email = $request->input('email');
        $reserve->amount = $request->input('amount');
        $reserve->phone = $request->input('phone');
        $reserve->date = $request->input('date');
        $reserve->body = $request->input('body');
        $reserve->save();

        return redirect('reserves')->with('success', 'Reservation Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserve=Reserve::find($id);
        return view('show')->with('reserve', $reserve);
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
