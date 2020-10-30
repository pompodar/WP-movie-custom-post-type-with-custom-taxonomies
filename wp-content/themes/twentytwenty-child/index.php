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

$args = array(
	'post_type' => 'movies',
	'post_status' => 'publish',
	'posts_per_page' => - 1,
	'orderby' => 'title',
	'order' => 'ASC',
);

$loop = new WP_Query($args);

if ($loop->have_posts())
{

	$i = 0;

	while ($loop->have_posts())
	{
		$i++;
		if ($i > 1)
		{
			echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
		}
		$loop->the_post();
?>
	<div class="front-page-movies">
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
<?php
	}

	wp_reset_postdata();

}

?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			//get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->


<?php get_footer(); ?>
