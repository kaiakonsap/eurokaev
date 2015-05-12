<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
 	<meta charset="UTF-8">
 	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
<?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
<header>
	<div id="header_container">
		<div id="brand">
			<a href="<?php $urlbloginfo=get_bloginfo('url'); echo $urlbloginfo?>">
			
				<h2>
<?php $bloginfo = get_bloginfo("name" );
echo $bloginfo;
 ?> 
				</h2>
			
			</a>
		</div>
	                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                

		<nav>
			<?php html5blank_nav(); ?>
<?php  if(function_exists("pll_the_languages")){
	echo '<ul class="lang">';
	pll_the_languages(array('show_flags'=>1,'show_names'=>0,'hide_if_no_translation'=>1));
	echo '</ul>';
}
 ?>
		</nav>
	</div>
</header>