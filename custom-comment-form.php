<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && ISSET($_POST["submit"])){
        if(isset($_POST["comment_nonce"]) && wp_verify_nonce($_POST["comment_nonce"], 'custom_comment_nonce')){
            $comment_data = [
                'comment_post_ID' => get_the_ID(),
                'comment_author' => sanitize_text_field($_POST["first-name"]). " ". sanitize_text_field($_POST["last-name"]),
                'comment_first_name' => sanitize_text_field($_POST["last-name"]),
                'comment_content' => sanitize_text_field($_POST["message"])
            ];

            wp_insert_comment($comment_data);
        }
    }
?>

<div class="comments-form">
        <h2> 1 نظر بدهید </h2>
        <!-- Contact Form -->
        <form class="form" method="post" action="<?php echo esc_url(get_comments_link())?>">
            <?php 
                comment_id_fields();
                wp_nonce_field('customer_comment_nonce', 'comment_nonce');
            ?>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" placeholder="ایمیل آدرس" required="required">
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input type="text" name="last-name" placeholder="فامیلی" required="required">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" name="first-name" placeholder="اسم" required="required">
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="form-group message">
                        <i class="fa fa-pencil"></i>
                        <textarea name="message" rows="7" placeholder="اینجا بنویسید" ></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group button">	
                        <button type="submit" class="btn primary"> <i class="fa fa-send"></i> ارسال نظر </button>
                    </div>
                </div>
            </div>
        </form>
        <!--/ End Contact Form -->
</div>