<header id="header">
  <h1 class="logo">
    <a href="#home">
      <span class="hide"><?php echo $siteTitle;?></span>
      <img src="<?php echo $siteDir;?>/assets/imgs/logo-png.png" alt="Park Avenue Tower" />
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
        'location',
        //'gallery',
        'workspace',
        'contact'
      );
      foreach($links as $link) {
        ?>
        <a href="#<?php echo $link;?>"><?php echo strtoupper($link);?></a>
        <?php
      }

      ?>

    </nav>


  </div>

</header>
