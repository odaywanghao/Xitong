$(document).ready(function() {

	$('a.showMore').click(function(event) {
		var posL = $(this).offset().left;
		var posT = $(this).offset().top;
		$('.hidden_menu').toggleClass('active').offset({top: posT + 21, left: posL - 33});
	});

});

function isEmail(value){
    var Reg =/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    return Reg.test(value);
}
