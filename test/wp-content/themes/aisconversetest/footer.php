<footer>
    <div class="container">
        <?php if($logo = get_theme_mod('logo-img')):?>
            <div class="ft-logo">
                <img src="<?php echo $logo?>" alt="<?php bloginfo('name');?>">
            </div><!--ft-logo end-->
        <?php endif?>
        <div class="clearfix"></div>
    </div>
</footer><!--footer end-->


</div><!--theme-layout end-->

<?php wp_footer(); ?>
</body>
</html>