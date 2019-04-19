function changePage(page,ctrl){
	jQuery('input[name=filter_page]').val(page);
	jQuery(ctrl).closest('form')[0].submit();	
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
});