// JavaScript Document
$(function(){
	 //alert($(window).width());
	$(document).scroll(function(){
		if($(document).scrollTop() > $('.bar_out').height()+$('.nav_out').height()+$('.jjxq_ban').height())
		{
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



































