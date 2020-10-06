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
        var unityInstance = UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/historyroom/Build/ff3657c970aabbd318c41f4f2cddf218.json", {onProgress: UnityProgress});
    </script>
</head>
<body>
<div class="webgl-content">
    <div id="unityContainer" style="width: 960px; height: 600px"></div>
    <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">HistoryRoom</div>
    </div>
</div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
