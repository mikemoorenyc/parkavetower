<article id="newly-reimagined">
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
