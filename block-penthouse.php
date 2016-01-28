<div id="penthouse" class="gradientmaker">
  <span class="stops hide">

    <hr data-amount="0" data-from="below" data-position="bottom" data-color="#12a499" />
  </span>
  <div class="container-1200">
  <?php
  $penthouse = get_page_by_title('The Penthouse');

  ?>
  <div class="copy-container ">
    <!--<h2><?php echo $penthouse->post_title;?></h2>-->
    <div class="copy">
      <?php echo wpautop($penthouse->post_content);?>

    </div>

  </div>
  <div id="penthouse-gallery"data-start="opacity:1;" data-top-center="opacity:1;" data-top-bottom="opacity:0;">
    <div class="slider " >

      <?php
      $pimages = get_post_meta( $penthouse->ID, 'penthouse-images', true );
      $pimages = $pimages[0];
      foreach($pimages as $p) {
        ?>
        <div class="slide">
          <?php
          $dtSrc = wp_get_attachment_image_src($p, 'large', false);
          $dtSrc = $dtSrc[0];
          $mobSrc = wp_get_attachment_image_src($p, 'medium', false);
          $mobSrc = $mobSrc[0];

          ?>
          <div class="img-container">
          <img class="lazy-load" data-dt="<?php echo $dtSrc;?>" data-mob="<?php echo $mobSrc;?>" />
        </div>
        </div>
        <?php
      }

      ?>

    </div>
    <div class="btns">
      <ul class="no-style">
        <li>
          <a class="active btn-dl" href="#" data-index="0">
            <span class="copy">
            <span class="mob-hide">Penthouse</span> View
          </span>
          </a>
        </li>
        <li>
          <a href="#" class="btn-dl" data-index="1">
            <span class="copy">
            Stacking <span class="mob-hide">Plan</span>
          </span>
          </a>
        </li>

        <li>

          <a href="# " class="btn-dl" data-index="2"><span class="copy">Floorplan</span></a>

        </li>
      </ul>

    </div>


  </div>

  </div>
</div>
