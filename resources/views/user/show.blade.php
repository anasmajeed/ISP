@extends('layouts.admin')
@include('inc.sidenav')
@section('content')
  <div class="content-wrapper">
    <div class="row" style="padding:30px;">
        <div class="col-md-8">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
              <h3 class="box-title">{{$user->name}}'s Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="-webkit-box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);
-moz-box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);
box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);">
              <ul>
                <strong><li>ID : {{$user->id}}</li></strong>
                <strong><li>Name : {{$user->name}}</li></strong>
                <strong><li>Email : {{$user->email}}</li></strong>
                <strong><li>Password : {{$user->password}}</li></strong>
                <strong><li>Role : @foreach ($user->roles()->get() as $role){{$role->name}}@endforeach</li></strong>
              </ul>
              <form class="form-horizontal" action="{{route('user.edit',$user->id)}}" method="GET">
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
