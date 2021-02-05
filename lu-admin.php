<!DOCTYPE HTML>
<script>
<?php
$data = file_get_contents("data/data.json");
$data = json_decode($data, true);
session_start();
if($_SESSION["pin"]==$data["user"]["password"]) {
    echo "";
} else {
    echo "location.href='lu-auth.php';";
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
                <div class="card card-blue">
                    <h1>로그아웃</h1>
                    <button class="btn-basic"><a href="lu-logout.php">로그아웃</a></button>
                </div>
                <div class="card card-green">
                    <h1>카운트</h1>
                    <button class="btn-basic"><a href="lu-count.php">바로가기</a></button>
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
</body>
</html>