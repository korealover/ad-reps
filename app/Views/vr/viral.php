<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>바이럴관</title>
    <link rel="stylesheet" href="https://vod.premeet.co.kr/premeet/vr/viral/TemplateData/style.css">
    <script src="https://vod.premeet.co.kr/premeet/vr/viral/TemplateData/UnityProgress.js"></script>
    <script src="https://vod.premeet.co.kr/premeet/vr/viral/Build/UnityLoader.js"></script>
    <script>
        var unityInstance = UnityLoader.instantiate("unityContainer", "http://vods.premeet.co.kr/premeet/vr/viral/Build/viral.json", {onProgress: UnityProgress});
    </script>
</head>
<body bgcolor="#000000" topmargin="0" leftmargin="0">
<div class="webgl-content" style="width: 100%; margin: auto">
    <div id="unityContainer" style="width: 100%; margin: auto"></div>
</div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
