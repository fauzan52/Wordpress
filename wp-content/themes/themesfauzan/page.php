<?php get_header(); ?>
<div class="allcontent">
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/content', 'adv-top'); ?>
            <div class="col-md-8">
                <?php get_template_part('template-parts/content', 'middle'); ?>
            </div>
            <div class="col-md-4">
                <?php get_template_part('template-parts/content', 'right'); ?>
            </div>
        </div>
    </div>
</div>
<div class="clear text-center">
    <br>
    <?php
    echo fauzan_pagination();
    ?>
    <br>
</div>
<?php get_footer(); ?>

