<?php
get_header()
?>
<!-- Just delete this later -->
<div class="container">
    <div class="row">
        <div class="col-12">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
    ?>
        </div>
    </div>
</div>
<?php
get_footer()
?>