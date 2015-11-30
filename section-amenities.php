<section id="amenities">
<?php
$amenities = get_page_by_title('Amenities Section');

?>
<div class="container-1200">
  <article id="club">
    <div class="copy-container gradientmaker">
      <span class="stops hide">
        <hr data-amount="150" data-from="below" data-position="top" data-color="#000000" />
      </span>
  <?php echo wpautop($amenities->post_content);?>
    </div>

  </article>

  <div id="amenities-gallery">
    <?php
    $amengal = get_post_meta( $amenities->ID, 'amenities-gallery', true );
    foreach($amengal as $ag) {
      ?>
      <div class="slide-container">
        <div class="inner">
          <div class="img-holder">
            <?php
            $mobSrc = wp_get_attachment_image_src($ag['image'], 'medium', false);
            $mobSrc = $mobSrc[0];
            ?>
            <img class="lazy-load" data-mob="<?php echo $mobSrc;?>" data-dt="<?php echo $mobSrc;?>" />
          </div>

          <h2 class="sm"><?php echo $ag['title'];?></h2>


        </div>
      </div>


      <?php

    }
    ?>



  </div>






</div>
</section>
