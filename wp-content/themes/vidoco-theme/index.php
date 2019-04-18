<?php
/*
	Home template default
*/	
	get_header();		
	?>
	<h1 style="display: none;"><?php echo bloginfo( "name" ); ?></h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="kenview-1">
					<a href="javascript:void(0);">
						<figure>							
							<div style="background-image: url('<?php echo get_field("hp_bai_moi_dau_featured_img","option"); ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (368/222));">

							</div>	
						</figure>
					</a>					
				</div>
			</div>
			<div class="col-lg-9 col-md-6">
				<div class="featured-post-excerpt-block">
					<?php echo get_field("hp_bai_moi_dau_excerpt","option"); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<h2 class="san-pham">
					Sản phẩm
				</h2>				
			</div>
			<div class="col-lg-9"></div>
		</div>
		<div class="row">
			<div class="col-md-3">	
				<?php 
				$hp_muc_spt_lst_rpt=get_field("hp_muc_spt_lst_rpt","option");
				foreach ($hp_muc_spt_lst_rpt as $key => $value) {
					$post_id=$value["hp_muc_spt_item"];
					$args=array(
						"post_type"=>"zaproduct",
						"p"=>@$post_id
					);
					$the_query=new WP_Query($args);
					if($the_query->have_posts()){
						while ($the_query->have_posts()){
							$the_query->the_post();
							$post_id=$the_query->post->ID;                                                       
							$permalink=get_the_permalink(@$post_id);					
							$title=get_the_title(@$post_id);					
							$excerpt=get_the_excerpt(@$post_id);		
							$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');	
							?>
							<div class="margin-top-40">
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
						}		
						wp_reset_postdata();				
					}					
				}
				?>													
			</div>
			<div class="col-md-9">
				<?php 
				$hp_muc_spp_lst_rpt=get_field("hp_muc_spp_lst_rpt","option");
				if(count(@$hp_muc_spp_lst_rpt) > 0){
					?>
					<div class="san-pham-lst-featured">
						<?php 
						$k=0;
						foreach ($hp_muc_spp_lst_rpt as $key => $value) {
							$post_id=$value["hp_muc_spp_item"];
							$args=array(
								"post_type"=>"zaproduct",
								"p"=>@$post_id
							);
							$the_query=new WP_Query($args);
							if($the_query->have_posts()){
								while ($the_query->have_posts()){
									$the_query->the_post();
									$post_id=$the_query->post->ID;                                                       
									$permalink=get_the_permalink(@$post_id);					
									$title=get_the_title(@$post_id);					
									$excerpt=get_the_excerpt(@$post_id);		
									$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');	
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
									if($k%3 == 0 || $k == 6){
										echo '</div>';
									}									
								}
								wp_reset_postdata();
							}
						}
						?>
					</div>
					<?php
				}
				?>				
			</div>
		</div>
		<?php 
		$args=array(
			"post_type"=>"post",
			"orderby"=>"id",
			"order"=>"desc",
			"posts_per_page"=>3,
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_slug',
					'terms'    => array("hoat-dong"),                                  
				),
			),					
		);
		$the_query=new WP_Query($args); 
		if($the_query->have_posts()){
			?>
			<div class="row">
				<div class="col-lg-3">
					<h2 class="san-pham">
						Hoạt động
					</h2>				
				</div>
				<div class="col-lg-9"></div>
			</div>
			<div class="kenview-news">
				<?php 
				while($the_query->have_posts()) {
					$the_query->the_post();
					$post_id=$the_query->post->ID;                                                       
					$permalink=get_the_permalink(@$post_id);					
					$title=get_the_title(@$post_id);					
					$excerpt=get_field("single_article_excerpt",@$post_id);		
					$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');	 
					?>
					<div class="kenview-big-box">
						<div class="category-product-frontend-left">
							<a href="<?php echo @$permalink; ?>">
								<figure>
									<div style="background-image: url('<?php echo @$featured_img; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (200/166));">

									</div>	
								</figure>
							</a>					
						</div>
						<div class="category-product-frontend-right">
							<div class="kenview-box-post">
								<h3 class="kenview-post-title"><a href="<?php echo @$permalink; ?>"><?php echo @$title; ?></a></h3>
								<div class="kenview-post-excerpt">
									<?php 									
									echo wp_trim_words( $excerpt,83, "..." );
									?>
								</div>
								<div class="kenview-post-readmore">
									<a href="<?php echo @$permalink; ?>">Xem chi tiết --></a>
								</div>
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
		}		
		?>		
		<div class="row">
			<div class="col-lg-3">
				<h2 class="san-pham">
					Video
				</h2>				
			</div>
			<div class="col-lg-9"></div>
		</div>	
		<?php 
		$args=array(
			"post_type"=>"zavideo",
			"orderby"=>"id",
			"order"=>"DESC",
			"posts_per_page"=>2,
			'tax_query' => array(
				array(
					'taxonomy' => 'za_category_video',
					'field'    => 'term_slug',
					'terms'    => array("video"),                                  
				),
			),					
		);
		$the_query=new WP_Query($args); 
		if($the_query->have_posts()){
			?>
			<div class="kenview-video">
				<?php 
				while ($the_query->have_posts()) {
					$the_query->the_post();
					$post_id=$the_query->post->ID;                                                       										
					$title=get_the_title(@$post_id);										
					$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');	
					$video_id=get_field("video_id",@$post_id);
					$date_post=get_the_date('l , j F , Y H:i',@$post_id);                        
					if($k%2 == 0){
						echo '<div class="row">';
					}
					?>
					<div class="col-lg-6">
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
					<?php
					$k++;
					if($k%2 == 0 || $k == $the_query->post_count){
						echo '</div>';
					} 
				}
				wp_reset_postdata();
				?>
			</div>
			<?php			
		}
		?>		
		<div class="row">
			<div class="col">
				<div class="subcribe-email-box">
					<div class="slogan-1"><span class="slogan-1-msn">Máy sấy nhiệt</span> <span class="slogan-2-kenview">Kenview</span></div>	
					<div class="slogan-2">Giải pháp sấy khô hiệu quả cho mọi doanh nghiệp</div>		
					<form class="dang-ky-ngay-box" name="frm_subcribe">
						<div class="dang-ky-ngay-txt"><input type="text" name="email" placeholder="Nhập email của bạn..." autocomplete="off"></div>
						<div class="dang-ky-ngay-btn">
							<a href="javascript:void(0);" onclick="registerSubcriber(this);">Đăng ký ngay</a>
						</div>
						<div class="ajax-box">
							<div class="ajax_loader_1"></div>
						</div>
					</form>						
					<div class="note">Cảm ơn đã đặt phòng tại khách sạn của chúng tôi . Chúng tôi sẽ liên hệ lại bạn trong thời gian sớm nhất.</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	get_footer();
	?>