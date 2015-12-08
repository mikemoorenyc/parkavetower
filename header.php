
<?php

//GET POST SLUG
global $post;
$slug = $post->post_name;

//GET POST PARENT
$parentID = $post->post_parent;
$parentslug = get_post($parentID)->post_name;

//GET THEME DIRECTORY
global $siteDir;
$siteDir = get_bloginfo('template_url');

//GET HOME URL
global $homeURL;
$homeURL = esc_url( home_url( ) );

//DECLARE THE SITE TITLE, SAVE A DB QUERY
global $siteTitle;
$siteTitle = 'Park Avenue Tower - 65 E 55th St - NYC';

//DECLARE THE PAGE EXCERPT
global $siteDesc;
$siteDesc = '';
?>
<!DOCTYPE html>
<html lang="en" data-parent-slug="<?php echo $parentslug;?>" data-current="<?php echo $slug;?>" class="slug-<?php echo $slug;?>">
<head>

<!-- ABOVE THE FOLD CSS -->
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7105354/772728/css/fonts.css" />
<style><?php $inlinecss = file_get_contents($siteDir.'/css/main.css'); dirReplacer($inlinecss);?></style>


<?php


if ( is_front_page() ) {
  $namer = "Home";
  ?>
  <title><?php echo $siteTitle;?></title>
  <?php
} else {
  $namer = get_the_title();
  ?>

  <title><?php echo $namer;?> | <?php echo $siteTitle;?></title>
  <?php
}
?>

<!-- HERE'S WHERE WE GET THE SITE DESCRIPTION -->
<meta name="description" content="<?php if (have_posts() && is_single() OR is_page()):while(have_posts()):the_post();



  if (get_the_excerpt()) {
    $out_excerpt = str_replace(array("\r\n", "\r", "\n", "[&hellip;]"), "", get_the_excerpt());
    //echo apply_filters('the_excerpt_rss', $out_excerpt);
    $siteDesc = $out_excerpt;
  } else {
    $siteDesc =  get_bloginfo('description');
  }

  if($siteDesc == '') {
    $siteDesc =  get_bloginfo('description');
  }

endwhile;

else: ?>
<?php $siteDesc = ''; ?>
<?php endif; ?><?php echo $siteDesc;?>" />

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta property="og:description" content="<?php echo $siteDesc;?>" />
<meta property="og:image" name="thumb" content="<?php echo $siteDir;?>/assets/imgs/share-img.jpg"/>
<meta property="og:title" content="<?php echo $siteTitle;?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $homeURL;?>/"/>
<meta property="og:site_name" content="<?php echo $siteTitle;?>"/>


<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?php echo $homeURL;?>/">
<meta name="twitter:creator" content="realestatearts">
<meta name="twitter:title" content="<?php echo $siteTitle;?>">
<meta name="twitter:description" content="<?php echo $siteDesc;?>">
<meta name="twitter:image:src" content="<?php echo $siteDir;?>/assets/imgs/share-img.jpg">
<?php wp_site_icon();?>
<meta name="geo.region" content="US-NY" />
<meta name="geo.placename" content="New York" />
<meta name="geo.position" content="40.760858;-73.972084" />
<meta name="ICBM" content="40.760858, -73.972084" />
<!--  STUFF FOR IE8 WILL GET REMOVED ON COMPILATION // REMOVE THIS LINE TO RENDER IT
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php echo $siteDir;?>/css/expanded.css" />
	<link href='<?php echo $siteDir;?>/css/ie-fixes.css?ts=<?php echo time();?>' rel='stylesheet' type='text/css'>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->




<!-- TRACKING -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64266869-2', 'auto');
  ga('send', 'pageview');
  rootPath = '<?php echo $homeURL;?>';
</script>

</head>

<body <?php body_class(); ?> id="top">
<div class="hide">
  <?php include 'assets/svgs.svg';?>
</div>
<div id="css-checker"></div>

<div id="fader-backgrounds">

  <div id="bwb-bg" data-anchor-target=".bwb-graphic" data-start="opacity:0;" data-bottom-top="opacity:0" data-center-top="opacity: 1;" ></div>
  <div id="trans-bg" data-anchor-target=".bwb-gallery .cardStack" data-start="opacity:0;" data-center-top="opacity:0" data-top-top="opacity: 1;" style="background:black;"></div>
  <div id="penthouse-bg" data-anchor-target="#penthouse" data-bottom-top="opacity:0;" data-top-top="opacity: 1;" ></div>
  <div id="trans-bg" data-anchor-target="#club" data-start="opacity:0;" data-bottom-top="opacity:0" data-center-top="opacity: 1;" style="background:black;"></div>
  <div id="workspace-intro" data-anchor-target=".reimagined-cards .cardStack" data-start="opacity:0;" data-center-top="opacity:0;" data-top-bottom="opacity:1;" data></div>
  <div id="workspace-bg" data-anchor-target="#elevation-section .dt-elevation" data-start="opacity:0;" data-bottom-top="opacity:0;" data-center-top="opacity:1;" data></div>
  <div id="contact-bg" data-anchor-target="#contact" data-start="opacity:0;" data-bottom-top="opacity:0;"  data-bottom-bottom="opacity:1;"></div>
</div>



  <?php include 'section-header.php';?>

<div id="content-wrapper">
