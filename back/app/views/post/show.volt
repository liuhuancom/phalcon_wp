
{{ assets.outputJs('post_show') }}
{{ assets.outputCss('post_show') }}


<!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>

            <div class="headerright">
            	<div class="dropdown notification">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">
                    	<span class="iconsweets-globe iconsweets-white"></span>
                    </a>
                    <ul class="dropdown-menu">
                    	<li class="nav-header">Notifications</li>
                        <li>
                        	<a href="">
                        	<strong>3 people viewed your profile</strong><br />
                            <img src="{{url('')}}img/thumbs/thumb1.png" alt="" />
                            <img src="{{url('')}}img/thumbs/thumb2.png" alt="" />
                            <img src="{{url('')}}img/thumbs/thumb3.png" alt="" />
                            </a>
                        </li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Jack</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="icon-user"></span> <strong>Bruce</strong> is now following you <small class="muted"> - 2 days ago</small></a></li>
                        <li class="viewmore"><a href="">View More Notifications</a></li>
                    </ul>
                </div><!--dropdown-->

    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">Hi,!{{ katniss.getUser() }}! <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href=""><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href=""><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('admin/end') }}"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->

            </div><!--headerright-->

    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<ul class="breadcrumb">
                <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Dashboard</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Dashboard</h1> <span>This is a sample description for dashboard page...</span>
        </div><!--pagetitle-->







<div class="maincontent">
        	<div class="contentinner">

        	    {{ content() }}

            	<h4 class="widgettitle">Dynamic Table</h4>
            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
                        <col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">排序</th>
                            <th class="head0">标题</th>
                            <th class="head1">作者</th>
                            <th class="head0">分类目录</th>
                            <th class="head1">标签</th>
                            <th class="head0">日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                          <td class="aligncenter"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td>Trident</td>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>




                        {% set i=0 %}
                        {% for post in posts %}

                        <tr class="gradeA">
                          <td class="aligncenter"><span class="center">
                            <input type="checkbox" name="post_id" value="{{ post.ID }}" />
                          </span></td>
                            <td>{% set i+=1%}{{i}}</td>
                            <td>{{ post.post_title }}
                                <div class="row-actions">
                                 <span class="edit">
                                    {{ link_to("post/edit/"~post.ID, "编辑") }} | </span>

                                    <span class="trash"><a class="submitdelete" title="移动此项目到回收站" href="http://localhost/cms/wp/wordpress/wp-admin/post.php?post=118&amp;action=trash&amp;_wpnonce=8f5f2768a8">回收站</a> | </span>
                                    <span class="view">{{ link_to("post/see/"~post.ID, "查看","target":"_blank") }}</span>
                                </div>

                            </td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">{{post.post_date}}</td>
                            <td class="center">C</td>
                        </tr>
                        {% endfor %}





                        <tr class="gradeA">
                          <td><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td>Misc</td>
                            <td>Misc</td>
                            <td>NetFront 3.4</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                    </tbody>
                </table>

                <div class="divider15"></div>

                <div class="divider15"></div>



   				<div class="divider15"></div>

   				<pre class="prettyprint linenums">
   				{{ content() }}
   				</pre>



            </div><!--contentinner-->
        </div><!--maincontent-->

    </div><!--mainright-->





    <!-- END OF RIGHT PANEL -->