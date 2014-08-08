
{{ assets.outputJs('new_post') }}


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
                	<div class="contentinner content-elements">

                	{{ content() }}

                    	<div class="row-fluid">

                    	    {# <form action="post/savenew" method="post"> #}

                    	    {{ form("post/savenew", "method":"post") }}



                          <div class="span9">


        						<h4 class="widgettitle nomargin shadowed">撰写新文章</h4>
        						<div class="widgetcontent bordered shadowed">
                                   <span class="field">

                                   {{ text_field('post_title', 'class': "input-block-level") }}
                                   </span>
                                </div>


                                <div class="widgetcontent">

                                </div><!--content-->


                                <h4 class="widgettitle">文章类容</h4>






                                {{ text_area('post_content', 'class':'ckeditor') }}


                                <br/>






                                <div class="widgetcontent">



                                    <div id="tabs">
                                        <ul>
                                            <li><a href="#tabs-1">Tab 1</a></li>
                                            <li><a href="#tabs-2">Tab 2</a></li>
                                            <li><a href="#tabs-3">Tab 3</a></li>
                                        </ul>
                                        <div id="tabs-1">
                                            Your content goes here for tab 1
                                        </div>
                                        <div id="tabs-2">
                                            Your content goes here for tab 2
                                        </div>
                                        <div id="tabs-3">
                                            Your content goes here for tab 3
                                             {{ text_field('setde', 'size': "30", 'class': "input-xlarge") }}

                                        </div>
                                    </div><!--#tabs-->



                                </div><!--widgetcontent-->




                          	<div class="divider30"></div>

                            </div><!--span9-->





                            <div class="span3">
                                <h4 class="widgettitle nomargin shadowed">发布</h4>
                                <div class="widgetcontent bordered shadowed">
                                    Content goes here...
                                    <p>
                                    	<input type="submit" value="Submit">
                                    </p>
                                </div>


                                <h4 class="widgettitle nomargin shadowed">形式</h4>
                                                                <div class="widgetcontent bordered shadowed">
                                                                    Content goes here...
                                                                </div>

                                <h4 class="widgettitle nomargin shadowed">分类目录</h4>
                                                                <div class="widgetcontent bordered shadowed">
                                                                     <span class="fielda">
                                                                     {{ select('parent', parents, 'using': ['id', 'description'],
                                                                        'useEmpty': true, 'emptyText': '无分类', 'emptyValue': '0', 'style':'width:100%') }}

                                                                     </span>
                                                                </div>

                                <h4 class="widgettitle nomargin shadowed">标签</h4>
                                                                <div class="widgetcontent bordered shadowed">
                                                                    Content goes here...
                                                                </div>








                            </div><!--span6-->

                            </form>

                        </div><!--row-fluid-->



                    </div><!--contentinner-->
                </div><!--maincontent-->

    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->