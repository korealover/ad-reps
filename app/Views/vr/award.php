<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수상작관</title>
    <link rel="stylesheet" href="https://vod.premeet.co.kr/premeet/vr/award/TemplateData/style.css">
    <script src="https://vod.premeet.co.kr/premeet/vr/award/TemplateData/UnityProgress.js"></script>
    <script src="https://vod.premeet.co.kr/premeet/vr/award/Build/UnityLoader.js"></script>
    <script>
        var unityInstance = UnityLoader.instantiate("unityContainer", "https://vod.premeet.co.kr/premeet/vr/award/Build/award.json", {onProgress: UnityProgress});
    </script>
</head>
<body bgcolor="#000000" topmargin="0" leftmargin="0">
<div class="webgl-content" style="width: 100%; margin: auto">
    <div id="unityContainer" style="width: 100%; margin: auto"></div>
</div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unity WebGL Player | 수상작관</title>
    <script src="http://vod.premeet.co.kr/premeet/vr/award/Build/UnityLoader.js"></script>
    <script>
        UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/award/Build/award.json");
    </script>
</head>
<body bgcolor="#000000" topmargin="0" leftmargin="0">
<div class="webgl-content" style="width: 100%; margin: auto">
    <div id="unityContainer" style="width: 100%; margin: auto"></div>
</div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
