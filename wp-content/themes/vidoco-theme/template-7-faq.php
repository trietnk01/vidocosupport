<?php
/*
Template name: Template FAQS
Template Post Type: post, page
*/
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
$wp_query->query($args);
$the_query=$wp_query;	

/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=10;
$pageRange=3;
$currentPage=1; 
if(!empty(@$_POST["filter_page"]))          {
	$currentPage=@$_POST["filter_page"];  
}
$productModel->setWpQuery($the_query);   
$productModel->setPerpage($totalItemsPerPage);        
$productModel->prepare_items();               
$totalItems= $productModel->getTotalItems();               
$arrPagination=array(
	"totalItems"=>$totalItems,
	"totalItemsPerPage"=>$totalItemsPerPage,
	"pageRange"=>$pageRange,
	"currentPage"=>$currentPage   
);    
$pagination=$zController->getPagination("Pagination",$arrPagination); 
/* end setup pagination */
include get_template_directory()."/block/block-breadcrumb.php";
?>
<h1 style="display: none;"><?php echo bloginfo( "name" ); ?></h1>	
<div class="container box-faq">
	<div class="row">
		<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php";?>
		</div>
		<div class="col-lg-9">
			<ul class="ul-faq">
				<li class="question-item2">
					<a href="javascript:void(0);">						
						<span class="question-text">Tôi muốn đăng ký dùng thử phần mềm Sapo thì làm thế nào?</span>
						<span class="angle-down"><i class="fas fa-plus"></i></span>
					</a>
					<div class="question-content2 content-off">
						<p>Sapo là phần mềm quản lý bán hàng với nhiều tính năng thông minh, tiện lợi, dễ sử dụng nhất. Nhằm hỗ trợ bạn&nbsp;có thể trải nghiệm tất cả những tính năng này, chúng tôi đã cung cấp dịch vụ DÙNG THỬ MIỄN PHÍ 15 NGÀY. Để đăng ký dùng thử miễn phí, Bạn truy cập vào trang: sapo.vn &gt; Nhấp chọn Dùng thử miễn phí và thực hiện theo hướng dẫn tạo tài khoản <a href="/tao-tai-khoan-trai-nghiem-mien-phi-pos"><strong>tại đây</strong></a> 1</p>
					</div>
				</li>
				<li class="question-item2">
					<a href="javascript:void(0);">						
						<span class="question-text">Tôi muốn đăng ký dùng thử phần mềm Sapo thì làm thế nào?</span>
						<span class="angle-down"><i class="fas fa-plus"></i></span>
					</a>
					<div class="question-content2 content-off">
						<p>Sapo là phần mềm quản lý bán hàng với nhiều tính năng thông minh, tiện lợi, dễ sử dụng nhất. Nhằm hỗ trợ bạn&nbsp;có thể trải nghiệm tất cả những tính năng này, chúng tôi đã cung cấp dịch vụ DÙNG THỬ MIỄN PHÍ 15 NGÀY. Để đăng ký dùng thử miễn phí, Bạn truy cập vào trang: sapo.vn &gt; Nhấp chọn Dùng thử miễn phí và thực hiện theo hướng dẫn tạo tài khoản <a href="/tao-tai-khoan-trai-nghiem-mien-phi-pos"><strong>tại đây</strong></a> 2</p>
					</div>
				</li>
				<li class="question-item2">
					<a href="javascript:void(0);">						
						<span class="question-text">Tôi muốn đăng ký dùng thử phần mềm Sapo thì làm thế nào?</span>
						<span class="angle-down"><i class="fas fa-plus"></i></span>
					</a>
					<div class="question-content2 content-off">
						<p>Sapo là phần mềm quản lý bán hàng với nhiều tính năng thông minh, tiện lợi, dễ sử dụng nhất. Nhằm hỗ trợ bạn&nbsp;có thể trải nghiệm tất cả những tính năng này, chúng tôi đã cung cấp dịch vụ DÙNG THỬ MIỄN PHÍ 15 NGÀY. Để đăng ký dùng thử miễn phí, Bạn truy cập vào trang: sapo.vn &gt; Nhấp chọn Dùng thử miễn phí và thực hiện theo hướng dẫn tạo tài khoản <a href="/tao-tai-khoan-trai-nghiem-mien-phi-pos"><strong>tại đây</strong></a> 3</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>