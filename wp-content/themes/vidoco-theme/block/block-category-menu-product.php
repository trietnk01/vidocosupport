<div class="danh-muc-san-pham">
	<h2 class="menu-dmsp-title">Danh mục sản phẩm</h2>
	<?php			
	$args = array( 
		'menu'              => '', 
		'container'         => '', 
		'container_class'   => '', 
		'container_id'      => '', 
		'menu_class'        => 'menu-dmsp-ul',                             
		'echo'              => true, 
		'fallback_cb'       => 'wp_page_menu', 
		'before'            => '', 
		'after'             => '', 
		'link_before'       => '<span><i class="fas fa-chevron-right"></i></span>', 
		'link_after'        => '', 
		'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
		'depth'             => 3, 
		'walker'            => '', 
		'theme_location'    => 'category_product' ,
		'menu_li_actived'       => 'current-menu-item',
		'menu_item_has_children'=> 'menu-item-has-children',
	);
	wp_nav_menu($args);
	?>        		
	
</div>