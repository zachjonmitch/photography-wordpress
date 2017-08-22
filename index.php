<?php get_header(); ?>

    <section class="posts">
        <div class="container">
            <div class="row">

                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>