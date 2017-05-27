# urlscreenshot

A Composer php package for https://url-screenshot.com

## Usage

First, install the package using Composer:


    composer require urlscreenshot


Then, require the package and use it like so:


```bash
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
```


## License

Apache 2.0
