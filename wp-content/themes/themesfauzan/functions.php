<?php
//load script
function load_file()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_file');

function get_excerpt_length()
{
    return 5;
}

function return_excerpt_text()
{
    return '';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');

function init_setup()
{
    register_nav_menus(array(
        'main_menu' => 'Menu Utama',
        'footer_menu' => 'Menu Footer'
    ));
// Add featured image
    add_theme_support('post-thumbnails');

    add_image_size('small_thumbnail', '804', '453', 'true');
    add_image_size('big_thumbnail', '1800', '400');

// Add Post Format Wordpress
    add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'init_setup');

// Redux Framework
require_once(get_template_directory() . "/library/redux-core/framework.php");
require_once(get_template_directory() . "/library/sample/config.php");

//REDUX OPTIONS
if (!function_exists('fauzanoptions')) {
    function fauzanoptions($opt_name = null)
    {
        global $fauzanclone;
        if (!empty($opt_name)) {
            return !empty($fauzanclone[$opt_name]) ? $fauzanclone[$opt_name] : null;
        } else {
            return !empty($fauzanclone[$opt_name]) ? $fauzanclone[$opt_name] : null;
        }
    }

    require_once get_template_directory() . '/includes/helpers/comment.php';
}

//PAGINATION
function fauzan_pagination()
{
    $allowed_tags = [
        'span' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'href' => [],
        ]
    ];

    $args = [
        'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
        'after_page_number' => '</span>',
    ];

    printf('<nav class="fauzan_pagination clearfix">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}

//CUSTOM POST TYPE
function my_first_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Mobil',
            'singular_name' => 'Mobil',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-insert',
        'supports' => array('title', 'editor', 'thumbnail'),
//      'rewrite' => array('slug' => 'mobil'),
    );

    register_post_type('mobil', $args);
}

add_action('init', 'my_first_post_type');


function my_first_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Category',
            'singular_name' => 'Category',
        ),
        'public' => true,
        'hierarchical' => true,

    );

    register_taxonomy('category', array('mobil'), $args);
}

add_action('init', 'my_first_taxonomy');

if (!function_exists('fauzan_layout')) {
    function fauzan_layout($type)
    {
        if (!empty($type)) {
            if ($type === "search"):
                get_template_part('template-parts/views/content', $type);
            elseif ($type === "portofolio"):
                get_template_part('template-parts/views/archive/archive', $type);
            else:
                get_template_part('template-parts/views/layout', $type);
            endif;
        } else {
            get_template_part('template-parts/views/layout', 'default');
        }
    }

    add_action('fauzan_layout', 'fauzan_layout', 10, 1);
}
?>