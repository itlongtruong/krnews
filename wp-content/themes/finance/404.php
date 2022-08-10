<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
?>
<div class="main--breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url(); ?>/" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
      <li class="active"><span>404</span></li>
    </ul>
  </div>
</div>

<!-- ======= Blog Section ======= -->
<div class="contact--section pd--10-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 ptop--30 pbottom--30">
        <div class="col-md-3">
          <span class="header-font" style="font-size: 6em; font-weight: bold; color: red;">404
        </div>

        <div class="col-md-9" style="margin: auto;">
          <div class="sidebar">
            <h3 class="sidebar-title"><span style="color: red;">Rất tiếc! </span>Không tìm thấy trang đó...</h3>
            <a href="<?php echo home_url(); ?>/" type="submit" style="width: 190px;" class="btn btn-lg btn-block btn-primary">Về Trang chủ</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php
get_footer();
