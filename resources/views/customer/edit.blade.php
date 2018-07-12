@extends('layouts.admin')
@include('inc.sidenav')
@section('content')
  <div class="content-wrapper">
    <div class="row" style="padding:30px;">
        <div class="col-md-7 ">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">{{$customer->name}} Data</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" action="{{route('customer.update',$customer->id)}}" method="POST">
              @method('PUT')
              {{ csrf_field() }}
            <div class="box-body" style="-webkit-box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);-moz-box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);box-shadow: 10px 14px 22px -1px rgba(0,0,0,0.49);">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name" value="{{$customer->name}}">
                  </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Mobile No #</label>
                  <div class="col-sm-10">
                    <input type="number" name="mobile" class="form-control" id="inputEmail3" placeholder="Mobile Number" value="{{$customer->mobile}}">
                  </div>
              </div>
              <div class="form-group">
                <label  for="inputEmail3" class="col-sm-3 control-label" style="margin-left:-20;text-align:center;">Activation<br>Date:</label>
                <div class="input-group date col-sm-9">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="activation_date" class="form-control" id="datepicker" value="{{$customer->activation_date}}">
                </div>
              </div>

                <div class="form-group">
                  <label  for="inputEmail3" class="col-sm-3 control-label" style="margin-left:-20;text-align:center;">MAC<br>Address</label>
                  <div class="input-group date col-sm-9">
                    <div class="input-group-addon">
                      <i class="fa fa-laptop"></i>
                    </div>
                    <input type="text" name="mac_address" class="form-control" placeholder="-- : -- : -- : -- : -- : --" value="{{$customer->mac_address}}">
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Package</label>
                  <div class="col-sm-10">
                    <input type="text" name="package" class="form-control" id="inputEmail3" placeholder="-  MB" value="{{$customer->package}}">
                  </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Fee</label>
                  <div class="col-sm-10">
                    <input type="number" name="fee" class="form-control" id="inputEmail3" placeholder="Amount" value="{{$customer->fee}}">
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label" style="margin-left:-20;text-align:center;">CNIC</label>
                <div class="input-group col-sm-9">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" name="cnic" class="form-control" data-inputmask='"mask": "99999-9999999-9"' data-mask value="{{$customer->cnic}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{$customer->email}}">
                  </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label" style="margin-left:-20;text-align:center;">Static IP</label>
                <div class="input-group col-sm-9">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" name="static_ip" class="form-control" data-inputmask="'alias': 'ip'" data-mask value="{{$customer->static_ip}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label" style="margin-left:-20;text-align:center;">Router IP</label>
                <div class="input-group col-sm-9">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" name="router_ip" class="form-control" data-inputmask="'alias': 'ip'" data-mask " value="{{$customer->router_ip}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label" style="margin-left:-20;text-align:center;">Client IP</label>
                <div class="input-group col-sm-9">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" name="client_ip" class="form-control" data-inputmask="'alias': 'ip'" data-mask value="{{$customer->client_ip}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="User Name" value="{{$customer->username}}">
                  </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="password" class="form-control" id="inputEmail3" placeholder="Password" value="{{$customer->password}}">
                  </div>
              </div>

              <div class="box-footer">
                <a href="{{route('customer.index')}}" type="submit" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Update Customer</button>
              </div>
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
@section('script')
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
@endsection
