@extends('layouts.mainpage')
@section('content')
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <div class="navbar-brand">
			    	<a class="logo js-scroll-trigger" href="#softeum"><img src="img/logo.png" alt=""></a>
			    </div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			  	<span class="navbar-toggler-icon"></span>
			  	</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
				    <ul class="navbar-nav left-menu">
				      <li class="nav-item">
				        <a class="nav-link js-scroll-trigger" href="#feature">Feature</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link js-scroll-trigger" href="#video">Video</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link js-scroll-trigger" href="#screenshot">Screenshots</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link js-scroll-trigger" href="#pricing">Pricing</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
				      </li>
				    </ul>
					<ul class="right-menu">
						@auth
							<li class="nav-item">
								<a class="nav-link" href="{{route('customer.index')}}">Home</a>
							</li>
					    <li class="nav-item">
					        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">Sign Out</a>
																<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																		@csrf
																</form>
					    </li>
						@else
							<li class="nav-item">
								<a class="nav-link" href="{{route('login')}}">Login</a>
							</li>
					    <li class="nav-item">
					        <a class="nav-link" href="#">Sign Up</a>
					    </li>
						@endauth
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 order-sm-1 order-2">
					<div class="slider-content">
						<div class="verticle-align-tm clearfix">
							<h1 class="slider-title">Softeum Helps You Build Elegant, Scalable Cool  Landing Page Website</h1>
							<p class="slider-text">We design to make your business succesful, that also works perfectly for us.</p>
							<form class="slider-form" action="#">
								<input type="email" name="email" placeholder="Enter your email address">
								<button class="tm-button">Get Started</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 order-sm-2 order-1">
					<div class="slider-content">
						<div class="verticle-align-tm">
							<img src="img/slider_content1.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="feature">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-3"></div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="title-center">
						<h6 class="sub-title">Delivered how & when you need it</h6>
						<h2 class="title">Exactly What You Need is<br> Almost <span>Ready Here</span></h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3"></div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="feature-one">
						<div class="feature-image">
							<img src="img/feature1.png" alt="feature1">
						</div>
						<h5 class="feature-title">Research & Strategy</h5>
						<div class="bar"></div>
						<p class="feature-description">We collaborate with your team to deliver thoughtfully designed and thoroughly tested</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="feature-one">
						<div class="feature-image">
							<img src="img/feature2.png" alt="feature2">
						</div>
						<h5 class="feature-title">Clean & Powerful</h5>
						<div class="bar"></div>
						<p class="feature-description">We collaborate with your team to deliver thoughtfully designed and thoroughly tested</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="feature-one">
						<div class="feature-image">
							<img src="img/feature3.png" alt="feature3">
						</div>
						<h5 class="feature-title">Extensive Support</h5>
						<div class="bar"></div>
						<p class="feature-description">We collaborate with your team to deliver thoughtfully designed and thoroughly tested</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="title-left">
						<h6 class="sub-title">Our good mission</h6>
						<h2 class="title">You Have the Idea, We Have the <span>Technology</span></h2>
					</div>
					<div class="num-text">
						<p><span>01</span>Our works speak volumes for us and about us. Through them, you can clearly see how we operate and what values we profess. Each project is different, has its own features and character. We are glad when more</p>

						<p><span>02</span>We create dynamic brand connotations. We know  that new image is new possibilities and new possibilities are the new...</p>

						<p><span>03</span> Because we always see new design as a source of new possibilities, we focus on creating a unique image that</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
				    <div class="service-feature-img">
					    <img src="img/services.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="title-center">
						<h6 class="sub-title">Showcase Your Product Using Softeum</h6>
						<h2 class="title">Exactly What They have Built<br>Using <span>Our Product</span></h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-8 col-lg-8">
					<div class="portfolio">
		                <div class="portfolio-menu">
	                     	<div class="button-group portfolio-btn-group">
		                        <button class="form-control btn" data-filter="*">All</button>
		                        <button class="form-control btn" data-filter=".cat1">Latest</button>
		                        <button class="form-control btn" data-filter=".cat2">Trend</button>
		                        <button class="form-control btn" data-filter=".cat3">Popular</button>
		                        <button class="form-control btn" data-filter=".cat4">Modern</button>
	                    	</div>
		                </div>
               		</div>
            	</div>
            	<div class="col-sm-12 col-md-4 col-lg-4">
            		<div class="portfolio-btn">
            			<button class="tm-button">See all works</button>
            		</div>
            	</div>
            </div>
            <div class="row grid">
	            <div class="col-md-4 grid-item grid-item-height1 cat2 cat3 cat4">
	                <div class="single-image">
	                  	<div class="porfolio-img">
	                     	<a href="#"><img src="img/works1.jpg" alt=""></a>
	                    </div>
	                    <div class="overlay">
	                     	<h5><a href="#">Marketplace Design</a></h5>
	                    </div>
	                </div>
	            </div>
               <div class="col-sm-12 col-md-4 col-lg-4 grid-item grid-item-height2 cat3 cat5 cat6">
                  <div class="single-image">
                    <div class="porfolio-img">
	                 	<a href="#"><img src="img/works4.jpg" alt=""></a>
	                </div>
                    <div class="overlay">
                     	<h5><a href="#">Modern Artist Portfolio</a></h5>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4 grid-item cat1 cat2 cat4">
	                <div class="single-image">
	                    <div class="porfolio-img">
		                     	<a href="#"><img src="img/works6.jpg" alt=""></a>
		                </div>
	                    <div class="overlay">
	                     	<h5><a href="#">Amazing Stuff</a></h5>
	                    </div>
	                </div>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4 grid-item cat2 cat1 cat5">
	                <div class="single-image">
	                    <div class="porfolio-img">
	                     	<a href="#"><img src="img/works7.jpg" alt=""></a>
	                    </div>
	                    <div class="overlay">
	                 	  	<h5><a href="#">Modern Artist Portfolio</a></h5>
	                    </div>
	                </div>
               </div>
               <div class="col-sm-12 col-md-4 col-lg-4 grid-item grid-item-height2 cat2 cat4 cat5">
	                 <div class="single-image">
	                    <div class="porfolio-img">
	                     	<a href="#"><img src="img/works2.jpg" alt=""></a>
	                    </div>
	                    <div class="overlay">
	                    	<h5><a href="#">Life is Beautiful</a></h5>
	                    </div>
	                </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 grid-item cat2 cat1 cat3">
	                <div class="single-image">
	                    <div class="porfolio-img">
	                     	<a href="#"><img src="img/works3.jpg" alt=""></a>
	                    </div>
	                    <div class="overlay">
		                   	<h5><a href="#">Life is Beautiful</a></h5>
		                </div>
	                </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 grid-item cat2 cat4">
	                <div class="single-image">
	                    <div class="porfolio-img">
	                     	<a href="#"><img src="img/works5.jpg" alt=""></a>
	                    </div>
	                    <div class="overlay">
		                   	<h5><a href="#">Future is Here</a></h5>
		                </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<section id="free-trail">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12"></div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="title-center">
						<h6 class="sub-title">Starting in free is fun, let’s try!</h6>
						<h2 class="title">Start your <span>Free Trail</span></h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12"></div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="trial-form-bg">
						<form class="trail">
							<input type="email" name="newsletter-email" placeholder="Your email address">
							<button class="tm-button">Get Started</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="whatis">
		<div class="container tm-relative">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="vertical-height">
						<div class="vertical-wrapper">
							<div class="title-left">
								<h6 class="sub-title">The most advanced landing page design</h6>
								<h2 class="title">Now with Amazing <br> New <span>Dashboard</span></h2>
							</div>
							<div class="tm-text">
								<p>We’re the wheels turning behind the web. Softeum Marketing is more than a digital agency—we’re a trusted partner and collaborator. We build results-oriented digital strategies and continually refine your campaigns for optimal outcome.</p>
								<div class="empty-space"></div>
								<p>We get results. We specialize in connecting data and storytelling to help make brands more profitable, shareable, and valuable.</p>
							</div>
							<button class="tm-button">Get Started</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="image-holder">
						<img src="img/screeshot_web.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="video">
		<div class="container tm-relative">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="title-center">
						<h6 class="sub-title">Video is the most powerful tool to explain</h6>
						<h2 class="title">Softeum has naver been so<br>Warding with <span>Video</span></h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="pulse-icon">
						<div class="icon-wrap">
							<a href="http://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity><i class="icon fas fa-play"></i></a>
						</div>
						<div class="elements">
							<div class="circle circle-outer"></div>
							<div class="circle circle-inner"></div>
							<div class="pulse pulse-1"></div>
							<div class="pulse pulse-2"></div>
							<div class="pulse pulse-3"></div>
						</div>
					</div>
					<div class="video-bg">
						<img src="img/video_bg.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="screenshot">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="title-center">
						<h6 class="sub-title">Our Products at a glance</h6>
						<h2 class="title">Are you Ready to Checkout  our<br>Awesome <span>Screenshots</span></h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<section class="screenshot slider">
						<div class="screenshot-item">
							<img src="img/screenshot2.png" alt="">
						</div>
						<div class="screenshot-item">
							<img src="img/screenshot3.png" alt="">
						</div>
						<div class="screenshot-item">
							<img src="img/screenshot4.png" alt="">
						</div>
						<div class="screenshot-item">
							<img src="img/screenshot5.png" alt="">
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<section id="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-form-bg">
						<form id="newsletter" class="newsletter">
							<input type="email" name="newsletter-email" placeholder="Enter your email address">
							<input type="submit" name="newsletter-submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="title-center">
						<h6 class="sub-title">Let's see what they say</h6>
						<h2 class="title">Thousand of Happy Faces<br>Makes our <span>Smile</span></h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<section class="regular slider">
					    <div>
							<div class="testimonial-item">
								<blockquote>I enjoyed working with ThemeMom. You guys have a good technical and visual understanding which enables you to deliver first class products for international enterprises.</blockquote>
								<div class="clint-info">
									<img src="img/testimonial/client.jpg" alt="">
									<div class="client-details">
										<h5 class="client-name">Andrew Methus</h5>
										<p class="client-position">CEO, ThemeMom Inc</p>
									</div>
								</div>
							</div>
					    </div>
					    <div>
							<div class="testimonial-item">
								<blockquote>I enjoyed working with ThemeMom. You guys have a good technical and visual understanding which enables you to deliver first class products for international enterprises.</blockquote>
								<div class="clint-info">
									<img src="img/testimonial/client2.jpg" alt="">
									<div class="client-details">
										<h5 class="client-name">Devid Methus</h5>
										<p class="client-position">CEO, ThemeMom Inc</p>
									</div>
								</div>
							</div>
					    </div>
					    <div>
							<div class="testimonial-item">
								<blockquote>I enjoyed working with ThemeMom. You guys have a good technical and visual understanding which enables you to deliver first class products for international enterprises.</blockquote>
								<div class="clint-info">
									<img src="img/testimonial/client3.jpg" alt="">
									<div class="client-details">
										<h5 class="client-name">Mark Angelo</h5>
										<p class="client-position">CEO, ThemeMom Inc</p>
									</div>
								</div>
							</div>
					    </div>
					    <div>
							<div class="testimonial-item">
								<blockquote>I enjoyed working with ThemeMom. You guys have a good technical and visual understanding which enables you to deliver first class products for international enterprises.</blockquote>
								<div class="clint-info">
									<img src="img/testimonial/client4.jpg" alt="">
									<div class="client-details">
										<h5 class="client-name">Arya Strak</h5>
										<p class="client-position">CEO, ThemeMom Inc</p>
									</div>
								</div>
							</div>
					    </div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12"></div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="title-center">
						<h6 class="sub-title">Current Crypto Prices & Trading</h6>
						<h2 class="title">This is how Softeum Pricing <br>Works<span> Perfectly</span></h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12"></div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="pricing-item">
						<h4 class="pricing-title">Gold</h4>
						<p class="pricing-sub-title">Starter</p>
						<h1 class="price"><span>$</span>179.00</h1>

						<ul class="pricing-details">
							<li>1,000 Gbps</li>
							<li>Open-Ended Mining</li>
							<li>Various team membgers</li>
							<li>Contract Duration: 45 Days</li>
							<li>Instant Support</li>
						</ul>

						<button class="tm-button">Get Started</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="pricing-item">
						<h4 class="pricing-title">Platinum</h4>
						<p class="pricing-sub-title">Best</p>
						<h1 class="price"><span>$</span>845.00</h1>

						<ul class="pricing-details">
							<li>5,000 Gbps</li>
							<li>Maintenance fee applies</li>
							<li>17.5% Daily Profit</li>
							<li>Contract Duration: 45 Days</li>
							<li>Instant Support</li>
						</ul>

						<button class="tm-button">Get Started</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="pricing-item responsive-margin">
						<h4 class="pricing-title">Diamond</h4>
						<p class="pricing-sub-title">Max</p>
						<h1 class="price"><span>$</span>3975.00</h1>

						<ul class="pricing-details">
							<li>25,000 Gbps</li>
							<li>Open-Ended Bitcoin Mining</li>
							<li>Various team membgers</li>
							<li>Maintenance fee</li>
							<li>Instant Support</li>
						</ul>

						<button class="tm-button">Get Started</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="blog">
		<div class="container">
			<div class="row row-wrapper">
				<div class="col-sm-12 col-md-12 col-lg-6 no-vertical">
					<div class="vertical-align-tm">
						<div class="title-left title-wrapper">
							<h6 class="sub-title">Blooging is the platform of learning</h6>
							<h2 class="title">Share your love using <br><span>Blog Posts</span></h2>
							<div class="tm-text">
								<p>Softeum is the most advanced blockchain application platform in the world. Developed by early contributors to both Bitcoin and Ethereum, Skycoin is completely secure, infinitely scalable, and ISP independent. Skycoin is the only platform capable of fulfilling Satoshi’s original vision.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="">
						<div class="blog-wrapper">
							<section class="blog-slider-tm slider">
							    <div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog1.jpg" alt="blog1">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">Development</a>
											</div>
											<h4 class="descrih4tion">Top 10 befinifits you are going to receive form crypteum landing </h4>
										</div>
									</div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog2.jpg" alt="blog">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">Design</a>
											</div>
											<h4 class="description">Never ever  forget to use this premium hacks to improve your </h4>
										</div>
									</div>
							    </div>
							    <div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog3.jpg" alt="blog">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">Education</a>
											</div>
											<h4 class="description">Never ever  forget to use this premium hacks to improve your </h4>
										</div>
									</div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog4.jpg" alt="blog">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">Travel</a>
											</div>
											<h4 class="description">Crypteum has tons of features thats enough to impress your </h4>
										</div>
									</div>
							    </div>
							    <div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog5.jpg" alt="blog">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">Lifestyle</a>
											</div>
											<h4 class="description">Top 10 befinifits you are going to receive form crypteum landing </h4>
										</div>
									</div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog6.jpg" alt="blog">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">Book</a>
											</div>
											<h4 class="description">Crypteum has tons of features thats enough to impress your </h4>
										</div>
									</div>
							    </div>
							    <div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog7.jpg" alt="blog">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">People</a>
											</div>
											<h4 class="description">Never ever  forget to use this premium hacks to improve your </h4>
										</div>
									</div>
									<div class="blog-post">
										<div class="feature-img">
											<img src="img/blog8.jpg" alt="blog">
										</div>
										<div class="blog-content">
											<div class="category">
												<a href="#">Photography</a>
											</div>
											<h4 class="description">Crypteum has tons of features thats enough to impress your </h4>
										</div>
									</div>
							    </div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-7"></div>
				<div class="col-sm-12 col-md-8 col-lg-5">
					<form class="contact-form">
						<h2 class="title">Request A demo</h2>
						<input type="text" placeholder="Full Name">
						<input type="email" placeholder="Email">
						<button class="tm-button">Get Started</button>
						<div class="call">
							<p>Or Just Call</p>
							<a href="tel:+8801717722179">+88 01717 722 179</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section id="subscribe-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-form-bg">
						<form id="newsletter" class="newsletter">
							<input type="email" name="newsletter-email" placeholder="Enter your email address">
							<input type="submit" name="newsletter-submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="widget-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="tm-widget mobile-padding pad-padding1">
							<div class="tm-widget-text">
								<h1>Ready to <br>Start?</h1>
								<div class="padding-bottom-30"></div>
								<ul class="contact-list">
									<li><a href="mailto:support@thememom.com">support@thememom.com</a></li>
									<li><a href="tel:+8801717722179">+88 01717 722 179</a>, <a href="tel:+19149992525">+1 914 999 25 25</a></li>
									<li><p>D 36, Block E, Zakir Hossain Road <br>Lalmatia, Dhaka</p></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="tm-widget pad-padding2">
							<h5 class="widget-title-tm">Quick Links</h5>
							<ul class="widget-links">
								<li><a href="#">Home</a></li>
								<li><a href="#">Crypteum</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Investment</a></li>
								<li><a href="#">Roadmap to Crypto</a></li>
								<li><a href="#">Pricing Plan</a></li>
								<li><a href="#">Frequesntly Asked Questions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="tm-widget">
							<h5 class="widget-title-tm">Get In Touch</h5>
							<ul class="widget-links">
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Knowledgebase</a></li>
								<li><a href="#">Helpdesk</a></li>
								<li><a href="#">Contact us</a></li>
								<li><a href="#">Chat with Us</a></li>
								<li>Call: <a href="tel:+8801717722179">+8801717 722 179</a></li>
								<li>Mail: <a href="mailto:support@thememom.com">support@thememom.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="tm-widget">
							<h5 class="widget-title-tm">Important</h5>
							<ul class="widget-links">
								<li><a href="#">Terms & Condition</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">User Agreement</a></li>
								<li><a href="#">Investors</a></li>
								<li><a href="#">Stock Holders</a></li>
								<li><a href="#">NDA</a></li>
								<li><a href="#">Earning Estatement</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<p class="copyright-text">Copyright © 2018 <a href="#">DevProCoder</a>. Designed by <a href="#">Anas Majeed</a></p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="copyright-nav">
							<ul>
								<li><a href="#" target="_blank">Facebook</a></li>
								<li><a href="#" target="_blank">Twitter</a></li>
								<li><a href="#" target="_blank">Instagram</a></li>
								<li><a href="#" target="_blank">LinkedIn</a></li>
								<li><a href="#" target="_blank">Youtube</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
@endsection
