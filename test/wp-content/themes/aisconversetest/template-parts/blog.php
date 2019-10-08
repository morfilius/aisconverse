<?php
    $news = get_news();
?>

<?php if( !empty($news) ) :?>
    <div class="blog-section">
        <h3>Our News</h3>
        <div class="blog-posts">
            <?php foreach( $news as $post ){
                setup_postdata($post);
                get_template_part('loop/blog');
            }
            wp_reset_postdata();?>
        </div><!--blog-posts end-->
    </div><!--blog-section end-->
<?php endif;?>
