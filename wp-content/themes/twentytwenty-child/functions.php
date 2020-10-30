<?php

function recent_movies_function() {
   query_posts(array('post_type' => 'movies','orderby' => 'date', 'order' => 'DESC' , 'showposts' => 4));
   if (have_posts()) : ?>
   <div class="recent_movies">
   <?php
      while (have_posts()) : the_post();
         $return_string .= '<a href="'.get_permalink().'">'.get_the_title().'</a>';
      endwhile;
   endif;
   wp_reset_query();
   return $return_string;
   ?>
   </div>
   <?php
}

function register_shortcodes(){
    add_shortcode('recent-movies', 'recent_movies_function');
 }

 add_action( 'init', 'register_shortcodes');