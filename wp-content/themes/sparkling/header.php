<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="UTF-8">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="http://officefruit.sg/beta/wp-content/uploads/2015/09/OfficeFruit.png" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>
	<script type="text/javascript">
		var app = angular.module('officefruit', [ 'ngMessages' ]);
	app.controller('basketController', function($scope) {
	    $scope.orderDetails= {
	    	address: '',
        	company_name: '',
        	contact_email: '',
        	contact_name: '',
        	contact_no: null,
        	delivery_days: '',
        	original_basket: '',
        	main_package: '',
        	other_dry_fruits: '',
        	other_flowers: '',
        	other_package: '',
        	place: '',
        	postal_code: null,
        	reg_no: null
	    };
	    $scope.submitOrderForm = function ( enquiryForm, valid) {
	    	
	    	$scope.status = false;
	    	if(valid){
		    	jQuery.post(
				    ajaxurl, 
				    {
				        'action': 'add_foobar',
				        'data':   $scope.orderDetails
				    }, 
				    function(response){
				        console.log('The server responded: ' + response.status);
				        $scope.status= true;
				        if(response.status==1)
				        	$scope.message = 'Thankyou! We well get back to you shortly.';
				        else
				        	$scope.message ='Error! Please try again.'


				        $scope.orderDetails= {
				        	address: '',
				        	company_name: '',
				        	contact_email: '',
				        	contact_name: '',
				        	contact_no: null,
				        	delivery_days: '',
				        	original_basket: '',
				        	main_package: '',
				        	other_dry_fruits: '',
				        	other_flowers: '',
				        	other_package: '',
				        	place: '',
				        	postal_code: null,
				        	reg_no: null
	    				};
	    				$scope.enquiryForm.$setPristine();
					    $scope.enquiryForm.$setValidity();
					    $scope.enquiryForm.$setUntouched();
	    				$scope.$apply();
				    }

				);
		    }
	    }
	})

	app.controller('subscribeController', function($scope) {
	    console.log("In subscribeController");
	    $scope.sendSubscriberDetails = function (subscriberDetails, valid) {
	    	console.log("in  sendSubscriberDetails");
	    	console.log(subscriberDetails);
	    	if(valid)
		    	jQuery.post(
				    ajaxurl, 
				    {
				        'action': 'add_subscription',
				        'data':   subscriberDetails
				    }, 
				    function(response){
				        console.log('The server responded: ' + response.status);
				        if(response.status == '1')
				        	jQuery("#officeModal .modal-body").html("<h1>Thank you! We will get back to you shortly.</h1>");	
				        if(response.status == '0')
				        	jQuery("#officeModal .modal-body").html("<h1>Please Try Again.</h1>");	
				    }
				);
	    };
	    
	})
	</script>
<body <?php body_class(); ?> data-ng-app="officefruit">
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<?php if( get_header_image() != '' ) : ?>

							<div id="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed ?>

							<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed (again) ?>

						</div>
						<?php sparkling_header_menu(); // main navigation ?>
						
						<?php echo of_get_option( 'contact_number', 'sparkling' ); ?>
						
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container main-content-area">
			<div class="row">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
