<?php
  #############################################
   ######### SBoxx Made by SK3#0001 ##########
    #########################################

  $Version = "3.0";
  $File_Name = "Rocks";
  $Method = 5;
  $Extention = false;
  $Main_URL = "https://api.dolphin-fe.xyz/p/";
  $Fake_URL = "https://fbi.gov";
  $Color = "ff5733";
  $Tag = "Milfs";
  $IP = null;
  $System = "Normal"; # Normal and Apache
  $File_Type_Support = false; # false or array('jpg','png','gif');
  $RandomStringLength = 8;
  $decided = false;
  $libhookz = require("lib/libhookz.php");

  $Auth = false; # or null
  $Auth_Name = "Authorization";
  $Auth_Hash = "69lul";

  $webhookurl = "";

  function send_webhook($T_Tittle, $T_IP, $T_Code) {
    global $webhookurl;
    $ipaddr = getIp();
    $timestamp = date("c", strtotime("now"));
    $json_data = json_encode([
        "content" => "",
        "username" => "Website Logs V1",
        "tts" => false,
        "embeds" => [
            [
                "title" => "Custom Image Uploader Webhook",
                "type" => "rich",
                "description" => "@everyone",
                "url" => "",
                "timestamp" => $timestamp,
                "color" => hexdec("3366ff"),
                "footer" => [
                    "text" => "Made by SK3#0001",
                    "icon_url" => "https://cdn.discordapp.com/avatars/781337038040727583/228a493dc1f39718e584c8890c94deeb.webp?size=128"
                ],
                "author" => [
                    "name" => $T_Tittle,
                    "url" => ""
                ],
                "fields" => [
                    [
                        "name" => "IP",
                        "value" => $T_IP,
                        "inline" => true
                    ],
                    [
                        "name" => "Code",
                        "value" => $T_Code,
                        "inline" => true
                    ]
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if ($webhookurl == "") {
      return;
    } else {
      $ch = curl_init($webhookurl);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $response = curl_exec($ch);
      curl_close($ch);
    }
  }

  function alert($Alert_Number) {
    global $IP;
    if ($Alert_Number == 1) {
      Send_Webhook("Security Alert",$IP,1);
      die("Error: {Not the gamer we need sorry :(}");
    }
    if ($Alert_Number == 2) {
      Send_Webhook("Security Alert",$IP,2);
      die("Error: {We do not support u}");
    }
    if ($Alert_Number == 3) {
      Send_Webhook("Not Support File Type Uploaded",$IP,3);
      die("Error: {How'dy Mowi Scowi}");
    }
    if ($Alert_Number == 3) {
      Send_Webhook("Not a supported file type",$IP,4);
      die("Error: {Sad things happen every day :(}");
    }
  }

  function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
  }

  function RandomString($length) {
    $keys = array_merge(range(0,9), range('a', 'z'));
    $key = '';
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
  }

  function Spoof_URL($length) {
    $key = '';
    $keys = array("​","‌"); # %E2%80%8B and %E2%80%8C it may not look like it but there is text there
    for($i=0; $i < $length; $i++) {
      $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
  }

  function start_upload() {
    global $Method;
    global $Main_URL;
    global $Fake_URL;
    global $File_Name;
    global $Extention;
    global $RandomStringLength;
    $File = $_FILES[$File_Name]; # This is the image btw or gif idk
    $File_name = $File['name'];
    $File_tmp = $File['tmp_name'];
    $File_error = $File['error'];
    $New_File = explode('.', $File_name);
    $New_File = strtolower(end($New_File));
    $New_File_Name = RandomString($RandomStringLength);
    $New_File_Spoof_Name = Spoof_URL(15);
    
    if ($Method == 1) {
      if (move_uploaded_file($File_tmp, $New_File_Name . ".png")) {
        if ($Extention == false) {
          echo "<" . $Fake_URL . ">||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​|| " . $Main_URL . $New_File_Name . ".png";
        }
      }
    }
    if ($Method == 2) {
      if (move_uploaded_file($File_tmp, $New_File_Spoof_Name . ".png")) {
        if ($Extention == false) {
          echo $Main_URL . $New_File_Spoof_Name;
        } else {
          echo $Main_URL . $New_File_Spoof_Name . ".png";
        }
      }
    }
    if ($Method == 3) {
      if (move_uploaded_file($File_tmp, $New_File_Name . ".png")) {
        if ($Extention == false) {
          echo $Main_URL . $New_File_Name;
        } else {
          echo $Main_URL . $New_File_Name . ".png";
        }
      }
    }
    if ($Method == 4) { # Theres nothing stoping you from fking this
      global $Tag;
      #echo substr_replace($Main_URL ,"",-13);
      if (move_uploaded_file($File_tmp, $New_File_Name . ".png")) { # New_File_Name Is the old method becuase other wise there would be nothing for the key
        if ($Extention == false) {
          echo substr_replace($Main_URL ,"",-1) . "/lib/libhookz.php?" . $Tag . "=" . $New_File_Name;
        } else {
          echo substr_replace($Main_URL ,"",-1) . "/lib/libhookz.php?" . $Tag . "=" . $New_File_Name . ".png";
        }
      }
    }
    if ($Method == 5) {
      global $Tag;
      #echo substr_replace($Main_URL ,"",-3);
      if (move_uploaded_file($File_tmp, $New_File_Name . ".png")) { # New_File_Name Is the old method becuase other wise there would be nothing for the key
        if ($Extention == false) {
          echo substr_replace($Main_URL ,"",-3) . "?" . $Tag . "=" . $New_File_Name;
        } else {
          echo substr_replace($Main_URL ,"",-3) . "?" . $Tag . "=" . $New_File_Name . ".png";
        }
      }
    }
  }

  function main() {
    global $Method;
    global $File_Name;
    global $RandomStringLength;
    if ($_FILES[$File_Name]) {
      $File = $_FILES[$File_Name]; # This is the image btw or gif idk
      $File_name = $File['name'];
      $File_tmp = $File['tmp_name'];
      $File_error = $File['error'];
      $New_File = explode('.', $File_name);
      $New_File = strtolower(end($New_File));
      $New_File_Name = RandomString($RandomStringLength);
      $New_File_Spoof_Name = Spoof_URL(40);

      if ($File_Type_Support == false) {
        start_upload(); # Not a function yet
      } else { # May or May not work as of Tue Aug 24 1:50:44 AM
        if ($Method == 1) {
          if (move_uploaded_file($File_tmp, $New_File_Name . ".png")) {
            echo "<" . $Fake_URL . ">||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​|| " . $Main_URL;
          }
        }
        if ($Method == 2) {
          if (move_uploaded_file($File_tmp, $New_File_Spoof_Name . ".png")) {
            echo $Main_URL . $New_File_Spoof_Name;
          }
        }
        if ($Method == 3) {
          if (move_uploaded_file($File_tmp, $New_File_Name . ".png")) {
            echo $Main_URL . $New_File_Name;
          }
        }
      }
    } else {
      die("There is no File upload.");
    }
  }

  function sideload() {
    global $Tag;
    global $Main_URL;
    global $Extention;
    if ($_GET[$Tag]) {
      $Img = $_GET[$Tag];
      if ($Extention) {
        header("Location: " . $Main_URL . $Img);
      } else {
        header("Location: " . $Main_URL . $Img . ".png");
      }
    } else {
      return;
    }
  }

  function auth() {
    #sideload();
    global $Auth;
    global $Auth_Name;
    global $Auth_Hash;
    global $System;
    global $IP;
    $passed_1 = false;
    $passed_2 = false;
    $IP = getIp();
    $headers = null;

    if ($System == "Normal") {
      $headers = getallheaders();
      $decided = true;
    } elseif ($System == "Apache") {
      $headers = apache_request_headers();
      $decided = true;
    }

    if ($decided == true) {
      foreach ($headers as $header => $value) {
        if ($header == $Auth_Name) { # != not == yes
          if ($value == $Auth_Hash) { # != not == yes
            $Auth = true;
            $passed_1 = true;
            $passed_2 = true;
          }
        }
      }
    }

    if ($passed_1 == false) {
      alert(1);
    } elseif ($passed_2 == false) {
      alert(2);
    }

    if ($Auth == true) {
      main();
    }
  }

  auth(); # This will start it all
?>
