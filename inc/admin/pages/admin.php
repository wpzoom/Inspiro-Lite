<script>
	jQuery(document).ready(function ($) {
    $("#tabs").tabs();

    $('a[href^="<?php echo esc_url( admin_url( 'admin.php?page=inspiro-demo' ) ); ?>"],  a[href^="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"], a[href^="<?php echo esc_url( admin_url( 'admin.php?page=inspiro-plugins' ) ); ?>"]').on("click", function (e) {
        e.preventDefault();
        
        var href = $(this).attr("href");

        if (href.indexOf("customize.php") !== -1) {
            window.open(href, "_blank");
        } else {
            window.location.href = href;
        }
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
