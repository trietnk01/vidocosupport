<?php
/*
Template name: Template document
Template Post Type: post, page
*/
get_header();
include get_template_directory()."/block/block-breadcrumb.php";
?>
<div class="container box-doc">
	<div class="row">		
		<div class="col">
			<h1 class="xay-dung-giao-dien-website-bh">Xây dựng giao diện website bán hàng cùng Vidoco.vn</h1>
		</div>
	</div>
	<div class="row margin-top-20">
		<div class="col-md-4">
			<div class="tl-pt-gus">
				<h3 class="karazama">Tài liệu Liquid</h3>
				<div class="liquid-la-ngon-ngu">Liquid là ngôn ngữ lập trình giao diện tạo nên các giao diện của Sapo</div>
				<div class="liquid-readmore"><a href="javascript:void(0);">Xem chi tiết</a></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="tl-pt-gus">
				<h3 class="karazama">Phát triển giao diện</h3>
				<div class="liquid-la-ngon-ngu">Tìm hiểu về giao diện của Sapo và cách phát triển các giao diện này</div>
				<div class="liquid-readmore"><a href="javascript:void(0);">Xem chi tiết</a></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="tl-pt-gus">
				<h3 class="karazama">Gửi giao diện của bạn</h3>
				<div class="liquid-la-ngon-ngu">Quy trình và hướng dẫn xây dựng giao diện cùng Sapo</div>
				<div class="liquid-readmore"><a href="javascript:void(0);">Xem chi tiết</a></div>
			</div>
		</div>
	</div>
</div>
<div class="phat-trien-ung-dung">
	<h2 class="phat-trien-ud-cua-ban-mot-cach-de-dang">Phát triển ứng dụng của bạn một cách dễ dàng</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="thu-vien-lap-trinh">
					<h3 class="thu-vien-lap-trinh-va-api-mo-rong">Thư viện lập trình và API mở rộng</h3>
					<ul class="ban-hoan-toan">
						<li class="li-ban-hoan-toan">
							<span class="ban-hoan-tona-fa-check"><i class="fas fa-check"></i></span>Bạn hoàn toàn có thể tích hợp vào Sapo với hệ thống mã nguồn mở và API đã được Sapo cung cấp sẵn
						</li>
						<li class="li-ban-hoan-toan">
							<span class="ban-hoan-tona-fa-check"><i class="fas fa-check"></i></span>Bạn hoàn toàn có thể tích hợp vào Sapo với hệ thống mã nguồn mở và API đã được Sapo cung cấp sẵn
						</li>
					</ul>
					<div class="thu-vien-lt-readmore"><a href="javascript:void(0);">Xem chi tiết</a></div>
				</div>
			</div>
			<div class="col-md-6">
				<div  style="margin-top: 30px;background-image: url('<?php echo wp_get_upload_dir()["url"]."/build-app.png"; ?>');background-size: cover;background-repeat: no-repeat;padding-top: calc(100% / (468/210))"></div>
			</div>
		</div>
	</div>
</div>
<div class="ban-can-them-su-ho-tro-box">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="box-ban-can-ht">
					<div class="bcht-text">Bạn cần thêm sự hỗ trợ ?</div>
					<div class="lien-he-ngay">Liên hệ ngay</div>
					<div class="phu-trach-quan-ly-doi-tac">MS. NGA - PHỤ TRÁCH QUẢN LÝ ĐỐI TÁC</div>
					<div class="row margin-top-20">
						<div class="col-lg-6">
							<div class="phu-trach-info">
								<span><i class="fas fa-phone-square"></i></span><span class="margin-left-10">Tel: (84-24) 7308 6880 (Máy lẻ 566)</span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="phu-trach-info">
								<span><i class="fas fa-envelope"></i></span><span  class="margin-left-10">Email	: partner@sapo.vn</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="developer-helper-box">
					<img src="<?php echo wp_get_upload_dir()["url"]."/developer-help.png"; ?>">				
				</div>				
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>