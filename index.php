<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/joomla.css" rel="stylesheet" type="text/css" media="all" />
	  <!--[if IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
   <!--[if lt IE 7]>
	  <link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
	<?php
		$contentwidth='';
		if($this->countModules("position-7")&&!$this->countModules("position-8")){ $contentwidth="left";}
		if($this->countModules("position-8")&&!$this->countModules("position-7")){ $contentwidth="right";}
		if($this->countModules("position-7")&&$this->countModules("position-8")) {$contentwidth="middle"; }
		$app = &JFactory::getApplication();
	?>

<?php if (($this->params->get('useJavascript')) !=0) : ?>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery-1.5.min.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/effects.js"></script>
<?php endif;?>
</head>

<body>
<div id="wrapper">
	<div id="bg_up">
		<div id="masthead_container">
			<div id="masthead">
				<div id="sitetitle_outer">
					<div id="sitetitle_left"></div>
					<div id="sitetitle_inner"><a href="index.php"><?php echo $app->getCfg('sitename'); ?></a></div>
					<div id="sitetitle_right"></div>
				</div>
			</div>
		</div>
		<div id="container">
				<div id="searchbox">
					<?php if($this->countModules('position-0')) : ?>
						<div id="search">
							<div id="search_inner">
					             <jdoc:include type="modules" name="position-0" />
							</div>
						</div>
					<?php endif; ?>		
				</div>	
			<?php if($this->countModules('position-1')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="position-1" />
				</div>
			<?php endif; ?>
			<div id="page_content">
				<div id="content_up">
					<div id="content_up_left">
						<?php if($this->countModules('position-2')) : ?>
							<div id="breadcrumbs">
				            	<jdoc:include type="modules" name="position-2" />
						    </div>
						<?php endif; ?>		
						<div id="content_up_right"></div>
					</div>
				</div>
					<?php if($this->countModules('position-7')) : ?>
						<div id="sidebar_left">
				             <jdoc:include type="modules" name="position-7" style="xhtml" />
						</div>
					<?php endif; ?>		
					<?php if($this->countModules('position-8')) : ?>
						<div id="sidebar_right">
				             <jdoc:include type="modules" name="position-8" style="xhtml" />
						</div>
					<?php endif; ?>		
				    <div id="content_out<?php echo $contentwidth; ?>">
						<?php if($this->countModules('user1 or user2')) : ?>
							<div id="user_modules1">
								<?php if($this->countModules('user1')) : ?>
									<div id="user1">
							           <jdoc:include type="modules" name="user1" style="lvround" />
									</div>
								<?php endif; ?>			
								<?php if($this->countModules('user2')) : ?>
									<div id="user2">
							           <jdoc:include type="modules" name="user2" style="lvround" />
									</div>
								<?php endif; ?>			
							</div>					
						<?php endif; ?>		
						<?php if($this->countModules('top')) : ?>
							<div id="top">
					             <jdoc:include type="modules" name="top" style="lvround" />
							</div>
						<?php endif; ?>		
						<div id="maincontent">
							<jdoc:include type="message" />
							 <jdoc:include type="component" />
						</div>
					</div>
				</div>	
				<div class="clr"></div>
			<div id="container2">
				<?php if($this->countModules('user5 or user6')) : ?>
					<div id="content_down">
						<div id="content_down_left">
							<div id="content_down_right">
							</div>
						</div>
					</div>	
					<div id="user_modules2">
							<?php if($this->countModules('user5')) : ?>
								<div id="user5">
									<jdoc:include type="modules" name="user5" style="lvround" />
								</div>
							<?php endif; ?>				
							<?php if($this->countModules('user6')) : ?>
								<div id="user6">
									<jdoc:include type="modules" name="user6" style="lvround" />
								</div>
							<?php endif; ?>				
					</div>
				<?php endif; ?>				
				<div id="bottom">
				</div>
				<div id="footer">
					<div id="copyright_info">
						<p><?php echo  $this->params->get('CopyrightInfo');  ?></p>
					</div>
					<?php if($this->countModules('footer')) : ?>
						<jdoc:include type="modules" name="footer" />
					<?php endif; ?>
					<a id="gotop" title="top" href="#">&uarr;</a>
				</div>
			</div>
		</div>
		<div class="clr"></div>
		<div id="designed_by">
			<p>&copy; <?php echo $app->getCfg('sitename'); ?> | <a href="http://www.lernvid.com" title="Templates" target="_blank">Design by: LernVid.com</a></p>
		</div>
	</div>
</div>
<jdoc:include type="modules" name="debug" />
</body>
</html>