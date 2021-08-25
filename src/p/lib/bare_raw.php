<?php
    #############################################
     ######### SBoxx Made by SK3#0001 ##########
      #########################################

    $raw_data = file_get_contents("https://api.dolphin-fe.xyz/x/config.json");
    $data = json_decode($raw_data);
    $Version = $data->Version;
    $Embed_Support = $data->Embed_Support;
    $Bold_Title = $data->Bold_Title;
    $Title = $data->Title;
    $Description = $data->Description;
    $Color = $data->Color;
    $DocJSON = "https://api.dolphin-fe.xyz/p/lib/format.json";

    function basic($Link) {
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
        return $src;
    };

    function basic_embed($Link) {
        global $Title;
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
        <meta name="twitter:title" content="' . $Title . '" />
    </head>
</html>
';
        return $src;
    };
    
    function basic_embed_with_Description($Link) {
        global $Title;
        global $Description;
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
        <meta name="twitter:title" content="' . $Title . '" />
        <meta name="twitter:description" content="' . $Description . '" />
    </head>
</html>
';
        return $src;
    };

    function basic_embed_with_Description_Bold($Link) {
        global $Title;
        global $Description;
        global $DocJSON;
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
        <meta name="twitter:title" content="' . $Title . '" />
        <meta name="twitter:description" content="' . $Description . '" />
        <link type="application/json+oembed" href="' . $DocJSON . '" />
    </head>
</html>
';
        return $src;
    };

    function basic_embed_with_Description_Bold_Color($Link) {
        global $Title;
        global $Description;
        global $DocJSON;
        global $Color;
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
        <meta name="twitter:title" content="' . $Title . '" />
        <meta name="twitter:description" content="' . $Description . '" />
        <link type="application/json+oembed" href="' . $DocJSON . '" />
        <meta name="theme-color" content="#' . $Color . '"/>
    </head>
</html>
';
        return $src;
    };
?>
