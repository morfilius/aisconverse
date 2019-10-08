<div class="blog-post">
    <div class="post-img">
        <?php the_post_thumbnail('post-thumb-min');?>
    </div><!--post-img end-->
    <div class="post-info">
        <span class="posted-date"><?php the_time( 'j, F Y' ); ?></span>
        <p><?php the_excerpt();?></p>
    </div><!--post-info end-->
</div><!--blog-post end-->