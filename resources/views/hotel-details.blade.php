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
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/styles/offers_responsive.css">
<link rel="stylesheet" href="<?php echo url('/'); ?>/http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
div.stars{
  width: 270px;
  display: inline-block;
}
 
input.star{
  display: none;
}
 
label.star {
  float: right;
  padding: 10px;
  font-size: 30px;
  color: #444;
  transition: all .2s;
}
 
input.star:checked ~ label.star:before {
  content:'\f005';
  color: #FD4;
  transition: all .25s;
}
 
 
input.star-5:checked ~ label.star:before {
  color:#FE7;
  text-shadow: 0 0 10px #952;
}
 
input.star-1:checked ~ label.star:before {
  color: #F62;
}
 
label.star:hover{
  transform: rotate(-15deg) scale(1.3);
}
 
label.star:before{
  content:'\f006';
  font-family: FontAwesome;
}
 
input.star:checked ~ .rev-box{
  height: 125px;
  overflow: visible;
}

.recommended_items {
  overflow: hidden;
}

#recommended-item-carousel .carousel-inner .item {
  padding-left: 0;
}

.recommended-item-control {
  position: absolute;
  top: 41%;
}

.recommended-item-control i {
  background: none repeat scroll 0 0 rgb(158, 15, 254);
  color: #FFFFFF;
  font-size: 20px;
  padding: 4px 10px;
}

.recommended-item-control i:hover {
  background: #ccccc6;
}

.recommended_items  h2 {
}
</style>

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
							<div class="logo"><a href="/"><img src="<?php echo url('/'); ?>/images/logo.png" alt="">travels</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="/">home</a></li>
								<li class="main_nav_item"><a href="/aboutus">about us</a></li>
								<li class="main_nav_item"><a href="/offers">offers</a></li>
								<li class="main_nav_item"><a href="/blog">hotel</a></li>
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

						<form id="search_form" action="/search" method="Post" class="search_form bez_1">
							@csrf
							<input type="search" name="hotel" class="search_content_input bez_1">
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
			<div class="logo menu_logo"><a href="/"><img src="<?php echo url('/'); ?>/images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="/">home</a></li>
				<li class="menu_item"><a href="/about">about us</a></li>
				<li class="menu_item"><a href="/offers">offers</a></li>
				<li class="menu_item"><a href="/blog">hotel</a></li>
				<li class="menu_item"><a href="/contact">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo url('/'); ?>/images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Hotel Details</div>
		</div>
	</div>

	<!-- Offers -->
	<div class="container my-5 z-depth-1">
	<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image -->
										<div class="offers_image_background" style="background-image:url(<?php echo url('/'); ?>/storage/{{$hotel->img}})"></div>
										<div class="offer_name"><a href="single_listing.html">{{$hotel->name}}</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$</span>{{$hotel->price}}<span>per night</span></div>
										
											
										</div>
										<p class="offers_text">{{$hotel->description}}</p>
										
										<h4 class="font-weight-bold ">{{$hotel->location}}</h4></span>
										<br>
										<h3 class="font-weight-bold"> Write a review about hotel </h3>
										<form action="/reviews" method="post">
											@csrf
												<label style="float:left;"><h4>Rate this Hotel :</h4></label> 
												<div style="margin-top:-25px; float:left;">
												<div class="stars">
													
														<input class="star star-5" id="star-5" type="radio" name="rating" value='5'/>
														<label class="star star-5" for="star-5"></label>
														<input class="star star-4" id="star-4" type="radio" name="rating" value='4'/>
														<label class="star star-4" for="star-4"></label>
														<input class="star star-3" id="star-3" type="radio" name="rating" value='3'/>
														<label class="star star-3" for="star-3"></label>
														<input class="star star-2" id="star-2" type="radio" name="rating" value='2'/>
														<label class="star star-2" for="star-2"></label>
														<input class="star star-1" id="star-1" type="radio" name="rating" value='1'/>
														<label class="star star-1" for="star-1"></label>
													
													</div>
													</div>
													<div style="clear:both;"></div>
													<input type='hidden' name="hotelid" value="{{$hotel->id}}"/>
													<div class="form-group shadow-textarea">
													<label for="exampleFormControlTextarea6"></label>
													<textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" name="reviews" rows="3" placeholder="Write something here..."></textarea>
													</div>

													<div class="md-form">
														<input type="text" name="name" id="form100" placeholder="Enter your name" class="form-control">
													</div>
												    <br>
													<button type="submit" value="Submit" class="btn btn-warning">Submit</button>
												<!-- <input type="submit" value="Submit" style="background:green;height:20px;background: #120c4e;height: 30px;color: white;">  -->
												
												</form> 
									</div>
								</div>
							</div>
						</div>



	<div class="container">
		<div class="offers_item rating_4">
			<div class="row" >
				<div class="container">
					<!-- Section heading -->
					<h2 class="font-weight-bold text-center mb-5">Hotel Reviews</h2>
					@foreach($reviews as $review)
						<!--Section: Block Content-->
					<section class="dark-grey-text">
						<div class="media mb-2">
							<div class="media-body">
								<h5 class="user-name font-weight-bold">{{$review->name}}</h5>
								<!-- Rating -->
									<ul class="rating">
										<li>
											<i class="fa fa-star blue-text"><p>Rating {{$review->rating}}</p></i>
										</li>
										
										<li>
											<p class="dark-grey-text article">{{$review->reviews}}</p>
										</li>
									</ul>
							</div>
						</div>
					</section>
				</div>
			@endforeach
			</div>
		</div>	
	</div>
    



 <div class="container mt-5">
            <h2 class="font-weight-bold text-center mb-5">Recommended Hotels</h2>
            <div class="row">
			
                @foreach($relateHotel->chunk(2) as $chunk)
                    @foreach($chunk as $item)
                        <div class="col-md-3">
                            <img src="/storage/{{$item->img}}" alt="No image" style="height: 150px; width: 200px;"/>
                            <h3 class="font-weight-bold">{{$item->name}}</h3>
                            <h4 class="font-weight-bold ">{{$item->location}}</h4>
                            
                        </div>
                    @endforeach
                @endforeach  
            </div>
        </div>
</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="<?php echo url('/'); ?>/images/logo.png" alt="">travels</a></div>
							</div>
							<p class="footer_about_text">Our verification process includes of Guarantee of Operation, Verification of Legal Status, Availability of Products and Government License Verification.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?php echo url('/'); ?>/images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2019</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?php echo url('/'); ?>/images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
									<div class="footer_blog_date">Nov 29, 2019</div>
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?php echo url('/'); ?>/images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2019</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">design</a></li>
								<li class="tag_item"><a href="#">fashion</a></li>
								<li class="tag_item"><a href="#">music</a></li>
								<li class="tag_item"><a href="#">video</a></li>
								<li class="tag_item"><a href="#">party</a></li>
								<li class="tag_item"><a href="#">photography</a></li>
								<li class="tag_item"><a href="#">adventure</a></li>
								<li class="tag_item"><a href="#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo url('/'); ?>/images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Kathmandu, Nepal</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo url('/'); ?>/images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">9849770355</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo url('/'); ?>/images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="manish_kunwar@hotmail.com?Subject=Hello" target="_top">manish_kunwar@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo url('/'); ?>/images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://www.linkedin.com/in/manishkunwar/">Manish</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Desgined </i> by <a href="https://www.linkedin.com/in/manishkunwar/" target="_blank">Manish</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="/">home</a></li>
								<li class="footer_nav_item"><a href="/aboutus">about us</a></li>
								<li class="footer_nav_item"><a href="/offers">offers</a></li>
								<li class="footer_nav_item"><a href="/blog">hotel</a></li>
								<li class="footer_nav_item"><a href="/contact">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?php echo url('/'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo url('/'); ?>/styles/bootstrap4/popper.js"></script>
<script src="<?php echo url('/'); ?>/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo url('/'); ?>/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo url('/'); ?>/plugins/easing/easing.js"></script>
<script src="<?php echo url('/'); ?>/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo url('/'); ?>/js/offers_custom.js"></script>



</body>

</html>