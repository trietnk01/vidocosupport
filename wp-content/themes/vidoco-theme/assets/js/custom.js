function changePage(page,ctrl){
	jQuery('input[name=filter_page]').val(page);
	jQuery(ctrl).closest('form')[0].submit();	
}
jQuery(document).ready(function($) {
	$(".js-modal-btn").modalVideo();
});