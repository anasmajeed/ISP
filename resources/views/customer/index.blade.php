@extends('layouts.admin')
@include('inc.sidenav')
@section('content')
  <div class="content-wrapper">
    <div class="row" style="padding:30px;">
        <div class="col-md-5">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">{{$customer->name}}'s Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="-webkit-box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);
-moz-box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);
box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);">
              <ul>
                <strong><li>ID : {{$customer->id}}</li></strong>
                <strong><li>Name : {{$customer->name}}</li></strong>
                <li>Mobile : {{$customer->mobile}}</li>
                <strong><li>Email : {{$customer->email}}</li></strong>
                <li>Activation Date : {{$customer->activation_date}}</li>
                <li>Mac Address : {{$customer->mac_address}}</li>
                <li>Package : {{$customer->package}}</li>
                <li>Fee : {{$customer->fee}}</li>
                <strong><li>CNIC : {{$customer->cnic}}</li></strong>
                <li>Static IP : {{$customer->static_ip}}</li>
                <li>Router IP : {{$customer->router_ip}}</li>
                <li>Client IP : {{$customer->client_ip}}</li>
                <li>Username : {{$customer->username}}</li>
                <li>Password : {{$customer->password}}</li>
                <li>Created At : {{$customer->created_at}}</li>
                <li>Updated At : {{$customer->updated_at}}</li>
              </ul>
              <form class="form-horizontal" action="{{route('customer.edit',$customer->id)}}" method="GET">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-success pull-right" name="" value="Edit">
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

 </div>
</div>

@include('inc.sidebar')
@endsection
