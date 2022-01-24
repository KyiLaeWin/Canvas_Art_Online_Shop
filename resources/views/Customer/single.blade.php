<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">

	<title>OpenHouse - Houses for Rent</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/Customer/bootstrap.min.css') }}"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="{{ asset('owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/Customer/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/Customer/animate.min.css') }}">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('font-awesome-4.4.0/css/font-awesome.min.css') }}" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	</head>
 <body>
<header>

	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 class="navbar-brand page-scroll">
					<a href="#page-top">FuniyHome</a>
				</h1>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   <li>
                        <a class="page-scroll" href="{{ url("/funiy") }}">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url("/product") }}">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url("/blog") }}">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url("/about") }}">About</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="{{ url("/contact") }}">Contact</a>
                    </li>
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->
	
	
</header>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		
		<!-- ////////////Content Box -->
		<section class="box-content-single">
			<div class="container">
				<div class="row heading">
					 <div class="col-lg-12">	
	                    <h2 class="single-header">{{$blog->title}}</h2>
	                    
	                </div>
				</div>
				<div class="row">
					<div class="art-header" style='width:550px;margin:0 auto;padding-bottom: 30px;'>
						<img src="{{url('/images/'.$blog->image)}}" />
					</div>
				
					<p style="white-space: pre-wrap;width:800px;margin:0 auto;padding-bottom: 60px;">{{
						$blog->body}}
					</p>
					
					
				</div>
			</div>
		</section>
	
	</div>
	
	<!-- FOOTER -->
	<footer>
		

		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="col-footer col-md-6">
						<h2 class="footer-title">About Us</h2>
						<div class="textwidget">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. <br> <br> 
						Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan.</div>
					</div> 
					
					<div class="col-footer col-md-6">
						<h2 class="footer-title">NEWS LETTER</h2>
						If you want to receive our latest news send directly to your email, please leave your email address bellow. Subscription is free and you can cancel anytime.
						<form action="#" method="post">
							<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
							<input type="submit" value="SUBSCRIBE" class="btn btn-3" />
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Copyright 20xx - Designed by <a href="https://www.Zerotheme.com">Zerotheme</a></p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="https://www.facebook.com/Zerotheme"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
	<script src="js/lightbox-plus-jquery.min.js"></script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>