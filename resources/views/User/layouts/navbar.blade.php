<!-- top nav -->
<div class="navbar navbar-blue navbar-static-top">
    <nav class="collapse navbar-collapse" role="navigation">
    <form class="navbar-form navbar-left">
        <div class="input-group input-group-sm" style="max-width:360px;">
          <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
        <ul class="dropdown-menu">
          <li><a href="">About</a></li>
            <form action="{{route('auth.logout')}}" method="post">
                @csrf
                <button type="submit" class="btn">Logout</button>   
            </form>
          
        </ul>
      </li>
    </ul>
    </nav>
</div>
<!-- /top nav -->