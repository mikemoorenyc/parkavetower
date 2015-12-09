<?php
function cardMaker($ID, $metaName) {

  $cardArray = get_post_meta( $ID, $metaName, true );
  if(is_array($cardArray ) && count($cardArray) > 0):?>
  <div class="cardStack clearfix">
  <?php
    foreach($cardArray as $card) :
    ?>
    <div class="card">
      <div class="inner">
        <?php
        $dtSrc = wp_get_attachment_image_src($card['image'], 'large', false);
        $dtSrc = $dtSrc[0];
        $mobSrc = wp_get_attachment_image_src($card['image'], 'medium', false);
        $mobSrc = $mobSrc[0];
        ?>
        <img alt="<?php echo $card['caption'];?>" class="card-img lazy-load" data-mob="<?php echo $mobSrc;?>" data-dt="<?php echo $dtSrc;?>" />

        <?php
        if($card['caption'] !== '') {
          ?>
          <div class="caption text-overflow">

            <?php echo $card['caption'];?>
          </div>
          <?php
        }

        ?>

      </div>

    </div>

    <?php endforeach;?>
  </div>
  <?php endif;
}




?>
