<?php
/**
 * Template Name: Our Basket
 */

get_header(); ?>

  <div id="primary" class="content-area" data-ng-controller="basketController">

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
	      <label class="control-label col-sm-4" for="email">I am intrested in weekly deliveries of...</label>
	      <div class="col-sm-8">
	        <select class="form-control">
	        	<option>Fruit Basket Original</option>
	        	<option>4 Kg</option>
	        	<option>6 Kg</option>
	        	<option>8 Kg</option>
	        </select>
	      </div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for=""></label>
	      	<div class="col-sm-8">
	    	    <select class="form-control">
		        	<option>Fruit Basket Original</option>
		        	<option>4 Kg</option>
		        	<option>6 Kg</option>
		        	<option>8 Kg</option>
		        </select>
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for="">And Please add... </label>
	      	<div class="col-sm-8">
	    	    <select class="">
		        	<option>Extra Fruit</option>
		        	<option>Dry Fruits</option>
		        </select>
		        <select class="">
		        	<option>Nuts</option>
		        	<option>Dry Fruits</option>
		        </select>
		        <select class="">
		        	<option>Flowers</option>
		        	<option>Flowers</option>
		        </select>
		        <input type="text" class="form-control" placeholder="Other request...">
		        <select class="">
		        	<option>Preffered delivery day(s)</option>
		        	<option>Flowers</option>
		        </select>
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for="">About Your Company</label>
	      	<div class="col-sm-8">
	    	    <input type="text" placeholder="Company Name" name="company">
	    	    <input type="number" placeholder="Company Registration No." name="reg_no">
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for="">Contact Person</label>
	      	<div class="col-sm-8">
	    	    <input type="text" placeholder="Name" name="contact_name">
	    	    <input type="number" placeholder="Phone" name="contact_no">
	    	    <input type="email" placeholder="Email Address" name="contact_email">
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for="">Delivery</label>
	      	<div class="col-sm-8">
	    	    <input type="text" placeholder="Complete Address" name="address">
	    	    <input type="number" placeholder="Postal Code" name="postal_code">
	    	    <input type="place" placeholder="Where would you want basket to be delivered. Kitchen table, reception etc." name="contact_email">
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
