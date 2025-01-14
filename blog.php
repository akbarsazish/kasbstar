<?php
/*
Template Name: Blog Template
*/

get_header();  ?>
    <!-- Breadcrumbs -->
	<div class="container">
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="text-center" > بلاگ </h2>
							<ul class="bread-list">
								<li class="active"> بلاگ </li>
                                <li><i class="icofont-simple-left"></i></li>
								<li><a href="<?php echo esc_url('/') ?>">خانه</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2 class="text-center"> با جدیدترین ها با ما همراه باشید</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
							<p> ما هر چند روز اطلاعات جدیدی درباره تولیدات و فعالیت‌های خود منتشر می‌کنیم تا مشتریان با آخرین اخبار و خدمات ما آشنا شوند </p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
					// Custom query to get the last 3 posts
					$args = array(
						'posts_per_page' => 6, 
						'post_status' => 'publish', 
					);

					$latest_posts = new WP_Query($args);

					if ($latest_posts->have_posts()) : 
						while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
							<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Blog -->
								<div class="single-news">
									<div class="news-head">
										<a href="<?php the_permalink()?>">
											<?php if (has_post_thumbnail()) : ?>
												<?php 
													$thumbnail_id = get_post_thumbnail_id();
													$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'blog-cover');
												?>
												<img class="p-4" src="<?php echo esc_url($thumbnail_url[0]); ?>" alt="<?php the_title_attribute(); ?>" class="rounded">
											<?php else : ?>
												<img class="p-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2.jpg" alt="Default Image" class="rounded"> 
											<?php endif; ?>
										</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<div class="date"><?php echo get_the_date('d M, Y'); ?></div>
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<p class="text"><?php the_excerpt(); ?></p>
										</div>
									</div>
								</div>
								<!-- End Single Blog -->
							</div>
						<?php endwhile; 
						wp_reset_postdata(); 
					else : ?>
						<p><?php _e('No posts found.', 'text-domain'); ?></p> 
					<?php endif; ?>
				</div>

			</div>
		</section>
	</div>
	<!-- End Blog Area -->

<?php get_footer();  ?>
