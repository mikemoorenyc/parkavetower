<section id="location">
  <div class="container-1200">
  <?php
  $location = get_page_by_title('Location Section');

  ?>
  <article class='top-copy'>

    <div class="copy-container">
  <?php echo wpautop($location->post_content);?>
    </div>

  </article>

  <article class="map">
    <div class="map-container">
      <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/map-full.png" data-mob="<?php echo $siteDir;?>/assets/imgs/map-full.png" />

    </div>

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
