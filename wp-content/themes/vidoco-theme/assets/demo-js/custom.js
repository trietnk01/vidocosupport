function changePage(page,ctrl){
	jQuery('input[name=filter_page]').val(page);
	jQuery(ctrl).closest('form')[0].submit();
}
function xacnhanxoa(){
	var msg="Bạn chắc chắn có muốn xóa ?";
	var xac_nhan=false;
	if(window.confirm(msg)){
		xac_nhan=true;
	}
	return xac_nhan;
}
function isNumberKey(evt){var hopLe=true;var charCode=(evt.which)?evt.which:event.keyCode;if(charCode>31&&(charCode<48||charCode>57))hopLe=false;return hopLe;}
function changePaymentMethod(ctrl) {
	var payment_method_id=jQuery(ctrl).val();
	var dataObj = {
		"action"    : "load_payment_method_info",
		"payment_method_id"     : payment_method_id,
		"security"  : security_code
	};
	jQuery.ajax({
		url         : ajaxurl,
		type        : "POST",
		data        : dataObj,
		dataType    : "json",
		success     : function(data, status, jsXHR){
			console.log(data);
			jQuery(".com-product-payment-method-content").empty();
			if(data != null){
				jQuery(".com-product-payment-method-content").html(data.content);
			}
		}
	});
}
function showDanhMucSachTrangCon(ctrl){
	var i=jQuery(ctrl).find("i");
	jQuery(i).toggleClass('fa-plus fa-minus');
	var bg_xe_menu_trang_con=jQuery(ctrl).closest('.bg-xe-menu-trang-con');
	var dm_menu=jQuery(bg_xe_menu_trang_con).find('.dm-menu-sach-trang-con');
	var ds=jQuery(dm_menu).css('display');
	if(ds=='none'){
		jQuery(dm_menu).slideDown();
	}else{
		jQuery(dm_menu).slideUp();
	}
}
function showDanhMucSanPhamChiTiet(ctrl){
	var i=jQuery(ctrl).children("i");
	jQuery(i).toggleClass('fa-plus fa-minus');
	var li_has_children=jQuery(ctrl).closest('li');
	var ul_submenu=jQuery(li_has_children).children('ul');
	var ds=jQuery(ul_submenu).css('display');
	if(ds=='none'){
		jQuery(ul_submenu).slideDown();
	}else{
		jQuery(ul_submenu).slideUp();
	}
}
function addToCart(product_id,quantity){
	var id = product_id;
	var dataObj = {
		"action"	: "add_to_cart",
		"id"		: id,
		"quantity"	: quantity,
		"security"  : security_code
	};
	jQuery.ajax({
		url			: ajaxurl,
		type		: "POST",
		data		: dataObj,
		dataType	: "json",
		success		: function(data, status, jsXHR){
			var thong_bao='Sản phẩm đã được thêm vào trong <a href="'+data.permalink+'" class="com-product-permalink-modal" >giỏ hàng</a> ';
			jQuery(".cart-total").empty();
			jQuery("div.modal-add-cart div.modal-body").empty();
			jQuery(".cart-total").text(data.total_quantity);
			jQuery("div.modal-add-cart div.modal-body").html(thong_bao);
		}
	});
}
jQuery(document).ready(function($) {
	$(".js-modal-btn").modalVideo();
	/* begin s */
	var question_item_a=$(".question-item").children('a');
	$(question_item_a).click(function(){
		var li=$(this).closest('li');
		var question_content=$(li).children('div.question-content');
		$(question_content).toggleClass('content-off content-on');
		var i_r=$(this).find('i');
		$(i_r).toggleClass('fa-angle-up fa-angle-down');
	});
	/* end s */
	/* begin s2 */
	var question_item_a2=$(".question-item2").children('a');
	$(question_item_a2).click(function(){
		var li=$(this).closest('li');
		var question_content2=$(li).children('div.question-content2');
		$(question_content2).toggleClass('content-off content-on');
		var i_r=$(this).find('i');
		$(i_r).toggleClass('fa-plus fa-minus');
	});
	/* end s2 */
	/* begin get min - max price */
	var price_min=0;
	var price_max=0;
	var source_price=null;
	var data_item={
		"action"    : "load_price_min_max"
	}
	$.ajax({
		url         : ajaxurl,
		type        : "POST",
		data 		: data_item,
		dataType 	: "json",
		async		: false,
		success     : function(data, status, jsXHR){
			price_min=parseInt(data.price_min) ;
			price_max=parseInt(data.price_max);
			source_price=[price_min,price_max];
		}
	});
	/* end get min - max price */
	/* begin filter price */
	$( "#filter-price" ).slider({
		range: true,
		min: price_min,
		max: price_max,
		values: source_price,
		slide: function( event, ui ) {
			$( "#amount" ).val( accounting.formatMoney(ui.values[0], "", 0, ".",",")  + " đ"  + " - " + accounting.formatMoney(ui.values[1], "", 0, ".",",")  + " đ" );
			var frm=$(this).closest('form');
			$(frm).find("input[name='price_min']").val(ui.values[0]);
			$(frm).find("input[name='price_max']").val(ui.values[1]);
		}
	});
	$( "#amount" ).val( accounting.formatMoney(price_min, "", 0, ".",",")   + " đ" +
		" - " + accounting.formatMoney(price_max, "", 0, ".",",")  + " đ" );
	/* end filter price */
	/* begin remove width - height attr */
	$('img').removeAttr( "width" );
	$('img').removeAttr( "height" );
	$('.wp-caption').removeAttr('style');
	/* begin remove width - height attr */
});