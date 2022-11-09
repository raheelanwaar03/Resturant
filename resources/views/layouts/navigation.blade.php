
<!DOCTYPE html>
<html>

{{-- This website is developed by Raheel Anwaar.What's app 0316-7007156 --}}
{{-- Website: https://raheelanwaar.com --}}
{{-- Email: info@raheelanwaar.com --}}

<head>
    <title>Welcome to Pearl</title>

    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-pearl.png') }}">
	<link href="{{ asset('assets/css/pearl-restaurant.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/fonts/pearl-icons.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/default-color') }}.css" rel="stylesheet" id="color"  type="text/css">
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/dropmenu.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/sticky-header.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/countdown.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/extralayers.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/date-pick.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/form-dropdown.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mmenu.all.css') }}" />
	<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/switcher.css') }}" rel="stylesheet" type="text/css">

</head>
  <body>
	<div class="color-switcher" id="choose_color">
      <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
          <h5>STYLE SWITCHER</h5>
      <div class="theme-colours">
      <p>Choose Colour style</p>
      <ul>
        <li><a href="#." class="light-blue" id="light-blue"></a></li>
		<li><a href="#." class="red" id="red"></a></li>
        <li><a href="#." class="green" id="green"></a></li>
		<li><a href="#." class="light-green" id="light-green"></a></li>
        <li><a href="#." class="orange" id="orange"></a></li>
      </ul>
	  <span class="note"><strong>Note:</strong> you can add your own color just replace your color code in css file.</span>
      </div>
      <div class="choose-header">
      	<p>Choose Header</p>
        <a href="#." id="header-one">One</a>
        <a href="#." id="header-two">Two</a>
      </div>
      <div class="choose-footer">
      	<p>Choose Footer</p>
		<a href="#." id="dark">Dark</a>
		<a href="#." id="light">Light</a>
      </div>
      <div class="clr"></div>
    </div>
  <div id="wrap">
   <div id="preloader">
		<div id="status">&nbsp;</div>
		<div class="loader">
			<h1>Loading...</h1>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div id="header-1">
       <header class="header-two">
		   <div class="container">
	   		<a href="index.html"><img class="logo2" src="images/logo2.png" alt=""></a>
			<a href="index.html"><img class="logo-dark" src="images/logo-dark.png" alt=""></a>
			<div class="cont-right">
            <nav class="menu-5 nav">
            	<ul class="wtf-menu">
                	<li class="select-item"><a href="#.">Home</a>
						<ul class="submenu">
							<li> <a href="index.html" class="select">Home 1</a> </li>
							<li> <a href="index2.html">Home 2</a> </li>
						</ul>
					</li>
					<li><a href="#.">Menu</a>
						<ul class="submenu">
							<li> <a href="menu.html">menu 1</a> </li>
							<li> <a href="menu2.html">menu 2</a> </li>
							<li> <a href="menu3.html">menu 3</a> </li>
						</ul>
					</li>
					<li><a href="our-story.html">our story</a></li>
					<li class="parent"><a href="#.">Blog</a>
					<ul class="submenu">
                        <li><a href="blog.html">blog 1</a></li>
						<li><a href="blog2.html">blog 2</a></li>
					</ul>
					</li>
					<li><a href="#.">contact us</a>
						<ul class="submenu">
							<li><a href="contact-us.html">contact-us 1</a></li>
							<li><a href="contact-us2.html">contact-us 2</a></li>
						</ul>
					</li>
					<li><a href="shop.html">online order</a></li>
                </ul>
            </nav>
			<ul class="social-icons">
				<li><a href="#."><i class="icon-facebook-1"></i></a></li>
				<li><a href="#."><i class="icon-twitter-1"></i></a></li>
				<li><a href="#."><i class="icon-google"></i></a></li>
			</ul>
			<ul class="shop-bag">
				<li class="close-bag"><a class="cart-button"><i class="icon-icons163"></i> <span class="num">2</span></a></li>
				<li class="open-bag">
					<div class="cart-food">
						<div class="detail">
							<img src="{{ asse('assets/images/cart-food1.jpg') }}" alt="img">
							<div class="text">
								<a href="#.">Blanched Garlic</a>
								<p>1 x $35.00</p>
							</div>
						</div>
						<a href="#." class="cross"><i class="icon-cancel2"></i></a>
					</div>
					<div class="cart-food">
						<div class="detail">
							<img src="{{ asse('assets/images/cart-food2.jpg') }}" alt="img">
							<div class="text">
								<a href="#.">GREEN CHILE </a>
								<p>2 x $40.00</p>
							</div>
						</div>
						<a href="#." class="cross"><i class="icon-cancel2"></i></a>
					</div>
					<div class="sub-total">
						<span>SUBTOTAL: <strong>$115.00</strong></span>
						<div class="buttons">
							<a href="#." class="view-cart">view cart</a>
							<a href="#." class="check-out">Check Out</a>
						</div>
					</div>
				</li>
			</ul>
			<ul class="get-touch">
				<li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+123 55 33 444</span></a></li>
			</ul>
			</div>
		</div>

       </header>
	</div>
	<div id="header-2" style="display:none">
       <header class="header">
	   		<a href="index.html"><img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="img"></a>
			<nav class="menu-5 nav">
            	<ul class="wtf-menu">
                	<li class="parent"><a class="select-item" href="#.">Home</a>
					<ul class="submenu">
                        <li> <a href="index.html" class="select">Home 1</a> </li>
                        <li> <a href="index2.html">Home 2</a> </li>
					</ul>

					</li>
					<li><a href="#.">Menu</a>
					<ul class="submenu">
                        <li> <a href="menu.html">menu 1</a> </li>
                        <li> <a href="menu2.html">menu 2</a> </li>
						<li> <a href="menu3.html">menu 3</a> </li>
					</ul>
					</li>
					<li><a href="our-story.html">our story</a></li>
					<li class="parent"><a href="#.">Blog</a>
					<ul class="submenu">
                        <li><a href="blog.html">blog 1</a></li>
						<li><a href="blog2.html">blog 2</a></li>
					</ul>
					</li>
					<li><a href="#.">contact us</a>
					<ul class="submenu">
                        <li><a href="contact-us.html">contact-us 1</a></li>
						<li><a href="contact-us2.html">contact-us 2</a></li>
					</ul>

					</li>
					<li><a href="shop.html">online order</a></li>
                </ul>
            </nav>
			<ul class="get-touch">
				<li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+123 55 33 444 888</span></a></li>
				<li class="book-table"><a href="#book-table" class="topLink"><span>book a table</span> <i class="icon-angle-right"></i></a></li>
			</ul>
       </header>
	</div>
	<div class="container">
    <div id="page">
			<header class="header">
				<a href="#menu"></a>

			</header>
			<nav id="menu">
				<ul>
					<li class="select"><a href="#.">Home</a>
                    	<ul>
							<li class="select"> <a href="index.html">Home Page 1</a> </li>
							<li> <a href="index2.html">Home Page 2</a> </li>
						</ul>
                    </li>
					<li><a href="#.">Fresh Menu</a>
                    	<ul>
                        	<li> <a href="menu.html">Menu 1</a> </li>
							<li> <a href="menu2.html">Menu 2</a> </li>
							<li> <a href="menu3.html">Menu 3</a> </li>
                        </ul>
                    </li>
					<li><a href="our-story.html">Our Story</a></li>
                    <li><a href="#.">Blog</a>
                    	<ul>
                        	<li> <a href="blog.html">Blog 1</a> </li>
							<li> <a href="blog2.html">Blog 2</a> </li>
                        </ul>
                    </li>
					<li><a href="#.">Contact Us</a>
                    	<ul>
                        	<li> <a href="contact-us.html">Contact-us 1</a> </li>
							<li> <a href="contact-us2.html">Contact-us 2</a> </li>
                        </ul>
                    </li>
					<li><a href="shop.html">Order Online</a></li>
					<li><a href="#book-table">Book a Table</a></li>
				</ul>
            </nav>
		</div>
		</div>
