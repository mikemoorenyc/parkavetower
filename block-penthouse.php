<div id="penthouse" class="gradientmaker">
<!--  <span class="stops hide">

    <hr data-amount="0" data-from="below" data-position="bottom" data-color="#12a499" />
  </span>-->
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
  <div id="penthouse-gallery">
    <?php
    cardMaker($penthouse->ID, 'penthouse-gallery');
    ?>


  </div>

  </div>
</div>
