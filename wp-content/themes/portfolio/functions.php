<?php
 // jQueryファイルの導入
 add_theme_support('post-thumbnails');

 function jquery(){
     wp_enqueue_script(
         'jquery',
         get_template_directory_uri() . '/js/jquery.js',
         array(),
         false,
         true
     );
 }
 add_action('wp_enqueue_scripts','jquery');

 ?>