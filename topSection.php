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
<section id="intro">
  <div class="copy-container">
<?php echo wpautop($home->post_content);?>
  </div>

  <div id="intro-video">
    <div class="video-container">
      <iframe src="https://player.vimeo.com/video/137953329?title=0&byline=0&portrait=0&color=54c3bb" width="498" height="280" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

  </div>

</section>
</div>

</section>
