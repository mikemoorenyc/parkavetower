<article id="newly-reimagined" class="gradientmaker">
  <span class="stops hide">
    <hr data-amount="150" data-from="above" data-position="bottom" data-color="#15726a" />
  </span>

<?php
$reimagined = get_page_by_title('Newly Reimagined');
?>
<div class="container-1200">
  <div class="copy-container">

    <?php echo wpautop($reimagined->post_content);?>
  </div>

  <article class="reimagined-cards">
    <?php cardMaker($reimagined->ID, 'reimagined-images');?>

  </article

</div>



</article>
