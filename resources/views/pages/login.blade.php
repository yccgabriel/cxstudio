<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body>

      <!-- Wrap all page content here -->
      <div id="wrap">
        
        <!-- Begin page content -->
        <div class="container">

          <div class="col-xs-10 col-xs-offset-1"><img src="../images/logo.png"></div>

          <div class="col-xs-10 col-xs-offset-1">

<form class="form-horizontal" action="welcome">
  <div class="form-group">
    <label class="control-label col-sm-2">Passport No.:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Enter passport number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Boarding Pass:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" placeholder="Enter boarding pass number">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> I agree with the <a href="">terms and conditions</a></label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

          </div>

        </div>
      </div>

      @include('includes.footer')

      <!-- script references -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      {!! Html::script('js/bootstrap.min.js') !!}
      
    </body>
</html>