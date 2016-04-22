<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'html5blank' ); ?>">
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
</form>
<!-- /search -->

<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<fieldset class="form-group">
	<input class="search-input form-control" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'html5blank' ); ?>">
	<button class="search-submit btn btn-primary" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
  	</fieldset>
</form>
<!-- /search -->
<!-- search live -->
<?php echo do_shortcode('[search_live]') ?>
<!-- /search -->