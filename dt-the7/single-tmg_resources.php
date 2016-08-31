<?php get_header();
if( have_posts() ):
  while( have_posts() ): the_post();
?>

<section class="container">
  <div class="row">
    <div class="col-9">
      <h1>
        <?php the_title();?>
      </h1>
      <span class="resource-post-date">
        <?php the_date('F d, Y'); ?>
      </span>
      <span class="resource-category">
        <?php
        $terms = get_the_terms( get_the_ID(), 'resource_category' );

        if ( $terms && ! is_wp_error( $terms ) ) :

            foreach ( $terms as $term ) {
              echo '<a href="'. $term->slug .'">';
              echo $term->name;
              echo '</a>';
            }

            ?>

        <?php endif; ?>
      </span>
    </div>
  </div>
</section>

<?php
  endwhile;
endif;
get_footer(); ?>
