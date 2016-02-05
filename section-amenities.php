<section id="amenities" class="gradientmaker" data-anchor="amenities">
  <!--<span class="stops hide">
    <hr data-amount="0" data-from="below" data-position="bottom" data-color="#044e5a" />
  </span>-->
  <div class="container-1200" style="padding:0;">
    <div class="letter-holder aspecter" data-basewidth="1200" id="club-letters" style="height:588px;">
      <div class="letter c" style="width:50em; height: 87em; left: 193em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-25px)" data-top-bottom="transform:translateY(25px)" data-anchor-target="#club-letters">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>
      <div class="letter l" style="width:52em; height: 84em;  left: 446em;"  data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(55px)" data-top-bottom="transform:translateY(-50px)" data-anchor-target="#club-letters">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter u" style="width:51em; height: 84em; right:460em;" >
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter b" style="width:50em; height: 85em; right:212em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-75px)" data-top-bottom="transform:translateY(75px)" data-anchor-target="#club-letters">
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
    <!--  <span class="stops hide">
        <hr data-amount="150" data-from="below" data-position="top" data-color="#044e5a" />
      </span>-->
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
    $skrollrArray[4] = 'data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-500px)"';
    $skrollrArray[1] = 'data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-50px)"';
    $skrollrArray[2] ='data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-150px)"';
    $skrollrArray[3] =  'data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-300px)"';
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
      <div class="slide-container" <?php echo $skrollrArray[$pos];?> >
      <div class="wrap">
        <div class="inner clearfix">
          <a href="<?php echo $fullSrc;?>" data-function="genericModuleImage" class="generic-module-popper gallery-a">
          <div class="img-holder layer" data-depth="-0.075">


              <div class="img-inner">
                <img alt="<?php echo $ag['title'];?>" class="lazy-load layer" data-mob="<?php echo $mobSrc;?>" data-dt="<?php echo $mobSrc;?>" />

              </div>

              <div class="hover-state">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#plus79"></use>
                </svg>
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
