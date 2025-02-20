<?php

function tropicaltreats_theme_support()
{
    // Add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'tropicaltreats_theme_support');

function tropicaltreats_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'tropicaltreats_menus');

function tropicaltreats_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('tropicaltreats-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all');
    wp_enqueue_style('tropicaltreats-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css", array(), '1.11.3', 'all');
    wp_enqueue_style('tropicaltreats-swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), '11', 'all');
    wp_enqueue_style('tropicaltreats-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'tropicaltreats_register_styles');


function tropicaltreats_register_scripts()
{
    wp_enqueue_script('tropicaltreats-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), '5.3.3', true);
    wp_enqueue_script('tropicaltreats-swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), '5.3.3', false);
    wp_enqueue_script('tropicaltreats-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'tropicaltreats_register_scripts');


function customtheme_register_post_type()
{
    $labels = array(
        'name'               => 'Menu Items',
        'singular_name'      => 'Menu Item',
        'menu_name'          => 'Menu Items',
        'name_admin_bar'     => 'Menu Item',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Menu Item',
        'new_item'           => 'New Menu Item',
        'edit_item'          => 'Edit Menu Item',
        'view_item'          => 'View Menu Item',
        'all_items'          => 'All Menu Items',
        'search_items'       => 'Search Menu Items',
        'not_found'          => 'No Menu Items found',
        'not_found_in_trash' => 'No Menu Items found in Trash'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_rest'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-food', // Changed to a food icon
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'rewrite'            => array(
            'slug' => 'menu-item',
            'with_front' => false
        ),
    );

    register_post_type('menu_item', $args); // Changed from 'book' to 'menu_item'
}
add_action('init', 'customtheme_register_post_type');

// Register custom taxonomy for menu categories
function register_menu_taxonomy()
{
    $labels = array(
        'name'              => 'Menu Categories',
        'singular_name'     => 'Menu Category',
        'search_items'      => 'Search Menu Categories',
        'all_items'         => 'All Menu Categories',
        'parent_item'       => 'Parent Menu Category',
        'parent_item_colon' => 'Parent Menu Category:',
        'edit_item'         => 'Edit Menu Category',
        'update_item'       => 'Update Menu Category',
        'add_new_item'      => 'Add New Menu Category',
        'new_item_name'     => 'New Menu Category Name',
        'menu_name'         => 'Menu Categories'
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug' => 'menu',
            'with_front' => false
        )
    );

    register_taxonomy('menu_category', 'menu_item', $args);
}
add_action('init', 'register_menu_taxonomy');

// Add rewrite rules for Menu Category
function custom_menu_rewrite_rules()
{
    add_rewrite_rule(
        'menu/([^/]+)/?$',
        'index.php?menu_category=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_menu_rewrite_rules');

// Register custom taxonomy for menu tags
function register_menu_tags_taxonomy()
{
    $labels = array(
        'name'              => 'Menu Tags',
        'singular_name'     => 'Menu Tag',
        'search_items'      => 'Search Menu Tags',
        'all_items'         => 'All Menu Tags',
        'parent_item'       => null,
        'parent_item_colon' => null,
        'edit_item'         => 'Edit Menu Tag',
        'update_item'       => 'Update Menu Tag',
        'add_new_item'      => 'Add New Menu Tag',
        'new_item_name'     => 'New Menu Tag Name',
        'menu_name'         => 'Menu Tags',
        'separate_items_with_commas' => 'Separate tags with commas',
        'add_or_remove_items'        => 'Add or remove tags',
        'choose_from_most_used'      => 'Choose from the most used tags',
    );

    $args = array(
        'hierarchical'      => false,  // This makes it behave like tags instead of categories
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug' => 'menu-tag',
            'with_front' => false
        )
    );

    register_taxonomy('menu_tag', 'menu_item', $args);
}
add_action('init', 'register_menu_tags_taxonomy');

// Add rewrite rules for Menu Tags
function custom_menu_tag_rewrite_rules()
{
    add_rewrite_rule(
        'menu-tag/([^/]+)/?$',
        'index.php?menu_tag=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_menu_tag_rewrite_rules');

// Make "/menu" navigation active
function custom_menu_active_state($classes, $item)
{
    // Get current URL path
    $current_url = $_SERVER['REQUEST_URI'];

    // Check if this is the "Pets" menu item
    if ($item->title === 'Menu') {
        // Check if current URL starts with /pets
        if (strpos($current_url, '/menu') === 0) {
            // Add active class
            $classes[] = 'current-menu-item';
            $classes[] = 'current_page_item';
        }
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_active_state', 10, 2);
