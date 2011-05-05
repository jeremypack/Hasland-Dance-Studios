<?php if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li class="bar">',
        'after_widget' => '</li>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )); 


// Begin Homepage Setup

add_action('init', 'homepage_register');  
  
function homepage_register() {  
    $args = array(  
        'label' => __('Homepage'),  
        'singular_label' => __('Homepage'),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'page',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title', 'editor', 'thumbnail')  
       );  
  
    register_post_type( 'homepage' , $args );  
}


// when the admin panel is initialized call the function
    add_action("admin_init", "admin_init");  
    add_action('save_post', 'save_picture');  
  
// to add an area called “Slide Options” to any posts of type ‘homepage’, and to use the function meta_options() to print the form fields
    function admin_init(){  
        add_meta_box("homeInfo-meta", "Slide Options", "meta_options", "homepage", "side", "low");  
    }  

//gets any preexisting custom values and prints the form field  
    function meta_options(){  
        global $post;  
        $custom = get_post_custom($post->ID);  
        $slide1 = $custom["slide1"][0];  
?>  
    <label>Slide 1:</label><input name="slide1" value="<?php echo $slide1; ?>" />  
<?php  
    }  
  
function save_picture(){  
    global $post;  
    update_post_meta($post->ID, "slide1", $_POST["slide1"]);  
}  

//It’s essentially saying that we want to create a new category type called ‘catalog’ which we will associate with the ‘product’ type. The last argument is an array of information similar to what we saw the register_post_type() function.
register_taxonomy("catalog", array("homepage"), array("hierarchical" => true, "label" => "Catalogs", "singular_label" => "Catalog", "rewrite" => true));  


// a custom set of columns for our Product type

// tell WordPress that we want custom columns for the ‘homepage’ type
add_filter("manage_edit-homepage_columns", "home_edit_columns");  
add_action("manage_posts_custom_column",  "home_custom_columns");  
 
//we have a key-value array where the keys are used to reference certain post information 
function home_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Homepage Title",  
            "description" => "Description",  
            "slide1" => "Slide 1",  
            "catalog" => "Catalog",  
        );  
  
        return $columns;  
}  

//we define in the above keys here, apart from cb and title that are part of a set of default keys that WordPress already has associations for
function home_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "description":  
                the_excerpt();  
                break;  
            case "slide1":  
                $custom = get_post_custom();  
                echo $custom["slide1"][0];  
                break;  
            case "catalog":  
                echo get_the_term_list($post->ID, 'catalog', '', ', ','');  
                break;  
        }  
}  

// End Homepage Setup

