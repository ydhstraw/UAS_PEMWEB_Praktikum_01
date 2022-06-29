{{-- TOP HEADER --}}

{{-- LOGIN --}}
@if($name!=null)

<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="prnt"><a href="/profile">My Profile</a></li>
            <li class="prnt"><a href="/history">Booking History</a></li>
        </ul>
        
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">Welcome :</li>
            <li class="sig">{{ $name }}</li>
            <li class="sigi"><a href="/logout">/ Logout</a></li>
        </ul>    
        
        <div class="clearfix"></div>
    </div>
</div>

@else
    
{{-- NOT LOGIN --}}
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="sig"><a href="/register">Register</a></li>
            <li class=""> / </li>
            <li class="sigi"><a href="/login">Login</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>

@endif

{{-- HEADER --}}

<div class="header">
    <div class="container">
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
            <a href="/">Booking <span>Hotel</span></a>
        </div>

        <div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			
			<div class="clearfix"></div>
		</div>
        <div class="clearfix"></div>
    </div>
</div>

<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="/#menuHotel">Hotels</a></li>

                            <li><a href="/aboutUs">About Us</a></li>

                            <div class="clearfix"></div>

                        </ul>
                    </nav>
                </div>
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
