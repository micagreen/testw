<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
  <!-- Basic Page Needs –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
  <meta name="description" content="<?php bloginfo('description');?>">
  <!-- Mobile Specific Metas –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FONT  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- bxSlider CSS-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/jquery.bxslider.css">
  <!-- Custom Css –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
  <!-- Bootstrap JS –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- Icon -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/jquery.fitvids.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/bxslider.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/scroll.js"></script>
	<script type="text/javascript">
	  $(document).ready(function(){
			$('.bxSlider').bxSlider({
	  			video: true,
	  			useCSS: true,
	  			pager :false,
			});
		});
	</script>
  <link rel="icon" type="image/gif" href="<?php bloginfo('template_directory');?>/img/icon.gif">
</head>
<body id="<?php the_id(); ?>">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigatio</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>/#">Portfolio de <?php bloginfo('name'); ?></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#presentation">Présentation</a></li>
          <li><a href="#work">Work</a></li>
          <li><a href="#formation">Formation</a></li>
          <li><a href="#brain">Brain</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div id="topfix">
