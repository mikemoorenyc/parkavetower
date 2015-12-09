<section id="building">
  <div id="building-within-a-building" class="gradientmaker skroll-maker">
    <span data-anchor="bwb-bg" class="skroll-stops hide">
      <hr data-amount="0" data-from="top" data-at="bottom" />
      <hr data-amount="0" data-from="top" data-at="center" />

    </span>
    <span class="stops hide">
      <hr data-amount="50" data-from="below" data-position="top" data-color="#000" />
      <hr data-amount="0" data-from="above" data-position="middle" data-color="#54c3bb" />
      <hr data-amount="100" data-from="above" data-position="bottom" data-color="#000" />
    </span>
    <div class="wrapper">
    <?php
    $bwb =get_page_by_title('Building Within A Building');

    ?>
    <div class="container-1200">
      <div class="copy-container ">
        <h1 class="middle"><?php echo $bwb->post_title;?></h1>
        <div class="copy">
          <?php echo wpautop($bwb->post_content);?>

        </div>

      </div>
      <div class="bwb-graphic container-1200 pad scroll-magic" data-scrollfunction="bwbFloorplanAnimation">
        <!--<img src="<?php echo $siteDir;?>/assets/imgs/bwb-placeholder.png" />-->
        <div class="container aspecter" data-basewidth="1061">
          <img class="bwb-main lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/bwb-real.png" data-mob="<?php echo $siteDir;?>/assets/imgs/bwb-real.png" />
          <img class="bwb-highlight lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/bwb-fp-highlight.png" data-mob="<?php echo $siteDir;?>/assets/imgs/bwb-fp-highlight.png" />
        </div>
      </div>

      <div class="dl-holder">
        <?php
        $dllink = get_post_meta( $bwb->ID, 'bwb-download', true );
        $dllink = $dllink[0];
        $dlurl = wp_get_attachment_url( $dllink['attachment'], 'full' );
        $btncopy = $dllink['button-copy'];
        ?>
        <a href="<?php echo $dlurl;?>" target="_blank" class="btn-dl">
          <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#download149"></use>
          </svg>
          <span class="copy">
            <?php echo $btncopy;?>
          </span>
        </a>

      </div>
      <div class="bwb-gallery">

        <?php
        cardMaker($bwb->ID, 'bwb-bottom-gal');
        ?>


      </div>

    </div>


    </div>
  </div>

  <div id="penthouse" class="gradientmaker">
    <span class="stops hide">
      <hr data-amount="0" data-from="above" data-position="top" data-color="#000" />
      <hr data-amount="100" data-from="above" data-position="bottom" data-color="#2f798c" />
    </span>
    <div class="container-1200">
    <?php
    $penthouse = get_page_by_title('The Penthouse');

    ?>
    <div class="copy-container">
      <h2><?php echo $penthouse->post_title;?></h2>
      <div class="copy">
        <?php echo wpautop($penthouse->post_content);?>

      </div>

    </div>
    <div id="penthouse-gallery"data-start="opacity:1;" data-top-center="opacity:1;" data-top-bottom="opacity:0;">
      <div class="slider" >
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
            <a class="active" href="#" data-index="0"><span class="mob-hide">Penthouse</span> Views</a>
          </li>
          <li>
            <a href="#" data-index="1">Stacking <span class="mob-hide">Plan</span></a>
          </li>

          <li>
            <a href="#" data-index="2">Floorplan</a>
          </li>
        </ul>

      </div>


    </div>

    </div>
  </div>
</section>
