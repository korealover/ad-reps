
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | kobaco_special</title>
    <link rel="shortcut icon" href="http://vod.premeet.co.kr/premeet/vr/special/TemplateData/favicon.ico">
    <link rel="stylesheet" href="http://vod.premeet.co.kr/premeet/vr/special/TemplateData/style.css">
    <script src="http://vod.premeet.co.kr/premeet/vr/special/TemplateData/UnityProgress.js"></script>
    <script src="http://vod.premeet.co.kr/premeet/vr/special/Build/UnityLoader.js"></script>
    <script>
        var unityInstance = UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/special/Build/special.json", {onProgress: UnityProgress});
    </script>
</head>
<body bgcolor="#000000">
<div class="webgl-content">
    <div id="unityContainer" style="width: 960px; height: 600px"></div>
    <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title" style="color:#FFFFFF">kobaco_special</div>
    </div>
</div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>