$(document).ready(function(){
	$(".uslugi a").on('click', function(e){
		e.preventDefault();
		var id = $(this).attr("id");
		$("#div-uslugi").load("doc/servises.html #"+id+"");
	});
	
	var li = $(".uslugi a") 
	li.click(function(){ 
		$(this).toggleClass("bg_menu_active") 
		li.not(this).removeClass("bg_menu_active"); 
	}); 
}); 