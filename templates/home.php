<!-- slider-area -->
<section id="home" class="slider-area slider-four fix p-relative">
	<div class="slider-active">
		<div class="single-slider slider-bg d-flex align-items-center" style="background:url(<?= $assets ?>/img/sliderslider_img_bg.png) no-repeat;background-position: center center;">
			<div class="container">
				<div class="row justify-content-center pt-50 pb-150">
					<div class="col-lg-7">
						<div class="slider-content s-slider-content mt-200">
							<h2 data-animation="fadeInUp" data-delay=".4s">Start Learning With Us Now!</h2>
							<p data-animation="fadeInUp" data-delay=".6s">Glad you are here! <br /> To have free access to our Training courses, Vlogs, Blogs, Campaigns, Stories and Newsletters. Sign up here!</p>
							<div class="subricbe" data-animation="fadeInDown" data-delay=".4s">
								<form action="/newsletter" method="POST" class="contact-form ">
									<label><i class="icon fal fa-envelope"></i> Email Address</label>
									<input type="email" id="email2" name="newsletterEmail" class="header-input" placeholder="Enter Your Email Address Here..." required>
									<button type="submit" class="btn header-btn">Subscribe Now</button>
								</form>
							</div>
							<h5><?= $SELF->Toast(); ?></h5>
						</div>
					</div>

					<div class="col-lg-5">
						<div class="slider-img" data-animation="fadeInUp" data-delay=".4s">
							<img src="<?= $assets ?>/img/slider/slider_img05.png" alt="slider_img05">
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>


</section>
<!-- slider-area-end -->

<!-- blog-area -->
<section class="testimonial-area pt-120 pb-120" style="
                background-image: url(<?= $assets ?>/img/testimonial/test-bg-aliments.png);
                background-repeat: no-repeat; background-position: center;
                background-color: #fff7f5;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="col-lg-12">
					<div class="section-title center-align
                                    text-center mb-50">
						<h5>Our Blog</h5>
						<h2>
							Never Miss Our Latest Blogs
						</h2>
					</div>

				</div>


			</div>
		</div>

		<div class="row">
			<?php while ($BlogPost = mysqli_fetch_object($BlogPosts)) : ?>
				<div class="col-lg-4 col-md-12">
					<div class="single-post2 mb-30 wow fadeInDown
                                animated">
						<div class="blog-thumb2">
							<a href="blog-details.html"><img src="<?= $BlogPost->firstImage ?>" alt="img"></a>

						</div>
						<div class="blog-content2 text-center">
							<div class="b-meta">
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="date-b">
											<i class="fal fa-calendar-alt"></i> <?= date("j M. Y", strtotime($BlogPost->postDate)) ?>
										</div>

									</div>

								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<h4><a href="blog-details.html"><?= $BlogPost->heading ?></a></h4>
									<div class="blog-btn">
										<a href="/pages/blog"><i class="fal fa-chevron-circle-right">View All Blogs</i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<!-- blog-area-end -->

<!-- eventes-area -->
<section id="eventes" class="eventes-area fix pt-120 pb-120" style="
                background-image: url(<?= $assets ?>/img/bg/event-bg-aliments.png);
                background-repeat: no-repeat; background-position: center;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title center-align text-center
                                mb-50">
					<h5>Campaigns</h5>
					<h2>
						Upcoming Events
					</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<?php while ($Campaign = mysqli_fetch_object($Campaigns)) : ?>
				<div class="col-lg-6 col-md-12">
					<div class="eventes-box">
						<div class="date-box">
							<h3><?= date("j", strtotime($Campaign->startDate)) ?></h3>
							<h5><?= date("F, Y", strtotime($Campaign->startDate)) ?></h5>
						</div>
						<div class="text">
							<h5><a href="/pages/<?= $Campaign->id ?>/campaign-details"><?= $Campaign->campaignTopic ?></a></h5>
							<ul>
								<li><i class="fal fa-clock"></i> <?= date("g:ia", strtotime($Campaign->startDate)) ?></li>
								<!-- <li><i class="icon fal fa-map-marker-check"></i> Mumbai, India</li> -->
							</ul>
							<p><?= $Campaign->campaignDescription ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>

		<div class="row text-center">
			<div class="col-lg-12">
				<div class="slider-btn mt-30">
					<a href="/pages/campaigns" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">View All Events</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- eventes-area-end -->

<!-- testimonial-area -->
<section class="testimonial-area pt-120 pb-120" style="
                background-image: url(<?= $assets ?>/img/testimonial/test-bg-aliments.png);
                background-repeat: no-repeat; background-position: center;
                background-color: #fff7f5;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-title second-atitle pt-15">
					<h5>Testimonial</h5>
					<h3>
						See What Our Users Are Saying About <br>Our Informative Contents
					</h3>
					<p class="pt-15">"We all need people who will give us feedback. That's how we improve." <br/> Bill Gates. </p>
					<p class="pt-15">Here are what those benefiting from our website are saying. You too can enjoy the value we provide at no cost.</p>
				</div>

			</div>

			<div class="col-lg-6">
				<div class="testimonial-active">
						<?php while ($Review = mysqli_fetch_object($Reviews)) : ?>
						<?php if ($Review->approved == 1) : ?>
							<div class="single-testimonial">
								<div class="testi-author">
									<img src="<?= $Review->picture ?>" alt="img" style="width:115px;height:115px;">
									<div class="ta-info">
										<h6><?= $Review->fullName ?></h6>
										<span><?= $Review->jobDescription ?></span>
									</div>
								</div>
								<div class="qt-img">
									<img src="<?= $assets ?>/img/testimonial/qt-icon.png" alt="img">
								</div>
								<p><?= $Review->review ?></p>
							</div>
						<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
		</div>
	</div>
</section>
<!-- testimonial-area-end -->

<!-- featured-courses-area -->
<!-- <section id="courses" class="courses-area fix pt-120 pb-120">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title center-align text-center
                                mb-50">
					<h5>Best Courses</h5>
					<h2>
						Featured Courses
					</h2>
				</div>

			</div>

		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">

				<div class="featured-courses-active">

					<div class="box-courses">
						<a href="courses-details.html"><img src="<?= $assets ?>/img/featured-courses/courses-img1.png" alt="courses-img1"></a>
						<div class="text">
							<h5>3 Years</h5>
							<h3><a href="courses-details.html">Civil
									Engeering</a></h3>
						</div>
					</div>
					<div class="box-courses">
						<a href="courses-details.html"> <img src="<?= $assets ?>/img/featured-courses/courses-img2.png" alt="courses-img1"></a>
						<div class="text">
							<h5>3 Years</h5>
							<h3><a href="courses-details.html">Civil
									Engeering</a></h3>
						</div>
					</div>
					<div class="box-courses">
						<a href="courses-details.html"> <img src="<?= $assets ?>/img/featured-courses/courses-img3.png" alt="courses-img1"></a>
						<div class="text">
							<h5>3 Years</h5>
							<h3><a href="courses-details.html">Civil
									Engeering</a></h3>
						</div>
					</div>
					<div class="box-courses">
						<a href="courses-details.html"> <img src="<?= $assets ?>/img/featured-courses/courses-img4.png" alt="courses-img1"></a>
						<div class="text">
							<h5>3 Years</h5>
							<h3><a href="courses-details.html">Civil
									Engeering</a></h3>
						</div>
					</div>
					<div class="box-courses">
						<a href="courses-details.html"><img src="<?= $assets ?>/img/featured-courses/courses-img5.png" alt="courses-img1"></a>
						<div class="text">
							<h5>3 Years</h5>
							<h3><a href="courses-details.html">Civil
									Engeering</a></h3>
						</div>
					</div>
					<div class="box-courses">
						<a href="courses-details.html"><img src="<?= $assets ?>/img/featured-courses/courses-img1.png" alt="courses-img1"></a>
						<div class="text">
							<h5>3 Years</h5>
							<h3><a href="courses-details.html">Civil
									Engeering</a></h3>
						</div>
					</div>

				</div>


			</div>


		</div>
	</div>
</section> -->
<!-- featured-courses-area-end -->


</main>
<!-- main-area-end -->