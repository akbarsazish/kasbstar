<?php get_header(); ?>	
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
			<?php
				$args = [
					'post_type' => 'slider',
					'posts_per_page' => 5,
					'orderby' => 'date',
					'order' => 'DESC'
				];

				$query = new WP_Query($args);
				if ($query->have_posts()) : 
					while ($query->have_posts()) : $query->the_post(); 
						
						$thumbnail_id = get_post_thumbnail_id(); // Get the ID of the featured image
						if ($thumbnail_id) {
							$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true);
							if ($thumbnail_url) { ?>
								<div class="single-slider" style="background-image:url('<?php echo esc_url($thumbnail_url[0]); ?>'); z-index:999;">
									<div class="container">
										<div class="row">
											<div class="col-lg-3"></div>
											<div class="col-lg-7">
												<div class="text">
													<h1><?php the_title(); ?></h1>
													<p><?php the_content(); ?></p>
													<div class="button">
														<a href="/?page_id=14" class="btn">
															<?php
																$custome_field_value = get_post_meta(get_the_ID(), 'button1', true);
																if($custome_field_value){
																	echo esc_html($custome_field_value);
																}
															?>
														</a>
														<a href="/?page_id=20" class="btn primary">
														   <?php
																$custome_field_value = get_post_meta(get_the_ID(), 'button2', true);
																if($custome_field_value){
																	echo esc_html($custome_field_value);
																}
															?>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						} else {
							echo '<p>No featured image found for this slider.</p>'; 
						}
					?>
				<?php
					endwhile;
					wp_reset_postdata(); 
				else:
					echo '<p>No sliders found.</p>'; 
				endif;
			?>
			</div>
		</section>
		<!--/ End Slider Area -->

		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12 px-2">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<h4> تولید مواد اولیه لبنیات </h4>
										<p> ما با استفاده از فناوری‌های مدرن، شیر، خامه و پنیر... را از بهترین مواد اولیه تهیه کرده و نیازهای صنایع غذایی را تأمین می‌کنیم. </p>
										<a href="#"> <i class="fa fa-long-arrow-left"></i> بیشتر بخوانید </a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 px-2">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<h4> تولید محصولات غذایی</h4>
										<p> ما در زمینه تولید انواع محصولات غذایی فعالیت داریم و تلاش می‌کنیم تا محصولاتی سالم و خوشمزه ارائه دهیم </p>
										<a href="#"> <i class="fa fa-long-arrow-left"></i> بیشتر بخوانید  </a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-12 col-12 px-2">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<h4> تولید قند و شکر </h4>
										<p> ما علاوه بر شیر خشک، پودر کازئینات و کره حیوانی نیز تولید می‌کنیم. زیرساخت‌های مدرن ما امکان تولید محصولات متنوع را فراهم می‌کنند</p>
										<a href="https://www.acampowder.com/" target="_blank"> <i class="fa fa-long-arrow-left"></i> بیشتر بخوانید </a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-12 col-12 px-2">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<h4> تامین مواد اولیه با کیفیت </h4>
										<p> استار فود تأمین‌کننده مواد اولیه برای رستوران‌ها است. این شرکت محصولات متنوعی از جمله برنج، روغن، حبوبات و غیره را ارائه می‌دهد </p>
										<a href="/?page_id=26"> <i class="fa fa-long-arrow-left"></i> بیشتر بخوانید  </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2 class="text-center"> 🤝ما همیشه آماده همکاری با شما هستیم  </h2>
							<img class="text-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
							<p>ما همواره آماده‌ایم تا با مشتریان خود همکاری کنیم. تیم ما با شنیدن نیازها و خواسته‌های شما، بهترین راه‌حل‌ها را ارائه می‌دهد.
								 هدف ما ایجاد روابط موثر و پایدار است تا به موفقیت‌های مشترک دست یابیم. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
							    <i class="icofont-handshake-deal"></i>
							</div>
							<h3> دریافت سفارش </h3>
							<p> به سریعترین زمان ممکن سفارش بدست شما میرسد</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
							  <i class="icofont-vehicle-delivery-van"></i>
							</div>
							<h3> انتقال رایگان </h3>
							<p> انتقال رایگان در اسرع وقت </p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
						    <div class="signle-icon">
							   <i class="icofont-ui-contact-list"></i>
							</div>
							<h3> سفارش کالا </h3>
							<p> سفارش کالا مورد نظر تلفنی یا آنلاین در   <a class="text-primary" target="_blank" href="https://starfoods.ir/" > استارفود </a>  </p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
						    <i class="icofont-gift"></i>
							<div class="content">
								<span class="counter">1598</span>
								<p> تعداد کالا ها </p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">332</span>
								<p> مشتریان حقوقی  </p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">32</span>
								<p> سال تجربه </p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
						   <i class="icofont-users-social"></i>
							<div class="content">
								<span class="counter">5305</span>
								<p> تعداد مشتریان </p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		
		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2 class="text-center"> تولیدات با کیفیت  </h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="تولید کیفیت">
							<p>
								ما به تولید محصولات با کیفیت بالا متعهد هستیم. با استفاده از بهترین مواد اولیه و فناوری‌های پیشرفته، تلاش می‌کنیم تا محصولاتی سالم و مطمئن را به مشتریان ارائه دهیم. هدف ما جلب رضایت مشتریان و ارتقاء سطح کیفیت در صنعت است  
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf1.jpg" alt="قند">
								<a href="/sugar/" class="btn">مشاهده جزئیات </a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf2.jpg" alt="برنج">
								<a href="/rice/" class="btn">مشاهده جزئیات </a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf3.jpg" alt="شکر">
								<a href="/sugar/" class="btn">مشاهده جزئیات </a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf4.jpg" alt="روغن">
								<a href="/oil/" class="btn">مشاهده جزئیات </a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf1.jpg" alt="قند">
								<a href="/sugar" class="btn">مشاهده جزئیات </a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf2.jpg" alt="برنج">
								<a href="/rice/" class="btn">مشاهده جزئیات </a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf3.jpg" alt="شکر">
								<a href="/sugar/" class="btn">مشاهده جزئیات </a>
							</div>
							<div class="single-pf">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pf4.jpg" alt="روغن">
								<a href="/oil/" class="btn">مشاهده جزئیات </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->

		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>آیا در مواقع اضطراری به کالا نیاز دارید؟ با ما تماس بگیرید: 02148286</h2>
							<p>ما برای نیازهای اضطراری شما نیز راه‌حل‌هایی داریم. با شماره 02148286 تماس بگیرید و کالای مورد نظر خود را در کوتاه‌ترین زمان ممکن دریافت کنید </p>
							<div class="button">
								<a href="tel://02148286" class="btn"> تماس بگیر</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		
		<!-- Start clients -->
		<div class="clients overlay border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client1.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client2.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client3.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client4.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client5.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client1.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client2.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client3.png" alt="client">
							</div>
							<div class="single-clients">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client4.png" alt="client">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->
    
 <?php   get_footer(); ?>