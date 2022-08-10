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
	.active >p{
		color: red;
	}
</style>
<aside class="single_sidebar_widget post_category_widget">
	<h4 class="widget_title">Danh Mục</h4>
	<ul class="list cat-list">
		<?php
		foreach ($categories as $category) {
			$url = get_term_link($category);
		?>
			<li>
				<a href="<?php echo $url; ?>" class="d-flex <?php echo $cat_id == $category->term_id ? 'active' : '' ?>">
					<p><?php echo $category->name; ?> (<?php echo $category->count; ?>)</p>

				</a>
			</li>
		<?php
		}
		?>
	</ul>
</aside>