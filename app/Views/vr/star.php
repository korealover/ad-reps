
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | kobaco_star</title>
    <link rel="shortcut icon" href="http://vod.premeet.co.kr/premeet/vr/star/TemplateData/favicon.ico">
    <link rel="stylesheet" href="http://vod.premeet.co.kr/premeet/vr/star/TemplateData/style.css">
    <script src="http://vod.premeet.co.kr/premeet/vr/star/TemplateData/UnityProgress.js"></script>
    <script src="http://vod.premeet.co.kr/premeet/vr/star/Build/UnityLoader.js"></script>
    <script>
        var unityInstance = UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/star/Build/star.json", {onProgress: UnityProgress});
    </script>
</head>
<body bgcolor="#000000">
<div class="webgl-content">
    <div id="unityContainer" style="width: 960px; height: 600px"></div>
    <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title" style="color:#FFFFFF">kobaco_star</div>
    </div>
</div>
</body>
</html>
