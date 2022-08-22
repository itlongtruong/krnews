<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

?>
<div class="widget">
	<div class="search--widget">
		<form action="<?php bloginfo('url'); ?>/" data-form="validate" novalidate="novalidate">
			<div class="input-group"><input type="search" name="s" placeholder="Tìm Kiếm..." class="header--search-control form-control" required <?php if (is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" <?php } ?>>

				<div class="input-group-btn"> <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button> </div>
			</div>
		</form>
	</div>
</div>