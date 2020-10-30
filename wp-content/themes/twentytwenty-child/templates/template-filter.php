<?php
/**
 * Template Name: Filter Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<p class="taxonomies">Select by category</p>
<div class="taxonomy_list">
<?php

$genres = get_terms( 'genre' );

if( $genres && ! is_wp_error($genres) ){
	echo "<ul> Genre: ";
	foreach( $genres as $genre ){
		echo "<li><a href=" . get_home_url() . "/genre/" . $genre->slug . ">". $genre->name ."</a></li>";

	}
	echo "</ul>";
}

$countries = get_terms( 'country' );

if( $countries && ! is_wp_error($countries) ){
	echo "<ul> Country: ";
	foreach( $countries as $country ){
		echo "<li><a href=" . get_home_url() . "/country/" . $country->slug . ">". $country->name ."</a></li>";

	}
	echo "</ul>";
}
?>
</div>
<?php

get_template_part( 'template-parts/footer-menus-widgets' );

get_footer();
