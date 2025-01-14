<?php
/*
Template Name: Contact Template
*/

get_header();  ?>
	<!-- Breadcrumbs -->
<div class="container">
    <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="text-center" >ارتباط با ما </h2>
							<ul class="bread-list">
								<li class="active">ارتباط با ما  </li>
                                <li><i class="icofont-simple-left"></i></li>
								<li><a href="<?php echo esc_url('/') ?>">خانه</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

        <!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
               <div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2 class="text-center"> با ما در ارتباط باشید</h2>
							<img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="contact image">
						</div>
					</div>
				</div>
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left m-2">
								<!--Start Google-map -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.279098559735!2d51.30685557457613!3d35.768519925175994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dfd0017d8d7bb%3A0x98d738d2a78fd320!2z2KfYs9iq2KfYsSDZgdmI2K8!5e0!3m2!1sen!2s!4v1736073903169!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6 text-center">
                            <img class="my-4 p-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-img.png" alt="contact image">
                            <ul class="social m-4">
                                <li class="d-inline-block"><a href="https://www.facebook.com/" class="social-link"><i class="icofont-facebook"></i></a></li>
                                <li class="d-inline-block"><a href="https://www.instagram.com/" class="social-link"> <i class="icofont-instagram"></i> </a></li>
                                <li class="d-inline-block"><a href="https://twitter.com/" class="social-link"><i class="icofont-twitter"></i></a></li>
                                <li class="d-inline-block"><a href="https://www.linkedin.com/" class="social-link"><i class="icofont-linkedin"></i> </a></li>
                            </ul>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>021-48286</h3>
									<p>info@starfoods.com</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
                                    <h3> جنت آباد شمالی </h3>
									<p> خیابان فردوسی، کوچه حافظ شرق، پلاک 12 </p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3> شنبه - پنچ شنبه  </h3>
									<p>5:30 pm - 9:00 am </p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		</div>
		<!--/ End Contact Us -->

<?php get_footer();  ?>
