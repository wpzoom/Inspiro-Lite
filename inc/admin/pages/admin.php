<?php $wpz_theme_name = wp_get_theme( get_template() ); ?>
<div class="clear"></div>
<div id="zoomWrap">
	<div id="zoomHead">
		<script type="text/javascript">
			//var wpzoom_ajax_url = '<?php //echo admin_url( 'admin-ajax.php' ); ?>';
		</script>
		<div id="zoomLoading">
			<p><?php _e( 'Loading', 'wpzoom' ); ?></p>
		</div>
		<div id="zoomSuccess">
			<p><?php _e( 'Options successful saved', 'wpzoom' ); ?></p>
		</div>
		<div id="zoomFail">
			<p><?php _e( 'Can\'t save options. Please contact <a href="https://wpzoom.com/support/">WPZOOM Support</a>.', 'wpzoom' ); ?></p>
		</div>
		<div id="zoomTheme">
			<?php
			$name       = 'Demo Content';
			$xml_data   = get_demo_xml_data();
			$has_access = false;
			$link_href  = 'wpz_' . substr( md5( $name ), 0, 8 );

			if ( $xml_data['remote']['response'] ) {
				$has_access = true;
			} elseif ( $xml_data['local']['response'] ) {
				$has_access = true;
			}
			?>
			<h5>
				<?php //printf( __( 'ZOOM Framework <strong>%s</strong>', 'wpzoom' ), WPZOOM::$wpzoomVersion ); ?>
			</h5>
			<h3><?php //echo $wpz_theme_name->get( 'Name' ); ?> <span><?php echo $wpz_theme_name->get( 'Version' ); ?></span></h3>
		</div>
	</div><!-- /#zoomHead -->

	<div class="head_meta">
		<div id="zoomInfo">

		</div>

	</div>

	<div class="admin_main">
		<div id="zoomNav">
			<?php WPZOOM_Admin_Settings_Page::menu(); ?>
			<div class="cleaner">&nbsp;</div>
		</div><!-- end #zoomNav -->

		<div class="tab_container">
			<form id="zoomForm" method="post">
				<?php WPZOOM_Admin_Settings_Page::content(); ?>

				<input type="hidden" name="action" value="save" />
				<input type="hidden" id="zoom-nonce" name="_ajax_nonce" value="<?php echo wp_create_nonce( 'wpzoom-ajax-save' ); ?>" />
			</form>
		</div><!-- end .tab_container -->
		<div class="clear"></div>
	</div> <!-- /.admin_main -->

	<div class="zoomActionButtons">

		<form id="zoomReset" method="post">
			<p class="submit" />
			<input name="reset" class="button-secondary" type="submit" value="<?php _e( 'Reset settings', 'wpzoom' ); ?>" />
			<input type="hidden" name="action" value="reset" />
			</p>
		</form>

	</div><!-- end of .zoomActionButtons -->

</div><!-- end #zoomWrap -->

<div class="clear"></div>
