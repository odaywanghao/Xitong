$(document).ready(function() {

	var height = $(document).height();
	var width = $(document).width();

// 点赞
	$('.heart').click(function(event) {
		var count = parseInt($(this).prev().text()); 
		if ($(this).hasClass('active')) {
			$.ajax({
				type: 'post',
				url: $(this).attr('data-url'),
				success: function(data) {
					$(event.target).removeClass('active');
					$(event.target).prev().text(count+1);
				}
			});
		} else {
			$.ajax({
				type: 'post',
				url: $(this).attr('data-url')+'/dian/1',
				success: function(data) {
					$(event.target).addClass('active');
					$(event.target).prev().text(count-1);
				}
			});
		}
	});


});