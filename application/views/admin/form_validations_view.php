<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 
<title>Form Validation :: Caffeine Admin Template</title>
<link rel="stylesheet" href="/assets/css/ui-lightness/jquery-ui-1.8.18.custom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="/assets/css/icons.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/forms.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/tables.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/ui.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/responsiveness.css" type="text/css" />
<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<!-- Spinner -->
<script type="text/javascript" src="/assets/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.ui.spinner.js"></script>
<!-- jqPlot -->
<script type="text/javascript" src="/assets/js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.cursor.min.js"></script> 
<script type="text/javascript" src="/assets/js/plugins/jqplot.pointLabels.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/jqplot.pieRenderer.min.js"></script> 
<script type="text/javascript" src="/assets/js/plugins/jqplot.donutRenderer.min.js"></script>
<!-- Full Calendar -->
<script type='text/javascript' src='/assets/js/fullcalendar/fullcalendar.min.js'></script>
<!-- Plupload -->
<script type="text/javascript" src="/assets/js/plupload.js"></script>
<script type="text/javascript" src="/assets/js/plupload.html4.js"></script>
<script type="text/javascript" src="/assets/js/plupload.html5.js"></script>
<script type="text/javascript" src="/assets/js/jquery.plupload.queue.js"></script>
<!-- Validation engine -->
<script type="text/javascript" src="/assets/js/languages/jquery.validationEngine-en.js" charset="utf-8"></script>
<script type="text/javascript" src="/assets/js/jquery.validationEngine.js"></script>
<!-- jgrowl -->
<script type="text/javascript" src="/assets/js/jquery.jgrowl.min.js"></script>
<!-- scrollTo -->
<script type="text/javascript" src="/assets/js/jquery.scrollto.js"></script>
<!-- Knob -->
<script type="text/javascript" src="/assets/js/jquery.knob.js"></script>
<!-- Masked inputs -->
<script type="text/javascript" src="/assets/js/jquery.masked-inputs.js"></script>
<!-- Chosen -->
<script type="text/javascript" src="/assets/js/jquery.chosen.js"></script>
<!-- Draggable Slider -->
<script type="text/javascript" src="/assets/js/jquery.slider.js"></script>
<!-- WYSIHTML5 -->
<script type="text/javascript" src="/assets/js/jquery.wysihtml5.js"></script>
<!-- iPhone Style Checkbox -->
<script type="text/javascript" src="/assets/js/jquery.iphonecheckbox.js"></script>
<!-- Minicolors -->
<script type="text/javascript" src="/assets/js/jquery.minicolors.js"></script>
<!-- Caffeine custom JS -->
<script type="text/javascript" src="/assets/js/custom.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		// Form validate
		jQuery("#demo-form-val").validationEngine();
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
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="tables.html">Tables &amp; Charts</a></li>
                <li><a href="#">Forms</a>
                	<ul class="submenu">
		                <li><a href="form-elements.html">Form elements</a></li>
                        <li class="active"><a href="form-validation.html">Form validation</a></li>
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
                <span><a href="#">UI &amp; UX</a></span>
                <span class="middle"></span>
                <span><a href="#">Form Validation</a></span>
                <span class="end"></span>
            </div> <!-- /Breadcrumb -->
            
            <!-- Search box -->
            <div class="one-fourth searchbar">
            	<div class="box no-bg">
	            	<div class="search-box closed"><input type="text" /><span class="icon awesome search"></span></div>
                </div>
            </div> <!-- /Search box-->
            
            <div class="clear"></div>
            
            <section class="full-width">
            	<div class="box no-bg">
	            	<h1>Form Validation</h1>
    	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et faucibus metus. Integer non libero sed libero pharetra pulvinar. In orci nunc, imperdiet ut elementum eu, pellentesque at velit. Ut cursus sem vel tortor aliquam nec interdum libero venenatis. Mauris scelerisque congue consequat. Nulla facilisi. Etiam quis libero diam, sit amet aliquet quam. Suspendisse varius rhoncus metus eu gravida. Vivamus posuere turpis sed magna fermentum sit amet ultricies enim porttitor. Nulla facilisi. Maecenas sagittis consectetur purus eget cursus. Integer posuere turpis vitae odio aliquet accumsan a sit amet diam. Integer quis lectus ligula, in euismod lectus. Fusce a eros nisi. In massa metus, luctus ac egestas sed, lacinia in lectus. Nulla non velit ipsum.</p>
                </div>
            </section>
            
            <div class="clear"></div>
            
            <div class="one-half">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon entypo white cloud"></span> <span class="w-icon">Dynamic Validation</span></div>
						<form id="demo-form-val" action="index.php?p=form-validation" method="post">
                        <div class="contents">
                            <div class="row">
                                <label>Username</label> <div class="field-box"><span class="icon entypo user for-input"></span><input type="text" class="w-icon medium validate[required]"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Password</label> <div class="field-box"><span class="icon awesome key for-input"></span><input type="password" class="w-icon medium validate[required]" id="password-field"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Confirm Password</label> <div class="field-box"><span class="icon awesome key for-input"></span><input type="password" class="w-icon medium validate[required, equals[password-field]]"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>E-mail</label> <div class="field-box"><span class="icon entypo email for-input"></span><input type="text" class="w-icon medium validate[required, custom[email]]"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Phone</label> 
                                <div class="field-box">
                                	<span class="icon entypo phone for-input"></span>
                                    <input type="text" class="w-icon medium validate[required, custom[phone]]">
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Mobile</label> <div class="field-box"><span class="icon entypo mobile for-input"></span><input type="text" class="w-icon medium  validate[required, custom[phone]]"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row last">
                                <label>Birthdate</label> 
                                <div class="field-box">
                                	<span class="icon entypo calendar for-input"></span>
                                    <input type="text" class="w-icon medium validate[required, custom[date],past[2010/01/01]]">
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="bar-big">
                        	<input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="one-half">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon entypo white browser"></span> <span class="w-icon">Static Validation</span></div>
                        <div class="alert-small">
                        	<span class="close"></span>
     						<p>
                            	Display small alert boxes on top of any box<br />
                                This is perfect for when you do a server side form validation.
                            </p>
                        </div>
                        <div class="contents">
                            <div class="row">
                            	<label>Small</label> <div class="field-box"><input type="text" class="small" placeholder=".small"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>Medium</label> <div class="field-box"><input type="text" class="medium" placeholder=".medium"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>Large</label> <div class="field-box"><input type="text" class="large" placeholder=".large"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>File</label> <div class="field-box"><input type="file" class="file-file"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Checkbox / Radio</label> <div class="field-box"><span class="jqTransformCheckboxWrapper"><a href="#" class="jqTransformCheckbox"></a><input type="checkbox" class="jqTransformHidden"></span> </div>
                                <div class="clear"></div>
                            </div>
                            
                            <div class="row">
                            	<label>Select</label> 
								<div class="field-box">
									<select>
                                    	<option>Some Option 1</option>
                                        <option>Some Option 2</option>
                                        <option>Some Option 3</option>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row last">
                            	<label>Textarea</label> <div class="field-box"><textarea></textarea></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            <div class="clear"></div>
            
            <div class="full-width right">
	<div class="box no-bg">
    	<div class="line-separator"></div>
        
		<span class="copyright">by <a href="http://www.creepypixel.com/" class="creepy-logo fright"></a></span>
    </div>
</div>
        </section>    </div>
    
</body> 
</html>