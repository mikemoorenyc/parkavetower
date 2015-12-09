<section id="location">
  <div class="container-1200">
    <div class="letter-holder aspecter" id="location-letters" data-basewidth="1200">
      <div class="letter l" style="width:52em; height: 81em; top: 160em; left: 89em;" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter o" style="width:57em; height: 87em; top: 160em; left: 250em;" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform: translateY(-100px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter c" style="width:50em; height: 87em; top: 160em; left: 445em;" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter a" style="width:50em; height: 85em; top: 345em; left: 445em;"data-bottom-top="transform:translateY(150px)" data-top-bottom="transform: translateY(-150px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>
      <div class="letter t" style="width:45em; height: 84em; top: 345em; right:437em" data-bottom-top="transform:translateY(-200px)" data-top-bottom="transform: translateY(200px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter i" style="width:3em; height: 82em; top: 345em; right:285em" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter o-2" style="width:57em; height: 87em; top: 345em; right:89em" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform: translateY(-100px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>

      <div class="letter n" style="width:49em; height: 81em; top: 500em; right:89em" data-bottom-top="transform:translateY(150px)" data-top-bottom="transform: translateY(-150px)" data-center-center="transform:translateY(0px)" data-anchor-target="#location .copy-container">
        <span class="s1"></span>
        <span class="s2"></span>
        <span class="s3"></span>
        <span class="s4"></span>
      </div>


    </div>
  <?php
  $location = get_page_by_title('Location Section');

  ?>
  <article class='top-copy'>

    <div class="copy-container xl">
  <?php echo wpautop($location->post_content);?>
    </div>

  </article>

  <article class="map">
    <?php
    $locationid = get_post_meta( $location->ID, 'location-full-size-map', true );
    $locationid = $locationid[0]['map-image'];
    $mapurl = wp_get_attachment_image_src($locationid, 'fake-full', false);
    $mapurl = $mapurl[0];
    ?>
    <a class="map-container generic-module-popper" href="<?php echo $mapurl;?>" data-function="genericModulePanZoom">
      <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/map-full.png" data-mob="<?php echo $siteDir;?>/assets/imgs/map-full.png" />

    </a>

  </article>

  <article id="location-gallery">
    <?php
    $locgal = get_post_meta( $location->ID, 'location-gallery', true );

    ?>
    <div class="slider">
      <?php foreach($locgal as $loc):?>

        <div class="slide">
          <div class="title hide">
          <?php
          if($title !== '') {
            echo $loc['title'];
          } else {
            echo '&nbsp;';
          }
          ?>
          </div>
          <?php
          $mobSrc = wp_get_attachment_image_src($loc['image'], 'medium', false);
          $mobSrc = $mobSrc[0];
          ?>
          <div class="img-container">
          <img alt="<?php echo $loc['title'];?>" class="lazy-load" data-mob="<?php echo $mobSrc;?>" data-dt="<?php echo $mobSrc;?>" />
          </div>


        </div>


      <?php endforeach; ?>



    </div>
    <div class="gal-footer clearfix">
      <h2 class="copy sm text-overflow">

      </h2>
      <div class="counter">
        <span class="current"> </span><span class="all"></span>
      </div>

    </div>

  </article>
</div>


</section>
