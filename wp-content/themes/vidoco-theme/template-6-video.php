<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
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
include get_template_directory()."/block/block-breadcrumb.php";
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php";?>
		</div>
		<div class="col-lg-9">
			<form class="category-video" method="POST">
				<input type="hidden" name="filter_page" value="1" />
				<h1 class="category-video-title"><?php single_cat_title(); ?></h1>
				<?php 
				if($the_query->have_posts()){
					?>
					<div class="category-videos-box-842823">
						<?php 
						while ($the_query->have_posts()){
							$the_query->the_post();
							$post_id=$the_query->post->ID;		
							$title=get_the_title($post_id);																
							$video_id=get_field("video_id",@$post_id);
							$featured_img=get_the_post_thumbnail_url($post_id, 'full');	 
							$date_post=get_the_date('l , j F , Y',@$post_id);       							
							?>
							<div class="row">
								<div class="col-lg-12">
									<div class="video-item-box">							
										<div class="video-pin-box">
											<a href="javascript:void(0);" class="js-modal-btn" data-video-id="<?php echo @$video_id; ?>">
												<div style="background-image: url('<?php echo @$featured_img; ?>');background-size: cover;background-repeat: no-repeat;padding-top: calc(100% / (359/199));">

												</div>	
												<div class="overlay-youtube">										
												</div>
												<div class="youtube-icon">
													<img src="<?php echo wp_get_upload_dir()["url"].'/youtube-icon.png'; ?>">
												</div>								
											</a>							
										</div>		
										<div class="video-right-box">
											<h3 class="video-item-title"><a href="javascript:void(0);" class="js-modal-btn" data-video-id="<?php echo @$video_id; ?>"><?php echo @$title; ?></a></h3>
											<div class="ngay-dang">Ngày đăng : <?php echo @$date_post; ?></div>
										</div>		
										<div class="clr"></div>									
									</div>
								</div>
							</div>							
							<?php							
						}
						wp_reset_postdata();
						?>
					</div>
					<?php
				}
				echo @$pagination->showPagination();
				?>				
			</form>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>