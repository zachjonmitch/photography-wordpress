<?php get_header(); ?>

    <section class="<?php the_title(); ?>">
        <div class="container">

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                <h2 class="text-center">
                    <?php the_title(); ?>
                </h2>
                <p class="text-center"><?php the_content(); ?></p>

                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('404 Page'); ?></p>
            <?php endif; ?>

        </div>
    </section>

<?php get_footer(); ?>