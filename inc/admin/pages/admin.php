<script>
	jQuery(document).ready(function ($) {
		$(function () {
			$("#tabs").tabs();
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
		            <?php get_template_part( 'inc/admin/pages/demo-importer' ); ?>
		            <?php get_template_part( 'inc/admin/pages/customize' ); ?>
					<?php get_template_part( 'inc/admin/pages/plugins' ); ?>
		            <?php get_template_part( 'inc/admin/pages/demos' ); ?>
					<?php get_template_part( 'inc/admin/pages/upgrade-install' ); ?>
		            <?php get_template_part( 'inc/admin/pages/vs-pro' ); ?>
					<?php get_template_part( 'inc/admin/pages/support' ); ?>
				</div>
			</div>

			<?php get_template_part( 'inc/admin/pages/footer' ); ?>

		</div>
	</div>
</div>
