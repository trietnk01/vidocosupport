<div class="support-online-box">
				<div class="ho-tro-tot" style="background-image: url(<?php echo wp_get_upload_dir()["url"]."/ho-tro-truc-tuyen.png"; ?>);">
					<div class="httt">
						<div class="ho-tro">Hỗ trợ</div>
						<div class="truc-tuyen">Trực tuyến</div>
					</div>
				</div>	
				<div class="support-hotline">
					<div class="support-phone-icon"><img src="<?php echo wp_get_upload_dir()["url"]."/telephone.png"; ?>"></div>
					<div class="support-phone-number"><a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></a></div>
					<div class="clr"></div>
				</div>
				<div class="call-skype-viber-zalo">
					Call: Skype - Viber - Zalo 
				</div>
				<div class="cara-call-skype-viber-zalo">
					<span><a href="skype:<?php echo get_field('setting_thong_tin_chung_skype','option'); ?>?chat"><img src="<?php echo wp_get_upload_dir()["url"]."/skype.png"; ?>"></a></span>
					<span><a href="javascript:void(0);"><img src="<?php echo wp_get_upload_dir()["url"]."/viber.png"; ?>"></a></span>
					<span><a href="http://zalo.me/<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><img src="<?php echo wp_get_upload_dir()["url"]."/zalo.png"; ?>"></a></span>
				</div>
				<div class="support-email">
					<a href="mailto:<?php echo get_field("setting_thong_tin_chung_email","option"); ?>">Email: <?php echo get_field("setting_thong_tin_chung_email","option"); ?></a>
				</div>
			</div>