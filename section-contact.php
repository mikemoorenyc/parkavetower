<section id="contact">
<?php
$contact = get_page_by_title('Contact Section');
?>
<div class="container-1200"style="padding:0;">
  <div class="letter-holder aspecter" data-basewidth="1200" id="contact" style="padding:0;">
    <div class="letter c" style="width:50em; height: 87em; top: 150em; left: 70em;" data-anchor-target="section#contact" data-bottom-bottom="transform:translateY(0px)" data-bottom-top="transform: translateY(-100px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter o" style="width:57em; height: 87em; top: 320em; left: 70em;" data-anchor-target="section#contact" data-bottom-bottom="transform:translateY(0px)" data-bottom-top="transform: translateY(-100px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter n" style="width:49em; height: 81em; top: 320em; left: 265em;"data-anchor-target="section#contact"  data-bottom-bottom="transform:translateY(0px)" data-bottom-top="transform: translateY(-150px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter t" style="width:45em; height: 84em; top: 320em; left: 480em;"data-anchor-target="section#contact" data-bottom-bottom="transform:translateY(0px)" data-bottom-top="transform: translateY(-200px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter a" style="width:50em; height: 85em; top: 420em; right: 470em;"data-anchor-target="section#contact" data-bottom-bottom="transform:translateY(0px)" data-bottom-top="transform: translateY(-100px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter c-2" style="width:50em; height: 87em; top: 420em; right: 274em;"data-anchor-target="section#contact" data-bottom-bottom="transform:translateY(0px)" data-bottom-top="transform: translateY(-250px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter t" style="width:50em; height: 87em; top: 420em; right: 45em;" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform: translateY(100px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>


  </div>

</div>
<div class="container-1200">
  <div class="copy-container gradientmaker">
    <span class="stops hide">
      <hr data-amount="0" data-from="below" data-position="middle" data-color="#000" />
    </span>
    <?php echo wpautop($contact->post_content);?>

  </div>
  <?php
  function contactList($contacts) {
    foreach($contacts as $c): ?>
    <li itemscope itemtype="http://schema.org/Person">
      <h3 itemprop="name"><?php echo $c['name'];?></h3>
      <?php
      if($c['phone']!=='') {
        ?>
        <div class="phone listing" itemprop="telephone"><?php echo $c['phone'];?></div>
        <?php
      }
      ?>

      <?php
      if($c['email']!=='') {
        ?>
        <a class="email listing" target="_blank" href="mailto:<?php echo $c['email'];?>" itemprop="email"><?php echo $c['email'];?></a>
        <?php
      }
      ?>


    </li>
  <?php endforeach;
  }

/********
WARNING CONTACT META NAMES ARE SWAPPED SORRY

*/////



  $ngkf = get_post_meta( $contact->ID, 'equity-contacts', true );

  if(is_array($ngkf) && count($ngkf) > 0):?>
  <div class="contact-block ngkf">
    <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/logo-ngkf.svg" data-mob="<?php echo $siteDir;?>/assets/imgs/logo-ngkf.svg" alt="NGKF" />
    <ul class="no-style">
      <?php contactList($ngkf);?>
    </ul>
  </div>
  <?php endif;?>

  <?php $equity = get_post_meta( $contact->ID, 'ngkf-contacts', true );
  if(is_array($equity) && count($equity) > 0):?>
  <div class="contact-block equity">
    <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/logo-equity.svg" data-mob="<?php echo $siteDir;?>/assets/imgs/logo-equity.svg" alt="Equity" />
    <ul class="no-style">
      <?php contactList($equity);?>
    </ul>
  </div>
  <?php endif;?>


</div>

</section>
