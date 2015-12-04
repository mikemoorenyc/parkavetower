<section id="amenities">
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
    $skrollrArray[4] = 'data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-20px)"';
    $skrollrArray[1] = 'data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-50px)"';
    $skrollrArray[2] ='data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-100px)"';
    $skrollrArray[3] =  'data-bottom-top="transform: translateY(0px)" data-top-bottom="transform: translateY(-150px)"';
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
      <div class="slide-container">
      <div class="wrap">
        <div class="inner clearfix">

          <div class="img-holder" <?php echo $skrollrArray[$pos];?>>
            <?php
            //<?php echo $skrollrArray[$pos];
            $mobSrc = wp_get_attachment_image_src($ag['image'], 'medium', false);
            $mobSrc = $mobSrc[0];
            ?>
            <img alt="<?php echo $ag['title'];?>" class="lazy-load layer" data-mob="<?php echo $mobSrc;?>" data-dt="<?php echo $mobSrc;?>" data-depth="<?php echo $depthArray[$pos];?>"/>
          </div>
          <?php

          echoH2($ag['title'], $depthArray[$pos]);

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
