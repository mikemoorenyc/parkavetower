<?php
include 'section-reimagined.php';
?>
<section id="workspace" class=>
<div class="container-1200">
<div class="letter-holder aspecter" id="space" data-basewidth="1200">
  <div class="letter s" style="width:48em; height: 85em; top: 205em; left: 58em;" data-bottom-top="transform:translateY(100px)" data-center-center="transform:translateY(0px);"data-top-bottom="transform: translateY(-100px)" data-anchor-target="section#workspace .copy-container">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>

  <div class="letter p" style="width:47em; height: 82em; top: 205em; left: 295em;" data-bottom-top="transform:translateY(250px)" data-top-bottom="transform: translateY(-250px)" data-center-center="transform:translateY(0px)"data-anchor-target="section#workspace .copy-container">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>

  <div class="letter a" style="width:52em; height: 81em; top: 360em; left: 437em;" data-bottom-top="transform:translateY(-150px)" data-top-bottom="transform: translateY(150px)" data-anchor-target="section#workspace .copy-container" data-center-center="transform:translateY(0px)">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>

  <div class="letter c" style="width:50em; height: 87em; top: 360em; right:453em;" data-bottom-top="transform:translateY(-50px)" data-top-bottom="transform: translateY(50px)" data-anchor-target="section#workspace .copy-container" data-center-center="transform:translateY(0px)">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>

  <div class="letter e" style="width:50em; height: 79em; top: 505em; right:70em;" data-bottom-top="transform:translateY(150px)" data-top-bottom="transform: translateY(-150px)" data-anchor-target="section#workspace .copy-container" data-center-center="transform:translateY(0px)">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
    <span class="s4"></span>
  </div>

</div>

</div>


<div id="elevation-section">
<div class="container-1200">
  <?php
  $workspace = get_page_by_title('Workspace Section');

  ?>
  <div class="copy-container gradientmaker">
    <span class="stops hide">
      <hr data-amount="0" data-from="below" data-position="top" data-color="#000" />

    </span>
    <?php echo wpautop($workspace->post_content);?>
  </div>

  <div class="elevation">
    <div class="inner gradientmaker scroll-magic" data-scrollfunction="buildingAnimation">
      <span class="stops hide">
        <hr data-amount="0" data-from="above" data-position="top" data-color="#54c3bb" />

      </span>

      <img class="lazy-load mob-elevation" data-dt="<?php echo $siteDir;?>/assets/imgs/mobile-elevation.png" data-mob="<?php echo $siteDir;?>/assets/imgs/mobile-elevation.png" />

      <div class="dt-elevation">
      <div class="cutter">
        <div class="lights">
          <?php
          //44
          for($x = 45; $x > 0; $x--) {
            ?>
            <div class="floor fl-<?php echo $x;?>" ></div>
            <?php
          }
          ?>
        </div>
        <div class="hilights">
          <a href="#" class="bwb"></a>
          <a href="#" class="towerfloors"></a>
          <a href="#" class="penthouse"></a>
        </div>

        <div class="elevator-imgs">
          <img class="lazy-load e-1" data-dt="<?php echo $siteDir;?>/assets/imgs/elevator-1.png" data-mob="<?php echo $siteDir;?>/assets/imgs/elevator-1.png" />
          <img class="lazy-load e-2" data-dt="<?php echo $siteDir;?>/assets/imgs/elevator-2.png" data-mob="<?php echo $siteDir;?>/assets/imgs/elevator-2.png" />
          <img class="lazy-load e-3" data-dt="<?php echo $siteDir;?>/assets/imgs/elevator-3.png" data-mob="<?php echo $siteDir;?>/assets/imgs/elevator-3.png" />
        </div>


        <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/dt-elevation.png" data-mob="<?php echo $siteDir;?>/assets/imgs/dt-elevation.png" />

        <div class="e-labels">
          <span class="e-1">Elevator 1</span>
          <span class="e-2">Elevator 2</span>
          <span class="e-3">Elevator 3</span>

        </div>
      </div>
        <ul class="no-style poplinks">
          <li class="penthouse">
            <a href="#penthouse" class="penthouse">
              Penthouse
            </a>
          </li>
          <li class="towerfloors">
            <a href="#towerfloors" class="towerfloors">
              Tower Floors
            </a>
          </li>
          <li class="bwb">
            <a href="#bwb" class="bwb">
              Building Within A Building
            </a>
          </li>

        </ul>

      </div>

    </div>
  </div>

  <div id="download-list" class="gradientmaker">
    <span class="stops hide">

      <hr data-amount="100" data-from="above" data-position="bottom" data-color="#54c3bb" />
    </span>
    <?php
    $downloads = get_post_meta( $workspace->ID,'downloads', true );
    if (is_array($downloads) && count($downloads) > 0):?>
    <ul class="no-style">
      <?php foreach($downloads as $dl):?>
        <li>
          <?php

          $dlurl = wp_get_attachment_url( $dl['attachment'], 'full' );
          $btncopy = $dl['button-copy'];
          ?>
          <a href="<?php echo $dlurl;?>" target="_blank" class="btn-dl">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#download149"></use>
            </svg>
            <span class="copy">
              <?php echo $btncopy;?>
            </span>
          </a>


        </li>

      <?php endforeach;?>
    </ul>

    <?php endif;?>

  </div>


</div>
</div>

<?php
$modalcopy = get_post_meta( $workspace->ID,'modal-info', true );
$modalcopy = $modalcopy[0];
$phousefloorplans = get_post_meta( $workspace->ID,'penthouse-floorplans', true );
$bwbfloorplans = get_post_meta( $workspace->ID,'bwb-floorplans', true );
$towerfloorplans = get_post_meta( $workspace->ID,'tower-floorplans', true );
?>

<div class="hide" id="modal-content">
  <div class="penthouse">
    <div class="title">Penthouse</div>
    <div class="copy">
      <?php echo wpautop($modalcopy['penthouse-copy']);?>
    </div>
    <div class="images">
      <?php
      foreach($phousefloorplans as $img){
        $mobSrc = wp_get_attachment_image_src($img['floorplan'], 'medium', false);
        $mobSrc = $mobSrc[0];
        ?>
        <hr data-src="<?php echo $mobSrc;?>" />
        <?php
      }

      ?>
    </div>
  </div>

  <div class="bwb">
    <div class="title">Building Within A Building</div>
    <div class="copy">
      <?php echo wpautop($modalcopy['building-within-a-building-copy']);?>
    </div>
    <div class="images">
      <?php
      foreach($bwbfloorplans as $img){
        $mobSrc = wp_get_attachment_image_src($img['floorplan'], 'medium', false);
        $mobSrc = $mobSrc[0];
        ?>
        <hr data-src="<?php echo $mobSrc;?>" />
        <?php
      }

      ?>
    </div>
  </div>

  <div class="towerfloors">
    <div class="title">Tower Floors</div>
    <div class="copy">
      <?php echo wpautop($modalcopy['tower-floors-copy']);?>
    </div>
    <div class="images">
      <?php
      foreach($towerfloorplans as $img){
        $mobSrc = wp_get_attachment_image_src($img['floorplans'], 'medium', false);
        $mobSrc = $mobSrc[0];
        ?>
        <hr data-src="<?php echo $mobSrc;?>" />
        <?php
      }

      ?>
    </div>
  </div>

</div>


<div id="workspace-modal" class="generic-modal">
  <div class="inner">
    <div class="words">
      <h2 class="sm">Building Within A Building</h2>
      <div class="copy">
        33 - 36 Floors<br/>
        15,000 sf
      </div>
    </div>
    <div class="spinner">
      <svg>
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#spinner9"></use>
      </svg>
    </div>
    <div class="slider">

    </div>


  </div>
  <a href="#" class="modal-close">
    <svg>
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cross97"></use>
    </svg>
  </a>
</div>


</section>
