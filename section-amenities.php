<section id="amenities">
  <div class="container-1200" style="padding:0;">
    <div class="letter-holder aspecter" data-basewidth="1200" id="club-letters">
      <div class="letter c" style="width:50em; height: 87em; top: 177em; left: 188em;" data-bottom-top="transform:translateY(200px)" data-top-bottom="transform:translateY(-200px)" data-center-center="transform:translateY(0px)" data-anchor-target="#club .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>
      <div class="letter l" style="width:52em; height: 84em; top: 177em; left: 358em;" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform:translateY(-50px)" data-center-center="transform:translateY(0px)" data-anchor-target="#club .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter u" style="width:51em; height: 84em; top: 358em; left: 670em;" data-bottom-top="transform:translateY(-100px)" data-top-bottom="transform:translateY(100px)" data-center-center="transform:translateY(0px)" data-anchor-target="#club .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter b" style="width:50em; height: 85em; top: 480em; left: 990em;" data-bottom-top="transform:translateY(150px)" data-top-bottom="transform:translateY(-150px)" data-center-center="transform:translateY(0px)" data-anchor-target="#club .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>



    </div>

  </div>
<?php
$amenities = get_page_by_title('Amenities Section');

?>
<div class="container-1200">
  <article id="club">
    <div class="copy-container gradientmaker wide">
      <span class="stops hide">
        <hr data-amount="150" data-from="below" data-position="top" data-color="#000000" />
      </span>
  <?php echo wpautop($amenities->post_content);?>
    </div>

  </article>

  <div id="amenities-gallery">
    <?php
    $amengal = get_post_meta( $amenities->ID, 'amenities-gallery', true );
    $looper = 1;
    function echoH2($title,$d) {
      ?>
      <h2 class="sm layer" data-depth="<?php echo $d;?>9">
        <span class="inner">
          <?php echo $title;?>
        </span>
      </h2>
      <?php
    }
    $pos = 1;
    $skrollrArray = array();
    $skrollrArray[0] = '';
    $skrollrArray[4] = 'data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)"';
    $skrollrArray[1] = 'data-bottom-top="transform: translateY(100px)" data-top-bottom="transform: translateY(-100px)"';
    $skrollrArray[2] ='data-bottom-top="transform: translateY(200px)" data-top-bottom="transform: translateY(-200px)"';
    $skrollrArray[3] =  'data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)"';
    $depthArray = array();
    $depthArray[0] = '';
    $depthArray[4] = '0.02';
    $depthArray[1] = '0.05';
    $depthArray[2] = '0.1';
    $depthArray[3] = '0.15';

    foreach($amengal as $ag) {

      $oddoreven = 'even';
      if ($looper & 1) {
        $oddoreven = 'odd';
      }

      ?>
      <?php
      //<?php echo $skrollrArray[$pos];
      $mobSrc = wp_get_attachment_image_src($ag['image'], 'medium', false);
      $mobSrc = $mobSrc[0];

      $fullSrc = wp_get_attachment_image_src($ag['image'], 'fake-full', false);
      $fullSrc = $fullSrc[0];
      ?>
      <div class="slide-container" <?php echo $skrollrArray[$pos];?> data-anchor-target="#amenities-gallery">
      <div class="wrap">
        <div class="inner clearfix">
          <a href="<?php echo $fullSrc;?>" data-function="genericModuleImage" class="generic-module-popper gallery-a">
          <div class="img-holder layer" data-depth="-0.075">


              <div class="img-inner">
                <img alt="<?php echo $ag['title'];?>" class="lazy-load layer" data-mob="<?php echo $mobSrc;?>" data-dt="<?php echo $mobSrc;?>" />

              </div>

          </div>
          <span class="title h2 sm layer" data-depth="0.075"><span class="inner"><?php echo $ag['title'];?></span></span>
          </a>
          <?php

        //  echoH2($ag['title'], $depthArray[$pos]);

          if($pos == 4) {
            $pos = 1;
          } else {
            $pos++;
          }
          ?>



        </div>
      </div>
      </div>


      <?php
      $looper++;
    }
    ?>



  </div>






</div>
</section>
