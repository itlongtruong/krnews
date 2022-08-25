<div class="post--items post--items-5 pd--30-0">
                        <ul class="nav">
                            <?php   
                            
                            $category = get_category(get_query_var('cat'));
                            $cat_id = $category->cat_ID;
                            $wp_query = new WP_Query(array(
                                'post_type'        => 'danh-muc',
                                'posts_per_page' => 2,
                                'paged' =>  get_query_var('paged'),
                                'cat'       => $cat_id
                            
                            ));
                            $author_id  = get_post_field( 'post_author', get_the_ID() );
                            ?>
                            <?php if ($wp_query->have_posts()) : ?>
                                <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                                    $post_id = get_the_ID();
                                ?>
                                    <li>
                                        <div class="post--item post--title-larger">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="post--img"> <a href="<?php the_permalink(); ?>" class="thumb"><img height="153px" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat"><?php $category = get_the_category();
                                                                                                                                                                                                                                                                                                echo get_primary_category($category); ?></a> </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a></li>
                                                            <li><a href="#"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></time></a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="post--content">
                                                        <p><?php the_excerpt(); ?></p>
                                                    </div>
                                                    <div class="post--action"> <a href="<?php the_permalink(); ?>">Đọc Thêm...</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>