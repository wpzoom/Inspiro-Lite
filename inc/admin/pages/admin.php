<script>
	jQuery(document).ready(function ($) {
    	// Initialize tabs with proper configuration
    	$("#tabs").tabs({
    		beforeLoad: function(event, ui) {
    			// Prevent AJAX loading of tab content
    			return false;
    		},
    		create: function(event, ui) {
    			// Handle notice dismissal links
    			$('.notice-dismiss, .tgmpa-dismiss').on('click', function(e) {
    				e.preventDefault();
    				var $link = $(this);
    				var href = $link.attr('href');
    				
    				// Make AJAX request instead of page reload
    				$.get(href, function(response) {
    					$link.closest('.notice').fadeOut();
    				});
    			});
    		}
    	});

    	// Prevent default action for external links in tabs
    	$('.wpz-onboard_tab a[href^="http"], .wpz-onboard_tab a[href*="admin.php"]').on('click', function(e) {
    		e.stopPropagation();
    	});
	});
</script>

<div class="wpz-onboard_wrapper">
	<div id="tabs">

		<?php get_template_part( 'inc/admin/pages/main-menu' ); ?>

		<div class="wpz-onboard_content-wrapper">
			<div class="wpz-onboard_content">
				<div class="wpz-onboard_content-main">
		            <?php get_template_part( 'inc/admin/pages/quick-start' ); ?>
		            <?php get_template_part( 'inc/admin/pages/vs-pro' ); ?>
		            <?php get_template_part( 'inc/admin/pages/demos' ); ?>
					<?php get_template_part( 'inc/admin/pages/support' ); ?>
				</div>
			</div>

			<?php get_template_part( 'inc/admin/pages/footer' ); ?>

		</div>
	</div>
</div>
