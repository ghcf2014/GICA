// JavaScript Document

$(function(){
			var num = 0;
			var timer =null;
			var myFn = function()
			{
    			num++;
				if(num > $('.banner ol li').length -1){  num = 0;}
				$('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');
				$('.banner ul li').eq(num).stop().fadeIn().siblings().fadeOut();
    		}
			timer =setInterval(myFn,2500);
			
			$('.banner').mouseover(function(e) {
                clearInterval(timer);
            }).mouseout(function(e) {
				clearInterval(timer);
                timer = setInterval(myFn,2500);
            });
			
    		$('.banner ol li').mouseover(function(e) {
                $('.banner ul li').eq($(this).index()).stop().fadeIn().siblings().fadeOut();
				$(this).addClass('current').siblings().removeClass('current');
				num = $(this).index();
            });
    	})
