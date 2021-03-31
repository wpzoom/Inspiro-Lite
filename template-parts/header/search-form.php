<form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>/">
    <input type="search" class="sb-search-input" placeholder="<?php esc_attr_e('Type your keywords and hit Enter...', 'inspiro') ?>"  name="s" id="s" autocomplete="off" />
    <span class="sb-icon-search">
        <?php echo inspiro_get_theme_svg( 'search' ) ?>
        <?php echo inspiro_get_theme_svg( 'cross' ) ?>
    </span>
</form>