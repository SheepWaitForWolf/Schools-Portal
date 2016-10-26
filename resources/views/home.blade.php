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

    <div class="col-md-3">
        <!-- Apply any bg-* class to to the info-box to color it -->
    <div class="info-box bg-red">
      <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Likes</span>
        <span class="info-box-number">41,410</span>
        <!-- The progress section is optional -->
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
    </div>

</div>

<br>

    <div>
    <p>
        Your user profile page displays your myaccount School Portal information. Please have a look around and be
        sure to complete all the necessary steps for registration. If you would like some assistance setting up your 
        try having a look at our <a href="/help">help</a> page.
    </p>

    <p>We hope you find the experience of registering with myaccount comfortable and an improvement on the paper approach, if you have any questions or issues don't hesitate to log some <a href="/feedback">feedback</a> and we will get back to you as soon as we can.</p>
    </div>

</div>


@endsection
