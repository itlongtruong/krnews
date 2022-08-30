<?php

/**
 * Template Name: News hot Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */
get_header();

?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Raleway:300,700);

  #title {
    text-align: center;
    font-size: 40px;
    margin-top: 40px;
    margin-bottom: -40px;
    position: relative;
    color: #fff;
  }



  .circles {
    background: #fff;
    text-align: center;
    position: relative;
  }

  .circles p {
    font-size: 240px;
    padding-top: 60px;
    position: relative;
    z-index: 9;
    line-height: 100%;
  }

  .circles p small {
    font-size: 40px;
    line-height: 100%;
    vertical-align: top;
  }

  .circles .circle.small {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    background: #48A9E6;
    position: absolute;
    z-index: 1;
    top: 80px;
    left: 50%;
    animation: 7s smallmove infinite cubic-bezier(1, .22, .71, .98);
    -webkit-animation: 7s smallmove infinite cubic-bezier(1, .22, .71, .98);
    animation-delay: 1.2s;
    -webkit-animation-delay: 1.2s;
  }

  .circles .circle.med {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: #48A9E6;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 10%;
    animation: 7s medmove infinite cubic-bezier(.32, .04, .15, .75);
    -webkit-animation: 7s medmove infinite cubic-bezier(.32, .04, .15, .75);
    animation-delay: 0.4s;
    -webkit-animation-delay: 0.4s;
  }

  .circles .circle.big {
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: #48A9E6;
    position: absolute;
    z-index: 1;
    top: 200px;
    right: 0;
    animation: 8s bigmove infinite;
    -webkit-animation: 8s bigmove infinite;
    animation-delay: 3s;
    -webkit-animation-delay: 1s;
  }

  @-webkit-keyframes smallmove {
    0% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 40%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }
  }

  @keyframes smallmove {
    0% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 40%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 10px;
      left: 45%;
      opacity: 1;
    }
  }

  @-webkit-keyframes medmove {
    0% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 80%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }
  }

  @keyframes medmove {
    0% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }

    25% {
      top: 300px;
      left: 80%;
      opacity: 0.7;
    }

    50% {
      top: 240px;
      left: 55%;
      opacity: 0.4;
    }

    75% {
      top: 100px;
      left: 40%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      left: 20%;
      opacity: 1;
    }
  }

  @-webkit-keyframes bigmove {
    0% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }

    25% {
      top: 100px;
      right: 40%;
      opacity: 0.4;
    }

    50% {
      top: 240px;
      right: 45%;
      opacity: 0.8;
    }

    75% {
      top: 100px;
      right: 35%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }
  }

  @keyframes bigmove {
    0% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }

    25% {
      top: 100px;
      right: 40%;
      opacity: 0.4;
    }

    50% {
      top: 240px;
      right: 45%;
      opacity: 0.8;
    }

    75% {
      top: 100px;
      right: 35%;
      opacity: 0.6;
    }

    100% {
      top: 0px;
      right: 4%;
      opacity: 0.5;
    }
  }
</style>
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
          'cat'       => $cat_id,
          'orderby'          => 'date',
          'order'            => 'DESC',

        );
        $data = get_posts($args);
        ?>
        <?php
        foreach ($data as $post) {
          $post_id = get_the_ID();
        ?>
          <li>
            <h3 class="h3"><a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a></h3>
          </li>

        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</div>
<div class="main--breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url(); ?>/" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
      <li class="active"><span>404</span></li>
    </ul>
  </div>
</div>

<div class="main-content--section pbottom--30">
  <div class="container">
    <div class="row" style="transform: none;">
      <div class="main--content col-md-8 col-sm-7" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
        <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 189.6px;">

          <div class="post--items post--items-5">
            <div class="col-md-12 col-sm-12 ptop--30">
              <section id="not-found">

                <div class="circles">
                  <p>404<br>
                    <small>Không tìm thấy trang</small></small>

                  </p>
                  <div><a class="btn btn-primary" href="<?php echo home_url(); ?>/" role="button">Về Trang Chủ</a></div>
                  <span class="circle big"></span>
                  <span class="circle med"></span>
                  <span class="circle small"></span>
                </div>
              </section>

            </div>
          </div>


          <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
            <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
              <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 2921px;"></div>
            </div>
            <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
              <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
        <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">

          <?php get_template_part('template-parts/sidebar/search-sidebar'); ?>


          <div class="widget">
            <div class="widget--title">
              <h2 class="h4">Quảng Cáo</h2>
              <i class="icon fa fa-bullhorn"></i>
            </div>
            <?php
            $ads = new WP_Query(array(
              'post_type' => 'quang-cao',
              'post_status' => 'publish',
              'orderby' => 'ID',
              'order' => 'DESC',
              'posts_per_page' => 2
            ));
            $i = 1;
            while ($ads->have_posts()) : $ads->the_post();
              $post_id = get_the_ID();
              $link_dang_ky = get_field_object('link_dang_ky', $post_id);
            ?>
              <?php if ($i == 2) {
              ?>

                <div class="widget">
                  <div class="ad--widget"> <a href="<?php echo $link_dang_ky['value']; ?> " target="_blank"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
                </div>

              <?php } ?>

            <?php $i++;
            endwhile;
            wp_reset_query(); ?>
          </div>

          <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
            <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
              <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 3370px;"></div>
            </div>
            <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
              <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>