

{# 图片滚动切换 #}

<section class="banner">
    <div class="circle"><div class="circle-m"><span class=""></span><span class="cir-act"></span><span></span></div></div><ul>
      <li style="display: none;"><a href="http://www.hbedup.com/" target="_blank"><img src="hbjy/img/Img_QLhOMbUCxJ20130823103741.jpg" width="100%"></a></li>
<li><a href="http://www.hbedup.com/library_show.php?id=1591" target="_blank"><img src="hbjy/img/Img_x8JaZckDT820131219153851.jpg" width="100%"></a></li>
<li style="display: none;"><a href="http://www.hbedup.com/index.php#" target="_blank"><img src="hbjy/img/Img_Nflxd0Lkyb20130823103807.jpg" width="100%"></a></li>
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



    <!-- 新闻列表 -->
    <section class="n_box2">
      <div class="n_01"></div>
      <div class="n_02"> <strong>新闻列表</strong>
          <p> <span>作者</span><span>浏览次数</span> <span>时间</span> </p>
      </div>

      <link rel="stylesheet" type="text/css" href="lg_Page/Css/Page.css">
<ul>

{{ content() }}
{% set i=0 %}
{% for p in posts.items %}

<li> {% set i+=1%}{{i}}&nbsp;&nbsp;<a href="news/info/{{ p.WpPosts.ID }}" target="_blank">{{ p.WpPosts.post_title }}</a>
          <p><span>文俊</span><span>71</span><span>2014-08-05</span></p>
        </li>

{% endfor %}




</ul>

<a href="news{% if cat %}?cat={{ cat }}{% endif %}">首页</a>
<a href="news?page=<?= $posts->before; ?>{% if cat %}&cat={{ cat }}{% endif %}">上一页</a>




<a href="news?page=<?= $posts->next; ?>{% if cat %}&cat={{ cat }}{% endif %}">下一页</a>
<a href="news?page=<?= $posts->last; ?>{% if cat %}&cat={{ cat }}{% endif %}">尾页</a>

<?php echo "一共 ", $posts->current, " / ", $posts->total_pages;  ?>





<table cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td height="30" align="center" style="font-size:12px;"><br><div class="sabrosus" style="font-family:&quot;宋体&quot;;color:#ddd"><span class="disabled">1-15/147 记录</span><span class="disabled">1/10 页</span><span class="disabled">首页</span><span class="disabled">上一页</span><span class="current">1</span><a href="/news_list.php?page=2">2</a><a href="/news_list.php?page=3">3</a><a href="/news_list.php?page=4">4</a><a href="/news_list.php?page=5">5</a><a href="/news_list.php?page=6">6</a><a href="/news_list.php?page=7">7</a><a href="/news_list.php?page=8">8</a><a href="/news_list.php?page=9">9</a><a href="/news_list.php?page=10">10</a><a href="/news_list.php?page=2">下一页</a><a href="/news_list.php?page=10">尾页</a>跳至<select name="topage" size="1" onchange="window.location=&quot;/news_list.php?page=&quot;+this.value">
<option value="1" selected="">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>页</div></td></tr></tbody></table>
    </section>
  </section>
  <div style="clear:both;"></div>
</section>

{{ stylesheet_link('hbjy/css/page.css') }}