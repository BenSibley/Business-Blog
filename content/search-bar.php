<?php
if ( get_theme_mod( 'search_bar' ) != 'show' ) {
	return;
}
?>
<div class='search-form-container'>
	<button id="search-icon" class="search-icon">
		<i class="fa fa-search"></i>
	</button>
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label class="screen-reader-text"><?php _e( 'Search', 'business-blog' ); ?></label>
		<input type="search" class="search-field" placeholder="<?php _e( 'Search...', 'business-blog' ); ?>" value="" name="s"
		       title="<?php _e( 'Search for:', 'business-blog' ); ?>" tabindex="-1"/>
	</form>
</div>