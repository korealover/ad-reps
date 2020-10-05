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
                <h3 class="h-ty1 n-motion n-bottom">글로벌관</h3>
                <div class="theme1-tit">
                    <h4 class="tx4 n-motion n-bottom">세계가 주목하는<br>우리 광고의 위상</h4>
                    <p class="tx1 n-motion n-bottom n-delay1">세계 3대 광고제 출품작 중 공익적 메시지와<br class="pc-br"> 창의적인 표현으로 수상한 주요 작품들을<br class="pc-br"> 소개합니다. </p>
                </div>
                <div class="themt5-imgs">
                    <div class="p-img1 n-motion n-bottom"><img src="/static/images/theme5-img1.jpg" alt=""></div>
                    <div class="p-img2 n-motion n-bottom n-delay1"><img src="/static/images/theme5-img2.jpg" alt=""></div>
                    <div class="p-img3 n-motion n-bottom n-delay2"><img src="/static/images/theme5-img3.jpg" alt=""></div>
                    <div class="p-img4 n-motion n-bottom n-delay3"><a href="<?=$url?>" target="_blank"><img src="/static/images/theme5-img4.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>