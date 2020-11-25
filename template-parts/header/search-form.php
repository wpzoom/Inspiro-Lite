<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
    <input type="search" class="sb-search-input" placeholder="<?php _e('Type your keywords and hit Enter...', 'inspiro') ?>"  name="s" id="s" autocomplete="off" />
    <span class="sb-icon-search">
        <?php echo inspiro_get_svg( array( 'icon' => 'search' ) ) ?>
        <?php echo inspiro_get_svg( array( 'icon' => 'close' ) ) ?>
    </span>
</form>