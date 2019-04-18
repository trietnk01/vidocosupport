<?php
/*
Template name: Template liên hệ
Template Post Type: post, page
*/
get_header(); 
?>
<div class="container">
	<?php include get_template_directory()."/block/block-breadcrumb.php"; ?>
	<div class="row">
		<!--<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php"; ?>
			<?php include get_template_directory()."/block/block-support-online.php"; ?>
		</div>-->
		<div class="col">
			<h1 class="header-page">Gửi tin nhắn cho chúng tôi</h1>
			<div class="contact-body">
				<div class="row">
					<div class="col-md-6">
						<form name="frm_contact" action="" class="frm-contact"> 
							<div class="ck-contact"><input type="text" name="fullname" class="form-control" placeholder="Họ tên" required autocomplete="off"></div>
							<div class="ck-contact"><input type="text" name="phone" class="form-control" placeholder="Điện thoại" required autocomplete="off"></div>
							<div class="ck-contact"><input type="text" name="email" class="form-control" placeholder="Email" required autocomplete="off"></div>	
							<div class="ck-contact"><input type="text" name="title" class="form-control" placeholder="Tiêu đề" required autocomplete="off"></div>				
							<div class="ck-contact">
								<textarea name="message" class="form-control" cols="30" rows="10" placeholder="Nhập nội dung" required="" autocomplete="off"></textarea>
							</div>
							<div class="ck-submit">
								<a href="javascript:void(0);" onclick="contactNow(this);">Gửi</a>
								<div class="ajax_loader_2"></div>
								<div class="clr"></div>     
							</div>
							<div class="note">Cảm ơn đã đặt phòng tại khách sạn của chúng tôi . Chúng tôi sẽ liên hệ lại bạn trong thời gian sớm nhất.</div>     
						</form>
					</div>
					<div class="col-md-6">
						<div class="thong-tin-box">
							<div class="thong-tin-lien-he">
								<div class="lien-he-1">Địa chỉ liên hệ</div>
								<h2 class="lien-he-3"><?php echo get_field("setting_thong_tin_chung_address","option"); ?></h2>
							</div>
							<div class="thong-tin-lien-he">
								<div class="lien-he-1">Hotline tư vấn</div>
								<h2 class="lien-he-2"><a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></a></h2>
							</div>
							<div class="thong-tin-lien-he">
								<div class="lien-he-1">Email</div>
								<h2 class="lien-he-2"><a href="mailto:<?php echo get_field("setting_thong_tin_chung_email","option"); ?>"><?php echo get_field("setting_thong_tin_chung_email","option"); ?></a></h2>
							</div>
						</div>									
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>