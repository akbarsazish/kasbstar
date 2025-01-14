<?php
/*
Template Name: About Template
*/

get_header();  ?>
    <!-- Breadcrumbs -->
	<div class="container">
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="text-center" > درباره ما </h2>
							<ul class="bread-list">
								<li class="active"> درباره ما  </li>
                                <li><i class="icofont-simple-left"></i></li>
								<li><a href="<?php echo esc_url('/') ?>">خانه</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        <!-- Start Why choose -->
		<section class="why-choose section" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
                            <h3 class="text-center"> ما کی هستیم؟ </h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="about us">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12 pt-4">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<video style="width:100%; height:auto" controls>
								  <source src="<?php echo get_template_directory_uri(); ?>/assets/about.mp4" type="video/mp4">
								  <source src="<?php echo get_template_directory_uri(); ?>/assets/about.ogg" type="video/ogg">
								   Your browser does not support the video tag.
								</video>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left" style="text-align:right">
							
							<?php
								// Define the category slug you want to display
								$category_slug = 'about';

								// Query posts from the specified category
								$args = array(
									'category_name' => $category_slug,
									'posts_per_page' => 10, // Change this number as needed
								);

								$query = new WP_Query($args);

								if ($query->have_posts()) {
									while ($query->have_posts()) {
										$query->the_post();
										echo '<p>' . get_the_content() . '</p>';
									}
									wp_reset_postdata();
								} else {
									echo 'No posts found in this category.';
								}
								?>

						</div>
						<!-- End Choose Left -->
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--/ End Why choose -->

<?php get_footer();  ?>
