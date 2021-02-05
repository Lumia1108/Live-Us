<!DOCTYPE HTML>
<?php
$data = file_get_contents("data/data.json");
$data = json_decode($data, true);
if($data["installation"]["isInstalled"]==0) {
    echo "<script>location.href='lu-install.php';</script>";
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
	<title><?php echo rawurldecode($data["user"]["name"]); ?></title>
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
</head>
<body>
	<nav class="nav-bar">
		<div>
			<a href="index.php"><?php echo rawurldecode($data["user"]["name"]); ?></a>
		</div>
    </nav>
    <div class="nav-bar-space"></div>
	<div class="main-layout">
        <div class="layout-center">
            <img src="assets/img/profile.jpg" width="150px" height="150px" />
            <p><?php echo rawurldecode($data["user"]["about"]); ?></p>
        </div>
        <br/>
        <div class="grid-layout">
            <div class="layout-center">
                <a href="<?php echo $data["channel"]["youtube"]; ?>">
                    <img src="assets/img/youtube.webp" class="img-link" />
                </a>
                <br/>
                Youtube
            </div>
            <div class="layout-center">
                <a href="<?php echo $data["channel"]["twitch"]; ?>">
                    <img src="assets/img/twitch.webp" class="img-link" />
                </a>
                <br/>
                Twitch
            </div>
            <div class="layout-center">
                <a href="<?php echo $data["channel"]["replay"]; ?>">
                    <img src="assets/img/replay.webp" class="img-link" />
                </a>
                <br/>
                다시보기
            </div>
            <div class="layout-center">
                <span class="stack-icon" id="stack-icon"></span>
                <br/>
                카운트
            </div>
            <div class="layout-center">
                <a href="lu-auth.php">
                    <img src="assets/img/settings.png" class="img-link" />
                </a>
                <br/>
                설정
            </div>
        </div>
        <br/>
        <div class="card-layout">
            <div class="card card-green">
                <h1>카드</h1>
                <p class="card-subtitle">
                    부제목입니다.
                </p>
                <p>
                    카드를 자유롭게 추가하고 수정하세요.
                </p>
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
    <script src="assets/js/main.js"></script>
</body>
</html>