<?php get_header(); ?>

<h1>Active Zelda Fan Projects</h1>
            
<?php $catquery = new WP_Query( 'cat=7&orderby=title&order=ASC' ); ?>

<ol class="website-list">

<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
 
<li>
    <?php the_post_thumbnail('full'); ?>
    <a href="<?php echo get_post_meta($post->ID, 'website-url', true); ?>"><h2><?php the_title(); ?></h2></a>
    <p><?php the_excerpt(); ?></p>
</li>

<?php 
    endwhile;
    wp_reset_postdata();
?>

</ol>


<h1>Inactive Zelda Fan Projects</h1>

<?php $catquery = new WP_Query( 'cat=8&orderby=title&order=ASC' ); ?>

<ol class="website-list">

<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
 
<li>
    <?php the_post_thumbnail('full'); ?>
    <a href="<?php echo get_post_meta($post->ID, 'website-url', true); ?>"><h2><?php the_title(); ?></h2></a>
    <p><?php the_excerpt(); ?></p>
</li>

<?php 
    endwhile;
    wp_reset_postdata();
?>

</ol>

<?php get_footer(); ?>


