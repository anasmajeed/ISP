<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerPayableLog;
use App\Customer;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function add_entry()
    {
        $record = CustomerPayableLog::latest('created_at')->first();
        $customers = Customer::where('status',1)->get();
        if($record == null){
          // dd($customers);
          foreach($customers as $customer){
            $customer_payable_log = new CustomerPayableLog();
            $customer_payable_log->user_id = Auth::user()->id;
            $customer_payable_log->customer_id = $customer->id;
            $customer_payable_log->money = $customer->fee;
            $customer_payable_log->save();
            dd('Done');
          }
        }
        else{
          $date_time = $record->created_at;
          $date = $date_time->format('m');
          if(Date('m') == $date){
            dd('Entry for this month already added');
          }
          else{
            foreach($customers as $customer){
              $customer_payable_log = new CustomerPayableLog();
              $customer_payable_log->user_id = Auth::user()->id;
              $customer_payable_log->customer_id = $customer->id;
              $customer_payable_log->money = $customer->fee;
              $customer_payable_log->save();
              dd('Done');
            }
          }
        }
    }
}
