@extends('layouts.master')

@section('Title')
Registration
@endsection

@section('Content')
<br>


<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-10">
		<h3>Add your child</h3>
	</div>
</div>
<br>
@endsection

@section('Form')


  <div class="col-lg-3">
<div class="box box-solid box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Child Added</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <span class="label label-primary">#1</span>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
    <ul class="list-unstyled">
      <li>Name : </li>
      <li>Date of Birth : </li>
      <li>Gender : </li>
      <li>School : </li>
      <li>Class : </li>
      <li>Attendance : </li>
    </ul>
  </div><!-- /.box-body -->
  <div class="box-footer">
    The footer of the box
  </div><!-- box-footer -->
</div><!-- /.box -->
 </div>


<div class="row">
  <div class="col-lg-2">
  </div>
  <div class="col-lg-10">


<form class="form-horizontal" action="{{ url('/registration/') }}" method="post">
  <fieldset>
    <div class="form-group">
      <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" name="f_name" class="form-control" id="inputFirstName" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" name="l_name" class="form-control" id="inputLastName" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputGender" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <input type="text" name="gender" class="form-control" id="inputGender" placeholder="F">
      </div>
        <br>
      </div>
    <div class="form-group">
      <label for="inputDob" class="col-lg-2 control-label">Date of Birth</label>
      <div class="col-lg-10">
        <input type="date" name="dob" class="form-control" id="inputDob" placeholder="14-09-2010">
      </div>
        <br>
      </div>
       <div class="form-group">
      <div class="col-lg-10">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
        <br>
      </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</div>
@endsection






