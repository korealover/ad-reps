
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | luxury</title>
    <link rel="shortcut icon" href="http://vod.premeet.co.kr/premeet/vr/luxury/TemplateData/favicon.ico">
    <link rel="stylesheet" href="http://vod.premeet.co.kr/premeet/vr/luxury/TemplateData/style.css">
    <script src="http://vod.premeet.co.kr/premeet/vr/luxury/TemplateData/UnityProgress.js"></script>
    <script src="http://vod.premeet.co.kr/premeet/vr/luxury/Build/UnityLoader.js"></script>
    <script>
        var unityInstance = UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/luxury/Build/kobaco_luxury_webgl.json", {onProgress: UnityProgress});
    </script>
</head>
<body bgcolor="#000000" topmargin="0" leftmargin="0">
<div id="unityContainer" style="width: 100%; margin: auto"></div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
