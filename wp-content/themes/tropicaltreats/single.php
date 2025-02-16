<?php
get_header()
?>
<!-- Just delete this later -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'article');
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
get_footer()
?>