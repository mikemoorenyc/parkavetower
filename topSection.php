<section id="home" data-anchor="home">

<?php
$home = get_page_by_title('Home');





?>
<div id="hero-image">
<?php
$hero = get_post_meta( $home->ID, 'hero-image', true );
$hero = $hero[0];
$dtSrc = wp_get_attachment_image_src($hero['image'], 'fake-full', false);
$dtSrc = $dtSrc[0];
$mobSrc = wp_get_attachment_image_src($hero['image'], 'medium', false);
$mobSrc = $mobSrc[0];
?>
  <img class="hide" data-dt="<?php echo $dtSrc;?>" data-mob="<?php echo $mobSrc;?>" />

</div>
<div class="container-1200 gradientmaker">
  <!--<span class="stops hide">
    <hr data-amount="0" data-from="below" data-position="top" data-color="#000" />
    <hr data-amount="0" data-from="below" data-position="bottom" data-color="#12a499" />
  </span>-->
<div id="welcome" class="letter-holder aspecter" data-basewidth="1200" style="height:464px;">
  <div class="letter w" style="width:82em; height: 88em; left: 67em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-100px)" data-top-bottom="transform:translateY(100px)" data-anchor-target=".letter-holder#welcome">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter e-1" style="width:50em; height: 79em; left:248em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform:translateY(-50px)" data-anchor-target=".letter-holder#welcome">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter l" style="width: 52em; height: 83em; left:413em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-150px)" data-top-bottom="transform:translateY(25px)" data-anchor-target=".letter-holder#welcome">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter c" style="width:50em; height: 87em; left:579em;" >
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter o" data-start="transform:translateY(0px);"style="width:57em; height: 87em; left:741em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(25px)" data-top-bottom="transform:translateY(-25px)" data-anchor-target=".letter-holder#welcome">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter m" style="width:67em; height: 82em; right:232em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(75px)" data-top-bottom="transform:translateY(-75px)" data-anchor-target=".letter-holder#welcome">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter e" style="width:50em; height: 79em; right:75em;"  data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-200px)" data-top-bottom="transform:translateY(50px)" data-anchor-target=".letter-holder#welcome">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
</div>

<div id="intro">
  <div class="copy-container white">
<?php echo wpautop($home->post_content);?>
  </div>



</div>
</div>
<div id="intro-video">
  <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/full-w-intro.jpg" data-mob="<?php echo $siteDir;?>/assets/imgs/video-place.jpg" style="width:100%;"/>
<!--
  <div class="video-container hide">
    <iframe src="https://player.vimeo.com/video/34741214?title=0&byline=0&portrait=0&color=54c3bb" width="498" height="280" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
-->

</div>

</section>
