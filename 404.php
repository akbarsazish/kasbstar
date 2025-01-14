<?php
/*
Template Name: 404 Template
*/

get_header();  ?>
		
	<!-- Error Page -->
	<section class="error-page section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-12">
					<!-- Error Inner -->
					<div class="error-inner">
						<h1>404<span>اوپس! به نظر می‌رسد که این صفحه وجود ندارد</span></h1>
						<div class="my-4 py-4">
							<a class="text-primary" href="<?php echo home_url('/'); ?>">بازگشت به صفحه اصلی</a>
						</div>
						
						<form role="search" method="get" id="searchform" class="searchform search-form" action="<?php echo home_url('/'); ?>">
							<div>
								<label class="screen-reader-text" for="s"> جستجو :</label>
								<input class="btn"  type="submit" id="searchsubmit" value="جستجو" />
								<input type="text" style="text-align:right" dri="rtl" value="" name="s" id="s" />
							</div>
						</form>
					</div>
					<!--/ End Error Inner -->
				</div>
			</div>
		</div>
	</section>	
	<!--/ End Error Page -->

<?php get_footer();  ?>