<section id="contact" data-anchor="contact">
<?php
$contact = get_page_by_title('Contact Section');
?>
<div class="container-1200"style="padding:0;">
  <div class="letter-holder aspecter" data-basewidth="1200" id="contact" style="padding:0; top:272px;">
    <div class="letter c" style="width:50em; height: 87em; left:96em;" data-anchor-target="#contact" data-bottom-top="transform:translateY(-75px)" data-bottom-bottom="transform:translateY(0px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter o" style="width:57em; height: 87em; left:254em;" data-anchor-target="#contact" data-bottom-top="transform:translateY(25px)" data-bottom-bottom="transform:translateY(0px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter n" style="width:49em; height: 81em; left:416em;" data-anchor-target="#contact" data-bottom-top="transform:translateY(100px)" data-bottom-bottom="transform:translateY(0px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter t" style="width:45em; height: 84em; left:584em;">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter a" style="width:50em; height: 85em; right:422em;" data-anchor-target="#contact" data-bottom-top="transform:translateY(-25px)" data-bottom-bottom="transform:translateY(0px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter c-2" style="width:50em; height: 87em; right:256em;" data-anchor-target="#contact" data-bottom-top="transform:translateY(-50px)" data-bottom-bottom="transform:translateY(0px)">
      <span class="s1"></span>
      <span class="s2"></span>
      <span class="s3"></span>
      <span class="s4"></span>
    </div>

    <div class="letter t" style="width:50em; height: 87em; right:99em;" data-anchor-target="#contact" data-bottom-top="transform:translateY(150px)" data-bottom-bottom="transform:translateY(0px)">
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
    <img class="lazy-load" data-dt="<?php echo $siteDir;?>/assets/imgs/logo-ngkf.png" data-mob="<?php echo $siteDir;?>/assets/imgs/logo-ngkf.png" alt="NGKF" />
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
