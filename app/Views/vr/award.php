<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | kobaco_award</title>
    <script src="http://vod.premeet.co.kr/premeet/vr/award/Build/UnityLoader.js"></script>
    <script>
        UnityLoader.instantiate("unityContainer", "http://vod.premeet.co.kr/premeet/vr/award/Build/award.json");
    </script>
</head>
<body bgcolor="#000000" topmargin="0" leftmargin="0">
<div id="unityContainer" style="width: 100%; margin: auto"></div>
<?=$this->include('templates/vrfooter')?>
</body>
</html>
