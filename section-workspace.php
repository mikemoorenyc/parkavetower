
<section id="availabilities" class="" data-anchor="building">
<div class="container-1200">
  <div class="letter-holder aspecter" id="building-letters" data-basewidth="1200" style="height:575px;">
    <div class="letter b" style="width:50em; height: 85em; left:89em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-25px)" data-top-bottom="transform:translateY(25px)" data-anchor-target="#building-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter u" style="width:51em; height: 84em; left: 221em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-75px)" data-top-bottom="transform:translateY(75px)" data-anchor-target="#building-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter i" style="width:3em; height: 82em; left: 372em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(55px)" data-top-bottom="transform:translateY(-50px)" data-anchor-target="#building-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter l" style="width:52em; height: 81em; left: 501em;">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter d" style="width:56em; height: 90em;  right:508em;" >
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter i-2" style="width:3em; height: 82em; right:395em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(-100px)" data-anchor-target="#building-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter n" style="width:49em; height: 81em; right:230em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-50px)" data-top-bottom="transform:translateY(50px)" data-anchor-target="#building-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter g" style="width:52em; height: 87em; right:94em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(150px)" data-top-bottom="transform:translateY(-150px)" data-anchor-target="#building-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>


  </div>
  <!--<div class="letter-holder aspecter" id="space" data-basewidth="1200" style="top:0px; height:575px;">
    <div class="letter s" style="width:48em; height: 85em; left:141em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-75px)" data-top-bottom="transform:translateY(75px)" data-anchor-target=".letter-holder#space">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter p" style="width:47em; height: 82em; left:358em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform:translateY(-50px)" data-anchor-target=".letter-holder#space">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter a" style="width:52em; height: 81em; left:569em;" >
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter c" style="width:50em; height: 87em; right:366em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(-100px)" data-anchor-target=".letter-holder#space">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter e" style="width:50em; height: 79em; right:151em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-25px)" data-top-bottom="transform:translateY(25px)" data-anchor-target=".letter-holder#space">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

  </div>-->

</div>




<div id="elevation-section">
<div class="container-1200">
  <?php
  $workspace = get_page_by_title('Workspace Section');

  ?>
  <div class="copy-container gradientmaker">
    <!--<span class="stops hide">
      <hr data-amount="0" data-from="below" data-position="top" data-color="#167452" />

    </span>-->
    <?php echo wpautop($workspace->post_content);?>
  </div>
</div>
  <div id="workspace-gal">

    <?php cardMaker($workspace->ID, 'workspace-gallery');?>
  </div>

  <?php include 'block-penthouse.php';?>
  <?php include 'block-bwb.php';?>
<div class="container-1200">


  <div class="elevation">
    <div class="inner gradientmaker scroll-magic" data-scrollfunction="buildingAnimation">
      <span class="stops hide">
        <!--<hr data-amount="0" data-from="above" data-position="top" data-color="#000" />-->
        <hr data-amount="0" data-from="above" data-position="top" data-color="#167452" />

      </span>

    <!--  <img class="lazy-load mob-elevation" data-dt="<?php echo $siteDir;?>/assets/imgs/mobile-elevation.png" data-mob="<?php echo $siteDir;?>/assets/imgs/mobile-elevation.png" />-->

      <div class="dt-elevation aspecter" data-basewidth="290">
      <div class="cutter">
        <div class="lights">
          <?php
          //44
          $list = get_post_meta( $workspace->ID, 'avail-list', true );
          /*$listValues = array();
          foreach($list as $lv) {
            array_push($listValues, array(
              "fl" => intval($lv['fl-number']),
              'hidden' => $lv['hidden'],
              'half'
            ));
          }*/
        //  var_dump($listValues);
          for($x = 45; $x > 0; $x--) {
            if($x !== 14) {
              $enabled = '';
              $halved = '';
              foreach($list as $lv) {
                if($x-1 == intval($lv['fl-number']) && $lv['hidden']!=='hidden') {
                  $enabled = 'enabled';
                }
                if($x-1 == intval($lv['fl-number']) && $lv['half-floor'] == 'half') {
                  $halved = 'halved';
                }
              }
              /*
              if(in_array($x-1, $listValues)) {
                $enabled = 'enabled';
              } else {
                $enabled = '';
              }
              */
              ?>
              <div class="floor fl-<?php echo $x;?> <?php echo $enabled;?> <?php echo $halved;?>" ></div>
              <?php
            }

          }
          ?>
        </div>
        <div class="avail-list">
          <?php

          $listArray = array();
          foreach($list as $l) {
            if($l['hidden'] !== 'hidden') {
              array_push($listArray, array(
                'fl' => intval($l['fl-number']),
                'sq' => $l['sq']
              ));
            }

          }

          usort($listArray, function($a, $b) {
            return $a['fl'] - $b['fl'];
          });
          $listArray = array_reverse($listArray);




           /*foreach($listArray as $la) {
             ?>
             <div class="list-item fl-<?php echo $la['fl'];?>">
               <span class="rsf"><?php echo $la['sq'];?></span>
               <span class="label">&nbsp;&nbsp;RSF</span>

             </div>
             <?php
           }
           */
           for($l = 36; $l > 1; $l--) {
             if($l < 20) {
               $clickClass = 'bwb';
             }
             if($l >=20 && $l < 33) {
               $clickClass = 'towerfloors';
             }
             if($l >= 33) {
               $clickClass = 'penthouse';
             }
             ?>

               <?php
               $sq = '';
               foreach($listArray as $la) {
                 if($la['fl'] == $l) {
                   $sq = $la['sq'];
                 }
               }
               if($sq !== '') {
                 ?>
                 <div class="list-item fl-<?php echo $l;?>">
                 <a class="<?php echo $clickClass;?>" href="">
                 <span class="rsf"><?php echo $sq;?></span>
                 <span class="label">&nbsp;&nbsp;RSF</span>
                </a>
                </div>
                 <?php
               } else {
                 ?>
                 <div class="list-item fl-<?php echo $l;?> no-show">
                   &nbsp;
                 </div>
                 <?php
               }
               ?>

             <?php
           }

          ?>

        </div>
        <div class="hilights">
          <a href="#" class="bwb"></a>
          <a href="#" class="towerfloors"></a>
          <a href="#" class="penthouse"></a>
        </div>




        <img class="lazy-load main-elevation" data-dt="<?php echo $siteDir;?>/assets/imgs/elevation-truefit-black.png" data-mob="<?php echo $siteDir;?>/assets/imgs/elevation-truefit-black.png" />

        <div class="elevator-imgs">
          <img class="lazy-load e-1" data-dt="<?php echo $siteDir;?>/assets/imgs/elevator-1-new.png" data-mob="<?php echo $siteDir;?>/assets/imgs/elevator-1-new.png" />
          <img class="lazy-load e-2" data-dt="<?php echo $siteDir;?>/assets/imgs/elevator-2-new.png" data-mob="<?php echo $siteDir;?>/assets/imgs/elevator-2-new.png" />
          <img class="lazy-load e-3" data-dt="<?php echo $siteDir;?>/assets/imgs/elevator-3-new.png" data-mob="<?php echo $siteDir;?>/assets/imgs/elevator-3-new.png" />
        </div>

        <div class="e-labels">
          <span class="e-1"><span>Elevator 1</span></span>
          <span class="e-2"><span>Elevator 2</span></span>
          <span class="e-3"><span>Elevator 3</span></span>

        </div>

      </div>
        <img src="<?php echo $siteDir;?>/assets/imgs/wired-logo.png" class="wired-logo"/>
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

      <hr data-amount="100" data-from="above" data-position="bottom" data-color="#167452" />
    </span>
    <?php
    $downloads = get_post_meta( $workspace->ID,'downloads', true );
    if (is_array($downloads) && count($downloads) > 0):?>
    <ul class="no-style">
      <?php foreach($downloads as $dl):?>
        <li>
          <?php
          if($dl['big-file-url']!= false) {
            $dlurl = $dl['big-file-url'];
          } else {
            $dlurl = wp_get_attachment_url( $dl['attachment'], 'full' );
          }

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
<?php
function imgAndTitle($content) {
  if($content != false) {
    return $content;
  } else {
    return '&nbsp;';
  }
}

?>
<div class="hide" id="modal-content">
  <div class="penthouse">

    <div class="images">
      <?php
      foreach($phousefloorplans as $img){
        echo '<div class="single-img">';
        $mobSrc = wp_get_attachment_image_src($img['floorplan'], 'large', false);
        $mobSrc = $mobSrc[0];
        ?>
        <span class="title">
          <?php
          $title = imgAndTitle($img['title']);
          if($title != '&nbsp;' && $img['copy'] != false) {
            echo $title.'<span class="dash"> - </span>';
          } else {
            echo $title;
          }
          ?>
        </span>
        <span class="copy">
          <?php
          echo wpautop(imgAndTitle($img['copy']));
          ?>
        </span>
        <hr data-src="<?php echo $mobSrc;?>" />
        <?php
        echo '</div>';
      }

      ?>
    </div>
  </div>

  <div class="bwb">
    <div class="images">
      <?php
      foreach($bwbfloorplans as $img){
        echo '<div class="single-img">';
        $mobSrc = wp_get_attachment_image_src($img['floorplan'], 'large', false);
        $mobSrc = $mobSrc[0];
        ?>
        <span class="title">
          <?php
          $title = imgAndTitle($img['title']);
          if($title != '&nbsp;' && $img['copy'] != false) {
            echo $title.'<span class="dash"> - </span>';
          } else {
            echo $title;
          }
          ?>
        </span>
        <span class="copy">
          <?php
          echo wpautop(imgAndTitle($img['copy']));
          ?>
        </span>
        <hr data-src="<?php echo $mobSrc;?>" />
        <?php
        echo '</div>';
      }

      ?>
    </div>
  </div>

  <div class="towerfloors">

    <div class="images">
      <?php
      foreach($towerfloorplans as $img){
        echo '<div class="single-img">';
        $mobSrc = wp_get_attachment_image_src($img['floorplans'], 'large', false);
        $mobSrc = $mobSrc[0];
        ?>
        <span class="title">
          <?php
          $title = imgAndTitle($img['title']);
          if($title != '&nbsp;' && $img['copy'] != false) {
            echo $title.'<span class="dash"> - </span>';
          } else {
            echo $title;
          }
          ?>
        </span>
        <span class="copy">
          <?php
          echo wpautop(imgAndTitle($img['copy']));
          ?>
        </span>
        <hr data-src="<?php echo $mobSrc;?>" />
        <?php
        echo '</div>';
      }

      ?>
    </div>
  </div>

</div>


<div id="workspace-modal" class="generic-modal">
  <div class="inner">
    <div class="words __changing">
      <h2 class="sm"></h2>
      <div class="copy">

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
