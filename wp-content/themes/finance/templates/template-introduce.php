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
<?php get_template_part('template-parts/content/partner-news-hot'); ?>
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

        <div class="row ptop--30">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249507.9798369705!2d107.72934503484811!3d12.277879709782733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31722f857a0a6f5f%3A0x3786be4394472875!2zS3LDtG5nIE7DtCwgxJDEg2sgTsO0bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2sjp!4v1661155718271!5m2!1svi!2sjp" width="1170" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        
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
                                <p>Krông Nô - Đăk Nông</p>
                               
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-9 col-sm-8 ptop--30 pbottom--30">
                <div class="comment--form">
                    <div class="comment-respond">

                        <div class="status"></div>
                        <!-- <div class="row">
                                <div class="col-xs-6 col-xxs-12">
                                    <label> <span>Họ Và Tên: *</span>
                                        <input type="text" name="name" class="form-control" required="" aria-required="true">
                                    </label>

                                    <label> <span>Email: *</span>
                                        <input type="email" name="email" class="form-control" required="" aria-required="true"> </label>

                                    <label> <span>Số Điện Thoại:</span>
                                        <input type="text" name="website" class="form-control">
                                    </label>
                                </div>
                                <div class="col-xs-6 col-xxs-12">
                                    <label> <span>Nội Dung: *</span>
                                        <textarea name="message" class="form-control" required="" aria-required="true"></textarea>
                                    </label>
                                </div>
                                <div class="col-md-12 text-right"> <button type="submit" class="btn btn-primary">Gửi</button> </div>
                            </div> -->
                        <?php
                        echo do_shortcode('[contact-form-7 id="425" title="Form Lien He"]');
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>