<!DOCTYPE html>
<html lang="en">
    @include('User.layouts.head')
    <body>
        <div class="wrapper">
			<div class="box">
				<div class="row row-offcanvas row-offcanvas-left">
					@include('User.layouts.sidebar')
					<!-- main right col -->
					<div class="column col-sm-10 col-xs-11" id="main">
						@include('User.layouts.navbar')
						<div class="padding">
							<div class="full col-sm-9">
								<!-- content -->                      
								@yield('content')
								<div class="row">
								  <div class="col-sm-6">
									<a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
								  </div>
								</div>
								@include('User.layouts.footer')
                                <hr>
                                <h4 class="text-center">
                                    <a href="http://usebootstrap.com/theme/facebook" target="ext">Download this Template @Bootply</a>
                                </h4>
                                <hr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('User.layouts.modal')
        @include('User.layouts.script')
    </body>
</html>