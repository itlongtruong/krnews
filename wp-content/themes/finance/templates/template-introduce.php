<?php

/**
 * Template Name: Introduce Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
?>
<?php get_template_part( 'template-parts/content/partner-news-hot' ); ?>
<div class="main--breadcrumb">
   <div class="container">
      <ul class="breadcrumb">
         <li><a href="<?php echo home_url(); ?>/" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
         <li class="active"><span>Liên Hệ</span></li>
      </ul>
   </div>
</div>
<div class="contact--section pd--10-0">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 ptop--30 pbottom--30">
                <div class="contact--info">
                    <ul class="nav">
                        <li>
                            <div class="title">
                                <h3 class="h5"><i class="fa fa-phone-square"></i>Số Điện Thoại:</h3>
                            </div>
                            <div class="content">
                                <p><a href="tel:0055667788991122">0988725058</a></p>
                             
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h3 class="h5"><i class="fa fa-envelope-open"></i>E-mail:</h3>
                            </div>
                            <div class="content">
                                <p><a href="mailto:example@example.com">truonglong12a1@gmail.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h3 class="h5"><i class="fa fa-map-marker"></i>Địa Chỉ:</h3>
                            </div>
                            <div class="content">
                                <p>House - 896, East Shewrapara</p>
                                <p>Kafrul, Dhaka -1219, Bangladesh</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 ptop--30 pbottom--30">
                <div class="comment--form">
                    <div class="comment-respond">
                        <form action="forms/contact-form.php" data-form="ajax" novalidate="novalidate">
                            <div class="status"></div>
                            <div class="row">
                                <div class="col-xs-6 col-xxs-12"> <label> <span>Họ Và Tên: *</span> <input type="text" name="name" class="form-control" required="" aria-required="true"> </label> <label> <span>Email: *</span> <input type="email" name="email" class="form-control" required="" aria-required="true"> </label> <label> <span>Số Điện Thoại:</span> <input type="text" name="website" class="form-control"> </label> </div>
                                <div class="col-xs-6 col-xxs-12"> <label> <span>Bình Luận: *</span> <textarea name="message" class="form-control" required="" aria-required="true"></textarea> </label> </div>
                                <div class="col-md-12 text-right"> <button type="submit" class="btn btn-primary">Gửi</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>