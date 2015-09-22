<?php
/**
 * Template Name: Our Basket
 */

get_header(); ?>

  <div id="primary" class="content-area our_basket" data-ng-controller="basketController">

    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>
      <div class="container our_basket_container">
    	<div class="row our_basket_section">
    		<div class="col-sm-12">
	    		<div class="col-sm-6">
		    		<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/basket_1.jpg" class="img-responsive oscitas-res-image" alt="">
		    		<h3 style="text-align: left;">Extra Fruit</h3>
		    		<p style="text-align: left;">An extra boost of the office’s favorite fruit. 2 kg extra.</p>
		    	</div>
		    	<div class="col-sm-6 our_basket_sub_section">
		    		<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Bananas</h4>
						<h3 style="text-align: left;">S$ 8</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Apple</h4>
						<h3 style="text-align: left;">S$ 15</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Oranges</h4>
						<h3 style="text-align: left;">S$ 18</h3>
						<h4 style="text-align: left;"></h4>
					</div>
		    	</div>
		    </div>	
		    <div class="col-sm-12">
	    		<div class="col-sm-6">
		    		<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/basket_2.jpg" class="img-responsive oscitas-res-image" alt="">
		    		<h3 style="text-align: left;">Nuts</h3>
		    		<p style="text-align: left;">Make sure there are some healthy snacks around with our popular mixes.</p>
		    	</div>
		    	<div class="col-sm-6 our_basket_sub_section">
		    		<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4" style="padding: 0;"><p></p>
						<h4 style="text-align: left;">Fruits & Nuts mix</h4>
						<h3 style="text-align: left;">S$ 2</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Cashew nuts</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Macadamia</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
		    	</div>
		    </div>
		    <div class="col-sm-12">
	    		<div class="col-sm-6">
		    		<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/basket_3.jpg" class="img-responsive oscitas-res-image" alt="">
		    		<h3 style="text-align: left;">Flowers</h3>
		    		<p style="text-align: left;">Give your office a wind of freshness with new flowers every week.</p>
		    	</div>
		    	<div class="col-sm-6 our_basket_sub_section">
		    		<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Corporate</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Cuties</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Colorful</h4>
						<h3 style="text-align: left;">S$ 25</h3>
						<h4 style="text-align: left;"></h4>
					</div>
		    	</div>
		    </div>	
		  </div>	
		  	<form class="form-horizontal" role="form" data-ng-submit="submitOrderForm( orderDetails )">
		  	<h1 style="margin-bottom:30px;">
		    	Enquiry Form
		    </h1>
			    <div class="form-group">
			      <label class="control-label" for="email">I am intrested in weekly deliveries of...</label>
			      <div class="col-sm-8 first_select">
			        <select >
			        	<option selected>Fruit Basket <span>Original</span></option>
			        	<option>4 Kg</option>
			        	<option>6 Kg</option>
			        	<option>8 Kg</option>
			        </select>
			    	    <select data-ng-model="orderDetails.main_package" style="margin-top: 15px;">
				        	<option value="">Fruit Basket <span>Supreme</span></option>
				        	<option>4 Kg</option>
				        	<option>6 Kg</option>
				        	<option>8 Kg</option>
				        </select>
			      	</div>
			    </div>
			    <div class="form-group enquiry_select">
		    		<label class="control-label" for="">And Please add... </label>

			    	    <select data-ng-model="orderDetails.other_package" class="col-sm-12 col-sm-3 col-xm-12">
				        	<option selected>Extra Fruit</option>
				        	<option>Extraaas</option>
				        </select>
				        <select data-ng-model="orderDetails.other_dry_fruits" class="col-sm-12 col-sm-3 col-xm-12">
				        	<option>Nuts</option>
				        	<option>Dry Fruits</option>
				        </select>
				        <select data-ng-model="orderDetails.other_flowers" class="col-sm-12 col-sm-3 col-xm-12">
				        	<option>Flowers</option>
				        	<option>Flowers</option>
				        </select>   
			    </div>
			    <div class="form-group" style="margin: 0 10px 15px -20px;">     
			        <input type="text" class="form-control col-sm-8 enq_input" name="other_request" data-ng-model="orderDetails.other_request"  placeholder="Other request..." style="margin-left: 20px;">
			        <select class="col-sm-3" data-ng-model="orderDetails.delivery_days" style="width:32%;">
			        	<option>Preffered delivery day(s)</option>
			        	<option>Flowers</option>
			        </select>
			    </div>
			    <div class="form-group" >
		    		<label class="control-label" for="" style="margin-right: 15px;">About Your Company</label>
			    	    <input type="text" class="col-sm-5 col-sm-12 col-xm-12" data-ng-model="orderDetails.company_name" placeholder="Company Name" name="company">
			    	    <input type="number" class="col-sm-4 col-sm-12 col-xm-12"  data-ng-model="orderDetails.reg_no" placeholder="Company Registration No." name="reg_no" style="margin-left: 10px;width: 35%;">
			    </div>
			    <div class="form-group contact_person" >
		    		<label class="control-label" for="" style="margin-right: 15px;">Contact Person</label>
			    	    <input type="text" class="col-sm-4 col-sm-12 col-xm-12" data-ng-model="orderDetails.contact_name" placeholder="Name" name="contact_name">
			    	    <input type="number" class="col-sm-2 col-sm-12 col-xm-12" data-ng-model="orderDetails.contact_no" placeholder="Phone" name="contact_no">
			    	    <input type="email" class="col-sm-3 col-sm-12 col-xm-12" data-ng-model="orderDetails.contact_email" placeholder="Email Address" name="contact_email" style="width: 31.33%;">
			    </div>
			    <div class="form-group contact_person" >
		    		<label class="control-label" for="" style="margin-right: 15px;">Delivery</label>
			    	    <input type="text" class="col-sm-6 col-sm-12 col-xm-12" placeholder="Complete Address" data-ng-model="orderDetails.address" name="address">
			    	    <input type="number" class="col-sm-4 col-sm-12 col-xm-12" placeholder="Postal Code" data-ng-model="orderDetails.postal_code" name="postal_code" style="width: 37.38%;">
			    	    <input type="text" class="col-sm-12 col-sm-12 col-xm-12" data-ng-model="orderDetails.place" placeholder="Where would you want basket to be delivered. Kitchen table, reception etc." name="place" style="width: 97%;margin-top: 15px;">
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-12 text-center">
			        <button type="submit" class="btn btn-default red-btn" style="padding: 8px 60px;">Send Enquiry</button>
			      </div>
			    </div>

		  </form>
		  
<!-- 			<form class="form-inline">
			  <div class="form-group">
			    <label for="exampleInputName2">Name</label>
			    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
			    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
			    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
			  </div>
			</form> -->
  		</div><!-- container -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
