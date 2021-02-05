<?php
/*$stack = $_POST["stack"];
$data = file_get_contents("data/data.json");
$file = fopen("data/data.json", "w+", true);
$json = "{\"stack\":" . $stack . "}";
fwrite($file, $json);
echo $json;*/
?>

<!DOCTYPE HTML>
<script>
<?php
$data = file_get_contents("data/data.json");
$data = json_decode($data, true);
session_start();
if($_SESSION["pin"]==$data["user"]["password"]) {
    echo "";
} else {
    echo "location.href='auth.php';";
}
?>
</script>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
	<title><?php rawurldecode($data["user"]["name"]); ?></title>
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
</head>
<body>
	<nav class="nav-bar">
		<div>
            <a href="index.php">Live Us Admin</a>
		</div>
    </nav>
    <div class="nav-bar-space"></div>
	<div class="main-layout">
        <div class="card-layout">
            <div class="grid-2">
                <div class="card">
                    <h1 id="stack-text"></h1>
                    <span class="card-subtitle">카운트 수</span>
                </div>
                <div class="card card-green">
                    <div class="grid-3">
                        <div class="layout-center">
                            <button class="btn-basic btn-circle" id="input-minus"><i class="xi-minus"></i></button>
                        </div>
                        <div class="input-basic">
                            <input id="stack-value" />
                        </div>
                        <div class="layout-center">
                            <button class="btn-basic btn-circle" id="input-plus"><i class="xi-plus"></i></button>
                        </div>
                    </div>
                    <br/>
                    <div class="layout-center">
                        <button class="btn-basic" id="input-stack">입력값으로 스택 설정</button>
                    </div>
                </div>
            </div><br/>
            <div class="card card-blue">
                <h1>위젯</h1>
                <div class="input-basic">
                    <input value="<?php echo $data["installation"]["installSpace"] . "widget/count.html"; ?>" />
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-basic">
        <div class="footer-container">
            <p>
                <span class="footer-bold">Powered by Live Us</span><br/>
            </p>
        </div>
    </footer>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/count.js"></script>
</body>
</html>