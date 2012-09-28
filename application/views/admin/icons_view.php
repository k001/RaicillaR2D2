<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 

<title>Icons :: Caffeine Admin Template</title>

<link rel="stylesheet" href="/assets/css/ui-lightness/jquery-ui-1.8.18.custom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/icons.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/forms.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/tables.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/ui.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/responsiveness.css" type="text/css" />

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<!-- Knob -->
<script type="text/javascript" src="/assets/js/jquery.knob.js"></script>

<!-- Caffeine custom JS -->
<script type="text/javascript" src="/assets/js/custom.js"></script>

<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 
<!--[if lte IE 7]> <script src="/assets/js/IE8.js" type="text/javascript"></script> <![endif]--> 
<!--[if lt IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/assets/css/ie6.css"/> <![endif]-->  

</head>

<body id="index" class="home">
	
    <div id="loading-block"></div>
    
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
                <li><a href="tables.html">Tables &amp; Charts</a></li>
                <li><a href="#">Forms</a>
                	<ul class="submenu">
		                <li><a href="form-elements.html">Form elements</a></li>
                        <li ><a href="form-validation.html">Form validation</a></li>
                    </ul>
                </li>
                <li><a href="grid.html">Grid</a></li>
                
                <li><a href="#">UI / UX</a>
                    <ul class="submenu">
                    	<li><a href="ui.html">General UI</a></li>
               			<li class="active"><a href="icons.html">Icons</a></li>
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
                <span><a href="#">@font-face Icons</a></span>
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
	            	<h1>Icons</h1>
                    <p>@font-face icons are specially designed font sets which include icons instead of regular letters. These icon sets are specailly useful because all the icons can be edited just like if they were a regular font. With the posibility to easily edit its color, size, hover effects, animations, css3 shadows, and pretty much every aspect of them, these icons are perfect to be used on buttons, lists, links, tags, and anywhere you can think of. On the right side of this page you can see some examples on where to use the icons.</p>
                </div>
            </section>
            
            <div class="clear"></div>
            
            <section class="full-width">
            	<div class="box no-bg">
                    <h3>Awesome Icons Set</h3>
    
                    <div class="icon-example"><span class="icon awesome glass"></span></div>
                    <div class="icon-example"><span class="icon awesome music"></span></div>
                    <div class="icon-example"><span class="icon awesome search"></span></div>
                    <div class="icon-example"><span class="icon awesome envelope"></span></div>
                    <div class="icon-example"><span class="icon awesome heart"></span></div>
                    <div class="icon-example"><span class="icon awesome star"></span></div>
                    <div class="icon-example"><span class="icon awesome star-empty"></span></div>
                    <div class="icon-example"><span class="icon awesome user"></span></div>
                    <div class="icon-example"><span class="icon awesome film"></span></div>
                    <div class="icon-example"><span class="icon awesome th-large"></span></div>
                    <div class="icon-example"><span class="icon awesome th"></span></div>
                    <div class="icon-example"><span class="icon awesome th-list"></span></div>
                    <div class="icon-example"><span class="icon awesome ok"></span></div>
                    <div class="icon-example"><span class="icon awesome remove"></span></div>
                    <div class="icon-example"><span class="icon awesome zoom-in"></span></div>
                    <div class="icon-example"><span class="icon awesome zoom-out"></span></div>
                    <div class="icon-example"><span class="icon awesome off"></span></div>
                    <div class="icon-example"><span class="icon awesome signal"></span></div>
                    <div class="icon-example"><span class="icon awesome cog"></span></div>
                    <div class="icon-example"><span class="icon awesome trash"></span></div>
                    <div class="icon-example"><span class="icon awesome home"></span></div>
                    <div class="icon-example"><span class="icon awesome file"></span></div>
                    <div class="icon-example"><span class="icon awesome time"></span></div>
                    <div class="icon-example"><span class="icon awesome road"></span></div>
                    <div class="icon-example"><span class="icon awesome download-alt"></span></div>
                    <div class="icon-example"><span class="icon awesome download"></span></div>
                    <div class="icon-example"><span class="icon awesome upload"></span></div>
                    <div class="icon-example"><span class="icon awesome inbox"></span></div>
                    <div class="icon-example"><span class="icon awesome play-circle"></span></div>
                    <div class="icon-example"><span class="icon awesome repeat"></span></div>
                    <div class="icon-example"><span class="icon awesome refresh"></span></div>
                    <div class="icon-example"><span class="icon awesome list-alt"></span></div>
                    <div class="icon-example"><span class="icon awesome lock"></span></div>
                    <div class="icon-example"><span class="icon awesome flag"></span></div>
                    <div class="icon-example"><span class="icon awesome headphones"></span></div>
                    <div class="icon-example"><span class="icon awesome volume-off"></span></div>
                    <div class="icon-example"><span class="icon awesome volume-down"></span></div>
                    <div class="icon-example"><span class="icon awesome volume-up"></span></div>
                    <div class="icon-example"><span class="icon awesome qrcode"></span></div>
                    <div class="icon-example"><span class="icon awesome barcode"></span></div>
                    <div class="icon-example"><span class="icon awesome tag"></span></div>
                    <div class="icon-example"><span class="icon awesome tags"></span></div>
                    <div class="icon-example"><span class="icon awesome book"></span></div>
                    <div class="icon-example"><span class="icon awesome bookmark"></span></div>
                    <div class="icon-example"><span class="icon awesome print"></span></div>
                    <div class="icon-example"><span class="icon awesome camera"></span></div>
                    <div class="icon-example"><span class="icon awesome font"></span></div>
                    <div class="icon-example"><span class="icon awesome bold"></span></div>
                    <div class="icon-example"><span class="icon awesome italic"></span></div>
                    <div class="icon-example"><span class="icon awesome text-height"></span></div>
                    <div class="icon-example"><span class="icon awesome text-width"></span></div>
                    <div class="icon-example"><span class="icon awesome align-left"></span></div>
                    <div class="icon-example"><span class="icon awesome align-center"></span></div>
                    <div class="icon-example"><span class="icon awesome align-right"></span></div>
                    <div class="icon-example"><span class="icon awesome align-justify"></span></div>
                    <div class="icon-example"><span class="icon awesome list"></span></div>
                    <div class="icon-example"><span class="icon awesome indent-left"></span></div>
                    <div class="icon-example"><span class="icon awesome indent-right"></span></div>
                    <div class="icon-example"><span class="icon awesome facetime-video"></span></div>
                    <div class="icon-example"><span class="icon awesome picture"></span></div>
                    <div class="icon-example"><span class="icon awesome pencil"></span></div>
                    <div class="icon-example"><span class="icon awesome map-marker"></span></div>
                    <div class="icon-example"><span class="icon awesome adjust"></span></div>
                    <div class="icon-example"><span class="icon awesome tint"></span></div>
                    <div class="icon-example"><span class="icon awesome edit"></span></div>
                    <div class="icon-example"><span class="icon awesome share"></span></div>
                    <div class="icon-example"><span class="icon awesome check"></span></div>
                    <div class="icon-example"><span class="icon awesome move"></span></div>
                    <div class="icon-example"><span class="icon awesome step-backward"></span></div>
                    <div class="icon-example"><span class="icon awesome fast-backward"></span></div>
                    <div class="icon-example"><span class="icon awesome backward"></span></div>
                    <div class="icon-example"><span class="icon awesome play"></span></div>
                    <div class="icon-example"><span class="icon awesome pause"></span></div>
                    <div class="icon-example"><span class="icon awesome stop"></span></div>
                    <div class="icon-example"><span class="icon awesome forward"></span></div>
                    <div class="icon-example"><span class="icon awesome fast-forward"></span></div>
                    <div class="icon-example"><span class="icon awesome step-forward"></span></div>
                    <div class="icon-example"><span class="icon awesome eject"></span></div>
                    <div class="icon-example"><span class="icon awesome chevron-left"></span></div>
                    <div class="icon-example"><span class="icon awesome chevron-right"></span></div>
                    <div class="icon-example"><span class="icon awesome plus-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome minus-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome remove-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome ok-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome question-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome info-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome screenshot"></span></div>
                    <div class="icon-example"><span class="icon awesome remove-circle"></span></div>
                    <div class="icon-example"><span class="icon awesome ok-circle"></span></div>
                    <div class="icon-example"><span class="icon awesome ban-circle"></span></div>
                    <div class="icon-example"><span class="icon awesome arrow-left"></span></div>
                    <div class="icon-example"><span class="icon awesome arrow-right"></span></div>
                    <div class="icon-example"><span class="icon awesome arrow-up"></span></div>
                    <div class="icon-example"><span class="icon awesome arrow-down"></span></div>
                    <div class="icon-example"><span class="icon awesome share-alt"></span></div>
                    <div class="icon-example"><span class="icon awesome resize-full"></span></div>
                    <div class="icon-example"><span class="icon awesome resize-small"></span></div>
                    <div class="icon-example"><span class="icon awesome plus"></span></div>
                    <div class="icon-example"><span class="icon awesome minus"></span></div>
                    <div class="icon-example"><span class="icon awesome asterisk"></span></div>
                    <div class="icon-example"><span class="icon awesome exclamation-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome gift"></span></div>
                    <div class="icon-example"><span class="icon awesome leaf"></span></div>
                    <div class="icon-example"><span class="icon awesome fire"></span></div>
                    <div class="icon-example"><span class="icon awesome eye-open"></span></div>
                    <div class="icon-example"><span class="icon awesome eye-close"></span></div>
                    <div class="icon-example"><span class="icon awesome warning-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome plane"></span></div>
                    <div class="icon-example"><span class="icon awesome calendar"></span></div>
                    <div class="icon-example"><span class="icon awesome random"></span></div>
                    <div class="icon-example"><span class="icon awesome comment"></span></div>
                    <div class="icon-example"><span class="icon awesome magnet"></span></div>
                    <div class="icon-example"><span class="icon awesome chevron-up"></span></div>
                    <div class="icon-example"><span class="icon awesome chevron-down"></span></div>
                    <div class="icon-example"><span class="icon awesome retweet"></span></div>
                    <div class="icon-example"><span class="icon awesome shopping-cart"></span></div>
                    <div class="icon-example"><span class="icon awesome folder-close"></span></div>
                    <div class="icon-example"><span class="icon awesome folder-open"></span></div>
                    <div class="icon-example"><span class="icon awesome resize-vertical"></span></div>
                    <div class="icon-example"><span class="icon awesome resize-horizontal"></span></div>
                    <div class="icon-example"><span class="icon awesome bar-chart"></span></div>
                    <div class="icon-example"><span class="icon awesome twitter-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome facebook-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome camera-retro"></span></div>
                    <div class="icon-example"><span class="icon awesome key"></span></div>
                    <div class="icon-example"><span class="icon awesome cogs"></span></div>
                    <div class="icon-example"><span class="icon awesome comments"></span></div>
                    <div class="icon-example"><span class="icon awesome thumbs-up"></span></div>
                    <div class="icon-example"><span class="icon awesome thumbs-down"></span></div>
                    <div class="icon-example"><span class="icon awesome star-half"></span></div>
                    <div class="icon-example"><span class="icon awesome heart-empty"></span></div>
                    <div class="icon-example"><span class="icon awesome signout"></span></div>
                    <div class="icon-example"><span class="icon awesome linkedin-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome pushpin"></span></div>
                    <div class="icon-example"><span class="icon awesome external-link"></span></div>
                    <div class="icon-example"><span class="icon awesome signin"></span></div>
                    <div class="icon-example"><span class="icon awesome trophy"></span></div>
                    <div class="icon-example"><span class="icon awesome github-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome upload-alt"></span></div>
                    <div class="icon-example"><span class="icon awesome lemon"></span></div>
                    <div class="icon-example"><span class="icon awesome phone"></span></div>
                    <div class="icon-example"><span class="icon awesome check-empty"></span></div>
                    <div class="icon-example"><span class="icon awesome bookmark-empty"></span></div>
                    <div class="icon-example"><span class="icon awesome phone-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome twitter"></span></div>
                    <div class="icon-example"><span class="icon awesome facebook"></span></div>
                    <div class="icon-example"><span class="icon awesome github"></span></div>
                    <div class="icon-example"><span class="icon awesome unlock"></span></div>
                    <div class="icon-example"><span class="icon awesome credit-card"></span></div>
                    <div class="icon-example"><span class="icon awesome rss"></span></div>
                    <div class="icon-example"><span class="icon awesome hdd"></span></div>
                    <div class="icon-example"><span class="icon awesome bullhorn"></span></div>
                    <div class="icon-example"><span class="icon awesome bell"></span></div>
                    <div class="icon-example"><span class="icon awesome certificate"></span></div>
                    <div class="icon-example"><span class="icon awesome hand-right"></span></div>
                    <div class="icon-example"><span class="icon awesome hand-left"></span></div>
                    <div class="icon-example"><span class="icon awesome hand-up"></span></div>
                    <div class="icon-example"><span class="icon awesome hand-down"></span></div>
                    <div class="icon-example"><span class="icon awesome circle-arrow-left"></span></div>
                    <div class="icon-example"><span class="icon awesome circle-arrow-right"></span></div>
                    <div class="icon-example"><span class="icon awesome circle-arrow-up"></span></div>
                    <div class="icon-example"><span class="icon awesome circle-arrow-down"></span></div>
                    <div class="icon-example"><span class="icon awesome globe"></span></div>
                    <div class="icon-example"><span class="icon awesome wrench"></span></div>
                    <div class="icon-example"><span class="icon awesome tasks"></span></div>
                    <div class="icon-example"><span class="icon awesome filter"></span></div>
                    <div class="icon-example"><span class="icon awesome briefcase"></span></div>
                    <div class="icon-example"><span class="icon awesome fullscreen"></span></div>
                    <div class="icon-example"><span class="icon awesome group"></span></div>
                    <div class="icon-example"><span class="icon awesome link"></span></div>
                    <div class="icon-example"><span class="icon awesome cloud"></span></div>
                    <div class="icon-example"><span class="icon awesome beaker"></span></div>
                    <div class="icon-example"><span class="icon awesome cut"></span></div>
                    <div class="icon-example"><span class="icon awesome copy"></span></div>
                    <div class="icon-example"><span class="icon awesome paper-clip"></span></div>
                    <div class="icon-example"><span class="icon awesome save"></span></div>
                    <div class="icon-example"><span class="icon awesome sign-blank"></span></div>
                    <div class="icon-example"><span class="icon awesome reorder"></span></div>
                    <div class="icon-example"><span class="icon awesome list-ul"></span></div>
                    <div class="icon-example"><span class="icon awesome list-ol"></span></div>
                    <div class="icon-example"><span class="icon awesome strikethrough"></span></div>
                    <div class="icon-example"><span class="icon awesome underline"></span></div>
                    <div class="icon-example"><span class="icon awesome table"></span></div>
                    <div class="icon-example"><span class="icon awesome magic"></span></div>
                    <div class="icon-example"><span class="icon awesome truck"></span></div>
                    <div class="icon-example"><span class="icon awesome pinterest"></span></div>
                    <div class="icon-example"><span class="icon awesome pinterest-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome google-plus-sign"></span></div>
                    <div class="icon-example"><span class="icon awesome google-plus"></span></div>
                    <div class="icon-example"><span class="icon awesome money"></span></div>
                    <div class="icon-example"><span class="icon awesome caret-down"></span></div>
                    <div class="icon-example"><span class="icon awesome caret-up"></span></div>
                    <div class="icon-example"><span class="icon awesome caret-left"></span></div>
                    <div class="icon-example"><span class="icon awesome caret-right"></span></div>
                    <div class="icon-example"><span class="icon awesome columns"></span></div>
                    <div class="icon-example"><span class="icon awesome sort"></span></div>
                    <div class="icon-example"><span class="icon awesome sort-down"></span></div>
                    <div class="icon-example"><span class="icon awesome sort-up"></span></div>
                    <div class="icon-example"><span class="icon awesome envelope-alt"></span></div>
                    <div class="icon-example"><span class="icon awesome linkedin"></span></div>
                    <div class="icon-example"><span class="icon awesome undo"></span></div>
                    <div class="icon-example"><span class="icon awesome legal"></span></div>
                    <div class="icon-example"><span class="icon awesome dashboard"></span></div>
                    <div class="icon-example"><span class="icon awesome comment-alt"></span></div>
                    <div class="icon-example"><span class="icon awesome comments-alt"></span></div>
                    <div class="icon-example"><span class="icon awesome bolt"></span></div>
                    <div class="icon-example"><span class="icon awesome sitemap"></span></div>
                    <div class="icon-example"><span class="icon awesome umbrella"></span></div>
                    <div class="icon-example"><span class="icon awesome paste"></span></div>
                    <div class="icon-example"><span class="icon awesome user-md"></span></div>
    
                    <div class="clear"></div>
                    <h3>Entypo Icon Set</h3>
                    
                    
                    <div class="icon-example"><span class="icon entypo phone"></span></div>
                    <div class="icon-example"><span class="icon entypo mobile"></span></div>
                    <div class="icon-example"><span class="icon entypo mouse"></span></div>
                    <div class="icon-example"><span class="icon entypo address"></span></div>
                    <div class="icon-example"><span class="icon entypo email"></span></div>
                    <div class="icon-example"><span class="icon entypo write"></span></div>
                    <div class="icon-example"><span class="icon entypo attachment"></span></div>
                    <div class="icon-example"><span class="icon entypo reply"></span></div>
                    <div class="icon-example"><span class="icon entypo reply-to-all"></span></div>
                    <div class="icon-example"><span class="icon entypo forward"></span></div>
                    <div class="icon-example"><span class="icon entypo user"></span></div>
                    <div class="icon-example"><span class="icon entypo users"></span></div>
                    <div class="icon-example"><span class="icon entypo contact"></span></div>
                    <div class="icon-example"><span class="icon entypo card"></span></div>
                    <div class="icon-example"><span class="icon entypo export"></span></div>
                    <div class="icon-example"><span class="icon entypo location"></span></div>
                    <div class="icon-example"><span class="icon entypo map"></span></div>
                    <div class="icon-example"><span class="icon entypo compass"></span></div>
                    <div class="icon-example"><span class="icon entypo direction"></span></div>
                    <div class="icon-example"><span class="icon entypo center"></span></div>
                    <div class="icon-example"><span class="icon entypo share"></span></div>
                    <div class="icon-example"><span class="icon entypo heart"></span></div>
                    <div class="icon-example"><span class="icon entypo heart-2"></span></div>
                    <div class="icon-example"><span class="icon entypo star"></span></div>
                    <div class="icon-example"><span class="icon entypo star-2"></span></div>
                    <div class="icon-example"><span class="icon entypo thumbs-up"></span></div>
                    <div class="icon-example"><span class="icon entypo chat"></span></div>
                    <div class="icon-example"><span class="icon entypo comment"></span></div>
                    <div class="icon-example"><span class="icon entypo quote"></span></div>
                    <div class="icon-example"><span class="icon entypo printer"></span></div>
                    <div class="icon-example"><span class="icon entypo alert"></span></div>
                    <div class="icon-example"><span class="icon entypo link"></span></div>
                    <div class="icon-example"><span class="icon entypo flag"></span></div>
                    <div class="icon-example"><span class="icon entypo settings"></span></div>
                    <div class="icon-example"><span class="icon entypo search"></span></div>
                    <div class="icon-example"><span class="icon entypo trophy"></span></div>
                    <div class="icon-example"><span class="icon entypo price"></span></div>
                    <div class="icon-example"><span class="icon entypo camera"></span></div>
                    <div class="icon-example"><span class="icon entypo sleep"></span></div>
                    <div class="icon-example"><span class="icon entypo palette"></span></div>
                    <div class="icon-example"><span class="icon entypo leaf"></span></div>
                    <div class="icon-example"><span class="icon entypo music"></span></div>
                    <div class="icon-example"><span class="icon entypo shopping"></span></div>
                    <div class="icon-example"><span class="icon entypo flight"></span></div>
                    <div class="icon-example"><span class="icon entypo support"></span></div>
                    <div class="icon-example"><span class="icon entypo google-circles"></span></div>
                    <div class="icon-example"><span class="icon entypo eye"></span></div>
                    <div class="icon-example"><span class="icon entypo clock"></span></div>
                    <div class="icon-example"><span class="icon entypo microphone"></span></div>
                    <div class="icon-example"><span class="icon entypo calendar"></span></div>
                    <div class="icon-example"><span class="icon entypo flash"></span></div>
                    <div class="icon-example"><span class="icon entypo time"></span></div>
                    <div class="icon-example"><span class="icon entypo rss"></span></div>
                    <div class="icon-example"><span class="icon entypo locked"></span></div>
                    <div class="icon-example"><span class="icon entypo unlocked"></span></div>
                    <div class="icon-example"><span class="icon entypo checkmark"></span></div>
                    <div class="icon-example"><span class="icon entypo cancel"></span></div>
                    <div class="icon-example"><span class="icon entypo minus"></span></div>
                    <div class="icon-example"><span class="icon entypo plus"></span></div>
                    <div class="icon-example"><span class="icon entypo close"></span></div>
                    <div class="icon-example"><span class="icon entypo minus-2"></span></div>
                    <div class="icon-example"><span class="icon entypo plus-2"></span></div>
                    <div class="icon-example"><span class="icon entypo blocked"></span></div>
                    <div class="icon-example"><span class="icon entypo info"></span></div>
                    <div class="icon-example"><span class="icon entypo info-circle"></span></div>
                    <div class="icon-example"><span class="icon entypo help"></span></div>
                    <div class="icon-example"><span class="icon entypo help-2"></span></div>
                    <div class="icon-example"><span class="icon entypo warning"></span></div>
                    <div class="icon-example"><span class="icon entypo reload-CW"></span></div>
                    <div class="icon-example"><span class="icon entypo reload-CCW"></span></div>
                    <div class="icon-example"><span class="icon entypo shuffle"></span></div>
                    <div class="icon-example"><span class="icon entypo back"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow"></span></div>
                    <div class="icon-example"><span class="icon entypo retweet"></span></div>
                    <div class="icon-example"><span class="icon entypo list"></span></div>
                    <div class="icon-example"><span class="icon entypo add"></span></div>
                    <div class="icon-example"><span class="icon entypo grid"></span></div>
                    <div class="icon-example"><span class="icon entypo document"></span></div>
                    <div class="icon-example"><span class="icon entypo document-2"></span></div>
                    <div class="icon-example"><span class="icon entypo documents"></span></div>
                    <div class="icon-example"><span class="icon entypo landscape"></span></div>
                    <div class="icon-example"><span class="icon entypo images"></span></div>
                    <div class="icon-example"><span class="icon entypo movie"></span></div>
                    <div class="icon-example"><span class="icon entypo song"></span></div>
                    <div class="icon-example"><span class="icon entypo folder"></span></div>
                    <div class="icon-example"><span class="icon entypo archive"></span></div>
                    <div class="icon-example"><span class="icon entypo trashcan"></span></div>
                    <div class="icon-example"><span class="icon entypo upload"></span></div>
                    <div class="icon-example"><span class="icon entypo download"></span></div>
                    <div class="icon-example"><span class="icon entypo install"></span></div>
                    <div class="icon-example"><span class="icon entypo cloud"></span></div>
                    <div class="icon-example"><span class="icon entypo upload-2"></span></div>
                    <div class="icon-example"><span class="icon entypo play"></span></div>
                    <div class="icon-example"><span class="icon entypo pause"></span></div>
                    <div class="icon-example"><span class="icon entypo record"></span></div>
                    <div class="icon-example"><span class="icon entypo stop"></span></div>
                    <div class="icon-example"><span class="icon entypo fast-forward"></span></div>
                    <div class="icon-example"><span class="icon entypo fast-backward"></span></div>
                    <div class="icon-example"><span class="icon entypo first"></span></div>
                    <div class="icon-example"><span class="icon entypo last"></span></div>
                    <div class="icon-example"><span class="icon entypo full-screen"></span></div>
                    <div class="icon-example"><span class="icon entypo collapse"></span></div>
                    <div class="icon-example"><span class="icon entypo volume"></span></div>
                    <div class="icon-example"><span class="icon entypo sound"></span></div>
                    <div class="icon-example"><span class="icon entypo mute"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-2"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-3"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-4"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-5"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-6"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-7"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-8"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-9"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-10"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-11"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-12"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-13"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-14"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-15"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-16"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-17"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-18"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-19"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-20"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-21"></span></div>
                    <div class="icon-example"><span class="icon entypo triangle"></span></div>
                    <div class="icon-example"><span class="icon entypo triangle-2"></span></div>
                    <div class="icon-example"><span class="icon entypo triangle-3"></span></div>
                    <div class="icon-example"><span class="icon entypo triangle-4"></span></div>
                    <div class="icon-example"><span class="icon entypo code"></span></div>
                    <div class="icon-example"><span class="icon entypo battery"></span></div>
                    <div class="icon-example"><span class="icon entypo battery-2"></span></div>
                    <div class="icon-example"><span class="icon entypo battery-3"></span></div>
                    <div class="icon-example"><span class="icon entypo battery-4"></span></div>
                    <div class="icon-example"><span class="icon entypo battery-5"></span></div>
                    <div class="icon-example"><span class="icon entypo history"></span></div>
                    <div class="icon-example"><span class="icon entypo back-2"></span></div>
                    <div class="icon-example"><span class="icon entypo sun"></span></div>
                    <div class="icon-example"><span class="icon entypo sun-2"></span></div>
                    <div class="icon-example"><span class="icon entypo light-bulb"></span></div>
                    <div class="icon-example"><span class="icon entypo browser"></span></div>
                    <div class="icon-example"><span class="icon entypo publish"></span></div>
                    <div class="icon-example"><span class="icon entypo screen"></span></div>
                    <div class="icon-example"><span class="icon entypo arrow-22"></span></div>
                    <div class="icon-example"><span class="icon entypo broadcast"></span></div>
                    <div class="icon-example"><span class="icon entypo globe"></span></div>
                    <div class="icon-example"><span class="icon entypo square"></span></div>
                    <div class="icon-example"><span class="icon entypo inbox"></span></div>
                    <div class="icon-example"><span class="icon entypo network"></span></div>
                    <div class="icon-example"><span class="icon entypo feather"></span></div>
                    <div class="icon-example"><span class="icon entypo keyboard"></span></div>
                    <div class="icon-example"><span class="icon entypo home"></span></div>
                    <div class="icon-example"><span class="icon entypo bookmark"></span></div>
                    <div class="icon-example"><span class="icon entypo book"></span></div>
                    <div class="icon-example"><span class="icon entypo popup"></span></div>
                    <div class="icon-example"><span class="icon entypo search-2"></span></div>
                    <div class="icon-example"><span class="icon entypo dots-three"></span></div>
                    <div class="icon-example"><span class="icon entypo dots-two"></span></div>
                    <div class="icon-example"><span class="icon entypo dot"></span></div>
                    <div class="icon-example"><span class="icon entypo creative-commons"></span></div>
                    <div class="icon-example"><span class="icon entypo cd"></span></div>
                    <div class="icon-example"><span class="icon entypo suitcase"></span></div>
                    <div class="icon-example"><span class="icon entypo suitcase-2"></span></div>
                     
                     <div class="clear"></div>
                     <h3>Meteocons Icon Set</h3>
                                     
                    <div class="icon-example"><span class="icon meteo sunrise"></span></div>
                    <div class="icon-example"><span class="icon meteo sun"></span></div>
                    <div class="icon-example"><span class="icon meteo moon"></span></div>
                    <div class="icon-example"><span class="icon meteo sun-2"></span></div>
                    <div class="icon-example"><span class="icon meteo windy"></span></div>
                    <div class="icon-example"><span class="icon meteo wind"></span></div>
                    <div class="icon-example"><span class="icon meteo snowflake"></span></div>
                    <div class="icon-example"><span class="icon meteo cloudy"></span></div>
                    <div class="icon-example"><span class="icon meteo cloud"></span></div>
                    <div class="icon-example"><span class="icon meteo weather"></span></div>
                    <div class="icon-example"><span class="icon meteo weather-2"></span></div>
                    <div class="icon-example"><span class="icon meteo weather-3"></span></div>
                    <div class="icon-example"><span class="icon meteo lines"></span></div>
                    <div class="icon-example"><span class="icon meteo cloud-2"></span></div>
                    <div class="icon-example"><span class="icon meteo lightning"></span></div>
                    <div class="icon-example"><span class="icon meteo lightning-2"></span></div>
                    <div class="icon-example"><span class="icon meteo rainy"></span></div>
                    <div class="icon-example"><span class="icon meteo rainy-2"></span></div>
                    <div class="icon-example"><span class="icon meteo windy-2"></span></div>
                    <div class="icon-example"><span class="icon meteo windy-3"></span></div>
                    <div class="icon-example"><span class="icon meteo snowy"></span></div>
                    <div class="icon-example"><span class="icon meteo snowy-2"></span></div>
                    <div class="icon-example"><span class="icon meteo snowy-3"></span></div>
                    <div class="icon-example"><span class="icon meteo weather-4"></span></div>
                    <div class="icon-example"><span class="icon meteo cloudy-2"></span></div>
                    <div class="icon-example"><span class="icon meteo cloud-3"></span></div>
                    <div class="icon-example"><span class="icon meteo lightning-3"></span></div>
                    <div class="icon-example"><span class="icon meteo sun-3"></span></div>
                    <div class="icon-example"><span class="icon meteo moon-2"></span></div>
                    <div class="icon-example"><span class="icon meteo cloudy-3"></span></div>
                    <div class="icon-example"><span class="icon meteo cloud-4"></span></div>
                    <div class="icon-example"><span class="icon meteo cloud-5"></span></div>
                    <div class="icon-example"><span class="icon meteo lightning-4"></span></div>
                    <div class="icon-example"><span class="icon meteo rainy-3"></span></div>
                    <div class="icon-example"><span class="icon meteo rainy-4"></span></div>
                    <div class="icon-example"><span class="icon meteo windy-4"></span></div>
                    <div class="icon-example"><span class="icon meteo windy-5"></span></div>
                    <div class="icon-example"><span class="icon meteo snowy-4"></span></div>
                    <div class="icon-example"><span class="icon meteo snowy-5"></span></div>
                    <div class="icon-example"><span class="icon meteo weather-5"></span></div>
                    <div class="icon-example"><span class="icon meteo cloudy-4"></span></div>
                    <div class="icon-example"><span class="icon meteo lightning-5"></span></div>
                    <div class="icon-example"><span class="icon meteo thermometer"></span></div>
                    <div class="icon-example"><span class="icon meteo compass"></span></div>
                    <div class="icon-example"><span class="icon meteo none"></span></div>
                    <div class="icon-example"><span class="icon meteo Celsius"></span></div>
                    <div class="icon-example"><span class="icon meteo Fahrenheit"></span></div>
                     
                 </div>                 
            </section>
            
            <div class="full-width right">
	<div class="box no-bg">
    	<div class="line-separator"></div>
        
		<span class="copyright">by <a href="http://www.creepypixel.com/" class="creepy-logo fright"></a></span>
    </div>
</div>            
        </section>    </div>
    
</body> 
</html>