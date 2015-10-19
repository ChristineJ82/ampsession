<?php get_header(); ?>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
          <h1>Latest Blog Posts</h1>


		  <article>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		            <?php the_excerpt(); ?>

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