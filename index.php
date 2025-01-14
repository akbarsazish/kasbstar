<?php get_header(); ?>
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" > بلاگها  </h2>
                    <ul class="bread-list">
                        <li class="active">  بلاگها </li>
                        <li><i class="icofont-simple-left"></i></li>
                        <li><a href="<?php echo esc_url('/') ?>">خانه</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Main content goes here -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div class="row p-4"> 
        <div class="col-lg-8">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="text"><?php the_excerpt(); ?></p>
        </div>
        <?php if(has_post_thumbnail()) ?>
            <div class="col-lg-4">
                <a href="<?php the_permalink() ?>">
                    <?php 
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'blog-cover');
                    ?>
                    <img src="<?php echo esc_url($thumbnail_url[0]);?>" alt="<?php the_title_attribute(); ?>" class="rounded">
                </a>
            </div>
     </div>
     <?php endwhile; else : ?>
         <p>No posts found.</p>
     <?php endif; ?>
    
    <div class="row mx-aut p-4 m-4">
        <?php
            the_posts_pagination([
                'prev_text' => __("Previous Page"),
                'next_text' => __("Next Page"),
                'befor_page_number' => '<span class="meta-nave screen-reader-text">'.__("Page").'</span>',
            ]);
        ?>
    </div>
</div>

<?php get_footer(); ?>
