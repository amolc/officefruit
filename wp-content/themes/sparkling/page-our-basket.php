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
    	Enquiry Form
    </h1>
  	<form class="form-horizontal" role="form" data-ng-submit="submitOrderForm( orderDetails )">
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
	    	    <select class="form-control" data-ng-model="orderDetails.main_package">
		        	<option>Fruit Basket Original</option>
		        	<option>4 Kg</option>
		        	<option>6 Kg</option>
		        	<option>8 Kg</option>
		        </select>
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for="">And Please add... </label>
	      	<div class="col-sm-8" >
	    	    <select class="" data-ng-model="orderDetails.other_packae">
		        	<option>Extra Fruit</option>
		        	<option>Extraaas</option>
		        </select>
		        <select class="" data-ng-model="orderDetails.other_dry_fruits">
		        	<option>Nuts</option>
		        	<option>Dry Fruits</option>
		        </select>
		        <select class="" data-ng-model="orderDetails.other_flowers">
		        	<option>Flowers</option>
		        	<option>Flowers</option>
		        </select>
		        <input type="text" name="other_request" data-ng-model="orderDetails.other_request" class="form-control" placeholder="Other request...">
		        <select class="" data-ng-model="orderDetails.delivery_days">
		        	<option>Preffered delivery day(s)</option>
		        	<option>Flowers</option>
		        </select>
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for="">About Your Company</label>
	      	<div class="col-sm-8">
	    	    <input type="text" data-ng-model="orderDetails.company_name" placeholder="Company Name" name="company">
	    	    <input type="number" data-ng-model="orderDetails.reg_no" placeholder="Company Registration No." name="reg_no">
	      	</div>
	    </div>
	    <div class="form-group" >
    		<label class="control-label col-sm-4" for="">Contact Person</label>
	      	<div class="col-sm-8">
	    	    <input type="text" data-ng-model="orderDetails.contact_name" placeholder="Name" name="contact_name">
	    	    <input type="number" data-ng-model="orderDetails.contact_no" placeholder="Phone" name="contact_no">
	    	    <input type="email" data-ng-model="orderDetails.contact_email" placeholder="Email Address" name="contact_email">
	      	</div>
	    </div>
	    <div class="form-group">
    		<label class="control-label col-sm-4" for="">Delivery</label>
	      	<div class="col-sm-8">
	    	    <input type="text"  placeholder="Complete Address" data-ng-model="orderDetails.address" name="address">
	    	    <input type="number" placeholder="Postal Code" data-ng-model="orderDetails.postal_code" name="postal_code">
	    	    <input type="text" data-ng-model="orderDetails.place" placeholder="Where would you want basket to be delivered. Kitchen table, reception etc." name="place">
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
