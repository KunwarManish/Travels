


<!DOCTYPE html>
<html lang="en">
<head>
<title>Travels</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo url('/'); ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/styles/blog_responsive.css">

<!-- Font Icon -->
<link rel="stylesheet" href="<?php echo url('/'); ?>/fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">9849770355</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
						@if (Route::has('login'))
								@auth
									<div class="user_box_login user_box_link"> <a href="{{ url('/home') }}">Home </a> </div>
									<div class="user_box_login user_box_link"> <a href=" ">{{ Auth::user()->name }} </a> </div>
									<div class="user_box_login user_box_link"> 
										<a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                       </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
									   </form>
								    </div>
									@else
									<div class="user_box_login user_box_link"> <a href="{{ route('login') }}">Login</a> </div>

								@if (Route::has('register'))
									<div class="user_box_register user_box_link"> <a href="{{ route('register') }}">Register</a> </div>
								@endif
								@endauth
														
								@endif
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="<?php echo url('/'); ?>/images/logo.png" alt="">travels</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="/">home</a></li>
								<li class="main_nav_item"><a href="/aboutus">about us</a></li>
								<li class="main_nav_item"><a href="/offers">offers</a></li>
								<li class="main_nav_item"><a href="/blog">news</a></li>
								<li class="main_nav_item"><a href="/contact">contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="/index">home</a></li>
				<li class="menu_item"><a href="/about">about us</a></li>
				<li class="menu_item"><a href="/offers">offers</a></li>
				<li class="menu_item"><a href="/blog">news</a></li>
				<li class="menu_item"><a href="/contact">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/blog_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Login</div>
		</div>
	</div>

                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="/register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="email" type="email" placeholder="Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <!-- <input class=" @error('email') is-invalid @enderror" name=" email" id=" email" type="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" placeholder="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                <!-- <input class=" @error('password') is-invalid @enderror" type="password" name="password " id="your_pass password" placeholder="Password" required autocomplete="current-password"> -->
                               
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- End Form -->

                        

                        

<script src="<?php echo url('/'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo url('/'); ?>/styles/bootstrap4/popper.js"></script>
<script src="<?php echo url('/'); ?>/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo url('/'); ?>/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo url('/'); ?>/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo url('/'); ?>/js/custom.js"></script>

</body>
</html>