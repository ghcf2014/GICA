// JavaScript Document

$(function(){
	//con_bot_l_tab
	$('.con .con_bot .con_bot_l .con_bot_l_tab .con_bot_l_tab_head li').each(function(index,element){
		$(element).click(function(){
			$(element).addClass('con_bot_l_tab_ul_cur').siblings().removeClass('con_bot_l_tab_ul_cur');
			$('.con .con_bot .con_cont_l .con_bot_l_tab   .con_bot_l_tab_conOut .con_bot_l_tab_con').eq($(element).index()).show().siblings().hide();
		});
	});
	
	
	
	//con_bot_r_tab_Out
	$('.con .con_bot .con_bot_r .con_bot_r_tab_Out .con_bot_r_tab_head li').each(function(index,element){
		$(element).click(function(){
			$(element).addClass('con_bot_r_tab_ul_cur').siblings().removeClass('con_bot_r_tab_ul_cur');
			$('.con .con_bot .con_bot_r .con_bot_r_tab_Out .con_bot_r_tab_con').eq($(element).index()).show().siblings().hide();
		});
	});
	
		
})


















