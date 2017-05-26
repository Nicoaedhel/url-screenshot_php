<?php
  class urlScreenshot {
      public function capture($key,$secret,$params){
        $url_api = "https://url-screenshot.com/v1/";
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST'
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url_api.$key.'/'.$secret, false, $context);
        if ($result === FALSE) { return false; }
        else{
          $result = json_decode($result);
          $token = $result->{'token'};
          $options = array(
              'http' => array(
                  'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                  'method'  => 'GET'
              )
          );
          $context  = stream_context_create($options);
          $result = file_get_contents($url_api.$key.'/'.$token.'/?'.http_build_query($params), false, $context);
          if ($result === FALSE) { return false; }
          else{
            return $url_api.$key.'/'.$token.'/?'.http_build_query($params);
          }
        }
      }
  }
?>
