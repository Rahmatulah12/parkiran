<?php

namespace App\Http\Controllers;

use App\Customer;
use App\VehicleType as vehicle;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::join('vehicle_types', 'customers.type_id', '=', 'vehicle_types.id')->get()->toArray();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = vehicle::get()->toArray();
        return view('customers.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_pol' => 'required',
            'no_tlpn' => 'required|unique:students',
            'tgl_lahir' => 'required|unique:students|size:12'
        ]);
        $date = $request->tgl_lahir;
        $dateFormat = date('Y-m-d', strtotime($date));
        Customer::create([
            'type_id' => $request->type,
            'name' => $request->name,
            'police_number' => $request->no_pol,
            'birth_date' => $dateFormat,
            'gender' => $request->kel,
            'phone'=> $request->no_tlpn
        ]);
        return redirect('/')->with('status', 'New Customer Success To Be Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
