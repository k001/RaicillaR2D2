<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 

<title>Form Elements :: Caffeine Admin Template</title>

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
<!-- Validation engine -->
<script type="text/javascript" src="/assets/js/languages/jquery.validationEngine-en.js" charset="utf-8"></script>
<script type="text/javascript" src="/assets/js/jquery.validationEngine.js"></script>
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
		                <li class="active"><a href="form-elements.html">Form elements</a></li>
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
                <span><a href="#">UI &amp; UX</a></span>
                <span class="middle"></span>
                <span><a href="#">Form Elements</a></span>
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
	            	<h1>Form Elements</h1>
    	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et faucibus metus. Integer non libero sed libero pharetra pulvinar. In orci nunc, imperdiet ut elementum eu, pellentesque at velit. Ut cursus sem vel tortor aliquam nec interdum libero venenatis. Mauris scelerisque congue consequat. Nulla facilisi. Etiam quis libero diam, sit amet aliquet quam. Suspendisse varius rhoncus metus eu gravida. Vivamus posuere turpis sed magna fermentum sit amet ultricies enim porttitor. Nulla facilisi. Maecenas sagittis consectetur purus eget cursus. Integer posuere turpis vitae odio aliquet accumsan a sit amet diam. Integer quis lectus ligula, in euismod lectus. Fusce a eros nisi. In massa metus, luctus ac egestas sed, lacinia in lectus. Nulla non velit ipsum.</p>
                </div>
            </section>
            
            <div class="clear"></div>
           
            <div class="one-half">
            	<div class="box">
                	<div class="inner">
						<form>
                    	<div class="titlebar"><span class="icon entypo white browser"></span> <span class="w-icon">Standard Fields</span></div>
                        <div class="contents">
                        	
                        	<div class="row">
                            	<label>Tiny</label> <div class="field-box"><input type="text" class="tiny" placeholder=".tiny"> <input type="text" class="tiny"> <input type="text" class="tiny"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>Small</label> <div class="field-box"><input type="text" class="small"  placeholder=".small"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>Medium</label> <div class="field-box"><input type="text" class="medium"  placeholder=".medium"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>Large</label> <div class="field-box"><input type="text" class="large" placeholder=".large"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>Disabled</label> <div class="field-box"><input type="text" class="large" disabled="disabled" value="disabled">
                                <p class="info"><strong>note:</strong> you can also add information under each field</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>File</label> <div class="field-box"><input type="file"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<div class="one-half">
                                    <label>Radio</label> <div class="field-box"><input name="radio" type="radio" /> <input name="radio" type="radio" /> <input name="radio" type="radio" /> </div>
                                    <div class="clear"></div>
                         	   </div>
                            	<div class="one-half">
                            		<label>Checkbox / Radio</label> <div class="field-box"><input type="checkbox" /> </div>
                                	<div class="clear"></div>
                                </div>
                            </div>
                            
                            <div class="row">
                            	<label>Select</label> <div class="field-box">
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
                    	<div class="titlebar"><span>Special Fields</span></div>
                        <div class="contents">
                        	<div class="row">
                            	<label>Multi select</label> <div class="field-box">
                                	<select multiple="multiple">
                                    	<option>Some Option 1</option>
                                        <option>Some Option 2</option>
                                        <option>Some Option 3</option>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            
                        	<div class="row">
                            	<label>With Icon</label> <div class="field-box"><span class="icon entypo user for-input"></span><input type="text" class="w-icon" placeholder="Username">
                                <p class="info">Any icon from the icon page can be used</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                            	<label>Rich select</label> <div class="field-box">
                                	<select data-placeholder="Your Favorite Football Team" style="width:350px;" class="chzn-select" tabindex="6">
                                        <option value=""></option>
                                        <optgroup label="Liga A">
                                            <option>Inter</option>
                                            <option>Roma</option>
                                            <option>Juventus</option>
                                        </optgroup>
                                        <optgroup label="La Liga">
                                            <option>Barcelona</option>
                                            <option>Real Madrid</option>
                                            <option>Sevilla</option>
                                            <option>Real Sociedad</option>
                                        </optgroup>
                                        <optgroup label="Premier League">
                                            <option>Manchester United</option>
                                            <option>Manchester City</option>
                                            <option>Liverpool</option>
                                            <option>Arsenal</option>
                                        </optgroup>
                                        <optgroup label="Primera Division">
                                            <option>River Plate</option>
                                            <option>Boca Juniors</option>
                                            <option>Racing Club</option>
                                            <option>Independiente</option>
                                        </optgroup>
                                        <optgroup label="Brasileirao">
                                            <option>Santos</option>
                                            <option>Flamengo</option>
                                            <option>Vasco da Gama</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            
                            <div class="row">
                            	<label>Multi select</label> <div class="field-box">
                                	<select data-placeholder="Your Favorite Football Team" style="width:350px;" class="chzn-select" multiple tabindex="6">
                                        <option value=""></option>
                                        <optgroup label="Liga A">
                                            <option>Inter</option>
                                            <option>Roma</option>
                                            <option>Juventus</option>
                                        </optgroup>
                                        <optgroup label="La Liga">
                                            <option>Barcelona</option>
                                            <option>Real Madrid</option>
                                            <option>Sevilla</option>
                                            <option>Real Sociedad</option>
                                        </optgroup>
                                        <optgroup label="Premier League">
                                            <option>Manchester United</option>
                                            <option>Manchester City</option>
                                            <option>Liverpool</option>
                                            <option>Arsenal</option>
                                        </optgroup>
                                        <optgroup label="Primera Division">
                                            <option>River Plate</option>
                                            <option>Boca Juniors</option>
                                            <option>Racing Club</option>
                                            <option>Independiente</option>
                                        </optgroup>
                                        <optgroup label="Brasileirao">
                                            <option>Santos</option>
                                            <option>Flamengo</option>
                                            <option>Vasco da Gama</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="clear"></div>
                            </div>
                            
                            <div class="row">
                            	<label>Range slider</label> <div class="field-box for-slider">
		                            <div class="layout-slider">
		                                <input id="slider" name="price" value="30000.5;60000" />
	                                </div>
                                </div>
                            </div>
							<div class="row">
                            	<label>Value slider</label> <div class="field-box for-slider">
	                                <div class="layout-slider">
		                                <input id="slider2" name="price" value="20" />
	                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                            	<label>iOS Checkbox</label> <div class="field-box"><input type="checkbox" class="ios" /> </div>
                                <div class="clear"></div>
                            </div>
                            
                            <div class="row">
                            	<label>UI Spinner</label> <div class="field-box"><input type="text" class="spinner tiny" value="0" data-max="30" data-min="-10" /> </div>
                                <div class="clear"></div>
                            </div>
                            
                            <div class="row last">
                            	<label>Color Picker</label> <div class="field-box"><input type="text" name="color1" class="color-picker black" size="7" autocomplete="on" maxlength="10" value="#568F56" /> </div>
                                <div class="clear"></div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="one-third">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon entypo white cloud"></span> <span class="w-icon">Masked Fields</span></div>

                        <div class="contents">
                            <div class="row">
                                <label>Phone</label> 
                                <div class="field-box">
                                	<span class="icon entypo phone for-input"></span>
                                    <input type="text" class="w-icon medium mask three-fourths" data-mask="(999) 9999-9999">
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Mobile</label> <div class="field-box"><span class="icon entypo mobile for-input"></span><input type="text" class="w-icon medium mask" data-mask="(999) 999-9999"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Birthdate</label> 
                                <div class="field-box">
                                	<span class="icon entypo calendar for-input"></span>
                                    <input type="text" class="w-icon medium mask" data-mask="99/99/9999">
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>CD-key</label> <div class="field-box"><span class="icon entypo cd for-input"></span><input type="text" class="w-icon medium mask" data-mask="****-****-****-****"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <label>Personal ID</label> <div class="field-box"><span class="icon entypo user for-input"></span><input type="text" class="w-icon medium mask" data-mask="99999999"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row last">
                                <label>Time</label> <div class="field-box"><span class="icon entypo clock for-input"></span><input type="text" class="w-icon medium mask" data-mask="99:99"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="two-thirds">
            	<div class="box">
                	<div class="inner">
                    	<div class="titlebar"><span class="icon entypo white keyboard"></span> <span class="w-icon">HTML5 WYSIWYG</span></div>
                        
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
                                <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6">H6</a> |
                                <a data-wysihtml5-command="insertUnorderedList"><span class="icon awesome list-ul"></span></a>
                                <a data-wysihtml5-command="insertOrderedList"><span class="icon awesome list-ol"></span></a> |
                                <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red">red</a>
                                <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green">green</a>
                                <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue">blue</a> |
                                <a data-wysihtml5-command="undo"><span class="icon awesome undo"></span></a>
                                <a data-wysihtml5-command="redo"><span class="icon awesome repeat"></span></a> |
                                <a data-wysihtml5-command="insertSpeech"><span class="icon awesome comment"></span></a> |
                                <a data-wysihtml5-action="change_view"><span class="icon awesome eye-open"></span></a>
                            
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
                            	<textarea id="textarea"><h3>WYSIWYG Editor powered by HTML5</h3><p>This awesome HTML5 editor degrades gracefully into an standard textarea on old browsers.</p></textarea>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="bar-big">
                                <input type="submit" value="Submit">
                                <input type="reset" value="Reset">
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