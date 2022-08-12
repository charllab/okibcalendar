<header id="header" class="hero-nav-overlay">
    <nav class="navbar navbar-expand-xl p-0">

        <div class="bg-mobile-nav d-xl-none d-flex justify-content-between px-4">
            <span class="text-white"><b>Menu</b></span>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".mainnav-m" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="container p-0">
            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div>

            <div class="d-xl-flex flex-xl-column align-items-center align-content-center d-none">
                <div id="top-bar" class="d-flex ml-auto mb-2 justify-content-end align-items-center">
                    <div class="social-links mr-3">
                        <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                            <a class="social-link btn btn-link text-white mr-1 p-0" target="_blank" href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('icon_class'); ?> fa-lg">
                                    <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                </i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                    <a href="https://okib.ca/login" class="btn btn-member">
                        Member Login <i class="fa fa-sign-in"></i>
                    </a>
                </div>

                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'mainnav',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>
            </div>
        </div>
    </nav>

    <div class="mainnav-m collapse navbar-collapse d-xl-none">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container',
            'container_id' => 'mainnav',
            'menu_class' => 'navbar-nav mx-0 w-100 py-2',
            'fallback_cb' => '',
            'menu_id' => 'main-menu',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>

        <div class="container mb-4">
            <a href="https://okib.ca/login" class="font-weight-bold text-uppercase pb-4 d-block" style="color:#009ba7;">
                Member Login <i class="fa fa-sign-in"></i>
            </a>
            <div class="social-links pb-2">
                <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                    <a class="social-link btn btn-link px-0 mr-2" target="_blank" href="<?php the_sub_field('url'); ?>">
                        <i class="<?php the_sub_field('icon_class'); ?> fa-2x">
                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                        </i>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

</header>