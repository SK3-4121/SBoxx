<?php
  #############################################
   ######### SBoxx Made by SK3#0001 ##########
    #########################################

    $Bare_Raw = require("bare_raw.php");
    $raw_data = file_get_contents("https://api.dolphin-fe.xyz/x/config.json");
    $data = json_decode($raw_data);
    $Version = $data->Version;
    $Main_URL = $data->Main_URL;
    $Tag = $data->Tag;
    $Extention = $data->Extention;
    $Embed_Support = $data->Embed_Support;
    $Bold_Title = $data->Bold_Title;
    $Title = $data->Title;
    $Description = $data->Description;
    $Color = $data->Color;

    function no_embed($Link) {
      $src = $Bare_Raw.basic($Link);
      echo $src;
    }

    function embed($Link) { # Title
      $src = $Bare_Raw.basic_embed($Link);
      echo $src;
    }

    function embed_1($Link) { # Title, Description
      $src = $Bare_Raw.basic_embed_with_Description($Link);
      echo $src;
    }

    function embed_2($Link) { # Title, Description, Bold Text
      $src = $Bare_Raw.basic_embed_with_Description_Bold($Link);
      echo $src;
    }

    function embed_3($Link) { # Title, Description, Bold Text, Color
      $src = $Bare_Raw.basic_embed_with_Description_Bold_Color($Link);
      echo $src;
    }

    function settings($Image) {
      embed_3($Image);
    }

    if ($_GET[$Tag]) {
      global $Main_URL;
      $Img = $_GET[$Tag];
      settings($Main_URL . $Img);
    } else {
      return;
    }
?>
