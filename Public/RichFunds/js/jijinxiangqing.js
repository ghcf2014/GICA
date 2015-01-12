// JavaScript Document
$(function(){
	 //alert($(window).width());
	$(document).scroll(function(){
		//alert($(document).scrollTop());
		//if($(document).scrollTop() > $('.bar_out').height()+$('.nav_out').height()+$('.jjxq_ban').height() && $(document).scrollTop() <$('.bar_out').height()+$('.nav_out').height()+$('.jjxq_ban').height()+$('.jjxq').height()-1000)
		if($(document).scrollTop() > $('.bar_out').height()+$('.nav_out').height()+$('.jjxq_ban').height())
		{
			$('.jjxq .jjxq_r .jjxq_r_top03').css('display','none');
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
			$('.jjxq .jjxq_r .jjxq_r_top03').css('display','block');
			$('.jjxq .jjxq_r').css({'position':'static'});
		}
	});	
	
	//约谈
	$('.jjxq .jjxq_r .jjxq_r_top01 .jjxq_r_btn').eq(1).hover(function(){
		$('.jjxq .jjxq_r .yuetan').show();
	},function(){
		$('.jjxq .jjxq_r .yuetan').hide();
	})
})



































