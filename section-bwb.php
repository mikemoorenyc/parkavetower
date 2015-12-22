<section id="building">
  <div id="building-within-a-building" class="gradientmaker skroll-maker">


    <div class="wrapper">
    <?php
    $bwb =get_page_by_title('Building Within A Building');

    ?>
    <div class="container-1200">
      <div class="copy-container white">
        <h1 class="middle"><?php echo $bwb->post_title;?></h1>
        <div class="copy">
          <?php echo wpautop($bwb->post_content);?>

        </div>

      </div>
      <div class="bwb-graphic container-1200 pad ">
        <!--<img src="<?php echo $siteDir;?>/assets/imgs/bwb-placeholder.png" />-->
        <div class="container aspecter" data-basewidth="1061">
          <img class="bwb-main lazy-load __activated" data-dt="<?php echo $siteDir;?>/assets/imgs/bwb-real.png" data-mob="<?php echo $siteDir;?>/assets/imgs/bwb-real.png" />
          <img class="bwb-highlight lazy-load __activated" data-dt="<?php echo $siteDir;?>/assets/imgs/bwb-fp-highlight.png" data-mob="<?php echo $siteDir;?>/assets/imgs/bwb-fp-highlight.png" />
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

      <hr data-amount="0" data-from="below" data-position="bottom" data-color="#12a499" />
    </span>
    <div class="container-1200">
    <?php
    $penthouse = get_page_by_title('The Penthouse');

    ?>
    <div class="copy-container white">
      <h2><?php echo $penthouse->post_title;?></h2>
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
              <span class="mob-hide">Penthouse</span> Views
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
</section>
