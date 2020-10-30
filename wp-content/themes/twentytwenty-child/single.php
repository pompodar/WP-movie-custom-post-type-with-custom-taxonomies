<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>

</main><!-- #site-content -->
<main id="site-content" role="main">



			<div class="front-page-movies">
			<div class="custom_fields">
			<div class="movie_title">
			    <h1>
					<a href=<?php echo get_home_url() . "/movies/" . get_permalink(); ?>>
						<?php
the_title();
?>
					</a>
				</h1>
			</div>
			<div class="movie_poster">
			    <img src="<?php the_field("poster"); ?>" alt="">
			</div>
			<p>
    			Cost: <?php the_field('cost'); ?>
			</p>
			<p>
			    Date: <?php the_field('date'); ?>
			</p>
			</div>
<div class="movie_genres">
			<p>Genre: </p>
			<ul>
			<?php
$term_list = wp_get_post_terms(get_the_ID() , 'genre');
foreach ($term_list as $term)
{ ?>
				    <li>
					<?php echo $term->name; ?>
					</li>	
					<?php
}
?>
			</ul>
			</div>
			<div class="movie_countries">
			<p>Country: </p>
			<ul>
			<?php
$term_list = wp_get_post_terms(get_the_ID() , 'country');
foreach ($term_list as $term)
{ ?>
				    <li>
					<?php echo $term->name; ?>
					</li>	
					<?php
}
?>
			</ul>
			</div>
			<div class="movie_years">
			<p>Year: </p>
			<ul>
			<?php
$term_list = wp_get_post_terms(get_the_ID() , 'when');
foreach ($term_list as $term)
{ ?>
				    <li>
					<?php echo $term->name; ?>
					</li>	
					<?php
}
?>
			</ul>
			</div>
			<div class="movie_actors">
			<p>Actors: </p>
			<ul>
			<?php
$term_list = wp_get_post_terms(get_the_ID() , 'actor');
foreach ($term_list as $term)
{ ?>
				    <li>
					<?php echo $term->name; ?>
					</li>	
					<?php
}
?>
			</ul>
			</div>
		</div>

</main><!-- #site-content -->

<?php
get_footer();

