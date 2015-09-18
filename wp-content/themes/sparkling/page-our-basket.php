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
    <div class="container">
    	<div class="row our_basket_section" style="margin: 25px 20px;">
    		<div class="col-sm-12 col-md-12">
	    		<div class="col-md-6 col-sm-12">
		    		<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/basket_1.jpg" class="img-responsive oscitas-res-image" alt="">
		    		<h3 style="text-align: left;">Extra Fruit</h3>
		    		<p style="text-align: left;">An extra boost of the office’s favorite fruit. 2 kg extra.</p>
		    	</div>
		    	<div class="col-md-6 col-sm-12 our_basket_sub_section">
		    		<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Bananas</h4>
						<h3 style="text-align: left;">S$ 8</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Apple</h4>
						<h3 style="text-align: left;">S$ 15</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Oranges</h4>
						<h3 style="text-align: left;">S$ 18</h3>
						<h4 style="text-align: left;"></h4>
					</div>
		    	</div>
		    </div>	
		    <div class="col-sm-12 col-md-12">
	    		<div class="col-md-6 col-sm-12">
		    		<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/basket_2.jpg" class="img-responsive oscitas-res-image" alt="">
		    		<h3 style="text-align: left;">Nuts</h3>
		    		<p style="text-align: left;">Make sure there are some healthy snacks around with our popular mixes.</p>
		    	</div>
		    	<div class="col-md-6 col-sm-12 our_basket_sub_section">
		    		<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Fruits & Nuts mix</h4>
						<h3 style="text-align: left;">S$ 2</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Cashew nuts</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Macadamia</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
		    	</div>
		    </div>
		    <div class="col-sm-12 col-md-12">
	    		<div class="col-md-6 col-sm-12">
		    		<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/basket_3.jpg" class="img-responsive oscitas-res-image" alt="">
		    		<h3 style="text-align: left;">Flowers</h3>
		    		<p style="text-align: left;">Give your office a wind of freshness with new flowers every week.</p>
		    	</div>
		    	<div class="col-md-6 col-sm-12 our_basket_sub_section">
		    		<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Corporate</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Cuties</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Colorful</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
		    	</div>
		    </div>	
		  </div>	
    </div>
  	<form class="form-horizontal" role="form" data-ng-submit="submitOrderForm( orderDetails )">
  	<h1>
    	Enquiry Form
    </h1>
	    <div class="form-group">
	      <label class="control-label" for="email">I am intrested in weekly deliveries of...</label>
	      <div class="col-md-8 col-sm-12">
	        <select class="form-control">
	        	<option>Fruit Basket Original</option>
	        	<option>4 Kg</option>
	        	<option>6 Kg</option>
	        	<option>8 Kg</option>
	        </select>
	    	    <select class="form-control" data-ng-model="orderDetails.main_package" style="margin-top: 15px;">
		        	<option>Fruit Basket Original</option>
		        	<option>4 Kg</option>
		        	<option>6 Kg</option>
		        	<option>8 Kg</option>
		        </select>
	      	</div>
	    </div>
	    <div class="form-group enquiry_select">
    		<label class="control-label" for="">And Please add... </label>
    	    <select class="col-md-3 col-sm-12" data-ng-model="orderDetails.other_packae">
	        	<option>Extra Fruit</option>
	        	<option>Extraaas</option>
	        </select>
	        <select class="col-md-3 col-sm-12" data-ng-model="orderDetails.other_dry_fruits">
	        	<option>Nuts</option>
	        	<option>Dry Fruits</option>
	        </select>
	        <select class="col-md-3 col-sm-12"  data-ng-model="orderDetails.other_flowers">
	        	<option>Flowers</option>
	        	<option>Flowers</option>
	        </select>
	    </div>
	    <div class="form-group" style="margin: 0 20px 0 -20px;">     
	        <input type="text" class="form-control col-md-8 enq_input" name="other_request" data-ng-model="orderDetails.other_request"  placeholder="Other request..." >
	        <select class="col-sm-4" data-ng-model="orderDetails.delivery_days">
	        	<option>Preffered delivery day(s)</option>
	        	<option>Flowers</option>
	        </select>
	    </div>
	    <div class="form-group" style="margin-top: 20px;">
    		<label class="control-label" for="" style="margin-right: 15px;">About Your Company</label>
	    	    <input type="text"  data-ng-model="orderDetails.company_name" placeholder="Company Name" name="company" style="width: 43%;">
	    	    <input type="number"  data-ng-model="orderDetails.reg_no" placeholder="Company Registration No." name="reg_no" style="width: 32.40%;">
	    </div>
	    <div class="form-group"  style="margin-top: 20px;">
    		<label class="control-label" for="" style="margin-right: 15px;">Contact Person</label>
	    	    <input type="text" data-ng-model="orderDetails.contact_name" placeholder="Name" name="contact_name" style="width: 30%;">
	    	    <input type="number" data-ng-model="orderDetails.contact_no" placeholder="Phone" name="contact_no" style="width: 20%;">
	    	    <input type="email" data-ng-model="orderDetails.contact_email" placeholder="Email Address" name="contact_email" style="width: 30.70%;">
	    </div>
	    <div class="form-group" style="margin-top: 20px;">
    		<label class="control-label" for="" style="margin-right: 15px;">Delivery</label>
	    	    <input type="text" class="col-sm-8" placeholder="Complete Address" data-ng-model="orderDetails.address" name="address" style=" width: 59%;">
	    	    <input type="number" class="col-sm-4" placeholder="Postal Code" data-ng-model="orderDetails.postal_code" name="postal_code" style=" width: 27%;margin-left: 5px;">
	    	    <input type="text" class="col-sm-12" data-ng-model="orderDetails.place" placeholder="Where would you want basket to be delivered. Kitchen table, reception etc." name="place" style="width: 86.60%;
    margin: 15px 0px 0 90px;">
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-12 text-center">
	        <button type="submit" class="btn btn-default red-btn" style="padding: 8px 60px;">Send Query</button>
	      </div>
	    </div>
  </form>

  </div><!-- #primary -->

<?php get_footer(); ?>