<?php
/**
 * The template for displaying search forms in Alien Ship
 *
 * @package Alien Ship
 * @since Alien Ship 0.1
 */
?>
<form role="search" method="get" class="search-form-cp" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder',    'alienship' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
      <span class="input-group-btn">
	       <input type="submit" class="btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button', 'alienship' ); ?>">
      </span>
    </div><!-- /input-group -->
    
</form>

