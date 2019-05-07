<?php
get_header();
$post_id=0;
$title="";
$excerpt="";
$permalink="";
$featured_img="";
if(have_posts()){
    while (have_posts()) {
        the_post();
        $post_id=get_the_ID();
        $title=get_the_title(@$post_id);
        $excerpt=get_the_excerpt( @$post_id );
        $permalink=get_the_permalink( $post_id );
        $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
    }
    wp_reset_postdata();
}
?>
<div class="container">
    <?php include get_template_directory()."/block/block-breadcrumb.php"; ?>
    <div class="row">
        <!--<div class="col-lg-3">
            <?php include get_template_directory()."/block/block-category-menu-product.php"; ?>
            <?php include get_template_directory()."/block/block-support-online.php"; ?>
        </div>-->
        <div class="col">
            <div class="box-product-detail" itemscope itemtype="http://schema.org/NewsArticle">
                <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                <h1 class="product-detail-title" itemprop="headline">
                    <?php echo @$title; ?>
                </h1>
                <!-- begin schema -->
                <p style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person"> By <span itemprop="name">DienKim</span>
                </p>
                <p style="display: none;" itemprop="description"><?php echo @$title; ?></p>
                <div style="display: none;" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                    <img src="<?php echo @$featured_img; ?>"/>
                    <meta itemprop="url" content="<?php echo @$featured_img; ?>">
                    <meta itemprop="width" content="800">
                    <meta itemprop="height" content="800">
                </div>
                <div style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <img src="<?php echo @$featured_img; ?>"/>
                        <meta itemprop="url" content="<?php echo @$featured_img; ?>">
                        <meta itemprop="width" content="600">
                        <meta itemprop="height" content="60">
                    </div>
                    <meta itemprop="name" content="Google">
                </div>
                <meta style="display: none;" itemprop="datePublished" content="2015-02-05T08:00:00+08:00"/>
                <meta style="display: none;" itemprop="dateModified" content="2015-02-05T09:20:00+08:00"/>
                <!-- end schema -->
                <?php
                if(!empty(@$excerpt)){
                    ?>
                    <div class="product-detail-excerpt">
                    <?php echo @$excerpt; ?>
                    </div>
                    <?php
                }
                ?>
                <div class="product-detail-content">
                    <?php
                            if(have_posts()){
                                while (have_posts()) {
                                    the_post();
                                    the_content( null,false );
                                }
                                wp_reset_postdata();
                            }
                            ?>
                </div>
                <div class="rapidshare">
                    <div class="facebook_button">
                        <div class="fb-share-button" data-href="<?php echo @$permalink; ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    </div>
                    <div class="facebook_like_button">
                        <div class="fb-like" data-href="<?php echo @$permalink; ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                    </div>
                    <div class="category_twitter_sg"><a href="<?php echo @$permalink; ?>" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
                    <div class="category_linkedin_sg">
                        <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                        <script type="IN/Share" data-url="<?php echo @$permalink; ?>"></script>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="lien-he-tu-van-mua-hang">Liên hệ tư vấn mua hàng</div>
                <div class="cong-ty-cp"><?php echo get_bloginfo( 'name' ); ?></div>
                <ul class="ttlh-v1">
                    <li>Địa chỉ : <?php echo get_field("setting_thong_tin_chung_address","option"); ?></li>
                    <li>Mã số thuế : <?php echo get_field("setting_thong_tin_chung_mst","option"); ?>.</li>
                    <li>Website :<?php echo site_url( '', null ); ?></li>
                    <li>Hotline: <a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></a></li>
                    <li>Gmail : <a href="mailto:<?php echo get_field("setting_thong_tin_chung_email","option"); ?>"><?php echo get_field("setting_thong_tin_chung_email","option"); ?></a></li>
                </ul>
                <div class="cam-on-1">Cảm ơn quý khách đã quan tâm đến Máy Sấy Kenview.</div>
                <div class="cam-on-2">Chúc quý quý khách hàng thật nhiều sức khỏe và thành công trong sự nghiệp.</div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>