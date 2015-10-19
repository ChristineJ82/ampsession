<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
		  <article>
		    		<h1><?php the_title(); ?></h1>
		             <?php the_content(); ?>
		             <?php comments_template(); ?> 

		  <?php endwhile; else : ?>

		            <p>Oops! The page that you are looking for does not exist. :(</p>

		  <?php endif; ?>

		  </article>
    	</div>


      	<div class="col-md-3">
            <aside>
      		<?php get_sidebar(); ?>
            </aside>
        </div>

      </div>
    </div>

<?php get_footer(); ?>