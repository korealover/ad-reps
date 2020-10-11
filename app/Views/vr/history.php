<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | HistoryRoom</title>
    <link rel="shortcut icon" href="http://vod.premeet.co.kr/premeet/vr/historyroom/TemplateData/favicon.ico">
    <link rel="stylesheet" href="http://vod.premeet.co.kr/premeet/vr/historyroom/TemplateData/style.css">
    <script src="http://vod.premeet.co.kr/premeet/vr/historyroom/TemplateData/UnityProgress.js"></script>
    <script src="http://vod.premeet.co.kr/premeet/vr/historyroom/Build/56b27af957420c10aef972428bfcf1ed.js"></script>
    <script>
        var unityInstance = UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/historyroom/Build/b9b4c9db54398d1f66367e80f0b5a4eb.json", {onProgress: UnityProgress});
    </script>
</head>
<body bgcolor="#000000">
<div class="webgl-content">
    <div id="unityContainer" style="width: 960px; height: 600px"></div>
    <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title" style="color:#FFFFFF">HistoryRoom</div>
    </div>
</div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
