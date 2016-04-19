<?php 
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('Aerial Widget'),
        'id' => 'aerial-widget',
        'description' => 'Widget for our Aerials on Services page', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
     register_sidebar( array(
        'name' => ('Photography Widget'),
        'id' => 'photo-widget',
        'description' => 'Widget for Photography on Services page', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
      register_sidebar( array(
        'name' => ('Promotions Widget'),
        'id' => 'promo-widget',
        'description' => 'Widget for Promotions on Services page', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        )); 
      register_sidebar( array(
        'name' => ('Contact Widget'),
        'id' => 'contact-widget',
        'description' => 'Widget for the contact page', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
      register_sidebar( array(
        'name' => ('Blog Page Sidebar'),
        'id' => 'blog-widget',
        'description' => 'Widget for blog page sidebar', 
        'before_widget' => '<div class="widget-sidebar widget-blogpage">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' ); 

/*--- web dev custom taxonomy--*/

function custom_taxonomy_wie_init() {
    //custom taxonmy
    register_taxonomy(
        'webdevelopment',
        'post',
        array(
            'hierarchical' => true,
            'label' => 'Web Development Types',
            'query_var' => true
            )
        );
}
add_action( 'init', 'custom_taxonomy_wie_init' );


/*-------------- Custom Posts - Web Resources --------------- */

    function custom_web_resources() {
        $labels = array(
        /*--- Begin Labels Options ---*/

            'name'               => _x( 'Links', 'post type general name' ),
            'singular_name'      => _x( 'Link', 'post type singular name' ),
            'add_new'            => _x( 'Add New', weblink ),
            'add_new_item'       => __( 'Add Link' ),
            'edit_item'          => __( 'Edit Links' ),
            'new_item'           => __( 'New Link' ),
            'all_items'          => __( 'All Links' ),
            'view_item'          => __( 'View Links' ),
            'search_items'       => __( 'Search Links' ),
            'not_found'          => __( 'No links found' ),
            'not_found_in_trash' => __( 'No links found in the Trash' ), 
            'parent_item_colon'  => '',
            'menu_name'          => 'Web Links'

        );
        $args = array(
        /*--- Begin Arguments Options ---*/

        'labels' => $labels,
        'description'   => 'Place to put useful links to other web resources',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,

        );
        register_post_type( 'resources', $args ); 
        }
        add_action( 'init', 'custom_web_resources' );

/*------- Enqueue Files------*/
wp_deregister_script('jquery');

wp_enqueue_script(
    'jquery', 
    'http://code.jquery.com/jquery-latest.min.js',
    '',
    '',
    true
);

function enqueue_unslider() {
    wp_enqueue_script( //function to enqueue script
        'unslider', //name of our script (id)
        get_template_directory_uri() . '/js/unslider.js', //file loc
        array('jquery'), //dependencies
        '', //version - left blank
        true //load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_unslider');

/*------- Slider Tutorial------*/
function slider_tutorial() {
$labels = array(
    'name'               => _x( 'Slides', 'post type general name' ),
    'singular_name'      => _x( 'Slide', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'slides' ),
    'add_new_item'       => __( 'Add Slide' ),
    'edit_item'          => __( 'Edit Slides' ),
    'new_item'           => __( 'New Slide' ),
    'all_items'          => __( 'All Slides' ),
    'view_item'          => __( 'View Slides' ),
    'search_items'       => __( 'Search Slides' ),
    'not_found'          => __( 'No slides found' ),
    'not_found_in_trash' => __( 'No slides found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Slider'

);
$args = array(
/*--- Begin Arguments Options ---*/

'labels' => $labels,
'description'   => 'Slides for our Unslider integration',
'public'        => true,
'menu_position' => 6,
'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt'),
'has_archive'   => true,

);
register_post_type( 'slider', $args ); 
}
add_action( 'init', 'slider_tutorial' );

?>