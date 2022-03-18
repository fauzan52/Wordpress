<?php
global $fauzanredux;
get_header('');
?>
<div class="allcontent">
    <div class="container">
        <?php
        if (is_home()): ?>
        <div class="row">
            <div class="col-md-12">
                <?php
                get_template_part('template-parts/content', 'adv-top');
                get_template_part('template-parts/content', 'top-primary');
                ?>
            </div>
            <div class="col-md-8">
                <?php
                get_template_part('template-parts/content', 'top-secondary');
                get_template_part('template-parts/content', 'adv-middle');
                get_template_part('template-parts/content', 'middle');
                ?>
            </div>
            <div class="col-md-4">
                <?php
                get_template_part('template-parts/content', 'adv-right');
                get_template_part('template-parts/content', 'right');
                ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
