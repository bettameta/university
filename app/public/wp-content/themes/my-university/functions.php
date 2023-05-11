<!-- not a template file  -->
<?php 

   function university_files() {
      wp_enqueue_style('university_main_styles', get_stylesheet_uri());
   }
   // hook to get wp to add function to pull in stylesheet
   add_action('wp_enqueue_scripts', 'university_files');

?>