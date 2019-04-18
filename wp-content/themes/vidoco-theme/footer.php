<?php 
/*

Footer template

*/
?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="thong-tin-chung">
				<h4 class="ttctv2">Fanpage</h4>
				<div class="fanpage-box">
					<div class="fb-page" data-href="https://www.facebook.com/maysaybomnhiet/" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/maysaybomnhiet/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/maysaybomnhiet/">Máy Sấy Nông Sản Thực Phẩm Hải Sản Kenview</a></blockquote></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="thong-tin-chung footer-may-say-kho-hai-san">
				<h4 class="ttctv2">Fanpage</h4>
				<div class="fanpage-box">
					<div class="fb-page" data-href="https://www.facebook.com/Maysaycakho" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Maysaycakho" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Maysaycakho">Máy Sấy khô  Hải Sản cá khô tôm khô Kenview</a></blockquote></div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="footer-box">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="footer-title"><?php echo get_bloginfo( 'name'); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="thong-tin-chung">
					<h4 class="ttct">Thông tin công ty</h4>
					<div class="row bo-chung">						
						<div class="col-sm-3">
							<div class="footer-home">
								<i class="fas fa-home"></i>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="footer-address">
								<?php echo get_field("setting_thong_tin_chung_address","option"); ?>
							</div>
							<div class="footer-address margin-top-10">MST: <?php echo get_field("setting_thong_tin_chung_mst","option"); ?></div>
						</div>
					</div>
					<div class="row bo-chung">
						<div class="col-sm-3">
							<div class="footer-home">
								<i class="fas fa-phone"></i>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="footer-address maganet larahotline">
								Hotline: <a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></a>
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="footer-home">

							</div>
						</div>
						<div class="col-sm-9">
							<ul class="footer_social" itemscope itemtype="http://schema.org/Organization">
								<li><a itemprop="sameAs" href="<?php echo get_field("setting_thong_tin_chung_facebook","option"); ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a></li>
								<li><a itemprop="sameAs" href="<?php echo get_field("setting_thong_tin_chung_twitter","option"); ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a></li>
								<li><a itemprop="sameAs" href="<?php echo get_field("setting_thong_tin_chung_linkedin","option"); ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a itemprop="sameAs" href="<?php echo get_field("setting_thong_tin_chung_instagram","option"); ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a></li>
							</ul>					
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thong-tin-chung">
					<h4 class="ttct">Danh mục</h4>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'menu-group-footer',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'danh_muc_menu' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>        	
				</div>
			</div>
			<div class="col-md-3">
				<div class="thong-tin-chung">
					<h4 class="ttct">Liên kết nhanh</h4>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'menu-group-footer',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'lien_ket_nhanh_menu' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>        	
				</div>
			</div>
			<div class="col-md-3">

			</div>
		</div>
	</div>
</footer>
<div class="footer-v2">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="footer-v2-text">
					Copyright &copy; 2018 KENVIEW. All Rights Reserved. Designed by <a href="https://vidoco.vn">VIDOCO</a>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>" mypage="" rel="nofollow">
<div class="callnowone">
<div class="animated infinite zoomIn callnow-circle"></div>
<div class="animated infinite pulse callnow-circle-fill"></div>
<div class="animated infinite tada callnow-img-circle"></div>
</div>
</a>
<?php
wp_footer();
?>
</body>
</html>
