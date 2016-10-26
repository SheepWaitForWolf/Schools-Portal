@extends('layouts.master')

@section('Content')
<div class="container">
   <h2>Welcome, User!</h2>
<br>
<br>
       <div class="row">
        <div class="col-md-3">
           <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-blue"><i class="fa fa-envelope-o"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Messages</span>
            <span class="info-box-number">4</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>




    <div class="col-md-3">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Registered Children</span>
            <span class="info-box-number">3</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>


    <div class="col-md-3">
    <!-- Apply any bg-* class to to the info-box to color it -->
    <div class="info-box bg-yellow">
      <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Attendance</span>
        <span class="info-box-number">234 days</span>
        <!-- The progress section is optional -->
        <div class="progress">
          <div class="progress-bar" style="width: 93%"></div>
        </div>
        <span class="progress-description">
          93% 
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
    </div>

</div>
</div>
@endsection
