<?php
  require('urlScreenshot.php');

  $urlScreenshot = new urlScreenshot;

  $urlScreenshot_key = ['YOUR_API_KEY','YOUR_API_PRIVATE_KEY'];

  $urlScreenshot_data = array(
    'url' => 'google.com',
    'thumb_width' => '800'
  );

  $src = $urlScreenshot->capture($urlScreenshot_key[0],$urlScreenshot_key[1],$urlScreenshot_data);

  if($src){
    echo '<img src="'.$src.'"/>';
  }

?>
