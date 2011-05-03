<?php if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li class="bar">',
        'after_widget' => '</li>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )); 
?>