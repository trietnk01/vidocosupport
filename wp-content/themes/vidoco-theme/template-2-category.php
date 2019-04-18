<?php
/*
Template name: Template danh sách bài viết
Template Post Type: post, page
*/
get_header();
?>
<div class="container">
	<div class="row">
		<!--<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php"; ?>
			<?php include get_template_directory()."/block/block-support-online.php"; ?>
		</div>-->
		<div class="col">
			<div class="category-box">
				<h1 class="category-title">Hoạt động</h1>
				<div class="category-box-lst-8393">
					<?php 
					for($i=0;$i<6;$i++){
						?>
						<div class="category-item-box-787378">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<a href="<?php echo site_url( 'chi-tiet-bai-viet',null ); ?>">
										<figure>
											<div style="background-image: url('<?php echo wp_get_upload_dir()["url"]."/kenview-4.png"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (200/166));"></div>	
										</figure>
									</a>									
								</div>
								<div class="col-lg-8 col-md-6">
									<h2 class="category-item-title-732873"><a href="<?php echo site_url( 'chi-tiet-bai-viet',null ); ?>">KENVIEW THAM GIA HỘI CHỢ</a></h2>
									<div class="category-item-excerpt-832923">
										<?php 
										$text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";
										echo wp_trim_words( $text,64, "..." );
										?>
									</div>
									<div class="category-item-readmore-748782">
										<a href="<?php echo site_url( 'chi-tiet-bai-viet',null ); ?>">Xem chi tiết</a>
									</div>
								</div>
							</div>
						</div>
						<?php
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