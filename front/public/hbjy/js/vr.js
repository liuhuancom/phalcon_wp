$(function(){
	/*------------------------导航*/
	// $(".nav>ul>li.nav_c").click(function(){
	// 	$(this).addClass("nav_a").siblings("li.nav_c").removeClass("nav_a");
	// });
	// $(".nav>ul>li").hover(function(){
	// 	$(this).find("div.menu1").show();
	// },function(){
	// 	$(this).find("div.menu1").hide();
	// });
	$(".nav>ul>li.nav_c").hover(function(){
		$(this).addClass("nav_a").siblings("li.nav_c").removeClass("nav_a");
		$(this).find("div.menu1").show();
	},function(){
		$(this).find("div.menu1").hide();
	});
	//内页侧边栏目
	$("nav.side>ul>li").hover(function(){
		$(this).addClass("li_act").siblings("li").removeClass("li_act");
	})
	//-------------------------------------------------------------------教材页面--teaching左侧鼠标移上效果star
	
	$(".tL>nav>ul>li").hover(function(){
		$(this).addClass("t1").siblings("li").removeClass("t1");
	});

	//-------------------------------------------------------------------教材页面--teaching左侧鼠标移上效果end
	// news_list页面各行换色
	$(".n_box2 ul li:odd").css({"background":"#F4F7FB"});
	//分页
	$(".pge a").eq(0).css({"color":"#fff"});
	$(".pge a").not(".pge3").click(function(){
		//$(this).addClass("pge2").siblings("a").removeClass("pge2");
		$(this).css({"color":"#fff","background":"#1F7BCD"}).siblings("a").not(".pge3").css({"color":"#8F6800","background":"url(../img/page_bj.jpg) repeat-x"});
	});
	// 教辅页面 jf唰选
	$(".jf_02>dl>dd>a").click(function(){
		$(this).addClass("jf_h").siblings("a").removeClass("jf_h");
	});

	// ---------------------------------------------new图片滚动
	// $(".info2 a").hover(function(){
	// 	$(this).addClass("info_act").siblings("a").removeClass("info_act");
	// });
	var sw=0;
	var idx=$(".info2 a").length;

	$(".info2 a").mouseover(function(){
		$(this).addClass("info_act").siblings("a").removeClass("info_act");
		sw = $(this).index();
		myShow(sw);
	});
	function myShow(i){
		$(".newr>.ifo1").eq(i).show().siblings(".ifo1").hide(); 
		$(".info2 a").eq(i).addClass("info_act").siblings("a").removeClass("info_act");
		$(".newl ul li").eq(i).stop(true,true).fadeIn(600).siblings("li").hide();
	}
	//鼠标移到左边新闻栏目
	$(".newl ul").hover(function(){
		if(myTime){
		   clearInterval(myTime);
		}
	},function(){
		myTime = setInterval(function(){
		  myShow(sw)
		  sw++;
		  if(sw==idx){sw=0;}
		} , 6000);
	});
	//定时器
	var myTime = setInterval(function(){
	   myShow(sw)
	   sw++;
	   if(sw==idx){sw=0;}
	} , 6000);
	// ---------------------------------------------首页选项卡
	//$(".box1 h3").eq(0).css({"opacity":"1"}).siblings("h3").css({"opacity":"0.5"});
	$(".box1>a").css({"opacity":"0.5"}).hover(function(){
		var h3idx=$(this).index();
		//$(this).addClass("bx_act").siblings("h3").removeClass("bx_act");
		$(this).css({"opacity":"1"}).siblings("h3").css({"opacity":"0.5"});
		$(".box2_1>.cd").eq(h3idx).show().siblings(".cd").hide();
	}).eq(0).trigger("mouseover");
	// ---------------------------------------------首页大图切换
	//幻灯片
	// var w_win=$(window).width();
	//console.log(w_win);
	// $(".banner ul img").width(w_win);

	var _bx=0;
	var _bli=$(".banner>ul>li").length;
	var setTime=setInterval(function(){
	   showBigimg(_bx);
	   _bx++;
	   if(_bx==_bli){_bx=0;}
	} , 6000);
	var cir="<div class='circle'><div class='circle-m'>"
	for(var k=0; k < _bli; k++) {
		cir += "<span></span>";
	}
	cir+="</div></div>";
	$(".banner>ul").before(cir);

	//为小按钮添加鼠标滑入事件，以显示相应的内容
	$(".circle-m span").mouseover(function() {
		_bx = $(this).index();
		showBigimg(_bx);
	}).eq(0).trigger("mouseover");
	
	function showBigimg(i){
		$(".banner>ul>li").eq(i).stop(true,true).fadeIn(800).siblings("li").hide();
		$(".circle-m span").eq(i).addClass("cir-act").siblings("span").removeClass("cir-act");
	}
	// ---------------------------------------------reading页面右侧图片切换
	var hw = $(".hotL").width(); 
	var hlen = $(".hotL ul li").length; 
	var _sum = 0;
	var pict;
	
	var btn = "<div class='hotLCR hotC'>";
	for(var i=0; i < hlen; i++) {
		btn += "<span><image src='"+$(".hotL ul img").eq(i).attr("src")+"' ></span>";
	}
	btn+="</div>"
	$(".hotL").after(btn);
	
	//为小按钮添加鼠标滑入事件，以显示相应的内容
	$(".hotC span").mouseover(function() {
		// $(this).addClass("sm_bj").siblings("span").removeClass("sm_bj");
		_sum = $(this).index();
		showPic(_sum);
	}).eq(0).trigger("mouseover");

	//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
	$(".hotL ul").css("width",hw * (hlen));
	
	//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
	$(".hotC").hover(function() {
		if(pict){
		   clearInterval(pict);
		}
	},function() {
		pict = setInterval(function() {
			showPic(_sum);
			_sum++;
			if(_sum == hlen) {_sum = 0;}
		},4000); //此4000代表自动播放的间隔，单位：毫秒
	});
	var pict = setInterval(function(){
	   showPic(_sum);
	   _sum++;
	   if(_sum==hlen){_sum=0;}
	} , 4000);
	
	//显示图片函数，根据接收的index值显示相应的内容
	function showPic(index) {
		var nowLeft = -index*hw; //根据index值计算ul元素的left值
		$(".hotL ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
		$(".hotC span").eq(index).addClass("sm_bj").siblings("span").removeClass("sm_bj");
		$(".hotR .h_n").eq(index).show().siblings(".h_n").hide();
	};

	// ------------------reading2页面修改后添加的样式
	var _rid=$(".rid_hot").width();
	var _ridlen=$(".rid_hot ul li").length;
	var _rididx=0;
	var _ridtime;

	// $(".rid_pn").css({"opacity":"0.6"});
	$(".rid_pn").hover(function(){
		$(this).css({"opacity":"1"});
	},function(){
		$(this).css({"opacity":"0.6"});
	})
	//上一页按钮
	$(".rid_hot .rid_prev").click(function() {
		_rididx -= 1;
		if(_rididx == -1) {_rididx = _ridlen - 1;}
		showrid(_rididx);
	});
	//下一页按钮
	$(".rid_hot .rid_next").click(function() {
		_rididx += 1;
		if(_rididx == _ridlen) {_rididx = 0;}
		showrid(_rididx);
	});

	$(".rid_hot ul").css("width",_rid * (_ridlen));
	//console.log($(".rid_hot ul").width());
	//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
	$(".rid_hot").hover(function() {
		clearInterval(_ridtime);
	},function() {
		_ridtime = setInterval(function() {
			showrid(_rididx);
			_rididx++;
			if(_rididx == _ridlen) {_rididx = 0;}
		},4000); //此4000代表自动播放的间隔，单位：毫秒
	}).trigger("mouseleave");
	
	//显示图片函数，根据接收的index值显示相应的内容
	function showrid(index) { //普通切换
		var nowLeft = -index*_rid; //根据index值计算ul元素的left值
		$(".rid_hot ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
	};
	// 星级评分
	//通过修改样式来显示不同的星级
    $("ul.star li a").click(function(){
	     var title = $(this).attr("title");
	     // alert("您给此商品的评分是："+title);
		 var cl = $(this).parent().attr("class");
		 $(this).parent().parent().removeClass().addClass("star "+cl+"star");
		 $(this).blur();//去掉超链接的虚线框
		 return false;
	});
	//内页banner切换
	var _nt=0;
	var _subli=$(".sub_banner>ul>li").length;
	var subsetTime=setInterval(function(){
	   showSubimg(_nt);
	   _nt++;
	   if(_nt==_subli){_nt=0;}
	} , 6000);
	var subcir="<div class='sub-circle'>"
	for(var p=0; p < _subli; p++) {
		subcir += "<span>"+(p+1)+"</span>";
	}
	subcir+="</div>";
	$(".sub_banner").append(subcir);

	//为小按钮添加鼠标滑入事件，以显示相应的内容
	$(".sub-circle span").mouseover(function() {
		_nt = $(this).index();
		showSubimg(_nt);
	}).eq(0).trigger("mouseover");
	
	function showSubimg(i){
		$(".sub_banner>ul>li").eq(i).stop(true,true).fadeIn(800).siblings("li").hide();
		$(".sub-circle span").eq(i).addClass("cir-act").siblings("span").removeClass("cir-act");
	}
	/*------------------------end*/
})