<?php get_header();?>
    <div class="container">
        <section class="main-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; else : ?>
                <p>Записи не найдено.</p>
            <?php endif; ?>
        </section>
    </div>
<?php get_footer();?>