<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body>

      <!-- Wrap all page content here -->
      <div id="wrap">
        
        <!-- Begin page content -->
        <div class="container">

          <div class="row">
            <div class="span12 centered-text">
              <img src="../images/profilepic.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
            </div>
          </div>


          <div class="row">
              <div class="span12 centered-text">
                  <h3>Gabriel CHAN</h3>
              </div>
          </div>

          <style>
          .centered-text {
              text-align:center
          }    
          </style>

          <div class="row" id="continue-row">
            <button type="button" class="my-row btn btn-primary col-xs-4 col-xs-offset-4" onclick="location.href='home/before'">continue</button>
          </div>

          <style>
          #continue-row{
            margin-top:50px;
          }
          </style>

        </div>
      </div>

      @include('includes.footer')

      <!-- script references -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      {!! Html::script('js/bootstrap.min.js') !!}
      
    </body>
</html>