/*
 * --------------------------------------------------------------------
 * Simple Scroller
 * by Siddharth S, www.ssiddharth.com, hello@ssiddharth.com
 * Version: 1.0, 05.10.2009 	
 * --------------------------------------------------------------------
 */

$(document).ready(function() 
{	 
	var index = 0;
	var images = $(".galleryBanner img");
	var thumbsBanner = $(".thumbsBanner img");
	var imgHeight = $(thumbsBanner).attr("height");
	thumbsBanner.slice(0,3).clone().appendTo(".thumbsBanner");
	for (i=0; i<thumbsBanner.length; i++)
	{
		$(images[i]).addClass("image-"+i);
	}
	
    $(".thumb-0").click(sift1);
    $(".thumb-1").click(sift2);
    $(".thumb-2").click(sift3);
    $(".thumb-3").click(sift4);
	//show(index);
	setInterval(sift, 5000);
   
    function sift1()
	{
		show (0);
	}
    
    function sift2()
	{
		show (1);
	}
    
    function sift3()
	{
		show (2);
	}
    
    function sift4()
	{
		show (3);
	}
	
	function sift()
	{
		if (index<(thumbsBanner.length-1)){index+=1 ; }
		else {index=0}
		show (index);
	}
	
	function show(num)
	{
		$(images).fadeOut(400);
		$(".image-"+num).stop().fadeIn(400);
		var scrollPos = (num+1)*imgHeight;
		$(".thumbsBanner").stop().animate({scrollTop: scrollPos}, 400);		
		console.log(scrollPos, "img.image-"+num);
	}
});