<?php get_header(); ?>

<div class="container">
    <?php
    $current_category = get_queried_object();
    ?>
    
    <h1><?php echo $current_category->name; ?></h1>
    
    <?php if (have_posts()) : ?>
        <div class="menu-items-grid">
            <?php while (have_posts()) : the_post(); ?>
                <div class="menu-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                    
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No menu items found in this category.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>