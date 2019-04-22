<?php 
/*

Footer template

*/
?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="box-menu">					
					<h3 class="h3-menu">support.vidoco.vn</h3>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footer-menu',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 've_chung_toi' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>    			
				</div>
				<div class="box-menu menu-left">					
					<h3 class="h3-menu">Thiết kế website</h3>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footer-menu',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'thiet_ke_website' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>    			
				</div>
				<div class="box-menu menu-left">					
					<h3 class="h3-menu">SEO marketing</h3>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footer-menu',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'seo_marketing' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>    			
				</div>
				<div class="box-menu dv-ht">					
					<h3 class="h3-menu">Dịch vụ</h3>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footer-menu',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'dich_vu' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>    			
				</div>
				<div class="box-menu dv-ht2">					
					<h3 class="h3-menu">Hợp tác</h3>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footer-menu',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'hop_tac' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>    			
				</div>
				<div class="clr"></div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="box-menu ktata">					
					<h3 class="h3-menu">Trợ giúp</h3>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'footer-menu',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'tro_giup' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>    			
				</div>
				<div class="box-menu menu-left ketabox">					
					<h3 class="h3-menu">Vidoco & sứ mệnh</h3>
					<div class="box-footer-excerpt">
						Được thành lập chính thức vào tháng 7 năm 2017 và có trụ sở tại Hồ Chí Minh. Sứ mệnh của chúng tôi là cung cấp các giải pháp kinh doanh trực tuyến thiết thực cho khách hàng dựa trên đội ngũ nhân sự chuyên nghiệp, không ngừng học hỏi và sáng tạo.  
Vidoco cũng là một doanh nghiệp có trách nhiệm xã hội cung cấp các cơ hội đào tạo và việc làm cho những người có hoàn cảnh khó khăn ở Việt Nam. Chúng tôi luôn dành hơn 51% lợi nhuận của mình để phục vụ cộng đồng người yếu thế.
					</div>
				</div>
				<div class="box-menu menu-left ketabox">					
					<h3 class="h3-menu">Liên hệ</h3>
					<div class="ctcpcn-vidoco limitratit">CÔNG TY CỔ PHẦN CÔNG NGHỆ VIDOCO (VIDOCO TECHNOLOGY JSC)</div>
					<div class="ctcpcn-vidoco ghitale">M.S.D.N: 0314503741, Cấp tại Sở Kế hoạch đầu tư TP HCM</div>
					<div class="ctcpcn-vidoco ghitale">Trụ sở: 35/6 Bùi Quang Là, Phường 12, Quận Gò Vấp, Hồ Chí Minh</div>
					<div class="ctcpcn-vidoco ghitale">Hotline: 028.73.027.720</div>
					<div class="ctcpcn-vidoco ghitale">Email: hotrokhachhang@vidoco.vn</div>
					<div class="ctcpcn-vidoco ghitale">Mở cửa từ thứ 2 đến chủ nhật, tất cả các ngày trong tuần</div>
				</div>
				<div class="clr"></div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="ban-quyen">
					&copy; Bản quyền thuộc về <a href="<?php echo site_url( '',null ); ?>">Vidoco.vn</a> . 
				</div>
			</div>
		</div>
	</div>
</footer>
<?php
wp_footer();
?>
</body>
</html>
