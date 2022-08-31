<?php
/*
 Template Name: Đăng bài
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */


get_header();
?>

<?php if (is_user_logged_in()) {
    $user_id = get_current_user_id();
    $current_user = wp_get_current_user();
    $vnkings =  $current_user->user_level;
    if ($vnkings <= 2) {
        $vnstatus = "pending";
    } else {
        $vnstatus = "publish";
    }
?>
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url(); ?>/" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
                <li class="active"><span>Đăng Bài</span></li>
            </ul>
        </div>
    </div>

    <div class="contact--section pd--10-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ptop--30 pbottom--30">
                    <div class="comment--form">
                        <div class="comment-respond" 　id="vnkings_postBox">

                            <div id="vnkings_postBox">
                                <form id="new_post" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                    <div>
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <label for="post_content">Tiêu Đề</label>
                                                <input type="text" name="post_title" required="" class="form-control" placeholder="Tiêu đề">
                                            </div>

                                            <div class="form-group vnking_pd col-md-6">
                                                <label for="post_content">Danh mục</label>
                                                <?php $categories = wp_dropdown_categories("echo=0&hide_empty=0&selected=&exclude=1,19,21");
                                                preg_match_all('/\s*<option class="(\S*)" value="(\S*)">(.*)<\/option>\s*/', $categories, $matches, PREG_SET_ORDER);
                                                echo "<select id='post_category' class='form-control' name='post_category'>";
                                                foreach ($matches as $match) {
                                                    echo "<option value='{$match[2]}'>{$match[3]}</option>";
                                                }
                                                echo "</select><br />\n";
                                                ?>
                                            </div>



                                            <div class="col-md-12">
                                                <?php wp_editor('', 'userpostcontent', array('textarea_name' => 'post_content')); ?>
                                            </div>


                                            <div class="col-md-3">
                                                <p><img id="output_avatar" /></p>
                                                <script>
                                                    var loadFile = function(event) {
                                                        var output = document.getElementById('output_avatar');
                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                        $('#output_avatar').addClass('active-avatar');
                                                    };
                                                </script>
                                                <span class="btn btn-default btn-file">Hình ảnh bài viết <input class="input-file"  accept="image/*" name="file" type="file" class="file" onchange="loadFile(event)">
                                                </span>
                                            </div>
                                            <input type="hidden" name="add_new_post" value="post" />
                                            <?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">Đăng Bài</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['add_new_post']) && current_user_can('level_0') && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce')) {
        if (isset($_POST['post_title'])) {
            $post_title = $_POST['post_title'];
        }
        if (isset($_POST['post_content'])) {
            $post_content = $_POST['post_content'];
        } else {
            echo 'Vui lòng nhập nội dung';
        }
        if (isset($_POST['post_category'])) {
            $post_category = $_POST['post_category'];
        }

        $post = array(
            'post_title'    => wp_strip_all_tags($post_title),
            'post_content'  => $post_content,
            'post_category' => array($post_category),
            'post_status'   => $vnstatus,
            'post_type' => 'post',
        );
        
        $vnkings_post_id = wp_insert_post($post);

        if ($_FILES) {
            foreach ($_FILES as $file => $array) {
                $newupload = insert_attachment($file, $vnkings_post_id);
            }
        }
        echo '<div class="alert alert-success"><strong>Bạn đã đăng bài thành công!</strong></div>';
    } ?>

<?php } else { ?>
    <div class="formdangnhap">
        <?php wp_login_form(); ?>
    </div>
<?php } ?>


<?php get_footer(); ?>