<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body>

      <!-- Wrap all page content here -->
      <div id="wrap">
        @include('includes.navbar')
        
        <!-- Begin page content -->
        <div class="container">

          @yield('content')

        </div>
      </div>

      @include('includes.footer')

      <!-- script references -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      {!! Html::script('js/bootstrap.min.js') !!}
      
    </body>
</html>