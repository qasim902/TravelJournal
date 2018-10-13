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
<body>
<div id="page-top">

<div id="mainNav" class="navbar navbar-default navbar-fixed-top">
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
                        <a class="page-scroll" href="{{url('')}}">Currency Rate</a>
                        {{--<a class="page-scroll" href="{{url('currencyRates')}}">Buying Rate</a>--}}
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('')}}">Bitcoin Rate</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Info
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="page-scroll" href="#trade">Trade</a></li>
                            <li><a class="page-scroll" href="#stake">Stake</a></li>
                            <li><a class="page-scroll" href="#mine">Mine</a></li>
                            <li><a class="page-scroll" href="#lending">Lending</a></li>
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
</div>

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
    <section id="about" class="bwt-about text-left">
        <div class="container">
            <div class="row">
    <div class="col-xs-10">
        <p><hr>
        <h3 id="stake" class="bwt-section-title text-uppercase"><strong><a href="https://bitconnect.co/bitcoin-information/18/investing-in-bitconnect-coin-and-staking" target="_blank">Investing in BitConnect Coin and Staking</a></strong></h3>
        <p><a href="https://bitconnect.co/bitcoin-information/18/investing-in-bitconnect-coin-and-staking" target="_blank"><img alt="bitconnect staking" src="https://bitconnect.co/upload/image/bit_coin_new/staking.png" style="float: left; padding-right: 10px; width: 100px; height: 100px;" /></a>The moment you acquire BitConnect Coin it becomes an interest bearing asset with <b>Up to 120% return per year</b> through <b>PoS minting</b>. All you have to do to earn with this method is to hold coins in your <a href="https://bitconnectcoin.co/guide/10/How-To-Set-Up-BitConnect-Coin-Wallet-on-Windows-Operating-System" target="blank"><b>Bitconnect-QT wallet</b></a>. This means anyone holding BitConnect Coin in their wallet will receive interest on their balance in return for helping maintain security of the network.<a href="https://bitconnectcoin.co/guide/8/How-To-Stake-BitConnect-Coin-and-Earn-Interest-on-your-BitConnect-Coin-holding" target="blank">Learn more</a>.</p>
        <p><em >This investment option involves profiting from the rise in price over your investment time period.</em></p>
        <hr>
        <h3 id="lending" class="bwt-section-title text-uppercase"><a href="https://bitconnect.co/bitcoin-information/19/investing-in-bitconnect-lending" target="_blank"><strong>Investing in BitConnect Lending</strong></a></h3>
        <p><a href="https://bitconnect.co/bitcoin-information/19/investing-in-bitconnect-lending" target="_blank"><img alt="bitconnect lending" src="https://bitconnect.co/upload/image/bit_coin_new/Lending.png" style="float: left; padding-right: 10px;" /></a>You can <b>invest BitConnect coin in Bitconnect lending platform</b> exclusively from the BitConnect Dashboard. This investment option involves profiting from <strong>B</strong><b>itconnect trading bot</b> and <b><a href="https://bitconnect.co/learning-center/bitconnect-bitcoin-price-volatility-software/" target="blank">volatility software</a></b>. You will receive daily profit based on your investment option. Upon investment term completion, you will receive your capital back to take out from the bitconnect lending platform or optionally reinvest back in lending platform to continue receiving daily profit.</p>
        <p><em>If you wants to invest in BitConnect lending, you have to buy BitConnect Coin in the first place. Buy BitConnect coin from <b>BCC Exchange</b> with Bitcoins first.</em></p>
        <hr>
        <h3 id="trade" class="bwt-section-title text-uppercase"><a href="https://bitconnect.co/bitcoin-information/20/earn-from-bitconnect-coin-trading" target="_blank"><strong>Earn from BitConnect Coin trading</strong></a></h3>
        <p><a href="https://bitconnect.co/bitcoin-information/20/earn-from-bitconnect-coin-trading" target="_blank"><img alt="bitconnect trading" src="https://bitconnect.co/upload/image/bit_coin_new/trading.png" style="float: left; padding-right: 10px; width: 100px; height: 100px;" /></a>This investment option can be used to profit on <b>price fluctuation</b> of BitConnect Coin. You can buy BitConnect coin at a lower price and selling them at higher price. You can also profiting from downward movements in BitConnect coin price by selling them at a higher price and buy them again at a lower price and pocketing the price difference. If you wants to profit from short selling, you have to own BitConnect Coin in the first place.</p>
        <hr>
        <h3 id="mine" class="bwt-section-title text-uppercase"><a href="https://bitconnect.co/bitcoin-information/21/earn-from-bitconnect-coin-mining" target="_blank"><strong>Earn from BitConnect Coin Mining</strong></a></h3>
        <p><a href="https://bitconnect.co/bitcoin-information/21/earn-from-bitconnect-coin-mining" target="_blank"><img alt="bitconnect trading" src="https://bitconnect.co/upload/image/bit_coin_new/mining.png" style="float: left; padding-right: 10px; width: 100px; height: 100px;" /></a><b><a href="https://bitconnectcoin.co/guide/9/How-to-Mine-BitConnect-Coin-Guide-to-start-BitConnect-Coin-miner" target="blank">BitConnect Coin mining</a></b> is the process by which new BitConnect Coin are generated. BitConnect coin can be mined with <b>CPU/GPU</b> and does not need an ASIC miner like Bitcoin does. If you want to earn BitConnect Coin through mining, you will require <b>CPU/GPU</b>. <a href="https://bitconnectcoin.co/guide/9/How-to-Mine-BitConnect-Coin-Guide-to-start-BitConnect-Coin-miner" target="blank">Learn more.</a></p>
        </p>
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