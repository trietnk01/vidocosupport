<?php
get_header();
$post_id=0;
$title="";
$permalink="";
$excerpt="";
$featured_img="";
if(have_posts()){
	while (have_posts()) {
		the_post();
		$post_id= get_the_id();
		$title=get_the_title(@$post_id);
		$permalink=get_the_permalink( @$post_id );
		$excerpt=get_field("single_page_excerpt",@$post_id);
		$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
	}
	wp_reset_postdata();
}
include get_template_directory()."/block/block-breadcrumb.php";
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php";?>
		</div>
		<div class="col-lg-9">
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
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>