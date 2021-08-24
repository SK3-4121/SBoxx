<?php
  #############################################
   ######### SBoxx Made by SK3#0001 ##########
    #########################################

    $Version = "3.0";
    $Tag = "Milfs";
    $Extention = false;

    function no_embed($Link) {
        $src = '
<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
        <meta name="twitter:card" content="player" />
        <meta name="twitter:site" content="@harry" />
        <meta name="twitter:player:width" content="320" />
        <meta name="twitter:player:height" content="180" />
        <meta name="twitter:player:stream:content_type" content="video/mp4" />
        <meta property="og:image" content="' . $Link . '"/>
        <meta name="twitter:card" content="summary_large_image">
    </head>
</html>
';
        echo $src;
    };

    if ($_GET[$Tag]) {
      $Img = $_GET[$Tag];
      no_embed("https://api.dolphin-fe.xyz/p/" . $Img);
    } else {
      return;
    }
?>
