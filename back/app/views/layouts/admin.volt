
            {# katniss.getMenu() #}

<div class="mainwrapper">

    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">

        <div class="logopanel">
        	<h1><a href="dashboard.html">Katniss <span>v1.0</span></a></h1>
        </div><!--logopanel-->

        <div class="datewidget">今天是 {{ katniss.getDate() }}</div>

    	<div class="searchwidget">
        	<form action="results.html" method="post">
            	<div class="input-append">
                    <input type="text" class="span2 search-query" placeholder="Search here...">
                    <button type="submit" class="btn"><span class="icon-search"></span></button>
                </div>
            </form>
        </div><!--searchwidget-->

        <div class="plainwidget">
        	<small>Using 16.8 GB of your 51.7 GB </small>
        	<div class="progress progress-info">
                <div class="bar" style="width: 20%"></div>
            </div>
            <small><strong>38% full</strong></small>
        </div><!--plainwidget-->

        <div class="leftmenu">
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
                <li class="active"><a href="{{ url("dashboard/index") }}"><span class="icon-align-justify"></span> Dashboard</a></li>
                <li><a href="media.html"><span class="icon-picture"></span> Media</a></li>
                <li class="dropdown"><a href=""><span class="icon-briefcase"></span>文章管理</a>
                	<ul>
                    	<li><a href="{{ url('post/index') }}">所有文章</a></li>
                        <li><a href="{{ url('post/new2') }}">写文章</a></li>
                        <li><a href="{{ url('post/category') }}">分类目录</a></li>
                        <li><a href="{{ url('post/tag') }}">标签</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="icon-th-list"></span> Tables</a>
                	<ul>
                    	<li><a href="table-static.html">Static Table</a></li>
                        <li><a href="table-dynamic.html">Dynamic Table</a></li>
                    </ul>
                </li>
                <li><a href="typography.html"><span class="icon-font"></span> Typography</a></li>
                <li><a href="charts.html"><span class="icon-signal"></span> Graph &amp; Charts</a></li>
                <li><a href="messages.html"><span class="icon-envelope"></span> Messages</a></li>
                <li><a href="buttons.html"><span class="icon-hand-up"></span> Buttons &amp; Icons</a></li>
                <li class="dropdown"><a href=""><span class="icon-pencil"></span> Forms</a>
                	<ul>
                    	<li><a href="forms.html">Form Styles</a></li>
                        <li><a href="wizards.html">Wizard Form</a></li>
                        <li><a href="wysiwyg.html">WYSIWYG</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><span class="icon-calendar"></span> Calendar</a></li>
                <li><a href="animations.html"><span class="icon-play"></span> Animations</a></li>
                <li class="dropdown"><a href=""><span class="icon-book"></span> Other Pages</a>
                	<ul>
                    	<li><a href="404.html">404 Error Page</a></li>
                        <li><a href="invoice.html">Invoice Page</a></li>
                        <li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="grid.html">Grid Styles</a></li>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="stickyheader.html">Sticky Header Page</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--leftmenu-->

    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->

    <!-- START OF RIGHT PANEL -->

    {{ content() }}

    <!-- END OF RIGHT PANEL -->

    <div class="clearfix"></div>

    <div class="footer">
    	<div class="footerleft">Katniss Premium Admin Template v1.0</div>
    	<div class="footerright">&copy; ThemePixels - <a href="http://twitter.com/themepixels">Follow me on Twitter</a> - <a href="http://dribbble.com/themepixels">Follow me on Dribbble</a></div>
    </div><!--footer-->


</div><!--mainwrapper-->
<script type="text/javascript">
jQuery(document).ready(function(){

		// basic chart
		var flash = [[0, 2], [1, 6], [2,3], [3, 8], [4, 5], [5, 13], [6, 8]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];

		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}


		var plot = jQuery.plot(jQuery("#chartplace2"),
			   [ { data: flash, label: "Flash(x)", color: "#fb6409"}, { data: html5, label: "HTML5(x)", color: "#096afb"} ], {
				   series: {
					   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
					   points: { show: true }
				   },
				   legend: { position: 'nw'},
				   grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
				   yaxis: { min: 0, max: 15 }
				 });

		var previousPoint = null;
		jQuery("#chartplace2").bind("plothover", function (event, pos, item) {
			jQuery("#x").text(pos.x.toFixed(2));
			jQuery("#y").text(pos.y.toFixed(2));

			if(item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;

					jQuery("#tooltip").remove();
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);

					showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
				}

			} else {
			   jQuery("#tooltip").remove();
			   previousPoint = null;
			}

		});

		jQuery("#chartplace2").bind("plotclick", function (event, pos, item) {
			if (item) {
				jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});


		// bar graph
		var d2 = [];
		for (var i = 0; i <= 10; i += 1)
			d2.push([i, parseInt(Math.random() * 30)]);

		var stack = 0, bars = true, lines = false, steps = false;
		jQuery.plot(jQuery("#bargraph2"), [ d2 ], {
			series: {
				stack: stack,
				lines: { show: lines, fill: true, steps: steps },
				bars: { show: bars, barWidth: 0.6 }
			},
			grid: { hoverable: true, clickable: true, borderColor: '#bbb', borderWidth: 1, labelMargin: 10 },
			colors: ["#06c"]
		});

		// calendar
		jQuery('#calendar').datepicker();


});
</script>
