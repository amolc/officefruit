<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php sparkling_social(); ?>
					<nav role="navigation" class="col-sm-6">
						<?php sparkling_footer_links(); ?>
						<p class="right-text">
							<?php echo of_get_option( 'custom_footer_copy', 'sparkling' ); ?>
						</p>
					</nav>
					<div class="copyright col-sm-6">
						<?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
						<?php //sparkling_footer_info(); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function($){
		$('#content').css('min-height', $( window ).height() - $('#masthead').height() -$('#footer-area').height();  )
		$('.carousel-inner .item').click( function (){
			console.log( siteurl + '  '+ $(this).index() );
			if( $(this).index() == 0 ){
				location.href = siteurl+"/our-baskets";
			} else if( $(this).index() == 1 ){
				location.href = siteurl+"/perks";
			} else {
				$('#officeModal').modal('show');
			}

		});


});
</script>




<!-- Modal -->
<div data-ng-controller="subscribeController" class="modal fade" style="display: none" id="officeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel"></h1>
        <p></p>
      </div>
      <div class="modal-body">
      <form name="surscribeForm" data-ng-submit="sendSubscriberDetails(subscriberDetails, surscribeForm.$valid)" novalidate>
       	<div class="form-group">
       		<input class="form-control" type="tel" data-ng-model="subscriberDetails.contact_no" name="contact_no" placeholder="Contact Number" required>
       		<div ng-messages="surscribeForm.$submitted && surscribeForm.contact_no.$error" role="alert">
      			<div ng-message="required" class="help-block" >Please Enter Contact Number.</div>
    		</div>
       	</div>
   		<div class="form-group">
       		<input class="form-control" type="tel" data-ng-model="subscriberDetails.postal_code" name="postal_code" placeholder="Postal Code" required>
       		<div ng-messages="surscribeForm.$submitted && surscribeForm.postal_code.$error" role="alert">
      			<div ng-message="required" class="help-block" >Please Enter Postal Code.</div>
    		</div>
       	</div>
       	<div class="modal-footer">
        	<input type="submit" class="btn btn-primary red-btn" value="I’m excited to get my free basket!">
     	 </div>
	  </form>

    </div>
  </div>
</div>

</body>
</html>
