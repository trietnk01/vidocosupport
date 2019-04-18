<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
$q="";
if(isset($_POST["q"])){
	$q=trim($_POST["q"]);
}
if(!empty(@$q)){		
	$args["s"] =@$q;
}	
$wp_query->query($args);

$the_query=$wp_query;	
/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=6;
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
	<?php include get_template_directory()."/block/block-breadcrumb.php"; ?>
	<div class="row">
		<div class="col">
			<?php include get_template_directory()."/block/block-search-product.php"; ?>
		</div>
	</div>
	<div class="row">
		<!--<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php"; ?>
			<?php include get_template_directory()."/block/block-support-online.php"; ?>
		</div>-->
		<div class="col">
			<form class="box-category-product" method="POST">
				<input type="hidden" name="filter_page" value="1" />
				<h1 class="box-category-product-title"><?php single_cat_title(); ?></h1>	
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
			</form>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>