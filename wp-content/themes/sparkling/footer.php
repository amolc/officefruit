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
<div class="modal fade" style="display: none" id="officeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel"></h1>
        <p></p>
      </div>
      <div class="modal-body">
       	<input type="text" placeholder="Contact No">
		<input type="text" placeholder="Postal Code">
      <div class="modal-footer">
        <button type="button" class="btn btn-primary red-btn">I’m excited to get my free basket!</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
