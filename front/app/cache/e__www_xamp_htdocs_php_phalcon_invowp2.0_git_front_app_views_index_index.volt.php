
<style type="text/css">
.js {
	width:90%;
	margin:10px auto 0 auto;
}
.js p {
	padding:5px 0;
	font-weight:bold;
	overflow:hidden;
}
.js p span {
	float:right;
}
.js p span a {
	color:#f00;
	text-decoration:underline;
}
.js textarea {
	height:100px;
	width:98%;
	padding:5px;
	border:1px solid #ccc;
	border-top:2px solid #aaa;
	border-left:2px solid #aaa;
}
/* 本例子css */
		.slideGroup {
	width:1000px;
	height: 260px;
	text-align:left;
	margin: 0px auto;
	background: #B0E4FC;
	position: relative;
}
.slideGroup .parHd {
	width: 100%;
	height:60px;
	line-height:60px;
	background:#f4f4f4;
	position:relative;
	background: #fff url(hbjy/img/box1_bj.jpg) no-repeat right center;
}
.slideGroup .parHd ul {
	width: 100%;
	height:60px;
}
.slideGroup .parHd ul li {
	width: 150px;
	height: 60px;
	float:left;
	padding:0 5px;
	cursor:pointer;
	font-size: 15px;
	font-family: "Microsoft YaHei";
	font-weight: bold;
}
.slideGroup .parHd ul li.on {
	height:60px;
	color: red;
}
.slideGroup .slideBox {
	/*width: 96.8%;*/
			/*height: 200px;*/
			overflow:hidden;
	zoom:1;
	/*padding:10px 0 10px 42px; */
			position:relative;
	margin: 0px auto;/*padding: 0px 8px;*/
			/*background: url(img/box2_bj.jpg) repeat-x;*/
			/*background: red;*/
		}
.slideGroup .sPrev, .slideGroup .sNext {
	position:absolute;
	left:5px;
	top:10px;
	display:block;
	width:30px;
	height:94px;
	border:1px solid #ddd;
	background:url(images/icoLeft.gif) center center no-repeat #f4f4f4;
}
.slideGroup .sNext {
	left:auto;
	right:5px;
	background:url(images/icoRight.gif) center center no-repeat #f4f4f4;
}
.slideGroup .sPrev:hover, .slideGroup .sNext:hover {
	border-color:#f60;
}
.slideGroup .parBd {
	width: 96%;
	height: 180px;
	margin: 0 auto;
	overflow: hidden;
	padding: 20px 1% 0 1%;
	background: url(hbjy/img/box2_bj.jpg) repeat-x 0 5px;
	overflow: hidden;/*background: red;*/
		}
.slideGroup .parBd ul {
	overflow:hidden;
	zoom:1;
}
.slideGroup .parBd ul li {
	float:left;
	_display:inline;
	overflow:hidden;
	text-align:center;
}
.jc {
	width: 388px;
	height: 110px;
	border: 2px solid #BADAE9;
	margin: 0px auto;
}
.jc ul li {
	width: 89px;
	height: 102px;
	margin: 4px 4px;
}
.jf {
	width: 570px;
}
#slideBox5 .cd_2Cflg ul li {
	width: 169px;
	margin: 6px 9px;
}
#slideBox5 .cd_2Cflg ul li img {
	max-width: 169px;
	max-height: 97px;
 width:expression(document.body.clientWidth > 169?"169px":"auto" );
}
</style>



<section class="banner">
    <div class="circle"><div class="circle-m"><span class=""></span><span class="cir-act"></span><span></span></div></div><ul>
      <li style="display: none;"><a href="http://www.hbedup.com/" target="_blank"><img src="hbjy/img/Img_QLhOMbUCxJ20130823103741.jpg" width="100%"></a></li>
<li><a href="http://www.hbedup.com/library_show.php?id=1591" target="_blank"><img src="hbjy/img/Img_x8JaZckDT820131219153851.jpg" width="100%"></a></li>
<li style="display: none;"><a href="http://www.hbedup.com/index.php#" target="_blank"><img src="hbjy/img/Img_Nflxd0Lkyb20130823103807.jpg" width="100%"></a></li>
    </ul>
    <div class="arc"></div>
  </section>






<section class="main">
  <div class="slideGroup">
    <div class="parHd">
      <ul>
        <li class="c_01 on">新闻</li>
<li class="c_02">教材</li>
<li class="c_03">教辅</li>
<li class="c_04">图书</li>
<li class="c_05">营销策划</li>
      </ul>
    </div>
    <!-- parHd End -->
    <div class="parBd">
      <!-- 教材 -->
            <div class="slideBox" id="slideBox1">
        <!-- 教辅 -->
<div class="cd_1L cd_1LCR cd5L">
  <div class="cd_tit"> <span>本社新闻</span> </div>
  <ol class="cd5UL">
        <li><span>[2014-06-26]</span><a href="http://www.hbedup.com/news_info.php?id=1811" target="_blank">“新教育实验操作手册”编写工作启动...</a>
            <img src="hbjy/img/new.png">
          </li>
        <li><span>[2014-06-12]</span><a href="http://www.hbedup.com/news_info.php?id=1781" target="_blank">著名教育家、民进中央副主席朱永新先...</a>
            <img src="hbjy/img/new.png">
          </li>
        <li><span>[2014-05-30]</span><a href="http://www.hbedup.com/news_info.php?id=1777" target="_blank">我社召开专题组织生活会暨党委中心组...</a>
          </li>
        <li><span>[2014-05-30]</span><a href="http://www.hbedup.com/news_info.php?id=1776" target="_blank">我社召开2014年新员工入职座谈会</a>
          </li>
        <li><span>[2014-05-23]</span><a href="http://www.hbedup.com/news_info.php?id=1759" target="_blank">谢军湖北签售会风采</a>
          </li>
      </ol>
</div>
<div class="cd5_2C cd_1LCR">
  <div class="cd_tit"> <span>媒体聚焦</span> </div>
  <div class="cd_2Cflg">
    <div class="tempWrap" style="overflow:hidden; position:relative; width:555px"><ul style="width: 4995px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1665px;"><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1693" target="_blank"><img src="hbjy/img/Img_EbsNX06Wqi20140327153408.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1684" target="_blank"><img src="hbjy/img/Img_iAgjDBXdVr20140325153110.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1683" target="_blank"><img src="hbjy/img/Img_d0giyfmZUA20140325151448.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1682" target="_blank"><img src="hbjy/img/Img_VwyF2wWSgB20140325150010.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1628" target="_blank"><img src="hbjy/img/Img_R1tCFCwlul20140115171516.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1627" target="_blank"><img src="hbjy/img/Img_LFD2ZdIHKa20140115151850.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1623" target="_blank"><img src="hbjy/img/Img_thmcrXrpFq20140113105439.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1622" target="_blank"><img src="hbjy/img/Img_yYSrwqq5G920140113105157.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1621" target="_blank"><img src="hbjy/img/Img_TCoVolOu4F20140113101607.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1620" target="_blank"><img src="hbjy/img/Img_4jwTHNDeuZ20140113100113.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1782" target="_blank"><img src="hbjy/img/Img_FTGXq94G7I20140612152835.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1758" target="_blank"><img src="hbjy/img/Img_kudHf7AFj120140523151519.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1745" target="_blank"><img src="hbjy/img/Img_hKRuNvtlGc20140507154157.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1717" target="_blank"><img src="hbjy/img/Img_2OkONz2LUF20140424115346.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1716" target="_blank"><img src="hbjy/img/Img_0Feg5kJSO620140424113948.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1693" target="_blank"><img src="hbjy/img/Img_EbsNX06Wqi20140327153408.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1684" target="_blank"><img src="hbjy/img/Img_iAgjDBXdVr20140325153110.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1683" target="_blank"><img src="hbjy/img/Img_d0giyfmZUA20140325151448.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1682" target="_blank"><img src="hbjy/img/Img_VwyF2wWSgB20140325150010.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1628" target="_blank"><img src="hbjy/img/Img_R1tCFCwlul20140115171516.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1627" target="_blank"><img src="hbjy/img/Img_LFD2ZdIHKa20140115151850.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1623" target="_blank"><img src="hbjy/img/Img_thmcrXrpFq20140113105439.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1622" target="_blank"><img src="hbjy/img/Img_yYSrwqq5G920140113105157.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1621" target="_blank"><img src="hbjy/img/Img_TCoVolOu4F20140113101607.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1620" target="_blank"><img src="hbjy/img/Img_4jwTHNDeuZ20140113100113.jpg" height="100"></a> </li>
          <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1782" target="_blank"><img src="hbjy/img/Img_FTGXq94G7I20140612152835.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1758" target="_blank"><img src="hbjy/img/Img_kudHf7AFj120140523151519.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1745" target="_blank"><img src="hbjy/img/Img_hKRuNvtlGc20140507154157.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1717" target="_blank"><img src="hbjy/img/Img_2OkONz2LUF20140424115346.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1716" target="_blank"><img src="hbjy/img/Img_0Feg5kJSO620140424113948.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1693" target="_blank"><img src="hbjy/img/Img_EbsNX06Wqi20140327153408.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1684" target="_blank"><img src="hbjy/img/Img_iAgjDBXdVr20140325153110.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1683" target="_blank"><img src="hbjy/img/Img_d0giyfmZUA20140325151448.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1682" target="_blank"><img src="hbjy/img/Img_VwyF2wWSgB20140325150010.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1628" target="_blank"><img src="hbjy/img/Img_R1tCFCwlul20140115171516.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1627" target="_blank"><img src="hbjy/img/Img_LFD2ZdIHKa20140115151850.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1623" target="_blank"><img src="hbjy/img/Img_thmcrXrpFq20140113105439.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1622" target="_blank"><img src="hbjy/img/Img_yYSrwqq5G920140113105157.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1621" target="_blank"><img src="hbjy/img/Img_TCoVolOu4F20140113101607.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1620" target="_blank"><img src="hbjy/img/Img_4jwTHNDeuZ20140113100113.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1782" target="_blank"><img src="hbjy/img/Img_FTGXq94G7I20140612152835.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1758" target="_blank"><img src="hbjy/img/Img_kudHf7AFj120140523151519.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1745" target="_blank"><img src="hbjy/img/Img_hKRuNvtlGc20140507154157.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1717" target="_blank"><img src="hbjy/img/Img_2OkONz2LUF20140424115346.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/news_info.php?id=1716" target="_blank"><img src="hbjy/img/Img_0Feg5kJSO620140424113948.jpg" height="100"></a> </li></ul></div>
  </div>
</div>
      </div>
            <div class="slideBox" id="slideBox2" style="display: none;">

<div class="cd_1L cd_1LCR">
  <div class="cd_tit"><span>小学语文</span></div>
  <div class="cd_majon">
        <div class="cd_mLR cd_mL"><a href="http://www.hbedup.com/red_now.php?id=6"><img src="hbjy/img/Img_nncZT1UO2e20130714205826.jpg"></a></div>
    <div class="cd_mLR cd_mR">
      <h4>语文 六年级（上册）</h4>
      <p> 义务教育课程标准实验教科书鄂教版《语文》(1—6年级)，是经全国中小学教材审定委员会审查通过的小学语文... </p>
    </div>
      </div>
</div>
<!-- 滚动区域 -->
<div class="cd_1C cd_1LCR">
  <div class="cd_tit"><span>小学英语</span></div>
  <div class="jc">
    <div class="tempWrap" style="overflow:hidden; position:relative; width:388px"><ul style="width: 2328px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -776px;"><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=124" target="_blank"><img src="hbjy/img/Img_ZVEQMjQU5320130711170258.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=123" target="_blank"><img src="hbjy/img/Img_1wVVhjh3di20130711165710.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=122" target="_blank"><img src="hbjy/img/Img_15ymnL7flW20130711165133.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=129" target="_blank"><img src="hbjy/img/Img_QxXFciT1CM20130711171032.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=128" target="_blank"><img src="hbjy/img/Img_CKsu27TKjB20130711170836.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=127" target="_blank"><img src="hbjy/img/Img_KcSVQOSLjb20130711170727.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=126" target="_blank"><img src="hbjy/img/Img_ODmELT8qZk20130711170600.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=125" target="_blank"><img src="hbjy/img/Img_Z4VF3lYBhB20130711170424.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=124" target="_blank"><img src="hbjy/img/Img_ZVEQMjQU5320130711170258.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=123" target="_blank"><img src="hbjy/img/Img_1wVVhjh3di20130711165710.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=122" target="_blank"><img src="hbjy/img/Img_15ymnL7flW20130711165133.jpg" height="100"></a> </li>
          <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=129" target="_blank"><img src="hbjy/img/Img_QxXFciT1CM20130711171032.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=128" target="_blank"><img src="hbjy/img/Img_CKsu27TKjB20130711170836.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=127" target="_blank"><img src="hbjy/img/Img_KcSVQOSLjb20130711170727.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=126" target="_blank"><img src="hbjy/img/Img_ODmELT8qZk20130711170600.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=125" target="_blank"><img src="hbjy/img/Img_Z4VF3lYBhB20130711170424.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=124" target="_blank"><img src="hbjy/img/Img_ZVEQMjQU5320130711170258.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=123" target="_blank"><img src="hbjy/img/Img_1wVVhjh3di20130711165710.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=122" target="_blank"><img src="hbjy/img/Img_15ymnL7flW20130711165133.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=129" target="_blank"><img src="hbjy/img/Img_QxXFciT1CM20130711171032.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=128" target="_blank"><img src="hbjy/img/Img_CKsu27TKjB20130711170836.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=127" target="_blank"><img src="hbjy/img/Img_KcSVQOSLjb20130711170727.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=126" target="_blank"><img src="hbjy/img/Img_ODmELT8qZk20130711170600.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/red_now.php?id=125" target="_blank"><img src="hbjy/img/Img_Z4VF3lYBhB20130711170424.jpg" height="100"></a> </li></ul></div>
  </div>
</div>
<!-- 右侧文字列表区 -->
<div class="cd_1R cd_1LCR">
  <div class="cd_tit"><span>信息技术</span></div>
  <ol>
        <li><a href="http://www.hbedup.com/red_now.php?id=788" target="_blank">信息技术 七年级（上册...</a></li>
        <li><a href="http://www.hbedup.com/red_now.php?id=789" target="_blank">高中信息技术 第一册</a></li>
        <li><a href="http://www.hbedup.com/red_now.php?id=790" target="_blank">信息技术 八年级（上册...</a></li>
        <li><a href="http://www.hbedup.com/red_now.php?id=791" target="_blank">信息技术 九年级（上册...</a></li>
        <li><a href="http://www.hbedup.com/red_now.php?id=784" target="_blank">信息技术 三年级（上册...</a></li>
      </ol>
</div>
      </div>
            <div class="slideBox" id="slideBox3" style="display: none;">
        <!-- 教辅 -->
<div class="cd_1L cd_1LCR cd5L">
  <div class="cd_tit"> <span>教材全能学案</span> </div>
  <ol class="cd5UL">
        <li><span>[2013-07-24]</span><a href="http://www.hbedup.com/jf_info.php?id=1026" target="_blank">教材全能学案·思想政治必修4（人教...</a>
            <img src="hbjy/img/new.png">
          </li>
        <li><span>[2013-08-07]</span><a href="http://www.hbedup.com/jf_info.php?id=1140" target="_blank">教材全能学案·语文·九年级上册（语...</a>
            <img src="hbjy/img/new.png">
          </li>
        <li><span>[2013-07-24]</span><a href="http://www.hbedup.com/jf_info.php?id=1025" target="_blank">教材全能学案·思想政治必修3（人教...</a>
          </li>
        <li><span>[2013-09-18]</span><a href="http://www.hbedup.com/jf_info.php?id=1456" target="_blank">教材全能学案·英语必修1（人教版）</a>
          </li>
        <li><span>[2013-08-07]</span><a href="http://www.hbedup.com/jf_info.php?id=1139" target="_blank">教材全能学案·语文·八年级上册（语...</a>
          </li>
      </ol>
</div>
<div class="cd5_2C cd_1LCR">
  <div class="cd_tit"> <span>长江作业本·同步练习册</span> </div>
  <div class="cd_2Cflg">
    <div class="tempWrap" style="overflow:hidden; position:relative; width:555px"><ul style="width: 4995px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1665px;"><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1115" target="_blank"><img src="hbjy/img/Img_cNyQMAxbC720130729104021.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=71" target="_blank"><img src="hbjy/img/Img_JkJokDeGi120130626173042.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1114" target="_blank"><img src="hbjy/img/Img_SdV0AJHu9R20130729103831.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=70" target="_blank"><img src="hbjy/img/Img_5cJPao3QFw20130626172937.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1113" target="_blank"><img src="hbjy/img/Img_QjWPg7dtsj20130729103704.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=69" target="_blank"><img src="hbjy/img/Img_sE0ixpGYJ020130626172914.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1038" target="_blank"><img src="hbjy/img/Img_X3BSjbA2Vc20130725093421.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1112" target="_blank"><img src="hbjy/img/Img_8PQvqE2FmW20130729103602.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=68" target="_blank"><img src="hbjy/img/Img_cX3Mz2GG9b20130626172657.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1037" target="_blank"><img src="hbjy/img/Img_lenCyhtRwI20130725093308.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=76" target="_blank"><img src="hbjy/img/Img_sW7pVkXzA020130626173628.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=75" target="_blank"><img src="hbjy/img/Img_4NlDisBvex20130626173515.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=74" target="_blank"><img src="hbjy/img/Img_V4clITqG4b20130626173441.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=73" target="_blank"><img src="hbjy/img/Img_HTS0JOCniG20130626173335.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=72" target="_blank"><img src="hbjy/img/Img_qobzqADOMA20130626173149.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1115" target="_blank"><img src="hbjy/img/Img_cNyQMAxbC720130729104021.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=71" target="_blank"><img src="hbjy/img/Img_JkJokDeGi120130626173042.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1114" target="_blank"><img src="hbjy/img/Img_SdV0AJHu9R20130729103831.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=70" target="_blank"><img src="hbjy/img/Img_5cJPao3QFw20130626172937.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1113" target="_blank"><img src="hbjy/img/Img_QjWPg7dtsj20130729103704.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=69" target="_blank"><img src="hbjy/img/Img_sE0ixpGYJ020130626172914.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1038" target="_blank"><img src="hbjy/img/Img_X3BSjbA2Vc20130725093421.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1112" target="_blank"><img src="hbjy/img/Img_8PQvqE2FmW20130729103602.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=68" target="_blank"><img src="hbjy/img/Img_cX3Mz2GG9b20130626172657.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1037" target="_blank"><img src="hbjy/img/Img_lenCyhtRwI20130725093308.jpg" height="100"></a> </li>
          <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=76" target="_blank"><img src="hbjy/img/Img_sW7pVkXzA020130626173628.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=75" target="_blank"><img src="hbjy/img/Img_4NlDisBvex20130626173515.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=74" target="_blank"><img src="hbjy/img/Img_V4clITqG4b20130626173441.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=73" target="_blank"><img src="hbjy/img/Img_HTS0JOCniG20130626173335.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=72" target="_blank"><img src="hbjy/img/Img_qobzqADOMA20130626173149.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1115" target="_blank"><img src="hbjy/img/Img_cNyQMAxbC720130729104021.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=71" target="_blank"><img src="hbjy/img/Img_JkJokDeGi120130626173042.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1114" target="_blank"><img src="hbjy/img/Img_SdV0AJHu9R20130729103831.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=70" target="_blank"><img src="hbjy/img/Img_5cJPao3QFw20130626172937.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1113" target="_blank"><img src="hbjy/img/Img_QjWPg7dtsj20130729103704.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=69" target="_blank"><img src="hbjy/img/Img_sE0ixpGYJ020130626172914.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1038" target="_blank"><img src="hbjy/img/Img_X3BSjbA2Vc20130725093421.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1112" target="_blank"><img src="hbjy/img/Img_8PQvqE2FmW20130729103602.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=68" target="_blank"><img src="hbjy/img/Img_cX3Mz2GG9b20130626172657.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=1037" target="_blank"><img src="hbjy/img/Img_lenCyhtRwI20130725093308.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=76" target="_blank"><img src="hbjy/img/Img_sW7pVkXzA020130626173628.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=75" target="_blank"><img src="hbjy/img/Img_4NlDisBvex20130626173515.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=74" target="_blank"><img src="hbjy/img/Img_V4clITqG4b20130626173441.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=73" target="_blank"><img src="hbjy/img/Img_HTS0JOCniG20130626173335.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/jf_info.php?id=72" target="_blank"><img src="hbjy/img/Img_qobzqADOMA20130626173149.jpg" height="100"></a> </li></ul></div>
  </div>
</div>
      </div>
            <div class="slideBox" id="slideBox4" style="display: none;">

<div class="cd_1L cd_1LCR">
  <div class="cd_tit"><span>精品图书</span></div>
  <div class="cd_majon">
        <div class="cd_mLR cd_mL"><a href="http://www.hbedup.com/library_show.php?id=1710"><img src="hbjy/img/Img_pH1G5cipUn20140416101811.jpg"></a></div>
    <div class="cd_mLR cd_mR">
      <h4>《影响孩子一生的哲学阅读——规则》（有魔力的手指）（四色）</h4>
      <p> 第一、二辑共20本
魔幻森林
洞外的世界（宽容）
老榕树下的心愿（合作）
红眼睛的鼹鼠太太（简朴）... </p>
    </div>
      </div>
</div>
<!-- 滚动区域 -->
<div class="cd_1C cd_1LCR">
  <div class="cd_tit"><span>学术图书</span></div>
  <div class="jc">
    <div class="tempWrap" style="overflow:hidden; position:relative; width:388px"><ul style="width: 2328px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -776px;"><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=844" target="_blank"><img src="hbjy/img/Img_vY67d3tDfY20130809162534.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=840" target="_blank"><img src="hbjy/img/Img_aCLrrDR3Q420130716095110.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=798" target="_blank"><img src="hbjy/img/Img_P47GVqOQ9x20130713182858.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=1412" target="_blank"><img src="hbjy/img/Img_GU5TpCTXop20130826095016.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=1368" target="_blank"><img src="hbjy/img/Img_IBEckKiEHA20130823085725.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=848" target="_blank"><img src="hbjy/img/Img_XR29N3q3ct20130716161403.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=847" target="_blank"><img src="hbjy/img/Img_iKTgFZQw1820130716155430.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=846" target="_blank"><img src="hbjy/img/Img_bZwqHPOvtj20130716112720.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=844" target="_blank"><img src="hbjy/img/Img_vY67d3tDfY20130809162534.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=840" target="_blank"><img src="hbjy/img/Img_aCLrrDR3Q420130716095110.jpg" height="100"></a> </li>
            <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=798" target="_blank"><img src="hbjy/img/Img_P47GVqOQ9x20130713182858.jpg" height="100"></a> </li>
          <li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=1412" target="_blank"><img src="hbjy/img/Img_GU5TpCTXop20130826095016.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=1368" target="_blank"><img src="hbjy/img/Img_IBEckKiEHA20130823085725.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=848" target="_blank"><img src="hbjy/img/Img_XR29N3q3ct20130716161403.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=847" target="_blank"><img src="hbjy/img/Img_iKTgFZQw1820130716155430.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=846" target="_blank"><img src="hbjy/img/Img_bZwqHPOvtj20130716112720.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=844" target="_blank"><img src="hbjy/img/Img_vY67d3tDfY20130809162534.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=840" target="_blank"><img src="hbjy/img/Img_aCLrrDR3Q420130716095110.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=798" target="_blank"><img src="hbjy/img/Img_P47GVqOQ9x20130713182858.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=1412" target="_blank"><img src="hbjy/img/Img_GU5TpCTXop20130826095016.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=1368" target="_blank"><img src="hbjy/img/Img_IBEckKiEHA20130823085725.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=848" target="_blank"><img src="hbjy/img/Img_XR29N3q3ct20130716161403.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=847" target="_blank"><img src="hbjy/img/Img_iKTgFZQw1820130716155430.jpg" height="100"></a> </li><li style="float: left; width: 89px;"> <a href="http://www.hbedup.com/library_show.php?id=846" target="_blank"><img src="hbjy/img/Img_bZwqHPOvtj20130716112720.jpg" height="100"></a> </li></ul></div>
  </div>
</div>
<!-- 右侧文字列表区 -->
<div class="cd_1R cd_1LCR">
  <div class="cd_tit"><span>助学读物</span></div>
  <ol>
        <li><a href="http://www.hbedup.com/library_show.php?id=1800" target="_blank">最有趣的句子故事</a></li>
        <li><a href="http://www.hbedup.com/library_show.php?id=1799" target="_blank">最有趣的修辞故事</a></li>
        <li><a href="http://www.hbedup.com/library_show.php?id=1798" target="_blank">最有趣的成语故事</a></li>
        <li><a href="http://www.hbedup.com/library_show.php?id=1797" target="_blank">最有趣的谜语故事</a></li>
        <li><a href="http://www.hbedup.com/library_show.php?id=1796" target="_blank">最有趣的幽默故事</a></li>
      </ol>
</div>
      </div>
            <div class="slideBox" id="slideBox5" style="display: none;">
        <!-- 教辅 -->
<div class="cd_1L cd_1LCR cd5L">
  <div class="cd_tit"> <span>营销活动</span> </div>
  <ol class="cd5UL">
        <li><span>[2013-07-12]</span><a href="http://www.hbedup.com/index.php?id=1052" target="_blank">提高网络营销的28种方法</a>
            <img src="hbjy/img/new.png">
          </li>
        <li><span>[2013-07-12]</span><a href="http://www.hbedup.com/index.php?id=1053" target="_blank">数字营销的工作实务</a>
            <img src="hbjy/img/new.png">
          </li>
        <li><span>[2013-07-12]</span><a href="http://www.hbedup.com/index.php?id=1054" target="_blank">营销紧跟热点走</a>
          </li>
        <li><span>[2013-07-12]</span><a href="http://www.hbedup.com/index.php?id=1057" target="_blank">教材营销的三项比拼</a>
          </li>
        <li><span>[2013-07-12]</span><a href="http://www.hbedup.com/index.php?id=1056" target="_blank">移动互联网时代，出版社如何营销？</a>
          </li>
      </ol>
</div>
      </div>


    </div>
    <!-- parBd End -->
    <script type="text/javascript">
				/* 内层图片滚动切换 */
				// jQuery(".slideGroup .slideBox").slide({ mainCell:"ul",vis:3,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop",autoPlay:true});
				// jQuery(".slideGroup .slideBox").slide({ mainCell:"ul",vis:4,effect:"leftLoop",autoPlay:true});
				jQuery(".slideGroup #slideBox1").slide({ mainCell:"ul",vis:5,effect:"leftLoop",autoPlay:true});
				jQuery(".slideGroup #slideBox2").slide({ mainCell:"ul",vis:4,effect:"leftLoop",autoPlay:true});

				jQuery(".slideGroup #slideBox3").slide({ mainCell:"ul",vis:5,effect:"leftLoop",autoPlay:true});
				jQuery(".slideGroup #slideBox4").slide({ mainCell:"ul",vis:4,effect:"leftLoop",autoPlay:true});
				jQuery(".slideGroup #slideBox5").slide({ mainCell:"ul",vis:3,effect:"leftLoop",autoPlay:true});
				/* 外层tab切换 */
				jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
			</script>
    <div class="box_shadow"></div>
  </div>
</section>