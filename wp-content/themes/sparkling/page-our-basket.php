<?php
/**
 * Template Name: Our Basket
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
    <h1>
    	Enauiry Form
    </h1>
  	<form class="form-horizontal" role="form">
	    <div class="form-group">
	      <label class="control-label col-sm-6" for="email">I am intrested in weekly deliveries of...</label>
	      <div class="col-sm-6">
	        <select class="form-control">
	        	<option>Fruit Basket Original</option>
	        	<option>4 Kg</option>
	        	<option>6 Kg</option>
	        	<option>8 Kg</option>
	        </select>
	      </div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-6" for=""></label>
	      	<div class="col-sm-6">
	    	    <select class="form-control">
		        	<option>Fruit Basket Original</option>
		        	<option>4 Kg</option>
		        	<option>6 Kg</option>
		        	<option>8 Kg</option>
		        </select>
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-6" for="">And Please add... </label>
	      	<div class="col-sm-6">
	    	    <select class="form-control">
		        	<option>Extra Fruit</option>
		        	<option>Dry Fruits</option>
		        </select>
		        <select class="form-control">
		        	<option>Nuts</option>
		        	<option>Dry Fruits</option>
		        </select>
		        <select class="form-control">
		        	<option>Flowers</option>
		        	<option>Flowers</option>
		        </select>
	      	</div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-default">Send Query</button>
	      </div>
	    </div>
  </form>

  </div><!-- #primary -->

<?php get_footer(); ?>
