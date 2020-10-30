<?php

get_header();

$movies = new WP_Query(
    array(
        'post_type' => 'movies',
        'showposts' => -1,
        'tax_query' => array(
            array(
                'taxonomy'  => 'genre',
                'terms'     => 'thriller',
                'field'     => 'name'
            )
        )
    )
);

while ($movies->have_posts()) : $movies->the_post(); ?>
    <li><?php the_title(); ?></li>
<?php endwhile;

get_template_part( 'template-parts/footer-menus-widgets' );

get_footer();