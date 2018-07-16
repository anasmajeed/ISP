<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = Customer::all();
        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->mobile = $request->mobile;
        $customer->mac_address = $request->mac_address;
        $customer->package = $request->package;
        $customer->fee = $request->fee;
        $customer->cnic = $request->cnic;
        $customer->email = $request->email;
        $customer->static_ip = $request->static_ip;
        $customer->router_ip = $request->router_ip;
        $customer->client_ip = $request->client_ip;
        $customer->username = $request->username;
        $customer->password = $request->password;
        $month = "";
        $day = "";
        $year = "";
        $month = strtok($request->activation_date,"/");
        $day = strtok("/");
        $year = strtok("/");
        $customer->activation_date = $year."-".$month."-".$day;
        $customer->save();
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
      $value = Customer::find($customer)->first();
        return view('customer.show')->with('customer',$value);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
      return view('customer.edit',compact('customer'));
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
      $customer->name = $request->name;
      $customer->mobile = $request->mobile;
      $customer->mac_address = $request->mac_address;
      $customer->package = $request->package;
      $customer->email = $request->email;
      $customer->fee = $request->fee;
      $customer->cnic = $request->cnic;
      $customer->static_ip = $request->static_ip;
      $customer->router_ip = $request->router_ip;
      $customer->client_ip = $request->client_ip;
      $customer->username = $request->username;
      $customer->password = $request->password;
      $customer->activation_date = $request->activation_date;
      // dd($customer->activation_date);
      $customer->save();
      return redirect()->route('customer.index');
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
