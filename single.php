<?php get_header(); ?>
<div class="container">
    <!-- Main content goes here -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="text-center" ><?php the_title(); ?></h2>
							<ul class="bread-list">
								<li class="active"><?php the_title(); ?> </li>
                                <li><i class="icofont-simple-left"></i></li>
								<li><a href="<?php echo home_url('/'); ?>">خانه</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<?php the_post_thumbnail('single-blog');?>
									</div>
									<!-- News Title -->
									<h1 class="news-title"> <?php the_title(); ?> </h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="date"> <i class="fa fa-clock-o"></i> 
											     <?php
													$post_date = get_the_date('U'); 
													echo format_jalali_date($post_date);
											     ?>
											</span>
										</div>
										<div class="meta-right">
											<span class="author"><a href="#"> <?php the_author();?></a></span>
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
                                      <p> <?php the_content(); ?> </p> 
                                    </div>

									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="#"><i class="icofont-facebook"></i><span></span></a></li>
											<li class="twitter"><a href="#"><i class="icofont-instagram"></i><span></span></a></li>
											<li class="google-plus"><a href="#"><i class="icofont-twitter"></i></a></li>
											<li class="linkedin"><a href="#"><i class="icofont-linkedin"></i></a></li>
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
									<input type="text" value="" name="s" id="s" style="text-align:right" dri="rtl" placeholder="اینجا جستجو نمایید ...">
									<a class="button " href="#"><i class="fa fa-search"></i></a>
								</form>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title"> دسته بندی وبلاگ ها </h3>
								<ul class="categor-list">
									<?php 
										foreach(get_the_category() as $category){ ?>
										  <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name ?> </a></li>
									<?php } ?>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title"> پست های آخر </h3>
								<?php 
								$args = [
									'post_type' => 'post',
									'posts_per_page' => 35,
									'orderby' => 'date',
									'order' => 'DESC'
								];
				
								$query = new WP_Query($args);
								if ($query->have_posts()) : 
									while ($query->have_posts()) : $query->the_post(); 
								?>	
								
								<!-- Single Post -->
								<div class="single-post">
									<div class="content">
										<h5><a href="<?php echo the_permalink();?>"> <?php echo the_title();?> </a></h5>
										<ul class="comment">
											<li> 
												<?php
													$post_date = get_the_date('U'); 
													echo format_jalali_date($post_date);
											     ?>
												 <i class="fa fa-calendar" aria-hidden="true"></i>
											</li>
										</ul>
									</div>
								</div>
								<?php
								 endwhile;
								endif;
								?>
								<!-- End Single Post -->
							
							</div>
							<!--/ End Single Widget -->
						
							<!-- Single Widget -->
							<div class="single-widget side-tags">
								<h3 class="title"> تگ ها </h3>
								<ul class="tag">
								   <?php 
										foreach(get_the_tags() as $tag){ ?>
										  <li>
											<a href="<?php echo get_tag_link($tag->term_ID); ?>">
											  <?php echo $tag->name ?>
										    </a>
										</li>
										 
									<?php } ?>
								</ul>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
		
     <?php endwhile; else : ?>
         <p>No posts found.</p>
     <?php endif; ?>
</div>

<?php get_footer(); ?>
