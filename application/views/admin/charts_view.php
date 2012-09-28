<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 

<title>Tables & Charts :: Caffeine Admin Template</title>

<link rel="stylesheet" href="/assets/css/ui-lightness/jquery-ui-1.8.18.custom.css" type="text/css" media="screen" />
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
<!-- Knob -->
<script type="text/javascript" src="/assets/js/jquery.knob.js"></script>
<!-- DataTables -->
<script type="text/javascript" src="/assets/js/jquery.datatables.js"></script>
<!-- SparkLine -->
<script type="text/javascript" src="/assets/js/jquery.sparkline.js"></script>

<!-- Caffeine custom JS -->
<script type="text/javascript" src="/assets/js/custom.js"></script>

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
                	<img src="img/profile-pict.jpg" alt="John Doe">
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
                <li><a href="dashboard.html">Dashboard</a></li>
                <li class="active"><a href="tables.html">Tables &amp; Charts</a></li>
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
           
            <div class="one-half">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon awesome white bar-chart"></span> <span class="w-icon">Animated Charts with jqPlot</span></div>
                        <div class="contents">
                            <div id="chart1" style="width:700px; height:300px"></div>
                        </div>
                    </div>
                </div>
                
                <div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon awesome white table"></span> <span class="w-icon">Static Table</span></div>
                        
                        <table>
                            <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Chrome</th>
                                    <th scope="col">Firefox</th>
                                    <th scope="col">Opera</th>
                                    <th scope="col">Safari</th>
                                    <th scope="col">IE</th>
                                    <th scope="col">Other</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">North America</th>
                                    <td>190</td>
                                    <td>160</td>
                                    <td>40</td>
                                    <td>120</td>
                                    <td>30</td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <th scope="row">South America</th>
                                    <td>3</td>
                                    <td>40</td>
                                    <td>30</td>
                                    <td>45</td>
                                    <td>35</td>
                                    <td>49</td>
                                </tr>
                                <tr>
                                    <th scope="row">Europe</th>
                                    <td>10</td>
                                    <td>180</td>
                                    <td>10</td>
                                    <td>85</td>
                                    <td>25</td>
                                    <td>79</td>
                                </tr>
                                <tr>
                                    <th scope="row">Asia</th>
                                    <td>40</td>
                                    <td>80</td>
                                    <td>90</td>
                                    <td>25</td>
                                    <td>15</td>
                                    <td>119</td>
                                </tr>
                                <tr>
                                    <th scope="row">Oceania</th>
                                    <td>10</td>
                                    <td>180</td>
                                    <td>10</td>
                                    <td>85</td>
                                    <td>25</td>
                                    <td>79</td>
                                </tr>
                            </tbody>
                        </table>	
                            
                    </div>
                </div>
                <div class="box no-bg">
                	<table>
                        <thead>
                            <tr>
                                <td></td>
                                <th scope="col">Chrome</th>
                                <th scope="col">Firefox</th>
                                <th scope="col">Opera</th>
                                <th scope="col">Safari</th>
                                <th scope="col">IE</th>
                                <th scope="col">Other</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">North America</th>
                                <td>190</td>
                                <td>160</td>
                                <td>40</td>
                                <td>120</td>
                                <td>30</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <th scope="row">South America</th>
                                <td>3</td>
                                <td>40</td>
                                <td>30</td>
                                <td>45</td>
                                <td>35</td>
                                <td>49</td>
                            </tr>
                            <tr>
                                <th scope="row">Europe</th>
                                <td>10</td>
                                <td>180</td>
                                <td>10</td>
                                <td>85</td>
                                <td>25</td>
                                <td>79</td>
                            </tr>
                            <tr>
                                <th scope="row">Asia</th>
                                <td>40</td>
                                <td>80</td>
                                <td>90</td>
                                <td>25</td>
                                <td>15</td>
                                <td>119</td>
                            </tr>
                            <tr>
                                <th scope="row">Oceania</th>
                                <td>10</td>
                                <td>180</td>
                                <td>10</td>
                                <td>85</td>
                                <td>25</td>
                                <td>79</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            <div class="one-fourth">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon entypo white cd"></span> <span class="w-icon">Donut Charts</span></div>
                        <div class="contents">
                            <div id="chart3" style="width:700px; height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="one-fourth">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon entypo white cd"></span> <span class="w-icon">Donut Charts</span></div>
                        <div class="contents">
                            <div id="chart2" style="width:700px; height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="one-half">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon awesome white beaker"></span> <span class="w-icon">Dynamic Data Table</span></div>
                        
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeX">
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                         Explorer 
                                        4.0
                                        </td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Trident</td>
                                    <td>Internet
                                         Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet
                                         Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet
                                         Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td class="center">7</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td class="center">1.9</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td>Win 98SE+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.1</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.2</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.2</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.3</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.3</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.4</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.4</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.5</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.5</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.6</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.6</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.7</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.8</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Seamonkey 1.1</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Epiphany 2.20</td>
                                    <td>Gnome</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.2</td>
                                    <td>OSX.3</td>
                                    <td class="center">125.5</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.3</td>
                                    <td>OSX.3</td>
                                    <td class="center">312.8</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 2.0</td>
                                    <td>OSX.4+</td>
                                    <td class="center">419.3</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 3.0</td>
                                    <td>OSX.4+</td>
                                    <td class="center">522.1</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>OmniWeb 5.5</td>
                                    <td>OSX.4+</td>
                                    <td class="center">420</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>iPod Touch / iPhone</td>
                                    <td>iPod</td>
                                    <td class="center">420.1</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>S60</td>
                                    <td>S60</td>
                                    <td class="center">413</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.0</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.0</td>
                                    <td>Win 95+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.2</td>
                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.5</td>
                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera for Wii</td>
                                    <td>Wii</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nokia N800</td>
                                    <td>N800</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nintendo DS browser</td>
                                    <td>Nintendo DS</td>
                                    <td class="center">8.5</td>
                                    <td class="center">C/A<sup>1</sup></td>
                                </tr>
                                <tr class="gradeC">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.1</td>
                                    <td>KDE 3.1</td>
                                    <td class="center">3.1</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.3</td>
                                    <td>KDE 3.3</td>
                                    <td class="center">3.3</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.5</td>
                                    <td>KDE 3.5</td>
                                    <td class="center">3.5</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 4.5</td>
                                    <td>Mac OS 8-9</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.1</td>
                                    <td>Mac OS 7.6-9</td>
                                    <td class="center">1</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.2</td>
                                    <td>Mac OS 8-X</td>
                                    <td class="center">1</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.1</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.4</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Dillo 0.8</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Links</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Lynx</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                </tr>
                                <tr class="gradeU">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class="center">-</td>
                                    <td class="center">U</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot>
                        </table>
                            
                        <div class="clear"></div>
                    </div>
                </div>
                
            </div>
                    
            <div class="clear"></div>
            <div class="full-width right">
	<div class="box no-bg">
    	<div class="line-separator"></div>
        
		<span class="copyright">by <a href="http://www.creepypixel.com/" class="creepy-logo fright"></a></span>
    </div>
</div>        </section>    </div>
    
</body> 
</html>