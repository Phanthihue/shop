<!DOCTYPE html>
<html lang="en">
@include('layouts.components.header')



<body>

  <!-- Navigation -->
  @include('layouts.components.navbar')
  

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      @include('layouts.components.sidebar')

     
      <!-- /.col-lg-3 -->

      @yield('content')

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

  
    <!-- /.row -->

  
  <!-- /.container -->

  <!-- Footer -->
  @include('layouts.components.footer')
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
