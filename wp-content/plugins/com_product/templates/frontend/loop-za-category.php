<?php
                if($the_query->have_posts()){
                    ?>
                    <div class="san-pham-lst-featured-page">
                        <?php
                        $k=0;
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            $post_id=$the_query->post->ID;
                            $title=get_the_title($post_id);
                            $permalink=get_the_permalink($post_id);
                            $featured_img=get_the_post_thumbnail_url($post_id, 'full');
                            if($k%3 == 0){
                                echo '<div class="row">';
                            }
                            ?>
                            <div class="col-sm-4">
                                <div class="san-pham-box">
                                    <a href="<?php echo @$permalink; ?>">
                                        <div style="background-image: url('<?php echo @$featured_img; ?>');background-size: cover;background-repeat: no-repeat;padding-top: calc(100% / (269/287));">
                                        </div>
                                        <h3 class="product-featured-h">
                                            <?php echo @$title; ?>
                                        </h3>
                                        <div class="overlay">
                                            <div class="overlay-info">
                                                <div class="overlay-title"><?php echo @$title; ?></div>
                                                <div class="overlay-hr"></div>
                                                <div class="vong-tron">
                                                    +
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $k++;
                            if($k%3 == 0 || $k == $the_query->post_count){
                                echo '</div>';
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <?php
                    echo @$pagination->showPagination();
                }
                ?>