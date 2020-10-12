<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대한민국공익광고제</title>
    <link rel="stylesheet" href="/static/common/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <script src="/static/common/js/jquery-3.2.1.min.js"></script>
    <script src="/static/common/js/mobile-detect.min.js"></script>
    <script src="/static/common/js/imagesloaded.pkgd.js"></script>
    <script src="/static/common/js/ui.js"></script>
    <script>
        function fnClick() {
            window.open('<?=$url?>', '_blank');
        }
    </script>
</head>
<body>

<div id="wrap">
    <header id="header">
        <div class="header-top">
            <h1 class="logo"><a href="/">2020 대한민국공익광고제</a></h1>
            <button type="button" class="hamburger-box"><span class="hamburger">메뉴오픈</span></button>
        </div>
        <div class="header-gnb">
            <div class="static">
                <?= $this->include('templates/gnb') ?>
            </div>
        </div>
    </header>
    <div id="container" class="sub">
        <div class="sub-visual sub-theme">
            <div class="static">
                <div class="vs-title n-motion">
                    <h2 class="text-line"><em>테마별 전시관</em></h2>
                    <p class="text-line"><em>온라인 전시관의 공익적 가치 전파는<br>국민들의 마음과 마음을 잇는</em><br> <em>사회통합의 매개체로 활용되고 있습니다. </em></p>
                </div>
            </div>
        </div>
        <div class="contents static">
            <div class="sub-sect1 theme">
                <h3 class="h-ty1 n-motion n-bottom">수상작관</h3>
                <div class="theme1-tit">
                    <h4 class="tx4 n-motion n-bottom">대한민국 공익광고제<br>마음, 세상을 잇다</h4>
                    <p class="tx1 n-motion n-bottom n-delay1">누구나 공익광고를 통해 밝고 건강한 사회를<br class="pc-br"> 만들어 가고 있는 2020대한민국공익광고제<br class="pc-br">수상작을 소개합니다.</p>
                </div>
                <div class="themt2-imgs">
                    <div class="p-img1 n-motion n-bottom"><img src="/static/images/theme2-img1.jpg" alt=""></div>
                    <div class="p-img2 n-motion n-bottom n-delay1"><img src="/static/images/theme2-img2.jpg" alt=""></div>
                    <div class="p-img3 n-motion n-bottom n-delay2"><img src="/static/images/theme2-img3.jpg" alt=""></div>
                    <div class="p-img4 n-motion n-bottom n-delay3"><img src="/static/images/theme2-img4.jpg" alt="" onclick="fnClick();" style="cursor:pointer;"></div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>