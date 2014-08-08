
{# assets.outputJs('post_show') #}
{# assets.outputCss('post_show') #}


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


                <div class="divider10"></div>

                <div class="liu">

                 {{ form("post/tagadd", "method":"post") }}

                <p>
                   	<label>名称</label>
                       <span class="field"><input type="text" name="tag_name" class="input-medium" placeholder="文章"></span>
                </p>
                <p>
                   <label>别名</label>
                       <span class="field"><input type="text" name="tag_slug" class="input-medium" placeholder="好文章"></span>
                </p>
                <p>
                   <label>描述</label>
                       <span class="field"><textarea name="tag_desc" cols="80" rows="5" class="span5"></textarea></span>
                </p>
                <p class="stdformbutton">
                   <button class="btn btn-primary">Submit Button</button>
                   <button type="reset" class="btn">Reset Form</button>
                </p>
                </form>
                </div>

                <div class="divider10"></div>


            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
                        <col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />

                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">排序</th>
                            <th class="head0">名称</th>
                            <th class="head0">描述</th>
                            <th class="head1">别名</th>
                            <th class="head0">文章</th>

                        </tr>
                    </thead>
                    <tbody>
                        




                        {% set i=0 %}
                        {% for taga in tags %}


                        <tr class="gradeA">
                          <td class="aligncenter"><span class="center">
                            <input type="checkbox" name="post_id" value="{{ post.ID }}" />
                          </span></td>
                            <td>{% set i+=1%}{{i}}</td>
                            <td>{{ taga.WpTerms.name }}
                                <div class="row-actions">

                                 <span class="edit">
                                    {{ link_to("post/edit/"~taga.term_id, "编辑") }} | </span>
                                    <span class="edit">
                                     <a href="javascript:void(0)" onclick="window.open('{{url('aa')}}','','width=780,height=550')" target="_blank">编辑</a> | </span>

                                    <span class="trash"><a class="submitdelete" title="删除" href="{{ url('post/tag/'~taga.term_id~'?action=delete') }}">删除</a> | </span>
                                    <span class="view">{{ link_to("post/see/"~taga.term_id, "查看","target":"_blank") }}</span>
                                </div>

                            </td>
                            <td>{{ taga.description }}</td>
                            <td>{{ taga.WpTerms.slug }}</td>
                            <td>{{ taga.count }}</td>

                        </tr>
                        {% endfor %}

                        <tr class="gradeA">
                          <td><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>

                        </tr>

                    </tbody>
                </table>

                <div class="divider15"></div>

                <div class="divider15"></div>



   				<div class="divider15"></div>

   				<pre class="prettyprint linenums">
   				{{ content() }}
   				<hr/>
   				</pre>



            </div><!--contentinner-->
        </div><!--maincontent-->

    </div><!--mainright-->





    <!-- END OF RIGHT PANEL -->