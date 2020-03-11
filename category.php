<?php get_header(); ?>

<h1><?php single_cat_title(); ?> Zelda Fan Projects</h1>

<?php 

$args = array(
    'cat' => get_query_var('cat'),
    'orderby' => 'title',
    'order'   => 'ASC',
);
$query = new WP_Query( $args );

?>

<ol class="website-list">

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<li>
    <?php the_post_thumbnail('full'); ?>
    <a href="<?php echo get_post_meta($post->ID, 'website-url', true); ?>"><h2><?php the_title(); ?></h2></a>
    <p><?php the_excerpt(); ?></p>
</li>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</ol>

<?php get_footer(); ?>
