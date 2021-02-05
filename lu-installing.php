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
            <h1><i class="xi-spinner-1 xi-spin"></i></h1>
            <p>설치를 진행중입니다.</p>
            <p><?php
                $count = file_get_contents("assets/js/count.js");
                $count = str_replace("installPath", $_POST["installPath"], $count);
                $count = str_replace("installPath", $_POST["installPath"], $count);
                $count = str_replace("installPath", $_POST["installPath"], $count);
                $file = fopen("assets/js/count.js", "w+", true);
                fwrite($file, $count);
                fclose($file);
                echo "count.js installed (1/4)";
                $main = file_get_contents("assets/js/main.js");
                $main = str_replace("installPath", $_POST["installPath"], $main);
                $main = str_replace("installPath", $_POST["installPath"], $main);
                $file = fopen("assets/js/main.js", "w+", true);
                fwrite($file, $main);
                fclose($file);
                echo "main.js installed (2/4)";
                $widget_count = file_get_contents("assets/js/widget/count-widget.1.0.js");
                $widget_count = str_replace("installPath", $_POST["installPath"], $widget_count);
                $widget_count = str_replace("installPath", $_POST["installPath"], $widget_count);
                $file = fopen("assets/js/widget/count-widget.1.0.js", "w+", true);
                fwrite($file, $widget_count);
                fclose($file);
                echo "count-widget.1.0.js installed (3/4)";
                $data_json = file_get_contents("data/data.json");
                $data_json = json_decode($data_json, true);
                $data_json["installation"]["installSpace"] = $_POST["installPath"];
                if($_POST["youtube"]!="") {
                    $data_json["channel"]["youtube"] = $_POST["youtube"];
                }
                if($_POST["twitch"]!="") {
                    $data_json["channel"]["twitch"] = $_POST["twitch"];
                }
                if($_POST["replay"]!="") {
                    $data_json["channel"]["replay"] = $_POST["replay"];
                }
                $data_json["user"]["name"] = rawurlencode($_POST["username"]);
                $data_json["user"]["about"] = rawurlencode($_POST["about"]);
                $data_json["user"]["password"] = $_POST["password"];
                $data_json["installation"]["isInstalled"] = 1;
                $data_json = json_encode($data_json);
                $file = fopen("data/data.json", "w+", true);
                fwrite($file, $data_json);
                fclose($file);
                echo "Complete!<br/>";
                echo '<a href="index.php">메인으로</a>';
            ?></p>
        </div>
        <br/>
    </div>
</body>
</html>

