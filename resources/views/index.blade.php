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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                {{--<a class="navbar-brand page-scroll" href="#page-top">
                <img src="images/logo.png" class="img-responsive">
                </a>--}}
                {{--<a class="navbar-brand page-scroll" href="#page-top">--}}
                {{--<img src="images/logo.png" class="img-responsive">--}}
                {{--</a>--}}
                <div class="col-md-12" style="margin-top: 15px;">
                    <a href="#">
                    <img src="images/bitcoin-coin.png" width="50px" style="margin-bottom: 10px;">
                    <p style="display: inline; font-weight: bold;
    color: #f39c12;
    font-size: 25px;">{{ config('app.name', 'Laravel') }}</p>
                    </a>
                </div>
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
                        <a class="page-scroll" href="#buyrate">Currency Rate</a>
                        {{--<a class="page-scroll" href="{{url('currencyRates')}}">Buying Rate</a>--}}
                    </li>
                    <li>
                        <a class="page-scroll" href="#sellrate">Bitcoin Rate</a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Info
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="page-scroll" href="{{url('info')}}">Trade</a></li>
                            <li><a class="page-scroll" href="{{url('info')}}">Stake</a></li>
                            <li><a class="page-scroll" href="{{url('info')}}">Mine</a></li>
                            <li><a class="page-scroll" href="{{url('info')}}">Lending</a></li>
                        </ul>
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
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Account
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="page-scroll" href="{{ url('/login') }}">Login</a></li>
                                    <li><a class="page-scroll" href="{{ url('/register') }}">Register</a></li>
                                </ul>
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
    <h2 class="block-title">What is CryptoCurrencyConnect?</h2>
    <h2 style="font-size: 25px">A self regulated Financial system</h2>
    <p>
        BitConnect is an open source <strong>all in one bitcoin and crypto community platform</strong> designed to provide multiple investment opportunities with <a href="https://bitconnect.co/bitcoin-information" title="cryptocurrency education">cryptocurrency education</a> where it is entirely possible to find the independence we all desire, in a community of like-minded, freedom loving individuals who, like you, are seeking the possibility of income stability in a very unstable world.
        <a id="about" href="https://bitconnect.co/bitconnect-learning/1/what-is-bitconnect" class="btn btn-primary btn-xs">Learn more</a>
    </p>
</div>
</div>
</div>
</section>
<!--//about-->

<!--Buy Rate-->
<section id="buyrate" class="bwt-buyrate text-center">
<div class="container text-center">
<h1 class="bwt-section-title text-uppercase">Currency RATES</h1>
<hr>
<div class="row">
<div class="col-md-6">
<div class="bdr">
<h2>Buying Rate</h2>

    <div class="table-responsive">
        <table class="table ">
            <thead>
            <tr class="warning">
                <th>#</th>
                <th>Currency</th>
                <th>Last updated</th>
                <th>Buy</th>
                <th>Symbol</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>US Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->USD->buy}}</td>
                <td>{{$data->USD->symbol}}</td>

            </tr>
            <tr>
                <td>2</td>
                <td>AU Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->AUD->buy}}</td>
                <td>{{$data->AUD->symbol}}</td>

            </tr>
            <tr>
                <td>3</td>
                <td>CA Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->CAD->buy}}</td>
                <td>{{$data->CAD->symbol}}</td>

            </tr>
            <tr>
                <td>4</td>
                <td>EURO</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->EUR->buy}}</td>
                <td>{{$data->EUR->symbol}}</td>

            </tr>
            <tr>
                <td>5</td>
                <td>HK Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->HKD->buy}}</td>
                <td>{{$data->HKD->symbol}}</td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="col-md-6">
<div class="bdr">
    <h2>Selling Rate</h2>
    <div class="table-responsive">
        <table class="table ">
            <thead>
            <tr class="warning">
                <th>#</th>
                <th>Currency</th>
                <th>Last updated</th>
                <th>Sell</th>
                <th>Symbol</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>US Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->USD->sell}}</td>
                <td>{{$data->USD->symbol}}</td>

            </tr>
            <tr>
                <td>2</td>
                <td>AU Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->AUD->sell}}</td>
                <td>{{$data->AUD->symbol}}</td>

            </tr>
            <tr>
                <td>3</td>
                <td>CA Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->CAD->sell}}</td>
                <td>{{$data->CAD->symbol}}</td>

            </tr>
            <tr>
                <td>4</td>
                <td>EURO</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->EUR->sell}}</td>
                <td>{{$data->EUR->symbol}}</td>

            </tr>
            <tr>
                <td>5</td>
                <td>HK Dollar</td>
                <td>15 minutes(ago)</td>
                <td>{{$data->HKD->sell}}</td>
                <td>{{$data->HKD->symbol}}</td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
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
<div class="col-md-12">
<div class="bdr">
    <iframe id="tradingview_84ecf" src="https://s.tradingview.com/widgetembed/?symbol=COINBASE%3ABTCUSD&amp;interval=D&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;studies=%5B%5D&amp;hideideas=1&amp;theme=White&amp;style=1&amp;timezone=Etc%2FUTC&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=www.cryptocoinsnews.com&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=COINBASE%3ABTCUSD" width="980" height="610" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>

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
<input  name="" type="submit" value="Send Message">
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
    <p>42 Wallaby Way, Sydney, Australia
    </p>
</div>
</div>

    <div class="col-sm-12 col-md-4 md-top-marg">
        <div class="icon"><i class="fa fa-phone"></i></div>
        <div class="icon-text">
            <h3>Phone Numbers</h3>
            <p>+92-900-786-01<br></p>
        </div>
    </div>

    <div class="col-sm-12 col-md-4 md-top-marg">
        <div class="icon"><i class="fa fa-envelope-o"></i></div>
        <div class="icon-text">
            <h3>E-Mail Address</h3>
            <p>info@cryptocurrencyconnect.com<br>
                sales@cryptocurrencyconnect.com
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