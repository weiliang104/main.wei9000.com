$(function(){
	
	// banner
	var $sliderItem = $(".banner_img li");
	var $sliderTag = $(".banner_num li");
	var newI = 0;
	var newItv = setInterval(play,6000);
	$sliderTag.hover(function(){
		clearInterval(newItv);
		newI = $(this).index();
		$(this).addClass("current").siblings().removeClass("current");
		$sliderItem.eq(newI).stop().fadeTo(1000,1).siblings().hide();		
	},function(){
		newItv = setInterval(play,6000);
	});
	$sliderItem.hover(function(){
		clearInterval(newItv);
	},function(){
		newItv = setInterval(play,6000);
	});
	function play(){
		if(newI < $sliderTag.length-1){
			newI++;
			$sliderTag.eq(newI).addClass("current").siblings().removeClass("current");
			$sliderItem.eq(newI).stop().fadeTo(1000,1).siblings().hide();
		}else{
			newI=0;
			$sliderTag.eq(0).addClass("current").siblings().removeClass("current");
			$sliderItem.eq(0).stop().fadeTo(1000,1).siblings().hide();
		}
	}
	
	// min-banner
	$(function(){	
	  $("#kinMaxShow").kinMaxShow({
		  height:182,
		  button:{
				  showIndex:true,
				  normal:{width:'14px',height:'14px',lineHeight:'14px',right:'0px',bottom:'5px',fontSize:'12px',background:"#fff",color:"#333",marginRight:'6px'},
				  focus:{background:"#FE7103",color:"#fff",border:'1px solid #FE7103'}
		  }			
	  });
	});

	
});


