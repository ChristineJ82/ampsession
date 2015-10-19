<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <!--
    <section class="white">
    <div class="container">
		    <h1><?php the_title(); ?></h1>
		    <?php the_content(); ?>
    </div>
    </section>
    -->

    <section class="white">
      <div class="container">
        <?php the_field('content-s1'); ?>
      </div>
    </section>

    <section class="gray">
      <div class="container">
        <?php the_field('content-s2'); ?>


      </div>
    </section>

    <section class="white">
      <div class="container">
        <?php the_field('content-s3'); ?>
      </div>
    </section>

		  <?php endwhile; else : ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
      <article>
		            <p>Oops! The page that you are looking for does not exist. :(</p>
      </article>
      </div>
      </div>
    </div>

		  <?php endif; ?>


<?php get_footer(); ?>