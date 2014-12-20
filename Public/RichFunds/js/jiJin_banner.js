// JavaScript Document
$(function(){
			var num = 0;
			var timer =null;
			var myFn = function()
			{
    			num++;
				if(num > $('ol li').length - 1){ num = 0;}
				$('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');
				$('.banner .ban li').eq(num).stop().fadeIn().siblings().fadeOut();
    		}
			timer =setInterval(myFn,2500);
    		$('.banner ol li').mouseover(function(e) {
                $('.banner .ban li').eq($(this).index()).stop().fadeIn().siblings().fadeOut();
				$(this).addClass('current').siblings().removeClass('current');
				num = $(this).index();
            });
			$('.banner').mouseover(function(e) {
                clearInterval(timer);
            }).mouseout(function(e) {
				clearInterval(timer);
                timer = setInterval(myFn,2500);
            });
    	})