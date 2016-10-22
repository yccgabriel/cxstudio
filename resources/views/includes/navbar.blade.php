<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">StudioCX</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('home')     ? 'active' : '' }}"><a href="home">Home</a></li>
        <li class="{{ Request::is('licenses') ? 'active' : '' }}"><a href="licenses">Movie</a></li>
        <li class="{{ Request::is('targets')  ? 'active' : '' }}"><a href="targets">Music</a></li>
        <li class="{{ Request::is('tvshows')  ? 'active' : '' }}"><a href="tvshows">TV Shows</a></li>
        <li class="{{ Request::is('flightinfo')  ? 'active' : '' }}"><a href="flightinfo">Flight Info</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><span class="navbar-text">Hello Gabriel</span></li>
        <li><a href="users/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <li><a href="users/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>-->
    </div><!--/.nav-collapse -->
  </div>
</div>
