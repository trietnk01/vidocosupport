<?php
get_header();
$post_id=0;
$title="";
$permalink="";
$excerpt="";
$featured_img="";
$source_term_id=array();
if(have_posts()){
	while (have_posts()) {
		the_post();
		$post_id= get_the_id();
		$title=get_the_title(@$post_id);
		$permalink=get_the_permalink( @$post_id );
		$excerpt=get_field("single_article_excerpt",@$post_id);
		$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
		$source_term = wp_get_object_terms( $post_id,  'category' );
        if(count($source_term) > 0){
            foreach ($source_term as $key => $value) {
                $source_term_id[]=$value->term_id;
            }
        }
	}
	wp_reset_postdata();
}
?>
<div class="container">
	<?php include get_template_directory()."/block/block-breadcrumb.php"; ?>
	<div class="row">
		<div class="col">
			<div class="box-post" itemscope itemtype="http://schema.org/NewsArticle">
				<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
				<h1 class="post-title" itemprop="headline"><?php echo @$title; ?></h1>
				<!-- begin schema -->
				<p style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person"> By <span itemprop="name">DienKim</span>
				</p>
				<p style="display: none;" itemprop="description"><?php echo @$title; ?></p>
				<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" style="display: none;">
					<img src="<?php echo @$featured_img; ?>"/>
					<meta itemprop="url" content="<?php echo @$featured_img; ?>">
					<meta itemprop="width" content="800">
					<meta itemprop="height" content="800">
				</div>
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display: none;">
					<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
						<img src="<?php echo @$featured_img; ?>"/>
						<meta itemprop="url" content="<?php echo @$featured_img; ?>">
						<meta itemprop="width" content="600">
						<meta itemprop="height" content="60">
					</div>
					<meta itemprop="name" content="Google">
				</div>
				<meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00" style="display: none;" />
				<meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00" style="display: none;" />
				<!-- end schema -->
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
				<div class="post-exceprt">
					<?php echo @$excerpt; ?>
				</div>
				<div class="post-content">
					<?php
					if(have_posts()){
						while (have_posts()){
							the_post();
							the_content( null, false );
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
				<?php
				$args = array(
					'post_type' => 'post',
					'orderby' => 'id',
					'order'   => 'DESC',
					'posts_per_page' => 6,
					'post__not_in'=>array($post_id),
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'term_id',
							'terms'    => @$source_term_id,
						),
					),
				);
				$the_query=new WP_Query($args);
				if($the_query->have_posts()){
					?>
					<div class="post-related-title">
						Tin liên quan
					</div>
					<ul class="post-related-lst">
						<?php
						while ($the_query->have_posts()){
							$the_query->the_post();
							$postID= get_the_id();
							$permalink=get_the_permalink($postID);
							$title=get_the_title($postID);
							?>
							<li><a href="<?php echo @$permalink; ?>"><span><i class="fas fa-chevron-right"></i></span><span><?php echo @$title; ?></span></a></li>
							<?php
						}
						wp_reset_postdata();
						?>
					</ul>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>