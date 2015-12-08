<section id="home">

<?php
$home = get_page_by_title('Home');





?>
<div class="container-1200">
<div id="hero-image">
<?php
$hero = get_post_meta( $home->ID, 'hero-image', true );
$hero = $hero[0];
$dtSrc = wp_get_attachment_image_src($hero['image'], 'large', false);
$dtSrc = $dtSrc[0];
$mobSrc = wp_get_attachment_image_src($hero['image'], 'medium', false);
$mobSrc = $mobSrc[0];
?>
  <img class="hide" data-dt="<?php echo $dtSrc;?>" data-mob="<?php echo $mobSrc;?>" />

</div>
<div id="welcome" class="letter-holder aspecter" data-basewidth="1200">
  <div class="letter w" style="width:82em; height: 88em; top: -10em; left: 64em;">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter e-1" style="width:50em; height: 79em; top: 190em; left: 64em;">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter l" style="width:52em; height: 83em; top: 190em; left: 319em;">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter c" style="width:50em; height: 87em; top: 240em; left: 586em;">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter o" style="width:57em; height: 87em; top: 340em; right:305em; ">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter m" style="width:67em; height: 82em; top: 425em; right:75em;">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
  <div class="letter e" style="width:50em; height: 79em;  top: 610em; right:75em;">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>
</div>

<div id="intro">
  <div class="copy-container">
<?php echo wpautop($home->post_content);?>
  </div>

  <div id="intro-video">
    <div class="video-container">
      <iframe src="https://player.vimeo.com/video/137953329?title=0&byline=0&portrait=0&color=54c3bb" width="498" height="280" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

  </div>

</div>
</div>

</section>
