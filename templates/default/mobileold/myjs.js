// JavaScript Document
//$(function(){
$(document).ready(function(){
	
	var elem = document.getElementById('mySwipe');
	window.mySwipe = Swipe(elem, {
	  // startSlide: 4,
	   auto: 2000,
	  // continuous: true,
	  // disableScroll: true,
	  // stopPropagation: true,
	   callback: function(index, element) {
		   $('.swipe li').eq(index).addClass('current').siblings().removeClass('current');
	   },
	  // transitionEnd: function(index, element) {}
	});
	
	
	var colors=['#368ff4','#747ae8','#9556f3','#111111','#aaaaaa','#ff6779','#fff','#f3b613','#ff864a']
	
	$('.list li').each(function(index, element) {
        // $(element).css('backgroundColor',colors[index])
		index=index+1
		//$(element).css('backgroundImage','url(images/wlsj'+index+'.jpg)')
    });

})