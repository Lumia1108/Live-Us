<?php
$data = file_get_contents("data/data.json");
$data = json_decode($data, true);
session_start();
if($_SESSION["pin"]==$data["user"]["password"]) {
    $stack = $_POST["stack"];
    $file = fopen("data/count.json", "w+", true);
    $json = "{\"stack\":" . $stack . "}";
    fwrite($file, $json);
    fclose($file);
    echo $json;
}
?>