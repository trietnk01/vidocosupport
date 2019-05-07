<!DOCTYPE html>
<html <?php language_attributes() ?> data-user-agent="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="<?php echo get_field("setting_thong_tin_chung_favicon","option"); ?>"/>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body >
	<header>
		<div class="logo">
			<a href="<?php echo site_url( '',null ); ?>">
				<div style="background-image: url('<?php echo wp_get_upload_dir()["url"]."/logo.png"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100%/(240/80))">

				</div>
			</a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="mmenu">
						<div id="smoothmainmenu" class="ddsmoothmenu">
							<?php
							$args = array(
								'menu'              => '',
								'container'         => '',
								'container_class'   => '',
								'container_id'      => '',
								'menu_class'        => 'main-menu',
								'echo'              => true,
								'fallback_cb'       => 'wp_page_menu',
								'before'            => '',
								'after'             => '',
								'link_before'       => '',
								'link_after'        => '',
								'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'             => 3,
								'walker'            => '',
								'theme_location'    => 'primary' ,
								'menu_li_actived'       => 'current-menu-item',
								'menu_item_has_children'=> 'menu-item-has-children',
							);
							wp_nav_menu($args);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="mobile-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				$args = array(
					'menu'              => '',
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'mobile-menu',
					'echo'              => true,
					'fallback_cb'       => 'wp_page_menu',
					'before'            => '',
					'after'             => '',
					'link_before'       => '',
					'link_after'        => '',
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'             => 3,
					'walker'            => '',
					'theme_location'    => 'primary' ,
					'menu_li_actived'       => 'current-menu-item',
					'menu_item_has_children'=> 'menu-item-has-children',
				);
				wp_nav_menu($args);
				?>
			</div>
		</nav>
	</div>
	<div class="trung-tam-tro-giup-kh-box">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tttg-text">
						<span>Trung tâm trợ giúp Khách hàng - Hotline: </span><span class="tttg-hotline">1900 6750</span>
					</div>
					<form name="frm_tim_kiem" class="frm-tim-kiem" method="POST">
						<div class="frm-textbox"><input type="text" name="s" value="<?php echo @$_POST['s']; ?>" autocomplete="off" placeholder="Nhập nội dung bạn muốn tìm kiếm"></div>
						<div class="frm-button">
							<a href="javascript:void(0);" onclick="document.forms['frm_tim_kiem'].submit();">Tìm kiếm</a>
						</div>
						<div class="clr"></div>
					</form>
				</div>
			</div>
		</div>
	</div>