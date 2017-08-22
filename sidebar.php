<?php if(is_active_sidebar('sidebar') && !is_front_page()) : ?>
    <aside id="sidebar" class="col-sm-3 offset-sm-1">
        <?php dynamic_sidebar('sidebar'); ?>
    </aside>
<?php endif; ?>