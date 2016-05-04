<header id="header">
  <h1 class="logo">
    <a itemprop="url" href="<?php echo $homeURL;?>/#home">
      <span class="hide" itemprop="name"><?php echo $siteTitle;?></span>
      <div class="hide" itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
        <meta itemprop="latitude" content="40.760858" />
        <meta itemprop="longitude" content="-73.972084" />
      </div>
      <img src="<?php echo $siteDir;?>/assets/imgs/logo-png-teal.png" alt="Park Avenue Tower" />
    </a>
  </h1>

  <a href="#" class="menu-open" alt="Menu">
    <svg>
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu10"></use>
    </svg>
  </a>

  <div class="navigation-wrapper">
    <a href="#" class="menu-close" alt="Close">
      <svg>
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cross97"></use>
      </svg>
    </a>
    <nav id="mainNav">
      <?php
      $links = array(
        //'home',
        'building',
        'amenities',
                'availabilities',
        'location',
        //'gallery',
        'contact'
      );
      $links = array(
        'transformation',
        'amenities',
        'building',
        'location',
        'contact'
      );
      foreach($links as $link) {
        ?>
        <a class="<?php echo $link;?>" href="#<?php echo $link;?>"><?php echo strtoupper($link);?></a>
        <?php
      }

      ?>

    </nav>


  </div>

</header>
