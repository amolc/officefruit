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
						<h3 style="text-align: left;">S$ 7</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Apple</h4>
						<h3 style="text-align: left;">S$ 8</h3>
						<h4 style="text-align: left;"></h4>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Pear</h4>
						<h3 style="text-align: left;">S$ 9</h3>
						<h4 style="text-align: left;"></h4>
					</div>
		    	</div>
		    </div>	
		    <div class="col-sm-12">
	    		<div class="col-sm-6">
		    		<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/basket_2.jpg" class="img-responsive oscitas-res-image" alt="">
		    		<h3 style="text-align: left;">Nuts & Dried Fruits</h3>
		    		<p style="text-align: left;">Make sure there are some healthy snacks around with our popular mixes.</p>
		    			<div class="col-sm-12 toggle-radio">
						  <input type="radio" name="ab" id="a" />
						  <label for="a">Small
						  	<span>$S 6</span>
						  1 snack pack
						  </label>
						</div> 
						<div class="col-sm-12 toggle-radio"> 
						  <input type="radio" name="ab" id="b" />
						  <label for="b">Medium
						  	<span>$S 16</span>
						  3 snack pack
						  </label>
						</div>
						<div class="col-sm-12 toggle-radio">  
						  <input type="radio" name="ab" id="c" />
						  <label for="c">Large
						  	<span>$S 26</span>
						  5 snack pack
						  </label>
						</div>
		    	</div>
		    	<div class="col-sm-6 our_basket_sub_section" style="padding: 5px 10px;">
		    		<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4" style="padding: 0;"><p></p>
						<h4 style="text-align: left;">Fruits & Nuts mix</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Berry Mix</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Nuts Mix</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Cashews</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Pistachios</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Soybeans</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Mango</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Apricot</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-4 col-sm-4"><p></p>
						<h4 style="text-align: left;">Cranberries</h4>
						<img src="http://officefruit.sg/beta/wp-content/uploads/2015/09/how_works_2.png" class="fruit_img">
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
		  	<form class="form-horizontal" name="enquiryForm" role="form" data-ng-submit="submitOrderForm( orderDetails, enquiryForm.$valid )" novalidate>
		  	<h1 style="margin-bottom:30px;" >
		    	Enquiry Form
		    </h1>
			    <div class="">
			     	<label  class="control-label col-sm-4" for="email">I am intrested in weekly deliveries of...</label>
					    <div class="col-sm-8 first_select">
					        <select name="original_basket" data-ng-model="orderDetails.original_basket" required>
					        	<option selected value="">Fruit Basket <span>Original</span></option>
					        	<option>4 Kg</option>
					        	<option>6 Kg</option>
					        	<option>8 Kg</option>
					        </select>
					        <div class="enquiry-error">
								<div ng-messages="enquiryForm.$submitted && enquiryForm.original_basket.$error" role="alert">
					      			<div ng-message="required" class="help-block" >Please Select Original Basket </div>
					    		</div>
				    		</div>
				    	</div> 
				    <label  class="control-label col-sm-4" for="email"></label>
			    	<div class="col-sm-8 first_select"> 
			    	    <select name="main_package" data-ng-model="orderDetails.main_package" required>
				        	<option value="">Fruit Basket <span>Supreme</span></option>
				        	<option>4 Kg</option>
				        	<option>6 Kg</option>
				        	<option>8 Kg</option>
				        </select>
				         <div class="enquiry-error">
							<div ng-messages="enquiryForm.$submitted && enquiryForm.main_package.$error" role="alert">
				      			<div ng-message="required" class="help-block" >Please Select Main Package</div>
				    		</div>
			    		</div>
			    	</div>	
			    </div>
			    
		    		<label class="control-label col-sm-3 col-md-3" for="" style="margin-right: 12px;">And Please add... </label>
		    		<div class="col-sm-3 col-md-3 form-group">
			    	    <select name="other_package" data-ng-model="orderDetails.other_package" required>
				        	<option selected value=""> Select Fruit</option>
				        	<option >Extra Fruit</option>
				        	<option>Extraaas</option>
				        </select>
				        <div class="enquiry-error">
							<div ng-messages="enquiryForm.$submitted && enquiryForm.other_package.$error" role="alert">
				      			<div ng-message="required" class="help-block" >Please Select Other Package</div>
				    		</div>
			    		</div>
		    		</div>
		    		<div class="col-sm-3 col-md-3">
				        <select name="other_dry_fruits" data-ng-model="orderDetails.other_dry_fruits" required>
				        	<option value="">Select Dry Fruit</option>
				        	<option>Nuts</option>
				        	<option>Dry Fruits</option>
				        </select>
				         <div class="enquiry-error">
							<div ng-messages="enquiryForm.$submitted && enquiryForm.other_dry_fruits.$error" role="alert">
				      			<div ng-message="required" class="help-block" >Please Select Other Dry Fruits</div>
				    		</div>
			    		</div>
			    	</div>
			    	<div class="col-sm-3 col-md-3">
				        <select  name="other_flowers" data-ng-model="orderDetails.other_flowers" required>
				        	<option value="">Select Flower</option>
				        	<option>Flower Pot</option>
				        	<option>Flowers</option>
				        </select>
				         <div class="enquiry-error">
							<div ng-messages="enquiryForm.$submitted && enquiryForm.other_flowers.$error" role="alert">
				      			<div ng-message="required" class="help-block" >Please Select Flowers</div>
				    		</div>
			    		</div>   
			    	</div>
			    <div class="col-sm-8" >     
			        <input type="text" class="form-control" name="other_request" data-ng-model="orderDetails.other_request"  placeholder="Other request..." style="margin-left: -10px;width: 107%;">
			        <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.other_request.$error" >
			      			<div ng-message="required" class="help-block" >Please Enter Other Request</div>
			    		</div>
		    		</div>
		        </div>
		        <div class="col-sm-4">
			        <select  name="delivery_days" data-ng-model="orderDetails.delivery_days" style="width:98.20%;" required>
			        	<option value="">Select Delivery Day(s)</option>
			        	<option>Preffered delivery day(s)</option>
			        	<option>Flowers</option>
			        </select>
			        <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.delivery_days.$error" role="alert">
			      			<div ng-message="required" class="help-block" >Please Select Delivery Day(s)</div>
			    		</div>
		    		</div>
			    </div>			    
			  
		    		<label class="col-sm-3" style="clear:both;margin-right:30px;" for="">About Your Company</label>
		    		<div class="form-group col-sm-4">
			    	    <input type="text" data-ng-model="orderDetails.company_name"  name="company_name" required>
			    	    <div class="enquiry-error">
							<div ng-messages="enquiryForm.$submitted && enquiryForm.company_name.$error" role="alert">
				      			<div ng-message="required" class="help-block">Please Enter Company Name</div>
				    		</div>
			    		</div>
		    	    </div>
		    	    <div class="form-group col-sm-5">
			    	    <input type="number" data-ng-model="orderDetails.reg_no" placeholder="Company Registration No." name="reg_no" required>
			    	    <div class="enquiry-error">
							<div ng-messages="enquiryForm.$submitted && enquiryForm.reg_no.$error" role="alert">
				      			<div ng-message="required" class="help-block" >Please Enter Registration Number</div>
				    		</div>
			    		</div>
				    </div>
			    
			    
    			<label class="control-label col-sm-2 " for="" style="margin-right: 44px;">Contact Person</label>
    			<div class="form-group col-sm-4 form-group" >
		    	    <input type="text" class=" col-xm-12" data-ng-model="orderDetails.contact_name" placeholder="Name" name="contact_name" required>
		    	    <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.contact_name.$error" role="alert">
			      			<div ng-message="required" class="help-block" >Please Enter Contact Name</div>
			    		</div>
		    		</div>
	    	    </div>
	    	    <div class="form-group col-sm-2 form-group" >
		    	    <input type="number" data-ng-model="orderDetails.contact_no" placeholder="Phone" name="contact_no" required>
		    	    <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.contact_no.$error" role="alert">
			      			<div ng-message="required" class="help-block" >Please Enter Contact Number</div>
			    		</div>
		    		</div>
	    	    </div>
	    	    <div class="col-sm-4 form-group" >
		    	    <input type="email" data-ng-pattern="/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i" data-ng-model="orderDetails.contact_email" placeholder="Email Address" name="contact_email" required>
		    	    <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.contact_email.$error" role="alert">
			      			<div ng-message="required" class="help-block" >Please Enter Email Address</div>
			      			<div data-ng-message="pattern" class="help-block" >Invalid Email Address. </div>
			    		</div>
		    		</div>
	    	    </div>
	    	    <label class="control-label col-sm-2" for="" style="margin-right: 26px;">Delivery</label>
	    	    <div class="col-sm-5 form-group">
		    	    <input type="text"  data-ng-model="orderDetails.address" placeholder="Address" name="address" required>
		    	    <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.address.$error" role="alert">
			      			<div ng-message="required" class="help-block" >Please Enter Address</div>
			    		</div>
		    		</div>
	    	    </div>
	    	    <div class="col-sm-5 form-group">
		    	    <input type="number" data-ng-model="orderDetails.postal_code" placeholder="Postal Code" name="postal_code" required>
		    	    <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.postal_code.$error" role="alert">
			      			<div ng-message="required" class="help-block" >Please Enter Postal Code</div>
			    		</div>
		    		</div>
	    	    </div>
	    	    <div class="col-sm-12 form-group">
		    	    <input type="text" data-ng-model="orderDetails.place" placeholder="place" name="place" style="width: 101%;" required>
		    	    <div class="enquiry-error">
						<div ng-messages="enquiryForm.$submitted && enquiryForm.place.$error" role="alert">
			      			<div ng-message="required" class="help-block" >Please Enter Place to Deliver Basket</div>
			    		</div>
		    		</div>
	    	    </div>
			    
			    <div class="form-group">        
			      <div class="col-sm-12 text-center">
			        <button type="submit" class="btn btn-default red-btn" style="padding: 8px 60px;">Send Enquiry</button>
			      </div>
			    </div>
		  </form>
