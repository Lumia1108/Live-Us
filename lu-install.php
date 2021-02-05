<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
	<title>Live Us Installer</title>
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
</head>
<body>
	<nav class="nav-bar">
		<div>
			<a href="index.php">Live Us Web Installer</a>
		</div>
    </nav>
    <div class="nav-bar-space"></div>
	<div class="main-layout">
        <div class="layout-center">
            <h1>환영합니다!</h1>
            <p>아래 폼을 입력하여 설치를 진행해주세요.</p>
        </div>
        <br/>
        <form action="lu-installing.php" method="POST">
            <div class="card-layout">
                <div class="card card-green">
                    <h1>채널 정보</h1>
                    <p>링크를 입력해주세요</p>
                    <br/>
                    <span class="card-subtitle">Youtube</span>
                    <div class="input-basic">
                        <input type="text" name="youtube" autocomplete="off" required />
                    </div>
                    <span class="card-subtitle">Twitch</span>
                    <div class="input-basic">
                        <input type="text" name="twitch" autocomplete="off" required />
                    </div>
                    <span class="card-subtitle">다시보기 채널</span>
                    <div class="input-basic">
                        <input type="text" name="replay" autocomplete="off" required />
                    </div>
                </div>
                <div class="card card-blue">
                    <h1>사이트 설정</h1>
                    <span class="card-subtitle">이름</span>
                    <div class="input-basic">
                        <input type="text" name="username" autocomplete="off" required />
                    </div>
                    <span class="card-subtitle">소개</span>
                    <div class="input-basic">
                        <input type="text" name="about" autocomplete="off" required />
                    </div>
                    <span class="card-subtitle">비밀번호</span>
                    <div class="input-basic">
                        <input type="password" name="password" autocomplete="off" required />
                    </div>
                    <!-- Don't edit installPath value if you are not developer -->
                    <input type="hidden" name="installPath" id="installPath" />
                    <br/>
                    <button type="submit" class="btn-basic">제출하기</button>
                </div>
            </div>
        </form>
    </div>
    <footer class="footer-basic">
        <div class="footer-container">
            <p>
                <span class="footer-bold">Powered by Live Us</span><br/>
            </p>
        </div>
    </footer>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script>
        var installPath = location.href;
        installPath = installPath.split("/");
        var link = "";
        for(var i=0;i<(installPath.length-1);i++) {
            link += installPath[i];
            link += "/";
        }
        var inputPath = document.querySelector("#installPath");
        inputPath.value = link;
    </script>
</body>
</html>