<?php get_header(); ?>

<div id="primary">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'single');
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>

    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>