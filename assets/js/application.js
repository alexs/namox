function show_trade_fields(){
	type_value = $("#Book_ad_type_id option:selected").val();

	if (type_value == 5){
		$('.row_trade').slideDown();
		if (typeof $title === 'defined' && $title.length > 0)
		$('#Book_trade_title').val($title);
		if (typeof $author === 'defined' && $author.length > 0)
		$('#Book_trade_author').val($author);
		if (typeof $subject === 'defined' && $subject.val() > 0)
		$('#Book_trade_subject_id option[value='+$subject+']').attr('selected', 'selected');
	}
	else{
		$title = $('#Book_trade_title').val();
		$author = $('#Book_trade_author').val();
		$subject = $('#Book_trade_subject_id').val();	
		$('.row_trade').slideUp();
		$('#Book_trade_title').val('');
		$('#Book_trade_author').val('');
		$('#Book_trade_subject_id option:first-child').attr("selected", "selected");
		}
	
};

$(document).ready(function() {
	type_value = $("#Book_ad_type_id option:selected").val();
	if (type_value == 5)
	$('.row_trade').slideDown();
	else
	$('.row_trade').slideUp();
});