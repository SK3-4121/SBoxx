<?php
    # Made by Max | <3 AB

    $Route_Module = include('Modules/Route.php');
    $libhookz = include("API/lib/libhookz.php");

    Route::add('/',function() {
        echo '';
    });

    $raw_data = file_get_contents("https://js.dolphin-fe.xyz/API/lib/config.json");
    $DocJSON = "https://js.dolphin-fe.xyz/API/lib/format.json";
    $data = json_decode($raw_data);
    $Main_URL = $data->Main_URL;
    $Extention = $data->Extention;
    $Main_URL = $data->Main_URL;
    $Version = $data->Version;

    function website($l) {
        $code = '<!DOCTYPE html>
        <html style="height:100%">
            <style>
                body {
                    padding: 5px;
                    background-color: rgb(17, 17, 17);
                    color: black;
                    font-size: 25px;
                }
        
                .top {
                    background-color: rgb(27, 27, 27);
                    overflow: hidden;
                }
        
                .top center {
                    float: top;
                    color: #ffffff;
                    text-align: center;
                    padding: 10px 0px;
                    text-decoration: none;
                    font-size: 18px;
                }
            </style>
        
            <body>
                <div class="top">
                    <center style="font-family:sans-serif" class="active" href="">Custom.Upload | Made by SK3#3160</center>
                </div>
                
                <div1 style="margin: 350px;background: rgb(17, 17, 17);display:flex;justify-content:center;height:1000%">
                    <img style="-webkit-user-select:none;margin:auto" src="' . $l . '">
                </div1>
            </body>
        </html>
        ';
        echo $code;
    }

    Route::add('/(.*)',function($id) {
        if (is_file("API/p/" . $id . ".png") or is_file("API/p/" . $id)) {
            if (substr($Main_URL . $id, -4) == ".png") {
                $libhookz.settings("https://js.dolphin-fe.xyz/API/p/" . $id);
                echo website("https://js.dolphin-fe.xyz/API/p/" . $id);
            } else {
                $libhookz.settings("https://js.dolphin-fe.xyz/API/p/" . $id . ".png");
                echo website("https://js.dolphin-fe.xyz/API/p/" . $id . ".png");
            }
        } else {
            echo "SBoxx image host";
        }
    });

    Route::run('/');
?>
