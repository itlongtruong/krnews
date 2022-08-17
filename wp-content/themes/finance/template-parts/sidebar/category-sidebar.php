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
$cat_id = 0;
if (!empty(get_query_var('cat'))) {
	$category = get_category(get_query_var('cat'));
	$cat_id = $category->cat_ID;
}
$args = array(
	'taxonomy' => 'category',
	'hide_empty' => false,
	'order'            => 'DESC',
);
$categories = get_terms($args);
?>
<style>
	.nav .active>span {
		color: #119ee6;
	}
</style>



<div class="widget">
	<div class="widget--title">
		<h2 class="h4">Danh Mục</h2>
		<i class="icon fa fa-folder-open-o"></i>
	</div>
	<div class="nav--widget">
		<ul class="nav">
			<?php
			foreach ($categories as $category) {
				$url = get_term_link($category);
			?>
				<li><a href="<?php echo $url; ?>"  class="d-flex <?php echo $cat_id == $category->term_id ? 'active' : '' ?>" ><span><?php echo $category->name; ?></span><span>(<?php echo $category->count; ?>)</span></a></li>
			<?php
			}
			?>
		</ul>
	</div>
</div>