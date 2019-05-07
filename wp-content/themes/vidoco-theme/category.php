<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
$s="";
if(isset($_POST["s"])){
	$s=trim($_POST["s"]);
}
if(!empty(@$s)){
	$args["s"] =@$s;
}
$wp_query->query($args);
$the_query=$wp_query;
/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=10;
$pageRange=3;
$currentPage=1;
if(!empty(@$_POST["filter_page"]))          {
	$currentPage=@$_POST["filter_page"];
}
$productModel->setWpQuery($the_query);
$productModel->setPerpage($totalItemsPerPage);
$productModel->prepare_items();
$totalItems= $productModel->getTotalItems();
$arrPagination=array(
	"totalItems"=>$totalItems,
	"totalItemsPerPage"=>$totalItemsPerPage,
	"pageRange"=>$pageRange,
	"currentPage"=>$currentPage
);
$pagination=$zController->getPagination("Pagination",$arrPagination);
/* end setup pagination */
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php";?>
		</div>
		<div class="col-lg-9">
			<form class="category-box margin-bottom-15" method="POST">
				<input type="hidden" name="filter_page" value="1" />
				<h1 class="category-title">
					<?php
					if(is_search()){
						?>
						Tìm kiếm tin tức
						<?php
					}else{
						single_cat_title();
					}
					?>
				</h1>
				<?php
				if($the_query->have_posts()){
					?>
					<div class="category-box-lst-8393">
						<?php
						while ($the_query->have_posts()){
							$the_query->the_post();
							$post_id=$the_query->post->ID;
							$title=get_the_title($post_id);
							$permalink=get_the_permalink($post_id);
							$featured_img=get_the_post_thumbnail_url($post_id, 'full');
							$excerpt=get_field("single_article_excerpt",@$post_id);
							?>
							<div class="category-item-box-787378">
								<div class="category-item-featured-img">
									<a href="<?php echo @$permalink; ?>">
										<figure>
											<div style="background-image: url('<?php echo @$featured_img; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (200/166));"></div>
										</figure>
									</a>
								</div>
								<div class="category-item-info">
									<h2 class="category-item-title-732873"><a href="<?php echo @$permalink; ?>"><?php echo @$title; ?></a></h2>
									<div class="category-item-excerpt-832923">
										<?php
										echo wp_trim_words( $excerpt,13, "..." );
										?>
									</div>
								</div>
								<div class="clr"></div>
							</div>
							<?php
						}
						wp_reset_postdata();
						?>
					</div>
					<?php
					echo @$pagination->showPagination();
				}
				?>
			</form>
		</div>
	</div>
</div>
<?php
get_footer();
?>