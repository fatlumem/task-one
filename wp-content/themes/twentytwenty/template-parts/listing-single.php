<article id="post-<?php the_ID(); ?>" <?php post_class( 'left' ); ?>>
<a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php the_title(); ?>
</a>

<p class="content"><?php echo get_the_excerpt(); ?> </p>
<a class="btn-read" href="<?php the_permalink();?>">Read More</a>
</article>
