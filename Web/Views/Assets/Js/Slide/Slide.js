/*  JD SLIDER */

/* Este parametro se agrega desde la documentacion de la libreria "jd-slider" */
$('.jd-slider').jdSlider({
	isLoop:true,
});

/* Esconder el Slide */
var toogle = false;
$(document).on("click","#btnSlide",function(){

	if (!toogle)
	{
		$(".jd-slider").slideUp("fast");
		$("#btnSlide").html('<i class="fa fa-angle-down templateColor"></i>');
		toogle = true;	
	}
	else
	{
		$(".jd-slider").slideDown("fast");
		$("#btnSlide").html('<i class="fa fa-angle-up templateColor"></i>');
		toogle = false;	
	}
})