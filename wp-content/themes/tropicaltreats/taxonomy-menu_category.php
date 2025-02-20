<?php get_header(); ?>
<?php
$current_category = get_queried_object();
?>
<div class="menu-hero container-fluid d-flex justify-content-center align-items-center position-relative">
    <div class="menu-header-details">
        <p class="menu-category"><?php echo $current_category->name; ?></p>
        <p class="menu-breadcrumbs"><a href="">Tropical Treats</a> <span>></span> <a href="">Products</a>
            <span>></span> <?php echo $current_category->name; ?>
        </p>
    </div>
    <?php $image = get_field('taxonomy_cover', $current_category); ?>
    <img class="menu-bg-img" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($current_category->name); ?>">
    <div class="image-overlay"></div>
</div>

<div class="container menu-container">
    <div class="row">
        <div class="col-12 col-lg-4 px-3">
            <!-- FILTER CATEGORY FOR SMALL SCREEN -->
            <div class="d-lg-none">
                <div class="menu-filter" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuCategory"
                    aria-controls="offcanvasMenuCategory">
                    <i class="bi bi-filter"></i>
                    Filter
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenuCategory"
                    aria-labelledby="offcanvasMenuCategoryLabel">
                    <div class="offcanvas-header offcanvas-header-menu">
                        <h5 class="offcanvas-title" id="offcanvasMenuCategoryLabel">Categories</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body menu-category-list">
                        <div>
                            <ul class="menu-accordion-list">
                                <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'menu_category',
                                    'hide_empty' => false,
                                ));
                                foreach ($terms as $term) {
                                    $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                    $term_link = get_term_link($term);
                                    $active_class = ($current_url == $term_link) ? 'active' : '';
                                    echo '<li><a href="' . $term_link . '" class="' . $active_class . '">' . $term->name . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //FILTER CATEGORY FOR SMALL SCREEN -->
            <!-- FILTER CATEGORY FOR LARGE SCREEN -->
            <div class="d-none d-lg-block menu-filter-lg">
                <div class="accordion" id="menuCategoryAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button accordion-text" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Categories
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#menuCategoryAccordion">
                            <div class="accordion-body">
                                <ul class="menu-accordion-list">
                                    <?php
                                    $terms = get_terms(array(
                                        'taxonomy' => 'menu_category',
                                        'hide_empty' => false,
                                    ));
                                    // Add active class based on active category/taxonomy
                                    foreach ($terms as $term) {
                                        $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        $term_link = get_term_link($term);
                                        $active_class = ($current_url == $term_link) ? 'active' : '';
                                        echo '<li><a href="' . $term_link . '" class="' . $active_class . '">' . $term->name . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //FILTER CATEGORY FOR LARGE SCREEN -->
        </div>
        <div class="col-12 col-lg-8 p-3">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="menu__card">
                        <div class="menu__img-div">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                        <div class="menu__desc-div">
                            <h3 class="menu__card-title"><?php the_title(); ?></h3>
                            <?php if (get_field('price')): ?>
                                <p class="menu__price"><?php echo esc_html(get_field('price')); ?></p>
                            <?php endif; ?>
                            <?php if (get_field('ingredients')): ?>
                                <p class="menu__ingredient"><?php echo esc_html(get_field('ingredients')); ?>
                                </p>
                            <?php endif; ?>
                            <p>
                            <p><?php the_excerpt(); ?></p>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <p>No menu items found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>