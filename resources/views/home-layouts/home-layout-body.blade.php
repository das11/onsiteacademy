@extends('layouts.home-layout') 
@section('home-content')



<!-- banner-section -->
<section class="banner-section">
	<div class="pattern-layer">
		<div class="pattern-1" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-56.png")}});"></div>
		<div class="pattern-2" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-55.png")}});"></div>
	</div>
	<div class="icon-layer">
		<div class="icon icon-1 rotate-me" style="background-image: url({{URL::asset("home_assets/assets/images/icons/wheel-2.png")}});"></div>
		<div class="icon icon-2 rotate-me" style="background-image: url({{URL::asset("home_assets/assets/images/icons/wheel-3.png")}});"></div>
		<div class="icon icon-3 rotate-me" style="background-image: url({{URL::asset("home_assets/assets/images/icons/wheel-4.png")}});"></div>
		<div class="icon icon-4 rotate-me" style="background-image: url({{URL::asset("home_assets/assets/images/icons/wheel-5.png")}});"></div>
	</div>
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-6 col-md-12 col-sm-12 content-column">
				<div class="content-box">
					<h1>Build Data Skills</h1>
					<p>Data drives everything. <br> Get the skills you need for the future of work. </p>
					<div class="btn-box">
						<!-- <a href="" class="theme-btn style-two">Start Today<span>+</span></a> -->
						<a href="/coursehome" class="theme-btn style-one">Start Today <span>+</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 image-column">
				<div class="slider-image-1 clearfix">
					<figure class="image image-1">
						<img src="{{URL::asset("home_assets/assets/images/banner/banner-1-1.png")}}" alt="">
					</figure>
					<figure class="image image-2 float-bob-y">
						<img src="{{URL::asset("home_assets/assets/images/banner/banner-1-2.png")}}" alt="">
					</figure>
					<figure class="image image-3">
						<img src="{{URL::asset("home_assets/assets/images/icons/pie-chart-1.png")}}" alt="">
					</figure>
					<figure class="image image-4">
						<img src="{{URL::asset("home_assets/assets/images/banner/banner-1-3.png")}}" alt="">
					</figure>
					<figure class="image image-5 float-bob-y">
						<img src="{{URL::asset("home_assets/assets/images/banner/banner-1-4.png")}}" alt="">
					</figure>
					<figure class="image image-6 float-bob-y">
						<img src="{{URL::asset("home_assets/assets/images/banner/banner-1-5.png")}}" alt="">
					</figure>
					<figure class="image image-7">
						<img src="{{URL::asset("home_assets/assets/images/banner/banner-1-6.png")}}" alt="">
					</figure>
					<figure class="image image-8 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
						<img src="{{URL::asset("home_assets/assets/images/icons/dollar-1.png")}}" alt="">
					</figure>
					<figure class="image image-9 wow bounceInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
						<img src="{{URL::asset("home_assets/assets/images/icons/dollar-2.png")}}" alt="">
					</figure>
					<figure class="image image-10 wow bounceInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
						<img src="{{URL::asset("home_assets/assets/images/icons/dollar-3.png")}}" alt="">
					</figure>
					<figure class="image image-11 wow bounceInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
						<img src="{{URL::asset("home_assets/assets/images/icons/dollar-4.png")}}" alt="">
					</figure>
					<figure class="image image-12 wow bounceInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
						<img src="{{URL::asset("home_assets/assets/images/icons/dollar-5.png")}}" alt="">
					</figure>
					<figure class="image image-13">
						<img src="{{URL::asset("home_assets/assets/images/icons/arrow-4.png")}}" alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- banner-section end -->
<!-- work-process -->
<section class="work-process">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h2>What is Onsite ?</h2>
			<h4>Learn the data skills you need online at your own pace <br> from non-coding essentials to data science and machine learning. </h4>
			<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-4 col-md-6 col-sm-12 work-block">
				<div class="work-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<div class="icon-box">
							<i class="flaticon-big-data"></i>
							<div class="count">01</div>
							<div class="bg-pattern" style="background-image: url({{URL::asset("home_assets/assets/images/icons/icon-bg-1.png")}});"></div>
							<div class="overlay-pattern" style="background-image: url({{URL::asset("home_assets/assets/images/icons/icon-bg-2.png")}});"></div>
						</div>
						<h4>
							<a href="">Learn</a>
						</h4>
						<p>Complete interactive courses</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 work-block">
				<div class="work-block-one wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<div class="icon-box">
							<i class="flaticon-ui"></i>
							<div class="count">02</div>
							<div class="bg-pattern" style="background-image: url({{URL::asset("home_assets/assets/images/icons/icon-bg-1.png")}});"></div>
							<div class="overlay-pattern" style="background-image: url({{URL::asset("home_assets/assets/images/icons/icon-bg-2.png")}});"></div>
						</div>
						<h4>
							<a href="">Apply</a>
						</h4>
						<p>Solve real-world problems.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 work-block">
				<div class="work-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<div class="icon-box">
							<i class="flaticon-brain-1"></i>
							<div class="count">03</div>
							<div class="bg-pattern" style="background-image: url({{URL::asset("home_assets/assets/images/icons/icon-bg-1.png")}});"></div>
							<div class="overlay-pattern" style="background-image: url({{URL::asset("home_assets/assets/images/icons/icon-bg-2.png")}});"></div>
						</div>
						<h4>
							<a href="">Assess</a>
						</h4>
						<p>Test your skills and track progress.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- work-process end -->
<!-- industries-section -->
<section class="industries-section">
	<div class="pattern-layer">
		<div class="pattern-1" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-57.png")}});"></div>
		<div class="pattern-2" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-58.png")}});"></div>
	</div>
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 content-column">
				<div class="content-box">
					<div class="sec-title text-left light">
						<h2>Launch your Career Today</h2>
						<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-2.png")}});"></div>
					</div>
					<div class="btn-box">
						<a href="/coursehome" class="btn-style-four">All Courses <span>+</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 inner-column">
				<div class="inner-box">
					<div class="pattern-layer" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-3.png")}});"></div>
					<div class="inner">
						<span>Career</span>
						<h4>
							<a href="/courses">Data Scientist</a>
						</h4>
						<div class="btn-box clearfix">
							<a href="/courses">
								<i class="flaticon-arrow"></i>
							</a>
						</div>
						<div class="icon-box">
							<i class="flaticon-big-data"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 inner-column">
				<div class="inner-box">
					<div class="pattern-layer" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-3.png")}});"></div>
					<div class="inner">
						<span>Career</span>
						<h4>
							<a href="/courses">Data Engineer</a>
						</h4>
						<div class="btn-box clearfix">
							<a href="/courses">
								<i class="flaticon-arrow"></i>
							</a>
						</div>
						<div class="icon-box">
							<i class="flaticon-brain"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 inner-column">
				<div class="inner-box">
					<div class="pattern-layer" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-3.png")}});"></div>
					<div class="inner">
						<span>Career</span>
						<h4>
							<a href="/courses">Data Analyst</a>
						</h4>
						<div class="btn-box clearfix">
							<a href="/courses">
								<i class="flaticon-arrow"></i>
							</a>
						</div>
						<div class="icon-box">
							<i class="flaticon-analytics"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 inner-column">
				<div class="inner-box">
					<div class="pattern-layer" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-3.png")}});"></div>
					<div class="inner">
						<span>Career</span>
						<h4>
							<a href="/courses">Statistician</a>
						</h4>
						<div class="btn-box clearfix">
							<a href="/courses">
								<i class="flaticon-arrow"></i>
							</a>
						</div>
						<div class="icon-box">
							<i class="flaticon-data"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- industries-section end -->
<!-- about-section -->

<br><br>

<section class="about-section">
	<div class="auto-container">
		<div class="tabs-box">
			<div class="tabs-content" id="content_block_01">
				<div class="tab active-tab" id="tab-1">
					<div class="row clearfix">
						<div class="col-lg-4 col-md-6 col-sm-12 content-column">
							<div class="content-box">
								<div class="sec-title text-left">
									<h2>Mission is to bring the power of Data Science to everyone</h2>
									<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
								</div>
								<div class="text">
									<!-- <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p> -->
								</div>
								<ul class="list-item clearfix">
									<li>
										<span class="dots"></span>To Learn
									</li>
									<li>
										<span class="dots"></span>To Apply
									</li>
									<li>
										<span class="dots"></span>To Assess
									</li>
									<li>
										<span class="dots"></span>Create Great explorers of the real truth
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8 col-md-6 col-sm-12 inner-column">
							<div class="inner-box">
								<div class="video-inner" style="background-image: url({{URL::asset("home_assets/assets/images/background/video-1.jpg")}});">
									<!-- <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab" id="tab-2">
					<div class="row clearfix">
						<div class="col-lg-4 col-md-6 col-sm-12 content-column">
							<div class="content-box">
								<div class="sec-title text-left">
									<h2>Vison is to bring the power of Data Science to everyone</h2>
									<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
								</div>
								<div class="text">
									<!-- <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p> -->
								</div>
								<ul class="list-item clearfix">
									<li>
										<span class="dots"></span>To Learn
									</li>
									<li>
										<span class="dots"></span>To Apply
									</li>
									<li>
										<span class="dots"></span>To Assess
									</li>
									<li>
										<span class="dots"></span>Create Great explorers of the real truth
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8 col-md-6 col-sm-12 inner-column">
							<div class="inner-box">
								<div class="video-inner" style="background-image: url({{URL::asset("home_assets/assets/images/background/video-1.jpg")}});">
									<!-- <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab" id="tab-3">
					<div class="row clearfix">
						<div class="col-lg-4 col-md-6 col-sm-12 content-column">
							<div class="content-box">
								<div class="sec-title text-left">
									<h2>Vison is to bring the power of Data Science to everyone</h2>
									<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
								</div>
								<div class="text">
									<!-- <p>As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction.</p> -->
								</div>
								<ul class="list-item clearfix">
									<li>
										<span class="dots"></span>To Learn
									</li>
									<li>
										<span class="dots"></span>To Apply
									</li>
									<li>
										<span class="dots"></span>To Assess
									</li>
									<li>
										<span class="dots"></span>Create Great explorers of the real truth
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8 col-md-6 col-sm-12 inner-column">
							<div class="inner-box">
								<div class="video-inner" style="background-image: url({{URL::asset("home_assets/assets/images/background/video-1.jpg")}});">
									<a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption="">
										<i class="flaticon-play-button"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-btn-box">
				<ul class="tab-btns tab-buttons clearfix">
					<li class="tab-btn active-btn" data-tab="#tab-1">
						<h4>Our Mission</h4>
					</li>
					<li class="tab-btn" data-tab="#tab-2">
						<h4>Our Vison</h4>
					</li>
					<li class="tab-btn" data-tab="#tab-3">
						<h4>Core Values</h4>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- about-section end -->
<br>
<br>
<!-- testimonial-section -->
<section class="testimonial-section">
	<div class="pattern-layer">
		<div class="pattern-1" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-5.png")}});"></div>
		<div class="pattern-2" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-6.png")}});"></div>
	</div>
	<div class="auto-container">
		<div class="upper-box clearfix">
			<div class="sec-title text-left pull-left">
				<p>Testimonials</p>
				<h2>What our Students say</h2>
				<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
			</div>
			<div class="btn-box pull-right">
				<!-- <a href="index-2.html" class="theme-btn style-three">Send Your Review<span>+</span></a> -->
			</div>
		</div>
		<div class="testimonial-carousel owl-carousel owl-theme owl-dots-none">
			<div class="testimonial-content">
				<figure class="image-box">
					<img src="{{URL::asset("home_assets/assets/images/resource/testimonial-9.png")}}" alt="">
				</figure>
				<div class="inner-box">
					<div class="icon-box">
						<i class="flaticon-null"></i>
					</div>
					<div class="inner">
						<ul class="rating clearfix">
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
						</ul>
						<div class="text">
							<p>As a growing company, Onsite's expertise in data science invaluable. In almost 6 months of cooperation, they’ve helped us define our data.</p>
						</div>
						<div class="author-info">
							<h4>Zedrew Kowzel</h4>
							<span class="designation">Blindspot Media</span>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonial-content">
				<figure class="image-box">
					<img src="{{URL::asset("home_assets/assets/images/resource/testimonial-10.png")}}" alt="">
				</figure>
				<div class="inner-box">
					<div class="icon-box">
						<i class="flaticon-null"></i>
					</div>
					<div class="inner">
						<ul class="rating clearfix">
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
						</ul>
						<div class="text">
							<p>As a growing company, Onsite's expertise in data science invaluable. In almost 3 months of cooperation, they’ve helped us define our data.</p>
						</div>
						<div class="author-info">
							<h4>Androi Roi</h4>
							<span class="designation">Cipher Studios</span>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonial-content">
				<figure class="image-box">
					<img src="{{URL::asset("home_assets/assets/images/resource/testimonial-9.png")}}" alt="">
				</figure>
				<div class="inner-box">
					<div class="icon-box">
						<i class="flaticon-null"></i>
					</div>
					<div class="inner">
						<ul class="rating clearfix">
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
							<li>
								<i class="flaticon-stars"></i>
							</li>
						</ul>
						<div class="text">
							<p>As a growing company, Onsite's expertise in data science invaluable. In almost 8 months of cooperation, they’ve helped us define our data.</p>
						</div>
						<div class="author-info">
							<h4>Watson Jsye</h4>
							<span class="designation">Philips</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonial-section end -->
<!--  service-section -->
<section class="service-section" id="for-business">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h2>Onsite for Business</h2>
			<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-3 col-md-6 col-sm-12 service-block">
				<div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<h4>
							<a href="service-details.html">Data Science</a>
						</h4>
						<div class="icon-box">
							<span class="border-layer"></span>
							<i class="flaticon-data"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 service-block">
				<div class="service-block-one wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<h4>
							<a href="service-details.html">Machine Learning</a>
						</h4>
						<div class="icon-box">
							<span class="border-layer"></span>
							<i class="flaticon-brain"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 service-block">
				<div class="service-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<h4>
							<a href="service-details.html">Artificial Intelligence</a>
						</h4>
						<div class="icon-box">
							<span class="border-layer"></span>
							<i class="flaticon-vr"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 service-block">
				<div class="service-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<h4>
							<a href="service-details.html">BI Implementation</a>
						</h4>
						<div class="icon-box">
							<span class="border-layer"></span>
							<i class="flaticon-cloud-computing"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- service-section end -->
<!-- fun-fact -->
<section class="fun-fact">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-4 col-md-6 col-sm-12 counter-block">
				<div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<div class="icon-box">
							<i class="flaticon-analytics"></i>
						</div>
						<div class="count-outer count-box">
							<span class="count-text" data-speed="1500" data-stop="26">0</span>+
						</div>
						<h4>Projects Completed</h4>
						<!-- <p>To take trivial example, which idea of ever undertakes.</p> -->
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 counter-block">
				<div class="counter-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<div class="icon-box">
							<i class="flaticon-brain-1"></i>
						</div>
						<div class="count-outer count-box">
							<span class="count-text" data-speed="1500" data-stop="87">0</span>
						</div>
						<h4>Industries Covered</h4>
						<!-- <p>Best every pleasure is to welcomed every pain avoided.</p> -->
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 counter-block">
				<div class="counter-block-one wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="inner-box">
						<div class="icon-box">
							<i class="flaticon-freelance"></i>
						</div>
						<div class="count-outer count-box">
							<span class="count-text" data-speed="1500" data-stop="158">0</span>
						</div>
						<h4>Students Graduated</h4>
						<!-- <p>Have to be repudiated annoyances accepted the wise.</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fun-fact end  -->
<!-- skills-section -->
<section class="skills-section" style="padding-top: 0%;">
	<div class="pattern-layer" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-4.png")}});"></div>
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-6 col-md-6 col-sm-12 image-column">
				<div class="image-box wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
					<figure class="image js-tilt">
						<img src="{{URL::asset("home_assets/assets/images/resource/illastration-1.png")}}" alt="">
					</figure>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 content-column">
				<div id="content_block_02">
					<div class="content-box">
						<div class="sec-title text-left">
							<p>Commitment</p>
							<h2>We keep ourself updated with latest trends</h2>
							<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
						</div>
						<div class="text">
							<p>Being a leading-edge data-science learning platform</p>
						</div>
						<div class="inner-box">
							<div class="progress-box">
								<h5>Data Consulting</h5>
								<div class="icon-box">
									<i class="flaticon-chat"></i>
								</div>
								<div class="bar">
									<div class="bar-inner count-bar" data-percent="92%">
										<div class="count-text">92%</div>
									</div>
								</div>
							</div>
							<div class="progress-box">
								<h5>Big Data & BI</h5>
								<div class="icon-box">
									<i class="flaticon-cloud-computing"></i>
								</div>
								<div class="bar">
									<div class="bar-inner count-bar" data-percent="98%">
										<div class="count-text">98%</div>
									</div>
								</div>
							</div>
							<div class="progress-box">
								<h5>Predictive Analysis</h5>
								<div class="icon-box">
									<i class="flaticon-analysis-1"></i>
								</div>
								<div class="bar">
									<div class="bar-inner count-bar" data-percent="97%">
										<div class="count-text">97%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- skills-section end -->
<!-- case-section -->
<section class="case-section" id="case-studies">
	<div class="auto-container">
		<div class="inner-container">
			<div class="sec-title text-center">
				<p>Case Studies</p>
				<h2>What our clients say about our <br />awesome solutions </h2>
				<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
			</div>
			<div class="row clearfix">
				<div class="col-lg-3 col-md-6 col-sm-12 case-block">
					<div class="case-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
						<div class="inner-box">
							<figure class="image-box">
								<a href="{{URL::asset("home_assets/assets/images/gallery/case-1.png")}}" class="lightbox-image" data-fancybox="gallery">
									<img src="{{URL::asset("home_assets/assets/images/gallery/case-1.png")}}" alt="">
								</a>
							</figure>
							<div class="lower-content">
								<p>Banking & Finance</p>
								<h4>
									<a href="">Consulting on invoice data capture</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 case-block">
					<div class="case-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="inner-box">
							<figure class="image-box">
								<a href="assets/images/gallery/case-2.png")}}" class="lightbox-image" data-fancybox="gallery">
									<img src="{{URL::asset("home_assets/assets/images/gallery/case-2.png")}}" alt="">
								</a>
							</figure>
							<div class="lower-content">
								<p>Entertainment</p>
								<h4>
									<a href="">Automate feedback analysis</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 case-block">
					<div class="case-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="inner-box">
							<figure class="image-box">
								<a href="assets/images/gallery/case-3.png")}}" class="lightbox-image" data-fancybox="gallery">
									<img src="{{URL::asset("home_assets/assets/images/gallery/case-3.png")}}" alt="">
								</a>
							</figure>
							<div class="lower-content">
								<p>Banking & Finance</p>
								<h4>
									<a href="">Big data processing implementation</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 case-block">
					<div class="case-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="inner-box">
							<figure class="image-box">
								<a href="assets/images/gallery/case-4.png")}}" class="lightbox-image" data-fancybox="gallery">
									<img src="{{URL::asset("home_assets/assets/images/gallery/case-4.png")}}" alt="">
								</a>
							</figure>
							<div class="lower-content">
								<p>Healthcare</p>
								<h4>
									<a href="">BI implementation for baby care App</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="more-btn">
				<a href="" class="btn-style-four">All Case Studies <span>+</span>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- case-section end -->
<!-- news-section -->
<section class="news-section">
	<div class="title-inner bg-color-1">
		<div class="pattern-layer">
			<div class="pattern-1" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-7.png")}});"></div>
			<div class="pattern-2" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-8.png")}});"></div>
		</div>
		<div class="auto-container">
			<div class="sec-title text-center">
				<p>News & Updates</p>
				<h2>Latest thinking in data science and <br />our company news </h2>
				<div class="decor" style="background-image: url({{URL::asset("home_assets/assets/images/icons/decor-1.png")}});"></div>
			</div>
		</div>
	</div>
	<div class="lower-content">
		<div class="auto-container">
			<div class="inner-content">
				<div class="row clearfix">
					<div class="col-lg-4 col-md-6 col-sm-12 news-block">
						<div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="inner-box">
								<figure class="image-box">
									<img src="{{URL::asset("home_assets/assets/images/news/news-1.jpg")}}" alt="">
									<a href="{{URL::asset("home_assets/assets/images/news/news-1.jpg")}}" class="lightbox-image" data-fancybox="gallery">
										<i class="flaticon-zoom"></i>
									</a>
								</figure>
								<div class="lower-content">
									<div class="file-box">
										<i class="far fa-folder-open"></i>
										<p>Data Engineering</p>
									</div>
									<div class="title-box">
										<div class="post-date">
											<p>05</p>
											<span>Jan</span>
										</div>
										<h4>
											<a href="">Onsite Named as a Global Leader in Big Data</a>
										</h4>
									</div>
									<div class="text">
										<p>Equal blame belongs too those who fail in their through weakness will shrinking.</p>
									</div>
									<div class="link">
										<a href="" class="btn-style-four">Read More <span>+</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 news-block">
						<div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="inner-box">
								<figure class="image-box">
									<img src="{{URL::asset("home_assets/assets/images/news/news-2.jpg")}}" alt="">
									<a href="" class="lightbox-image" data-fancybox="gallery">
										<i class="flaticon-zoom"></i>
									</a>
								</figure>
								<div class="lower-content">
									<div class="file-box">
										<i class="far fa-folder-open"></i>
										<p>ML Consulting</p>
									</div>
									<div class="title-box">
										<div class="post-date">
											<p>01</p>
											<span>Jan</span>
										</div>
										<h4>
											<a href="">The Current State of Artificial Intelligence Infographic.</a>
										</h4>
									</div>
									<div class="text">
										<p>When our power choice untrammelled and then prevents our being able pleasure.</p>
									</div>
									<div class="link">
										<a href="" class="btn-style-four">Read More <span>+</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 news-block">
						<div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="inner-box">
								<figure class="image-box">
									<img src="{{URL::asset("home_assets/assets/images/news/news-3.jpg")}}" alt="">
									<a href="" class="lightbox-image" data-fancybox="gallery">
										<i class="flaticon-zoom"></i>
									</a>
								</figure>
								<div class="lower-content">
									<div class="file-box">
										<i class="far fa-folder-open"></i>
										<p>Data Strategy</p>
									</div>
									<div class="title-box">
										<div class="post-date">
											<p>25</p>
											<span>Dec</span>
										</div>
										<h4>
											<a href="">Onsite as the Winners in Global Agency Awards</a>
										</h4>
									</div>
									<div class="text">
										<p>Obligations of business it will frequently occur that pleasures have to be repudiated.</p>
									</div>
									<div class="link">
										<a href="" class="btn-style-four">Read More <span>+</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- news-section end -->
<!-- clients-section -->
<section class="clients-section text-center">
	<div class="pattern-layer" style="background-image: url({{URL::asset("home_assets/assets/images/shape/shape-59.png")}});"></div>
	<div class="image-layer">
		<figure class="image-1 rotate-me">
			<img src="{{URL::asset("home_assets/assets/images/icons/wheel-6.png")}}" alt="">
		</figure>
		<figure class="image-2 rotate-me">
			<img src="{{URL::asset("home_assets/assets/images/icons/wheel-7.png")}}" alt="">
		</figure>
	</div>
	<div class="auto-container">
		<div class="title-inner">
			<h2>Trusted by innovative companies</h2>
			<!-- <p>Always holds in these matters to this principle of selection: he rejects pleasures to secure other greater<br />pleasures, or else he endures pains to avoid</p> -->
		</div>
		<div class="clients-carousel owl-carousel owl-theme owl-nav-none">
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-1.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-2.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-3.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-4.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-5.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-1.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-2.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-3.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-4.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-5.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-1.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-2.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-3.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-4.png")}}" alt="">
				</a>
			</figure>
			<figure class="logo-box">
				<a href="">
					<img src="{{URL::asset("home_assets/assets/images/clients/clients-logo-5.png")}}" alt="">
				</a>
			</figure>
		</div>
	</div>
</section>
<!-- clients-section end --> @endsection