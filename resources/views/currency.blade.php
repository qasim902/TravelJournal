<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Bootstrap Website Templates">

    <title>Bitcoin Trade - one page bootstrap website template</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/jquery.lightbox.min.css">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#buyrate">Buying Rate</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sellrate">Selling Rate</a>
                    </li>
                    {{--<li>--}}
                        {{--<a class="page-scroll" href="#contact">Contact us</a>--}}
                    {{--</li>--}}
                    @if (Route::has('login'))

                            @if (Auth::check())
                            <li>
                                <a class="page-scroll" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @else
                                <li>
                                    <a class="page-scroll" href="{{ url('/login') }}">LogIn</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ url('/register') }}">Register</a>
                                </li>
                            @endif

                    @endif

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
     <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="bwt-header-content">
                        <div class="bwt-header-content-inner">
                            <h1>Buy Sell Bitcoins Easily</h1>
                            <h2>Bitcoin Trade is the fastest and easiest way to Buy and Sell Bitcoins. We guarantee fast transaction processing and the best bitcoin rates.</h2>
                            <a href="#about" class="btn btn-box btn-xl page-scroll">Know More About Bitcoin Trade</a>
                        </div>
                    </div>
                    <div class="bwt-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>
                </div>
            </div>
        </div>
    </header>

<!--about-->
<section id="about" class="bwt-about text-left">
<div class="container">
<div class="row">
<div class="col-md-6"><img src="images/bitcoin-640.png" class="img-responsive" alt=""></div>
<div class="col-md-6">
<h1 class="bwt-section-title text-uppercase">ABOUT BITCOIN Trade</h1>
<hr>
<h2>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</h2>
<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada.</p>
</div>
</div>
</div>
</section>
<!--//about-->

<!--Buy Rate-->
<section id="buyrate" class="bwt-buyrate text-center">
<div class="container text-center">
<h1 class="bwt-section-title text-uppercase">BUYING RATES</h1>
<hr>
<div class="row">
<div class="col-md-6">
<div class="bdr">
<h2>Buy Bitcoin</h2>
<div class="image"><img src="images/btc.png" class="img-responsive" alt=""></div>
<p>Buy Bitcoin (USD)<br>
$100-$500 = Rs80/USD<br>
$500-$2000 = Rs75/USD</p>
<a href="#">Buy Now!</a>
</div>
</div>
<div class="col-md-6">
<div class="bdr">
<h2>Buy BTC-e</h2>
<div class="image"><img src="images/btc.jpg" class="img-responsive" alt=""></div>
<p>Buy Lite Coin (USD)<br>
$100-$500 = Rs84/USD<br>
$500-$2000 = Rs79/USD</p>
<a href="#">Buy Now!</a>
</div>
</div>
</div>
</div>
</section>
<!--//Buy Rate-->

<!--Sell Rate-->
<section id="sellrate" class="bwt-sellrate text-left">
<div class="container text-center">
<h1 class="bwt-section-title text-uppercase">SELLING RATES</h1>
<hr>
<div class="row">
<div class="col-md-6">
<div class="bdr">
<h2>Sell Bitcoin</h2>
<div class="image"><img src="images/btc.png" class="img-responsive" alt=""></div>
<p>Sell Bitcoin (USD)<br>
$5-$100 = Rs60/USD<br>
$101-$1000 = Rs62/USD</p>
<a href="#">Sell Now!</a>
</div>
</div>
<div class="col-md-6">
<div class="bdr">
<h2>Sell BTC-e</h2>
<div class="image"><img src="images/btc.jpg" class="img-responsive" alt=""></div>
<p>Sell Lite Coin (USD)<br>
$5-$100 = Rs58/USD<br>
$101-$1000 = Rs60/USD</p>
<a href="#">Sell Now!</a>
</div>
</div>
</div>
</div>
</section>
<!--//Sell Rate-->

<!--contact-->
<section id="contact" class="bwt-contact text-left">
<div class="container text-center">
<h1 class="bwt-section-title text-uppercase">CONTACT US</h1>
<hr>
<div class="row">
<div class="col-md-4 top-marg">
<input name="" type="text" placeholder="Enter Your Name">
</div>
<div class="col-md-4 top-marg">
<input name="" type="text" placeholder="Enter Your Phone Number">
</div>
<div class="col-md-4 top-marg">
<input name="" type="email" placeholder="Enter Your Email ID">
</div>
<div class="col-md-12 top-marg-2">
<textarea name="" cols="" rows="3" placeholder="Enter Your Message"></textarea>
</div>
<div class="col-md-12 top-marg">
<input name="" type="submit" value="Send Message">
</div>
</div>
</div>
</section>

<footer class="bwt-footer">
<div class="container text-left">
<div class="row">

<div class="col-sm-12 col-md-4">
<div class="icon"><i class="fa fa-map-marker"></i></div>
<div class="icon-text">
<h3>Our Location</h3>
<p>744 Melrose Street, Walla Walla, WA, Washington, USA
</p>
</div>
</div>

<div class="col-sm-12 col-md-4 md-top-marg">
<div class="icon"><i class="fa fa-phone"></i></div>
<div class="icon-text">
<h3>Phone Numbers</h3>
<p>+1-509-876-7242<br>+1-509-876-7242</p>
</div>
</div>

<div class="col-sm-12 col-md-4 md-top-marg">
<div class="icon"><i class="fa fa-envelope-o"></i></div>
<div class="icon-text">
<h3>E-Mail Address</h3>
<p>info@bitcointrade.com<br>
sales@bitcointrade.com
</p>
</div>
</div>

</div>
</div>
</footer>

<div class="bwt-footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-6 copyright">
<div class="left-text">Copyright &copy; Bitcoin Trade 2017. All Rights Reserved</div>
</div>

</div>
</div>
</div>

<!--//contact-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Lightbox JavaScript-->
    <script src="js/jquery.lightbox.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/script.js"></script>

</body>
</html>	