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

 <?php while ( $query->have_posts() ) : $query->the_post() ;

 get_template_part('template-parts/listing-single');

  endwhile; ?>
</section>


<?php }
?>

</main>

</div>
<?php get_footer(); ?>
