<?php 

   function university_files() {
      wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
      wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
      wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
      wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
      wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
   }
   // hook to get wp to add function to pull in stylesheet
   add_action('wp_enqueue_scripts', 'university_files');
   // adds wp support to specifically show the pages title tags in tabs
   function university_features() {
   // REGISTERING NAV MENUS SAMPLES
      //register_nav_menu('headerMenuLocation', "Header Menu Location");
      //register_nav_menu('footerLocationOne', "Footer Location One");
      //register_nav_menu('footerLocationTwo', "Footer Location Two");
      add_theme_support('title-tag');
   }
   add_action('after_setup_theme', 'university_features')
?>