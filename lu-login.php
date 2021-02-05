<!DOCTYPE HTML>
<?php
$data = file_get_contents("data/data.json");
$data = json_decode($data, true);
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
			<a href="index.php">Live Us Admin</a>
		</div>
    </nav>
    <div class="nav-bar-space"></div>
	<div class="main-layout">
        <div class="card-layout">
            <div class="card">
                <h1>로그인</h1>
                <p class="card-subtitle">
                    비밀번호를 입력해주세요.
                </p>
                <p>
                    <form action="lu-auth.php" method="post">
                        <div class="input-basic">
                            <input type="password" name="pin" />
                        </div>
                    </form>
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