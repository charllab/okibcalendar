<?php
get_header();
?>
<div class="site-overlay"></div>

<main id="content" role="main">
    <div class="page-heading">
        <div class="inner-content">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>" style="color: white; text-decoration: none;">Calendar</a></h1>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if (have_posts()) : ?>

                <?php /* Start the Loop */ ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</div>
</main>

<?php get_footer(); ?>
