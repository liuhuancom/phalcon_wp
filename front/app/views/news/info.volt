

{# 图片滚动切换 #}

<section class="banner">
    <div class="circle"><div class="circle-m"><span class=""></span><span class="cir-act"></span><span></span></div></div><ul>
      <li style="display: none;"><a href="http://www.hbedup.com/" target="_blank"><img src="{{ url('hbjy/img/Img_QLhOMbUCxJ20130823103741.jpg')}}" width="100%"></a></li>
<li><a href="http://www.hbedup.com/library_show.php?id=1591" target="_blank"><img src="{{ url('hbjy/img/Img_x8JaZckDT820131219153851.jpg') }}" width="100%"></a></li>
<li style="display: none;"><a href="http://www.hbedup.com/index.php#" target="_blank"><img src="{{ url('hbjy/img/Img_Nflxd0Lkyb20130823103807.jpg') }}" width="100%"></a></li>
    </ul>
    <div class="arc"></div>
</section>
{# /图片滚动切换 #}



<section class="RC">
  <!--左侧侧边栏部分-->
  <aside class="RC_LR L">
    <nav class="side">
				<section class="tit">
					<h1>新闻</h1>
					<span>News</span>
				</section>

                <ul><li class="li_rel li_act"><a href="news_list.php?Class_ID=11">本社新闻</a></li>
<li class="li_rel"><a href="news_list.php?Class_ID=10">媒体聚焦</a></li>
<li class="li_rel"><a href="news_list.php?Class_ID=221">行业动态</a></li>
<li class="li_rel"><a href="news_list.php?Class_ID=226">精彩书评</a></li>
<li class="li_rel"><a href="news_list.php?Class_ID=263">微博直播</a></li>
</ul>
			</nav>
			<section class="tg"><a href="zxtg.php">在线投稿，为您创建一个良好的投稿平台</a></section>


            <section class="zxpl">
            <div>

            <p>评论：<a href="topic.php?newid=1436&amp;tid=28#tp">朱永新成为湖北教育出版社首席顾问啦！恭喜啊！</a></p>

            <p>评论：<a href="topic.php?newid=1827&amp;tid=130#tp">贵单位能坚持足球活动这么多年，当真不易！！赞一个！！企业文化建设、企业建设都需要你们！</a></p>

            <p>评论：<a href="topic.php?newid=531&amp;tid=84#tp">好</a></p>

            </div>
            </section>

    <!-- <style>
            section .tg h2{background:url(../img/zxpl_h) no-repeat; width:167px; height:44px; display:block;}
			section .tg div{border-top:1px dashed #d8d8d8; padding:3px 0;}
			section .tg h3{ font-size:12px;}
			section .tg h3 a{ font-weight:600;}
			section .tg p{ color:#797979;}
            </style>
            <section class="zxpl">
            <h2> </h2>
            <div>
            <h3><a href="#">·美丽中国，放飞梦想——湖北...</a></h3>
            <p>评论：非常棒的一篇文章，我很喜欢，
很喜欢，很喜欢^_^</p>
            </div>
            </section> -->
  </aside>
  <!--右侧侧边栏部分-->
  <section class="RC_LR R">
    <div class="cookie">
				<strong>本社新闻</strong>&nbsp;&nbsp;<span></span>
				<p>
					您现在的位置：
					<a href="index.php">首页</a>
					<a href="news_list.php" class="ck">新闻</a>
					<a href="#" class="ck cks">本社新闻</a>
				</p>
			</div>

			<!--图片链接-->


{#
			<div id="full-screen-slider">
            	<ul id="slides">
            		<li style="z-index: 900; display: none; background: url(http://www.hbedup.com/uploadfile/ImgFile/2013-08/Img_EZT4gQxKy520130814103906.jpg) 50% 0% no-repeat;"><a href="#" target="_blank"> </a></li>
            <li style="z-index: 800; display: block; background: url(http://www.hbedup.com/uploadfile/ImgFile/2013-08/Img_iC9Q1r1pI320130814104202.jpg) 50% 0% no-repeat;"><a href="#" target="_blank"> </a></li>
            	</ul><ul id="pagination" style="margin-left: 422px;"><li class=""><a href="#">1</a></li><li class="current"><a href="#">2</a></li></ul>
            </div>

#}

{# 图片链接 #}

{# /图片链接 #}



    <!-- 文章 -->

    <article class="abs">
    				<h2>{{ posts.post_title }}</h2>
    				<p class="tip2">
    					<span>发布时间：2014年06月30</span>
    					<span>来源：本社</span>
    					<span>作者：{{ user }}</span>
                        <span>点击量：191次</span>
    				</p>


{{ content() }}
{{ posts.post_content }}

{% if auth %}
<br/><br/>
<a href="{{ url("../back/post/edit/"~posts.ID) }}" target="_blank">编辑</a>
<hr/>
{% endif %}


{# 文章 #}


                    <br><div class="share">
    								<!-- Baidu Button BEGIN -->
    									<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
    									<span class="bds_more">分享到：</span>
    									<a class="bds_tsina" title="分享到新浪微博" href="#"></a>
    									<a class="bds_qzone" title="分享到QQ空间" href="#"></a>
    									<a class="bds_mail" title="分享到邮件分享" href="#"></a>
    									<a class="shareCount" href="#" title="累计分享0次">0</a>
    									</div>
    									<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6723650" src="http://bdimg.share.baidu.com/static/js/bds_s_v2.js?cdnversion=391041"></script>

    									<script type="text/javascript">
    									document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
    									</script>
    								<!-- Baidu Button END -->
    							</div>

    				<div class="sw_pg">

    					<p><a href="?id=1826">上一篇：我社召开纪念中国共产党建党93周年党员大会</a></p>
    					<p><a href="?id=1811">下一篇：“新教育实验操作手册”编写工作启动会在京召开</a></p>
    				</div>
    			</article>






  </section>
  <div style="clear:both;"></div>
</section>

{{ stylesheet_link('hbjy/css/page.css') }}