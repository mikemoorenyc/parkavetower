<?php global $siteDir; global $homeURL;?>

</div>
<div id="generic-modal">
  <div class="spinner">
    <svg>
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#spinner9"></use>
    </svg>
  </div>
  <div class="container">

  </div>
  <a href="#" class="close-generic-modal modal-close">
    <svg>
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cross97"></use>
    </svg>
  </a>
</div>
<!--<div id="load-cover" style=" "></div>-->
  <script async="true" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script id="inline-scripts"><?php $inlinejs = file_get_contents($siteDir.'/js/inline-load.js'); dirReplacer($inlinejs);?></script>


  </body>
</html>
