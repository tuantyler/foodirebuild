<?php
	$user_usename = Session::get('user_usename');
	$user_name = Session::get('user_name');
	// $user_id = Session::get('user_id');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$user_name}}</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend//css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('frontend/images/icon.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<!-- <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li> -->
								<li><a href="#"><i class="fa fa-envelope"></i> foodi0516@vku.udn.vn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://mail.google.com/mail"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a class="nav-link" href="{{ route('fr.homepage')}}"><img src="{{asset('frontend/images/logo.png')}}" class="logo" alt=""></a>
						</div>
					</div>

					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{route('cart.show')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<li><a href="{{URL::to('/user-profile/'.$user_usename)}}"><i class="fa fa-user"></i> {{$user_name}}</a></li>
								<li><a href="{{route('us.logout')}}">????ng xu???t</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->

	<section>
		<div class="container" style="margin-left:2%">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<!-- <h2>Danh m???c</h2> -->
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
									<h4 class="panel-title">
										<form action="{{route('us.profile')}}" method="post">
											{{ csrf_field() }}
											<input type="hidden" name="user_usename" value="{{$user_usename}}">
											<input type="submit" value="TH??NG TIN C?? NH??N" style="background-color:white;border:none">
										</form>
									</h4>
                                </div>								
                                <div class="panel-heading"></div>
                                <div class="panel-heading"></div>
                                <div class="panel-heading">
									<h4 class="panel-title">
										<form action="{{route('us.baomat')}}" method="post">
											{{ csrf_field() }}
											<input type="hidden" name="user_usename" value="{{$user_usename}}">
											<input type="submit" value="B???O M???T T??I KHO???N" style="background-color:white;border:none">
										</form>
									</h4>
                                </div>
								<div class="panel-heading"></div>
                                <div class="panel-heading"></div>
                                <div class="panel-heading">
                                    <h4 class="panel-title">
										<form action="{{route('cart.ls')}}" method="post">
											{{ csrf_field() }}
											<input type="hidden" name="user_usename" value="{{$user_usename}}">
											<input type="submit" value="L???CH S??? MUA H??NG" style="background-color:white;border:none">
										</form>
									</h4>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
    
	<!-- footer -->
	
	<footer id="footer">		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>GI???I THI???U</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">V??? ch??ng t??i</a></li>
								<li><a href="#">Tin t???c - s??? ki???n</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>CH??M S??C KH??CH H??NG</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">H?????ng d???n mua h??ng</a></li>
								<li><a href="#">Ch??nh s??ch b??n h??ng</a></li>
								<li><a href="#">Ch??nh s??ch b???o m???t</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>TH??NG TIN LI??N H???</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Email</a></li>
								<li><a href="#">?????a ch??? : 07 B???ch ?????ng, H???i Ch??u, ???? N???ng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<a class="nav-link" href="{{ route('fr.homepage')}}"><img src="{{asset('frontend/images/logo.png')}}" class="footerlogo" alt=""></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2021 FOODI Inc. All rights reserved.</p>
					<p class="pull-right"><a href="{{ route('ad.login')}}" style="font-weight:bolder;color:red">????ng nh???p v???i t?? c??ch admin</a></p>
				</div>
			</div>
		</div>
		
	</footer>
	<!--/Footer-->
	

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>