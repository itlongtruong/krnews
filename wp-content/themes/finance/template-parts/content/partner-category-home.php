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

<div class="posts--filter-bar style--3 hidden-xs">
    <div class="container">
        <ul class="nav">
            <li>
                <a href="<?php echo home_url(); ?>/tin-moi-nhat">
                    <i class="fa fa-flash"></i>
                    <span>Tin tức mới nhất</span>
                </a>
            </li>

            <li>
                <a href="<?php echo home_url(); ?>/tin-nong">
                    <i class="fa fa-fire"></i>
                    <span>Tin nóng</span>
                </a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/tin-xem-nhieu-nhat">
                    <i class="fa fa-eye"></i>
                    <span>Xem nhiều nhất</span>
                </a>
            </li>
        </ul>
    </div>
</div>