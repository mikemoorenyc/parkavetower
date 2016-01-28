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
