<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 

<title>Dashboard :: Caffeine Admin Template</title>

<link rel="stylesheet" href="/assets/css/ui-lightness/jquery-ui-1.8.18.custom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/jquery.jgrowl.css" type="text/css"/>
<link rel="stylesheet" href="/assets/css/jquery.jqplot.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/icons.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/forms.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/tables.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/ui.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/responsiveness.css" type="text/css" />

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<!-- jqPlot -->
<script type="text/javascript" src="/assets/js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.cursor.min.js"></script> 
<script type="text/javascript" src="/assets/js/plugins/jqplot.pointLabels.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.pieRenderer.min.js"></script> 
<script type="text/javascript" src="/assets/js/plugins/jqplot.donutRenderer.min.js"></script>
<!-- jgrowl -->
<script type="text/javascript" src="/assets/js/jquery.jgrowl.min.js"></script>
<!-- Knob -->
<script type="text/javascript" src="/assets/js/jquery.knob.js"></script>
<!-- WYSIHTML5 -->
<script type="text/javascript" src="/assets/js/jquery.wysihtml5.js"></script>
<!-- SparkLine -->
<script type="text/javascript" src="/assets/js/jquery.sparkline.js"></script>

<!-- Caffeine custom JS -->
<script type="text/javascript" src="/assets/js/custom.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		// jGrowl
		jQuery('#jgrowl').jGrowl('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nisl justo, laoreet sit amet egestas id, dapibus eu urna. Suspendisse augue nulla, tincidunt rhoncus lobortis quis, lobortis ac sem. Aliquam vehicula lobortis erat eget adipiscing. Cum sociis natoque penatibus et magnis dis parturient montes');
		jQuery('#jgrowl').jGrowl('Aliquam vehicula lobortis erat eget adipiscing. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.');
		jQuery('#jgrowl').jGrowl('Suspendisse fringilla dui in dolor volutpat quis congue lectus tempor. Nunc pulvinar ipsum eget neque consequat a viverra elit interdum.');
	});
</script>

<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 
<!--[if lte IE 7]> <script src="/assets/js/IE8.js" type="text/javascript"></script> <![endif]--> 
<!--[if lt IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/assets/css/ie6.css"/> <![endif]--> 

</head>

<body id="index" class="home">
    
    <div id="loading-block"></div> <!-- Loading block -->
    
    <!-- Container -->
    <div id="container">
    
    	<!-- Header -->
        <header id="header">
            <figure id="logo"><a href="dashboard.html" class="logo"></a></figure>
            <section id="general-options">
            	<a href="#" class="settings tipsy-header" title="Settings"></a>
                <a href="#" class="users tipsy-header" title="Users"></a>
                <a href="#" class="messages tipsy-header" title="Messages"></a>
            </section>
            <section id="userinfo">
            	<span class="welcome">Welcome <strong>John Doe</strong>. It's nice having you back</span>
                <span class="last-login">Last login on June 1st at 11:24hs</span>
                <div class="profile">
                	<div class="links">
                        <a href="#">Profile</a>
                        <a href="#">Inbox</a>
                        <a href="login.html" class="logout">Logout</a>
                    </div>
                	<img src="/assets/img/profile-pict.jpg" alt="John Doe">
                </div>
            </section>
            <section id="responsive-nav">
                <select id="nav_select">
                	<option value="">Navigate</option>
                	<option value="dashboard.html">Dashboard</option>
                    <option value="form-elements.html">Form Elements</option>
                </select>
            </section>
        </header> <!-- /Header -->
        
        <div class="clear"></div>		
        
        <!-- Sidebar -->
        <nav id="sidebar">
        	<div class="sidebar-top"></div>
            
            <h3>Navigate</h3>
            
            <!-- Nav menu -->
            <ul class="nav">
                <li class="active"><a href="dashboard.html">Dashboard</a></li>
                <li ><a href="tables.html">Tables &amp; Charts</a></li>
                <li><a href="#">Forms</a>
                	<ul class="submenu">
		                <li ><a href="form-elements.html">Form elements</a></li>
                        <li ><a href="form-validation.html">Form validation</a></li>
                    </ul>
                </li>
                <li ><a href="grid.html">Grid</a></li>
                
                <li><a href="#">UI / UX</a>
                    <ul class="submenu">
                    	<li ><a href="ui.html">General UI</a></li>
               			<li ><a href="icons.html">Icons</a></li>
                        <li ><a href="calendar.html">Calendar</a></li>
                        <li ><a href="file-upload.html">File upload</a></li>
                        <li ><a href="contact-list.html">Contact list</a></li>
                    </ul>
                </li>
                <li ><a href="typography.html">Typography</a></li>
                <li ><a href="gallery.html">Gallery</a></li>
            </ul> <!-- /Nav menu -->
            
            <div class="blocks-separator"></div>
            
            <h3>Stats</h3>
            <section class="widgets">
                
                <!-- Sidebar Widgets -->
                <div class="arrow-up">
                    <span class="title">Sales</span>
                    <span class="perc"><span data-value="65">0</span>%</span>
                </div>
                
                <div class="arrow-down">
                    <span class="title">Bounce</span>
                    <span class="perc"><span data-value="29">0</span>%</span>
                </div>
                
                <div class="arrow-right">
                    <span class="title">Clients</span>
                    <span class="perc"><span data-value="0">0</span>%</span>
                </div>
                
                <div class="line-separator"></div>
                
                <div class="one-half center">
	                <input class="knob" data-width="89" data-height="89" data-fgColor="#bee058" data-thickness=".2" data-readOnly="true" value="35" data-value="35">
                    <span class="full-width center">Disk Space</span>
                </div>
                
                <div class="one-half center">
	                <input class="knob" data-width="89" data-height="89" data-fgColor="#5479aa" data-thickness=".2" data-readOnly="true" value="83" data-value="83">
                    <span class="full-width center">Bandwidth</span>
                </div>
                <!-- /Sidebar Widgets -->
                
                <div class="clear"></div>
                
            </section>
        </nav> <!-- Sidebar -->
        
        <div id="jgrowl" class="bottom-right"></div>
        
        <!-- Playground -->
        <section id="playground">
        	
            <!-- Breadcrumb -->
            <div class="three-fourths breadcrumb">
            	<span><a href="#" class="icon entypo home"></a></span>
                <span class="middle"></span>
                <span><a href="#">Caffeine Admin Template</a></span>
                <span class="middle"></span>
                <span><a href="#">Dashboard</a></span>
                <span class="end"></span>
            </div> <!-- /Breadcrumb -->
            
            <!-- Search box -->
            <div class="one-fourth searchbar">
            	<div class="box no-bg">
	            	<div class="search-box closed"><input type="text" /><span class="icon awesome search"></span></div>
                </div>
            </div> <!-- /Search box-->
            
            <div class="clear"></div>
            
            <!-- Playground Widgets -->
            <div class="full-width widget-set">
            	<div class="box no-bg">
                	<ul>
                        <li class="widget arrow-up">
                            <div class="image"></div>
                            <label>65%</label>
                            <span>Sales</span>
                        </li>
                        <li class="widget arrow-down">
                            <div class="image"></div>
                            <label>5%</label>
                            <span>Earnings</span>
                        </li>
                        <li class="widget arrow-right">
                            <div class="image"></div>
                            <label>0%</label>
                            <span>Votes</span>
                        </li>
                        <li class="widget users">
                            <div class="image"></div>
                            <label>4</label>
                            <span>New Users</span>
                        </li>
                        <li class="widget comments">
                            <div class="image"></div>
                            <label>35</label>
                            <span>Comments</span>
                        </li>
                        <li class="widget orders">
                            <div class="image"></div>
                            <label>7</label>
                            <span>New Orders</span>
                        </li>
                        <li class="widget sparkline green">
                            <div class="sparkline" data-color="#63d844">4,8,16,25,28,35</div>
                            <label>Visits</label>
                            <span>last 7 days</span>
                        </li>
                        <li class="widget sparkline red">
                            <div class="sparkline" data-color="#bd5151">51,50,49,32,22,15</div>
                            <label>Attacks</label>
                            <span>last 7 days</span>
                        </li>
                        <li class="widget sparkline blue">
                            <div class="sparkline" data-color="#5479aa">20,32,32,32,51,51</div>
                            <label>Updates</label>
                            <span>last 7 days</span>
                        </li>
                        
                    </ul>
                </div> 
                
                <div class="clear"></div>
                <div class="line-separator"></div>
                <div class="clear">&nbsp;</div>
                
            </div> <!-- /Playground Widgets -->
            
            
            <!-- Grid Contents -->
            <div class="one-third">
            	<div class="box no-bg">
	            	<h1>Welcome to your Caffeine</h1>
                    <p><strong>Caffeine</strong> is a simple, responsive, dark themed administration panel template to be used as base design for your custom made site's backend. <strong>Some of its features are:</strong></p>
                    <ul class="no-bullets">
                        <li><span class="white icon awesome leaf"></span>Fully reskined standard form elements</li>
                        <li><span class="white icon entypo compass"></span>8+ special form elements include <strong>HTML5 WYSIWYG editor</strong></li>
                        <li><span class="white icon awesome table"></span>Static and dynamic tables</li>
                        <li><span class="white icon awesome bar-chart"></span>Animated charts powered by <strong>jqPlot</strong></li>
                        <li><span class="white icon awesome font"></span><strong>400+ @face-font icons</strong></li>
                        <li><span class="white icon awesome magic"></span>Incredible CSS3 buttons in 4 different colors and 3 different sizes</li>
                        <li><span class="white icon entypo grid"></span><strong>Responsibe GRID</strong> system</li>
                        <li><span class="white icon entypo time"></span>Over 10 different widgets to place on your sidebar or content area</li>
                        <li><span class="white icon entypo calendar"></span>Dynamic event calendar</li>
                        <li><span class="white icon entypo upload-2"></span><strong>AJAX file uploader</strong></li>
                        <li><span class="icon entypo dots-three"></span>and a lot more</li>
                    </ul>
                </div>
            </div>
            
            <div class="two-thirds">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon awesome white bar-chart"></span> <span class="w-icon">Yearly Visitors</span></div>
                        <div class="contents">
                            <div id="chart_dashboard" style="width:700px; height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="one-third quick-post">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span>Quick Post</span> <span class="fright highlight blue">News</span></div>
                        <div id="wysihtml5-toolbar" class="wysihtml5-toolbar" style="display: none;">
                                <a data-wysihtml5-command="bold" title="CTRL+B"><span class="icon awesome bold"></span></a>
                                <a data-wysihtml5-command="italic" title="CTRL+I"><span class="icon awesome italic"></span></a>
                                <a data-wysihtml5-command="createLink"><span class="icon awesome link"></span></a>
                                <a data-wysihtml5-command="insertImage"><span class="icon awesome picture"></span></a> |
                                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">H1</a>
                                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2">H2</a>
                                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3">H3</a>
                                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4">H4</a>
                                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5">H5</a>
                                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6">H6</a>
                            
                                <div data-wysihtml5-dialog="createLink" style="display: none;">
                                    <label> 
                                        Link:
                                        <input data-wysihtml5-dialog-field="href" value="http://">
                                    </label>
                                    <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
                                </div>
                            
                                <div data-wysihtml5-dialog="insertImage" style="display: none;">
                                    <label>
                                        Image:
                                        <input data-wysihtml5-dialog-field="src" value="http://">
                                    </label>
                                    <label>
                                        Align:
                                        <select data-wysihtml5-dialog-field="className">
                                            <option value="">default</option>
                                            <option value="wysiwyg-float-left">left</option>
                                            <option value="wysiwyg-float-right">right</option>
                                        </select>
                                    </label>
                                    <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
                                </div>
                            </div>
                            <div class="wysihtml5-contents">
                            	<textarea id="textarea"></textarea>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="bar-big">
                                <input type="submit" value="Submit">
                                <input type="reset" value="Reset">
                            </div>	
                   	</div>
                </div>
            </div>
            
            <div class="one-third">
            	<div class="box no-bg">
                	<h2>Alerts <a href="#" class="button tiny fright tipsy-trigger" title="Reload alerts"><span class="icon entypo reload-CW"></span></a></h2>
                    <ul class="reminder">
                    	<li><span class="icon entypo calendar"></span> <label>John Doe's birthday</label> <a href="#" class="button blue fright">Contact</a></li>
                        <li><span class="icon entypo upload-2"></span> <label><span class="number">14</span> new uploads</label> <a href="#" class="button green fright">Go</a></li>
                        <li><span class="icon entypo chat"></span> <label><span class="number">3</span> new support tickets</label> <a href="#" class="button green fright">Go</a></li>
                        <li><span class="icon entypo contact"></span> <label><span class="number">22</span> new users</label> <a href="#" class="button red fright">View list</a></li>
                        <li><span class="icon awesome shopping-cart"></span> <label><span class="number">2</span> pending orders</label> <a href="#" class="button green fright">Go</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="one-third">
            	<div class="box no-bg">
                	<h2>New Comments <a href="#" class="button blue tiny fright">See all comments</a></h2>
                	<table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">User</th>
                                <th scope="col">Post</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>314</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight yellow">pending</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>351</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight yellow">pending</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>321</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight red">rejected</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>436</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight green">accepted</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>543</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight green">accepted</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>351</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight yellow">pending</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>321</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight red">rejected</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>436</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight green">accepted</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>543</td>
                                <td>John Doe</td>
                                <td><a href="#">Lorem ipsum...</a></td>
                                <td class="center"><span class="highlight green">accepted</span></td>
                                <td class="center">
                                	<a href="#" class="icon awesome heart tipsy-trigger" title="Set is as interesting"></a>
                                    <a href="#" class="icon entypo star-2 tipsy-trigger" title="Set it as featured"></a>
                                    <a href="#" class="icon entypo cancel tipsy-trigger" title="Reject"></a>
                                    <a href="#" class="icon entypo thumbs-up tipsy-trigger" title="Accept"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="one-fourth">
            	<div class="box no-bg">
                	<h2>Activity <span class="button-set fright"><a href="#" class="button first blue tiny tipsy-trigger" title="Previous"><span class="icon awesome chevron-left"></span></a><a href="#" class="button last blue tiny tipsy-trigger" title="Next"><span class="icon awesome chevron-right"></span></a></span></h2>
                    <ul class="reminder">
                    	<li><strong>John Doe deleted a product</strong> <span class="fright highlight">4 minutes ago</span></li>
                        <li><strong>John Doe edited a post</strong> <span class="fright highlight">an hour ago</span></li>
                        <li><strong>Frank Miller registered</strong> <span class="fright highlight">three hours ago</span></li>
                        <li><strong>John Doe deleted a post</strong> <span class="fright highlight">yesterday</span></li>
                        <li><strong>Will Smith deleted a post</strong> <span class="fright highlight">2 days ago</span></li>
                    </ul>
                    
                </div>
            </div>
            
            <div class="one-half">
                <div class="box no-bg">
                    <h2>In libero tortor</h2>
                    <p> Donec faucibus adipiscing magna, vitae blandit nisi mollis vel. Maecenas non tortor mi. Vivamus ac lectus magna, nec pharetra diam. Proin ac sem non sapien viverra pulvinar. Aenean facilisis sem quis libero viverra quis tincidunt erat vulputate. Curabitur porta urna sed lacus vestibulum tincidunt sit amet ut urna. Integer at dolor sed nulla iaculis luctus non vitae sapien. Integer nec ante blandit tortor posuere ullamcorper. Curabitur consequat nunc et ipsum lacinia fringilla. Maecenas semper condimentum mauris, vitae iaculis arcu tempus at. Proin ante odio, adipiscing vestibulum luctus sed, rhoncus vel tellus.</p>
                    <p>Praesent mattis ultrices lorem. Proin vel lectus et justo pharetra scelerisque. Sed nibh purus, adipiscing non bibendum sed, rutrum a urna. Phasellus ut tellus vehicula est fermentum faucibus id ut arcu. Aliquam ut mauris neque. Pellentesque eget augue vel lacus hendrerit laoreet et nec mauris. Sed tempus dapibus quam a elementum. </p>
                    <a href="#" class="button tiny red fright">Read more &rarr;</a>
                </div>
            </div>
            
            <div class="one-fourth">
            	<div class="box no-bg">
                	<h3>Return rate</h3>
                	<div class="progress-bar vertical blue" data-size="240">
                    	<span class="complete" data-progress="82"></span>
                        <span class="label"></span>
                    </div>
                    <div class="progress-bar vertical blue" data-size="240">
                    	<span class="complete" data-progress="45"></span>
                        <span class="label"></span>
                    </div>
                    <div class="progress-bar vertical blue" data-size="240">
                    	<span class="complete" data-progress="67"></span>
                        <span class="label"></span>
                    </div>
                    <div class="progress-bar vertical blue" data-size="240">
                    	<span class="complete" data-progress="39"></span>
                        <span class="label"></span>
                    </div>
                    <div class="progress-bar vertical blue" data-size="240">
                    	<span class="complete" data-progress="50"></span>
                        <span class="label"></span>
                    </div>
                    <div class="progress-bar vertical blue" data-size="240">
                    	<span class="complete" data-progress="78"></span>
                        <span class="label"></span>
                    </div>
                    
                </div>
            </div>
            
            <div class="clear"></div>
			<!-- Copyright / Footer -->
            <div class="full-width right">
				<div class="box no-bg">
    				<div class="line-separator"></div>
					<span class="copyright">by <a href="http://www.creepypixel.com/" class="creepy-logo fright"></a></span>
                </div>
            </div><!-- /Copyright / Footer -->
            
        </section> <!-- /Playground -->
        
    </div> <!-- /Container -->
    
</body> 
</html>