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
						<?php echo get_field("ft_vidoco_su_menh","option"); ?>
					</div>
				</div>
				<div class="box-menu menu-left ketabox">
					<h3 class="h3-menu">Liên hệ</h3>
					<div class="ctcpcn-vidoco limitratit"><?php echo get_bloginfo( '','raw' ); ?></div>
					<div class="ctcpcn-vidoco ghitale">M.S.D.N: <?php echo get_field("setting_thong_tin_chung_ms_doanh_nghiep","option"); ?>, Cấp tại Sở Kế hoạch đầu tư TP HCM</div>
					<div class="ctcpcn-vidoco ghitale">Trụ sở: <?php echo get_field("setting_thong_tin_chung_address","option"); ?></div>
					<div class="ctcpcn-vidoco ghitale">Hotline: <?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></div>
					<div class="ctcpcn-vidoco ghitale">Email: <?php echo get_field("setting_thong_tin_chung_email","option"); ?></div>
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
