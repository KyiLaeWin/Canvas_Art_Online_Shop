<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">

	<title>OpenHouse - Houses for Rent</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/Customer/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/Customer/style.css">
	<link rel="stylesheet" type="text/css" href="css/Customer/animate.min.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
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
					<a href="#page-top">Arty While</a>
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
	<div class="box-shadow">
		<!-- Carousel -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active" style="height: 600px;">
					<img src="images/Customer/canvas3.jpg" alt="First slide">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12">
							<h1>Art is the best partner to dance!</h1>
							<span>The best choice for your affection</span><br><br>
							<a href="{{ url("/product") }}" class="btn btn-primary">Lets Explore</a>
						</div>
					</div><!-- /header-text -->
				</div>
				<div class="item" style="height: 600px;">
					<img src="images/Customer/canvas1.jpg" alt="Third slide">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<div class="col-md-12">
							<h1>Art is the best partner to dance!</h1>
							<span>The best choice for your affection</span><br><br>
							<a href="{{ url("/product") }}" class="btn btn-primary">Lets Explore</a>
						</div>
					</div><!-- /header-text -->
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</div>
</header>

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		
		<!-- ////////////Content Box -->
		<section class="box-content box-style-1">
			<div class="container">
				<div class="row heading">
					 <div class="col-lg-12">	
	                    <h2>OUR Products</h2>
	                    <hr class="line02">
                    	<div class="intro">Enjoy and Buy</div>
	                </div>
				</div>
				<div class="row product">
					@foreach($items as $item)
					<div class="col-md-4">
						<div class="post">
							<div class="item-container">
								<div class="item-caption">
									<div class="item-caption-inner">
										<div class="item-caption-inner1">
											<a class="example-image-link"href="{{url('/images/'.$item->image)}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
												<i class="fa fa-search"></i>
											</a>
										</div>
									</div>
								</div>
								<img src="{{url('/images/'.$item->image)}}" />
							</div>
							<div class="t-center" style="margin-bottom:30px;">
								<span class="product-title">{{ $item->name }}</span><br>
								<span class="price">${{ $item->price }}</span>
							</div>
						</div>
							
					</div>
					
					@endforeach

					
				</div>
					{{$items->links()}}
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
</body>
</html>