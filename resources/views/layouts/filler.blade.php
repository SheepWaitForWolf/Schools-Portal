 <div>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="col-md-3">
      </div>
      <div class="col-md-9">      
      <h2>
        @yield('Title')        
      </h2>
    </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('Content')

      @yield('Form')

      @yield('Modal')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

      @include('layouts.footer')

      @include('layouts.control-sidebar')
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->