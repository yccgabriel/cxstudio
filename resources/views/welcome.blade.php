<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body>

      <!-- Wrap all page content here -->
      <div id="wrap">

        <!--banner-->
        <div class="navbar" id="banner"></div>
        <style>
            #banner{
                background-image: url('../images/welcome-banner.png');
                background-size:400px;
                height: 150px;
            }
        </style>
        
        <!-- Begin page content -->
        <div class="container">

            <button type="button" class="my-row btn btn-primary col-xs-10 col-xs-offset-1" onclick="location.href='home/before'">Unlimited Browsing with $120</button>
            <button type="button" class="my-row btn btn-primary col-xs-10 col-xs-offset-1" onclick="location.href='profile'"     >30 Minutes Free Browsing</button>
            <style>
                .my-row{
                  margin-top: 20px;
                  margin-bottom: 20px
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