// JavaScript Document
$(function(){
	 //alert($(window).width());
	$(document).scroll(function(){
		if($(document).scrollTop() > 497)	
		{
			//alert(1);
			//$('.jjxq .jjxq_r').css({'position':'fixed','top':'0','left':'1104px'});
			if($(window).width() >1600)
			{
				$('.jjxq .jjxq_r').css({'position':'fixed','top':'0','left':'59%'});
			}
			else
			{
				$('.jjxq .jjxq_r').css({'position':'static'});
			}
			
			
		}
		else
		{
			$('.jjxq .jjxq_r').css({'position':'static'});
		}
		
	
	
	});	
})



































