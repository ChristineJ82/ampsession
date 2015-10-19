<?php 

/*

  Template Name: Custom

*/

get_header(); ?>


  <?php

    $args = array(
    	'post_type' => 'sample'
    	);

    $the_query = new WP_Query( $args );

  ?>

  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
		  <article>
		    		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		            <?php the_field('details'); ?>

		  <?php endwhile; else : ?>

		            <p>Oops! The page that you are looking for does not exist. :(</p>

		  <?php endif; ?>

		  </article>
        </div>
      </div>
    </div>

<?php get_footer(); ?>