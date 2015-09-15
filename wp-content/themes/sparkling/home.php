<?php
/**
 * Template Name: 
 *
 * This is the template that displays full width page without sidebar
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        
        <div class="container three_thumbnail">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="wp-content/uploads/2015/09/home1.jpg" alt="Our baskets" width="140">
          <div class="thumb_details">
            <h2>Our baskets</h2>
            <p>Etiam porta sem malesuada euismod.</p>
            <p><a class="btn btn-default" href="#" role="button">Read More</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="wp-content/uploads/2015/09/home1.jpg" alt="Our baskets" width="140">
          <div class="thumb_details">
            <h2>Our baskets</h2>
            <p>Etiam porta sem malesuada euismod.</p>
            <p><a class="btn btn-default" href="#" role="button">Read More</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="wp-content/uploads/2015/09/home1.jpg" alt="Our baskets" width="140">
          <div class="thumb_details">
            <h2>Our baskets</h2>
            <p>Etiam porta sem malesuada euismod.</p>
            <p><a class="btn btn-default" href="#" role="button">Read More</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( get_theme_mod( 'sparkling_page_comments' ) == 1 ) :
            if ( comments_open() || '0' != get_comments_number() ) :
              comments_template();
            endif;
          endif;
        ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>
