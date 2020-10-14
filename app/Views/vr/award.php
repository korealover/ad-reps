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
<body bgcolor="#000000" topmargin="0" leftmargin="0" style="position: fixed; overflow: hidden;width: 100%; height: 100%;">
<div id="unityContainer" style="width: 100%; height: 100%;  margin: auto"></div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
