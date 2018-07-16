@extends('layouts.admin')
@include('inc.sidenav')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>CNIC</th>
                  <th>Package</th>
                  <th>Fee</th>
                  <th>Email</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($customers as $customer)
                    <tr>
                      <td>{{$customer->id}}</td>
                      <td><a href="{{route('customer.show',$customer->id)}}">{{$customer->name}}</a></td>
                      <td>{{$customer->mobile}}</td>
                      <td>{{$customer->cnic}}</td>
                      <td>{{$customer->package}}</td>
                      <td>{{$customer->fee}}</td>
                      <td>{{$customer->email}}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>CNIC</th>
                  <th>Package</th>
                  <th>Fee</th>
                  <th>Email</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
  </div>
</section>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> LATEST
    </div>
    <strong>Copyright &copy; 2018 <a href="#">Anas Majeed</a>.</strong> All rights
    reserved.
  </footer>
@include('inc.sidebar')
@endsection
@section('script')
  <script src="{{asset('css/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('css/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection
