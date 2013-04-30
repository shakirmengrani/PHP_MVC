<?php $theme = Theme_path; ?>
<!DOCTYPE link PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $this->title; ?></title>
<!-- Le styles -->
<link href="<?php echo $theme;?>/assets/css/bootstrap.min.css"
	rel="stylesheet" />
<link type="text/css"
	href="<?php echo $theme;?>/css/custom-theme/jquery-ui-1.10.0.custom.css"
	rel="stylesheet" />
<link type="text/css"
	href="<?php echo $theme;?>/assets/css/font-awesome.min.css"
	rel="stylesheet" />
<!--[if IE 7]>
<link rel="stylesheet" href="<?php echo $theme;?>/assets/css/font-awesome-ie7.min.css" />
<![endif]-->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo $theme;?>/css/custom-theme/jquery.ui.1.10.0.ie.css" />
<![endif]-->
<link href="<?php echo $theme;?>/assets/css/docs.css" rel="stylesheet" />
<link
	href="<?php echo $theme;?>/assets/js/google-code-prettify/prettify.css"
	rel="stylesheet" />
<link href="<?php echo $theme;?>/css/jquery.dropdown.css"
	rel="stylesheet" type="text/css" />
<link href="<?php echo $theme;?>/css/flexigrid.css" rel="stylesheet"
	type="text/css" />
<link href="<?php echo $theme;?>/css/jquery.lightbox-0.5.css"
	rel="stylesheet" type="text/css" />
<link href="<?php echo $theme;?>/css/mystyle.css" rel="stylesheet"
	type="text/css" />
</head>
<body>
<!-- Navbar
    ================================================== -->
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse"
	data-target=".nav-collapse"><span class="icon-bar"></span> <span
	class="icon-bar"></span> <span class="icon-bar"></span></button>
<a class="brand" href="<?php echo Home_path;?>"><?php echo APP_TITLE;?></a>
<div class="nav-collapse collapse">
<ul class="nav">
	<li><a href="<?php echo Home_path;?>Index/news">News</a></li>
</ul>
<form class="navbar-form pull-right"
	action="<?php echo Home_path."search/";?>"><input type="text" name="q"
	placeholer="Keyword"> <input type="submit" value="Search"
	class="btn-primary"></form>
</div>
</div>
</div>
</div>