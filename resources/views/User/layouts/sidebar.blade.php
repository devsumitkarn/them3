<!-- sidebar -->
<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
					  
    <ul class="nav">
        <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
    </ul>
   
    <ul class="nav hidden-xs" id="lg-menu">
        <li class="active">{{auth()->user()->name}}</li>
    </ul>
    <!-- tiny only nav-->
    <ul class="nav visible-xs" id="xs-menu">
        <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
        <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
        <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
        <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
    </ul>
  
</div>
<!-- /sidebar -->