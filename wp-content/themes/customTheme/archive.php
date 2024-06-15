<?php get_header(); ?>

<div id="primary">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_author()) {
                        printf(__('Author: %s', 'textdomain'), '<span class="vcard">' . get_the_author() . '</span>');
                    } elseif (is_day()) {
                        printf(__('Day: %s', 'textdomain'), '<span>' . get_the_date() . '</span>');
                    } elseif (is_month()) {
                        printf(__('Month: %s', 'textdomain'), '<span>' . get_the_date('F Y') . '</span>');
                    } elseif (is_year()) {
                        printf(__('Year: %s', 'textdomain'), '<span>' . get_the_date('Y') . '</span>');
                    } else {
                        _e('Archives', 'textdomain');
                    }
                    ?>
                </h1>
            </header>

            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;

            the_posts_pagination();

        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>