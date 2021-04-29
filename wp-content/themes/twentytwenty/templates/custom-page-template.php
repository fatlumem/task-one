<?php /* Template Name: CustomPageTemplate */ ?>
<?php get_header(); ?>

<div id=”primary” class=”content-area”>
<main id=”main” class=”site-main” role=”main”>
<?php
$args = array(
 'post_type' => 'post',
 'posts_per_page' => '12',
 'post__not_in' => array( $post->ID ),
 'order' => 'DESC',
 'category_name' => 'technology'
);
// the query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) { ?>

 <section class="recent-posts clear">

 <?php while ( $query->have_posts() ) : $query->the_post() ; ?>
 
 <article id="post-<?php the_ID(); ?>" <?php post_class( 'left' ); ?>>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
 <?php the_title(); ?>
 </a>

<p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink();?>">Read More</a></p>

 </article>

 <?php endwhile; ?>
 
 </section>
 
<?php }
/* Restore original Post Data */
wp_reset_postdata();
?>

</main>

</div>
<?php get_footer(); ?>