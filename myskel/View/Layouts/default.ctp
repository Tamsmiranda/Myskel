<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; ?></title>
<!--Stylesheets-->
<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'reset',
			'main',
			'typography',
			'tipsy',
			'jquery.ui.all',
			'fullcalendar',
			'bootstrap',
			'highlight'			
		));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?><!--
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/typography.css" />
<link rel="stylesheet" href="css/tipsy.css" />-->
<link rel="stylesheet" href="js/cl_editor/jquery.cleditor.css" />
<link rel="stylesheet" href="uploadify/uploadify.css" /><!--
<link rel="stylesheet" href="css/jquery.ui.all.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/bootstrap.css" />-->
<link rel="stylesheet" href="js/jq_tables/demo_table_jui.css" /><!--
<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" href="css/highlight.css" />-->
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<!--Javascript-->
<script type="text/javascript" src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/excanvas.js"> </script>
<script type="text/javascript" src="js/jquery.flot.js"> </script>
<script type="text/javascript" src="js/jquery.flot.stack.js"> </script>
<script type="text/javascript" src="js/jquery.flot.pie.js"> </script>
<script type="text/javascript" src="js/jquery.quicksand.js"> </script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"> </script>
<script type="text/javascript" src="js/jquery.tipsy.js"> </script>
<script type="text/javascript" src="js/cl_editor/jquery.cleditor.min.js"> </script>
<script type="text/javascript" src="uploadify/swfobject.js"></script>
<script type="text/javascript" src="uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrowtextarea.js"></script>
<script type="text/javascript" src="js/form_elements.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="js/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="js/jquery.ui.slider.js"></script>
<script type="text/javascript" src="js/jquery.ui.progressbar.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="js/jquery.ui.tabs.js"></script>
<script type="text/javascript" src="js/fullcalendar.js"></script>
<script type="text/javascript" src="js/gcal.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/highlight.js"></script>
<script type="text/javascript" src="js/jq_tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/main.js"> </script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" /></a></div>
    <!--Search-->
       
    <div class="header_search">
        <form action="">
            <input type="text" name="search" placeholder="Search" id="ac">
            <input type="submit" value="">
        </form>
    </div>
</header>
<!--Dreamworks Container-->
<div id="dreamworks_container">
    <!--Primary Navigation-->
    <nav id="primary_nav">
        <ul>
            <li class="nav_dashboard active"><a href="index.html">Dashboard</a></li>
            <li class="nav_graphs"><a href="charts.html">Graphs</a></li>
            <li class="nav_forms"><a href="forms.html">Forms</a></li>
            <li class="nav_typography"><a href="typography.html">Typography</a></li>
            <li class="nav_uielements"><a href="ui_elements.html">UI Elements</a></li>
            <li class="nav_pages"><a href="pages.html">Pages</a></li>
        </ul>
    </nav>
<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->
<nav id="secondary_nav"> 
<!--UserInfo-->
<dl class="user_info">
	<dt><a href="#"><img src="images/avatar.png" alt="" /></a></dt>
    <dd>
    <a class="welcome_user" href="#">Welcome,<strong>John Doe</strong></a>
    <span class="log_data">Last sign in : 16:11 Feb 27th 2012</span>
    <a class="logout" href="login.html">Logout</a>
    <a class="user_messages" href="#"><span>12</span></a>
    </dd>
</dl>

<!--Responsive Nav-->
    <a class="res_icon" href="#"></a>
    <ul id="responsive_nav">
    	<li>
        	<a href="index.html">Dashboard</a>
        </li>
        <li>
        	<a href="charts.html">Graphs</a>
            <ul>
            	<li><a href="charts.html">Lines Chart</a></li>
                <li><a href="charts_bar.html">Bars Chart</a></li>
                <li><a href="charts_pie.html">Pie Chart</a></li>
            </ul>
        </li>
        <li>
        	<a href="forms.html">Forms</a>
            <ul>
            	<li><a href="forms.html">Form elements</a></li>
                <li><a href="editor_upload.html">WYSIWYG / Uploader</a></li>
            </ul>
        </li>
        <li>
       	 	<a href="typography.html">Typography</a>
            <ul>
            	<li><a href="typography.html">Typography</a></li>
                <li><a href="grid.html">Grid</a></li>
            </ul>            
        </li>
        <li>
        	<a href="ui_elements.html">UI Elements</a>
            <ul>
            	<li><a href="ui_elements.html">Miscellaneous</a></li>
                <li><a href="buttons_icons.html">Buttons & Icons</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="data_table.html">Tables</a></li>
                <li><a href="modal_window.html">Modal Windows</a></li>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>            
        </li>
        <li>
       		<a href="pages.html">pages</a>
            <ul>
            	<li><a href="offline.html">Site offline</a></li>
                <li><a href="404.html">404 page</a></li>
                <li><a href="405.html">405 page</a></li>
                <li><a href="500.html">500 page</a></li>
            </ul>              
        </li>
    </ul>
<!--Responsive Nav ends-->

<h2>Dashboard</h2>
<ul>
	<li><a href="#"><span class="iconsweet">a</span>User Profiles</a></li>
    <li><a href="#"><span class="iconsweet">k</span>Admin Tools</a></li>
    <li><a href="#"><span class="iconsweet">o</span>Milestornes</a></li>
    <li><a href="#"><span class="iconsweet">S</span>Worklog</a></li>
</ul>
</nav>
<!--Content Wrap-->
<div id="content_wrap">	<!--Activity Stats-->
    	<div id="activity_stats">
        	<h3>Activity</h3>
            <div class="activity_column">
            	<span class="iconsweet">+</span> <span class="big_txt rd_txt">12</span>Added
            </div>
            <div class="activity_column">
            	<span class="iconsweet">Y</span> <span class="big_txt gr_txt">6</span>Flagged
            </div>
            <div class="activity_column">
            	<span class="iconsweet">#</span> <span class="big_txt">2</span>Answer pending
            </div>                         
        </div>                  
        <!--Quick Actions-->
        <div id="quick_actions">
        	<a class="button_big" href="#"><span class="iconsweet">+</span>Add new Project</a>
            <a class="button_big" href="#"><span class="iconsweet">w</span>Export Report</a>
            <a class="button_big btn_grey" href="#"><span class="iconsweet">f</span>Manage Projects</a>
        </div>
	<!--Notification Message-->
    	<div class="msgbar msg_Info hide_onC">
            <span class="iconsweet">*</span><p>Thanks for choosing Dreamworks!</p>
        </div>
	<!--One_TWO-->
 	<div class="one_two_wrap fl_left">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">r</span><h5>Projects graph</h5></div>
            <div class="widget_body">
            	<div class="content_pad">
            	<!--Projects Graph--> 
                <div id="chart_linear" class="no_overflow"  style="width:100%;height:270px"></div>
                </div>
            </div>
        </div>
    </div>
	<!--One_TWO-->
 	<div class="one_two_wrap fl_right">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">t</span><h5>Statistics</h5></div>
            <div class="widget_body">
            	<!--Stastics-->
            	<ul class="dw_summary">
                            <li>
                                <span class="percentage_done">12%</span> New registrations  <div class="progress_wrap"><div title="12%" class="tip_north progress_bar" style="width:12%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">9%</span> Re-opened tasks  <div class="progress_wrap"><div title="9%" class="tip_north progress_bar" style="width:9%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">46%</span> Task completed  <div class="progress_wrap"><div title="46%" class="tip_north progress_bar" style="width:46%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">82%</span> New visitors  <div class="progress_wrap"><div title="82%" class="tip_north progress_bar" style="width:82%"></div></div>
                            </li>
                            <li>
                                 <span class="percentage_done">27%</span> Unique visitors  <div class="progress_wrap"><div title="27%" class="tip_north progress_bar" style="width:27%"></div></div>
                            </li> 
                            <li>
                                 <span class="percentage_done">0%</span> Affiliate registration  <div class="progress_wrap"><div title="0%" class="tip_north progress_bar" style="width:0%"></div></div>
                            </li>                                                       
                 </ul>
            </div>
        </div>
    </div>   
	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">H</span><h5>Projects</h5></div>
            <div class="widget_body">
            	<div class="project_sort">
                	<ul class="filter_project">
                    	<li class="segment  selected"><a class="all" href="#">All <span class="count">10</span></a></li>
                        <li class="segment"><a class="incomplete" href="#">Incomplete<span class="count">6</span></a></li>
                        <li class="segment"><a class="Resolved" href="#">Resolved<span class="count">4</span></a></li>
                     </ul>
                     <ul class="project_list">
                        <li data-id="id-1" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-2" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-3" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                BBC
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>  
                        <li data-id="id-4" data-type="incomplete">
                        	<span class="project_badge grey iconsweet">
                            8
                            </span>
                            <a href="#" class="project_title">
                            	j&D <br />
                                Appstorm
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Carla
                            </a>                        
                        </li>        
                        <li data-id="id-5" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-6" data-type="incomplete">
                        	<span class="project_badge red iconsweet">
                            4
                            </span>
                            <a href="#" class="project_title">
                            	NIKE <br />
                                Freeworld
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Paul
                            </a>                        
                        </li>
                        <li data-id="id-7" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                Raje
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>  
                        <li data-id="id-8" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                iCAN
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li> 
                        <li data-id="id-7" data-type="incomplete">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                BBC
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>  
                        <li data-id="id-8" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Wacom <br />
                                MAZE
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>Omar [SA]
                            </a>                        
                        </li>                                                                 
                                                                                        
                     </ul>
                </div>
            </div>
        </div>
    </div>     
	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">f</span><h5>Activity across your projects</h5></div>
            <div class="widget_body">
            	<!--Activity Table-->
            	<table class="activity_datatable" width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                        <th width="8%">ID</th>
                        <th width="15%">Category</th>
                        <th width="32%">Project(s)</th>
                        <th width="12%">Status</th>
                        <th width="20%">Remarks</th>
                        <th width="13%">Actions</th>
                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="green_highlight pj_cat">Android</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_up">72% <span class="arrow_up iconsweet">]</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>
                    </tr>
                    <tr>
                        <td>3568</td>
                        <td><span class="grey_highlight pj_cat">Flex</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">12% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="green_highlight pj_cat">Android</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">72% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="grey_highlight pj_cat">Flex</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_up">72% <span class="arrow_up iconsweet">]</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    </tr>
                    <tr>
                        <td>4923</td>
                        <td><span class="blue_highlight pj_cat">JAVA</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">44% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    
                     </tr>                          
                    <tr>
                        <td>4923</td>
                        <td><span class="green_highlight pj_cat">Android</span></td>
                        <td><a href="#">Eodem modo typi, qui nunc nobi...</a></td>
                        <td><span class="stat_down">72% <span class="arrow_up iconsweet">[</span></span></td>
                        <td>Assigned to - <a href="#">SA</a></td>
                        <td><span class="data_actions iconsweet"><a class="tip_north" original-title="User" href="#">a</a> <a class="tip_north" original-title="Edit" href="#">C</a> 						<a class="tip_north" original-title="Delete" href="#">X</a></span></td>                    
                     </tr>                   
                </table>
				<div class="action_bar">
                    <a class="button_small whitishBtn" href="#"><span class="iconsweet">l</span>Export Table</a>
                </div>
            </div>
        </div>
    </div>          
</div>
</section>
</div>

</body>
</html>
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework'), 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => __('CakePHP: the rapid development php framework'), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
