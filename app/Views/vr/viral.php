<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unity WebGL Player | 바이럴관</title>
    <link rel="stylesheet" href="http://vod.premeet.co.kr/premeet/vr/viral/TemplateData/style.css">
    <script src="http://vod.premeet.co.kr/premeet/vr/viral/TemplateData/UnityProgress.js"></script>
    <script src="http://vod.premeet.co.kr/premeet/vr/viral/Build/UnityLoader.js"></script>
    <script>
        var unityInstance = UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/viral/Build/viral.json", {onProgress: UnityProgress});
    </script>
</head>
<body bgcolor="#000000" topmargin="0" leftmargin="0" style="position: fixed; overflow: hidden;width: 100%; height: 100%;">
<div class="webgl-content" style="width: 100%; height: 100%;  margin: auto">
    <div id="unityContainer" style="width: 100%; height: 100%;  margin: auto"></div>
</div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
