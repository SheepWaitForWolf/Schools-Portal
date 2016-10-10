<!DOCTYPE html>
<html lang='en'>

    <head>
@include('layouts.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
            @include('layouts.header')


            @include('layouts.sidebar')


        
            @include('layouts.filler')
        
    
        <div>
            @yield('List')
        </div>
        <div>
            @yield('Filter')
        </div>
          <div>
            @yield('Modal')
        </div>




</div>
<!-- ./wrapper -->
@include('layouts.footer')
    </body>
</html>