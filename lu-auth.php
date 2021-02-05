<script>
<?php
$data = file_get_contents("data/data.json");
$data = json_decode($data, true);
session_start();
$pin = $_POST["pin"];
if($pin==$data["user"]["password"]) {
    $_SESSION["pin"] = $pin;
    echo "location.href='lu-admin.php';";
} else if($_SESSION["pin"]==$data["user"]["password"]) {
    echo "location.href='lu-admin.php';";
} else {
    echo "location.href='lu-login.php';";
}
?>
</script>