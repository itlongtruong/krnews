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

<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>Tin mới cập nhật</h2>

        </div>

        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
            <?php 	
			$args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
				'numberposts'      =>  10,
				'orderby'          => 'date',
				'order'            => 'DESC',		
			);
			$data = get_posts( $args );
			?>
				<?php
					foreach ($data as $post) {
						$post_id = get_the_ID(); 
				?>
                <li>
                    <h3 class="h3"><a href="<?php the_permalink(); ?>"><?php echo $post->post_title;?></a></h3>
                </li>

                <?php
					}
				?>	
            </ul>
        </div>
    </div>
</div>
