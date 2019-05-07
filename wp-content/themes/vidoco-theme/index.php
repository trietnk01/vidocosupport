<?php
/*
	Home template default
*/
	get_header();
	?>
	<h1 style="display: none;"><?php echo bloginfo( "name" ); ?></h1>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="cau-hoi-thuong-gap-wrapper">
					<img src="<?php echo wp_get_upload_dir()["url"]."/icon-question.png"; ?>" class="icon-img-ivan">
					<h2 class="chtg-txt"><a href="javascript:void(0);">Câu hỏi thường gặp</a></h2>
					<div class="clr"></div>
				</div>
				<?php
				$args=array(
					"post_type"=>"zafaq",
					"orderby"=>"id",
					"order"=>"desc",
					"posts_per_page"=>6,
				);
				$the_query=new WP_Query($args);
				$source_faq=array();
				if($the_query->have_posts()){
					while($the_query->have_posts()){
						$the_query->the_post();
						$post_id=$the_query->post->ID;
						$title=get_the_title(@$post_id);
						$content = apply_filters('the_content',get_the_content( null, false ));
						$row_faq=array(
							"title"=>@$title,
							"content"=>@$content
						);
						$source_faq[]=$row_faq;
					}
					wp_reset_postdata();
					?>
					<div class="list-faqs-box">
						<div class="row">
							<div class="col-md-6">
								<ul class="ul-question">
									<?php
									$k=1;
									for ($i=0; $i < 3; $i++) {
										?>
										<li class="question-item">
											<a href="javascript:void(0);">
												<span class="number-circle"><?php echo @$k; ?></span>
												<span class="question-text"><?php echo @$source_faq[$i]["title"]; ?></span>
												<span class="angle-down"><i class="fas fa-angle-down"></i></span>
											</a>
											<div class="question-content content-off">
												<?php echo @$source_faq[$i]["content"]; ?>
											</div>
										</li>
										<?php
										$k++;
									}
									?>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="ul-question">
									<?php
									$k=4;
									for ($i=3; $i < 6; $i++) {
										?>
										<li class="question-item">
											<a href="javascript:void(0);">
												<span class="number-circle"><?php echo @$k; ?></span>
												<span class="question-text"><?php echo @$source_faq[$i]["title"]; ?></span>
												<span class="angle-down"><i class="fas fa-angle-down"></i></span>
											</a>
											<div class="question-content content-off">
												<?php echo @$source_faq[$i]["content"]; ?>
											</div>
										</li>
										<?php
										$k++;
									}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div class="view-readmore-faq">
						<a href="javascript:void(0);">
							<img src="<?php echo wp_get_upload_dir()["url"]."/icon-viewmore.png"; ?>">
							<span>Xem thêm câu hỏi</span>
						</a>
						<div class="clr"></div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<div class="huong-dan-su-dung-box">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="hdsd-sapo">
						<img src="<?php echo wp_get_upload_dir()["url"]."/icon-guide.png"; ?>" class="icon-img-ivan">
						<h2 class="chtg-txt"><a href="javascript:void(0);">Hướng dẫn sử dụng</a></h2>
						<div class="clr"></div>
					</div>
					<div class="box-assist">
						<div class="row">
							<div class="col-md-3">
								<div class="box-dai">
									<div class="guide">
										<a href="javascript:void(0);">
											<img src="<?php echo wp_get_upload_dir()["url"]."/icon-guide-1.png"; ?>">
											<div class="sapo-post">SAPO POS</div>
											<div class="sapo-post">Bán hàng tại cửa hàng</div>
										</a>
									</div>
									<ul>
										<li><a href="javascript:void(0);">Tổng quan</a></li>
										<li><a href="javascript:void(0);">Quản lý tài khoản</a></li>
										<li><a href="javascript:void(0);">Sản phẩm phân hệ mới</a></li>
										<li><a href="javascript:void(0);">Sản phẩm Sapo Pos</a></li>
										<li><a href="javascript:void(0);">Khách hàng</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-dai">
									<div class="guide">
										<a href="javascript:void(0);">
											<img src="<?php echo wp_get_upload_dir()["url"]."/icon-guide-1.png"; ?>">
											<div class="sapo-post">SAPO POS</div>
											<div class="sapo-post">Bán hàng tại cửa hàng</div>
										</a>
									</div>
									<ul>
										<li><a href="javascript:void(0);">Tổng quan</a></li>
										<li><a href="javascript:void(0);">Quản lý tài khoản</a></li>
										<li><a href="javascript:void(0);">Sản phẩm phân hệ mới</a></li>
										<li><a href="javascript:void(0);">Sản phẩm Sapo Pos</a></li>
										<li><a href="javascript:void(0);">Khách hàng</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-dai">
									<div class="guide">
										<a href="javascript:void(0);">
											<img src="<?php echo wp_get_upload_dir()["url"]."/icon-guide-1.png"; ?>">
											<div class="sapo-post">SAPO POS</div>
											<div class="sapo-post">Bán hàng tại cửa hàng</div>
										</a>
									</div>
									<ul>
										<li><a href="javascript:void(0);">Tổng quan</a></li>
										<li><a href="javascript:void(0);">Quản lý tài khoản</a></li>
										<li><a href="javascript:void(0);">Sản phẩm phân hệ mới</a></li>
										<li><a href="javascript:void(0);">Sản phẩm Sapo Pos</a></li>
										<li><a href="javascript:void(0);">Khách hàng</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-dai">
									<div class="guide">
										<a href="javascript:void(0);">
											<img src="<?php echo wp_get_upload_dir()["url"]."/icon-guide-1.png"; ?>">
											<div class="sapo-post">SAPO POS</div>
											<div class="sapo-post">Bán hàng tại cửa hàng</div>
										</a>
									</div>
									<ul>
										<li><a href="javascript:void(0);">Tổng quan</a></li>
										<li><a href="javascript:void(0);">Quản lý tài khoản</a></li>
										<li><a href="javascript:void(0);">Sản phẩm phân hệ mới</a></li>
										<li><a href="javascript:void(0);">Sản phẩm Sapo Pos</a></li>
										<li><a href="javascript:void(0);">Khách hàng</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="video-huong-dan">
					<img src="<?php echo wp_get_upload_dir()["url"]."/icon-video-guide.png"; ?>" class="icon-img-ivan">
					<h2 class="chtg-txt"><a href="javascript:void(0);">Video hướng dẫn</a></h2>
					<div class="clr"></div>
				</div>
			</div>
		</div>
		<div class="row margin-top-30">
			<div class="col-md-6">
				<?php
				$hp_video_hd_featured_video=get_field("hp_video_hd_featured_video","option");
				$args=array(
					"post_type"=>"zavideo",
					"p"=>@$hp_video_hd_featured_video
				);
				$the_query=new WP_Query($args);
				if($the_query->have_posts()){
					while ($the_query->have_posts()) {
						$the_query->the_post();
						$post_id=$the_query->post->ID;
						$permalink=get_the_permalink(@$post_id);
						$title=get_the_title(@$post_id);
						$excerpt=get_the_excerpt(@$post_id);
						$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
						$video_id=get_field("video_id",@$post_id);
						?>
						<div class="box-video">
							<a href="javascript:void(0);" class="js-modal-btn" data-video-id="<?php echo @$video_id; ?>">
								<div style="background-image: url('<?php echo @$featured_img; ?>');background-size: cover;background-repeat: no-repeat;padding-top: calc(100%/(400/200));">
									<div class="box-overlay"></div>
									<div class="box-icon">
										<div class="box-icon2"><i class="fas fa-play"></i></div>
									</div>
									<h3 class="tqpmqlbh-sapo"><?php echo @$title; ?></h3>
								</div>
							</a>
						</div>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>
			<div class="col-md-6">
				<?php
				$k=0;
				$hp_video_hd_rpt_video=get_field("hp_video_hd_rpt_video","option");
				if(count(@$hp_video_hd_rpt_video) > 0){
					foreach ($hp_video_hd_rpt_video as $key => $value) {
						$post_id=$value["hp_video_hd_item"];
						$args=array(
							"post_type"=>"zavideo",
							"p"=>@$post_id
						);
						if($k%2 == 0){
							echo '<div class="row">';
						}
						$the_query=new WP_Query($args);
						if($the_query->have_posts()){
							while ($the_query->have_posts()){
								$the_query->the_post();
								$post_id=$the_query->post->ID;
								$permalink=get_the_permalink(@$post_id);
								$title=get_the_title(@$post_id);
								$excerpt=get_the_excerpt(@$post_id);
								$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
								$video_id=get_field("video_id",@$post_id);
								?>
								<div class="col-md-6">
									<div class="box-video2">
										<a href="javascript:void(0);" class="js-modal-btn" data-video-id="<?php echo @$video_id; ?>">
											<div style="background-image: url('<?php echo @$featured_img; ?>');background-size: cover;background-repeat: no-repeat;padding-top: calc(100%/(400/200));">
												<div class="box-overlay"></div>
												<div class="box-icon">
													<div class="box-icon2"><i class="fas fa-play"></i></div>
												</div>
												<h3 class="tqpmqlbh-sapo"><?php echo @$title; ?></h3>
											</div>
										</a>
									</div>
								</div>
								<?php
							}
							wp_reset_postdata();
						}
						$k++;
						if($k%2 == 0 || $k == count(@$hp_video_hd_rpt_video)){
							echo '</div>';
						}
					}
				}
				?>
			</div>
		</div>
	</div>
	<div class="cac-kenh-ho-tro">
		<div class="container">
			<div class="row">
				<div class="col">
					<img class="kht-img" src="<?php echo wp_get_upload_dir()["url"]."/icon-sendrequest.png"; ?>">
					<h2 class="txt-ckht"><a href="javascript:void(0);">Các kênh hỗ trợ</a></h2>
					<div class="clr"></div>
					<div class="gui-ticket">Bạn vẫn cần trợ giúp, bạn hãy tạo yêu cầu hỗ trợ tại nút Gửi ticket hoặc Email: support@sapo.vn.</div>
				</div>
			</div>
			<div class="row margin-top-20">
				<div class="col-md-3">
					<div class="box-ticket">
						<a href="javascript:void(0);">
							<img src="<?php echo wp_get_upload_dir()["url"]."/icon-sendrequest-1.png"; ?>">
							<h3 class="icon-sendrequest">Hướng dẫn gửi yêu cầu hỗ trợ</h3>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-ticket">
						<a href="javascript:void(0);">
							<img src="<?php echo wp_get_upload_dir()["url"]."/icon-sendrequest-2.png"; ?>">
							<h3 class="icon-sendrequest">Kiểm tra ticket</h3>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-ticket">
						<a href="javascript:void(0);">
							<img src="<?php echo wp_get_upload_dir()["url"]."/icon-sendrequest-3.png"; ?>">
							<h3 class="icon-sendrequest2">Support@sapo.vn</h3>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-ticket">
						<a href="javascript:void(0);">
							<img src="<?php echo wp_get_upload_dir()["url"]."/icon-sendrequest-4.png"; ?>">
							<h3 class="icon-sendrequest">Cài đặt Ultraviewer/Teamviewer</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	get_footer();
	?>