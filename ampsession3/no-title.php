<?php
/*

  Template Name: No Title

*/
  
get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
      <article>
                 <?php the_content(); ?>

      <?php endwhile; else : ?>

                <p>Oops! The page that you are looking for does not exist. :(</p>

      <?php endif; ?>

      </article>
        </div>
      </div>
    </div>

<?php get_footer(); ?>