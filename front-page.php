<?php get_header(); ?>

<header class="showcase h-100">
    <div class="overlay"></div>
    <div class="container h-100 d-flex justify-content-center text-center align-items-center">
        <div class="content">
            <h1><?php echo get_theme_mod('showcase_heading', 'Photography Portfolio'); ?></h1>
            <p><?php echo get_theme_mod('showcase_text', 'Just another WordPress site'); ?></p>
        </div>
    </div>
</header>

<nav class="masthead navbar navbar-toggleable-md navbar-light p-0 w-100">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="camera d-flex justify-content-center align-items-center h-100">
    <span class="fa fa-camera-retro icon"></span>
    </div>
    <a class="navbar-brand text-uppercase mobile-brand" href="#">Menu</a>

    <div class="collapse navbar-collapse h-100" id="navbarsExampleDefault">
        <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'li',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>
        <li class="nav-item arrow d-flex justify-content-center align-items-center">
            <span class="fa fa-arrow-down icon"></span>
        </li>
    </div>
</nav>

<section class="portfolio">
    <div class="container">
        <div class="content pb-4 pt-4">
            <h2 class="text-uppercase text-center pb-3">Portfolio</h2>
            <hr>
            <ul>
            <li><a href="#">Abstract</a></li>
            <li><a href="#">Exposure</a></li>
            <li><a href="#">Portrait</a></li>
            <li><a href="#">Landscape</a></li>
            <br>
            <li><a href="#">Minimal</a></li>
            <li><a href="#">Aerial</a></li>
            <li><a href="#">Urban</a></li>
            <li><a href="#">Architecture</a></li>
            </ul>
        </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container justify-content-center">
            <div class="row gallery-posts">

                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php if(has_post_format('image')) :?>
                            <?php get_template_part('content', get_post_format()); ?>
                        <?php endif;?>
                    <?php endwhile; ?>
                <?php else : ?>
                
                <?php endif; ?>
            
            </div>
            <div class="container text-center">
                <button class="load-more btn btn-lg btn-default" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>">Load More</button>
            </div>
        </div>
    </section>

    <section class='lightbox'>
        <div class='backdrop'></div>
        <img src=''>
    </section>

<?php get_footer(); ?>