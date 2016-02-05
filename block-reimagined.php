<article id="newly-reimagined" class="gradientmaker">
<!--  <span class="stops hide">
    <hr data-amount="150" data-from="above" data-position="bottom" data-color="#15726a" />
  </span>-->

<?php
$reimagined = get_page_by_title('Newly Reimagined');
?>
<div class="container-1200">
  <div id="reimagined-letters" class="letter-holder aspecter" data-basewidth="1200" style="height:464px;">
    <div class="letter r" style="width:52em; height: 92em; left: 56em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-25px)" data-top-bottom="transform:translateY(25px)" data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter e" style="width:50em; height: 79em; left:171em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-75px)" data-top-bottom="transform:translateY(75px)" data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter i" style="width:3em; height: 82em; left:309em;" ddata-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(55px)" data-top-bottom="transform:translateY(-50px)" data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter m" style="width:67em; height: 82em; left:392em;" >
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter a" data-start="transform:translateY(0px);"style="width:50em; height: 85em; left:517em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(100px)" data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter g" style="width:52em; height: 87em; right:505em;" data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-50px)" data-top-bottom="transform:translateY(50px)"data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter i-2" style="width:3em; height: 82em;  right:429em;"  data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(150px)" data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter n" style="width:49em; height: 81em; right:287em;"  data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(50px)" data-top-bottom="transform:translateY(-50px)" data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter e-2" style="width:50em; height: 79em; right:176em;"  data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-25px)" data-top-bottom="transform:translateY(25px)"  data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
    <div class="letter d" style="width:56em; height: 90em; right:56em;"  data-center-center="transform:translateY(0px)" data-bottom-top="transform:translateY(-75px)" data-top-bottom="transform:translateY(75px)" data-anchor-target=".letter-holder#reimagined-letters">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>
  </div>
  <div class="copy-container white">

    <?php echo wpautop($reimagined->post_content);?>
  </div>

  <article class="reimagined-cards">
    <?php cardMaker($reimagined->ID, 'reimagined-images');?>

  </article

</div>



</article>
