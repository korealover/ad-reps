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
    <script src="/static/common/js/slick.js"></script>
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
        <div class="contents">
            <div class="sub-sect1 theme2">
                <h3 class="h-ty1 n-motion n-bottom">테마관</h3>
                <div class="theme1-tit">
                    <h4 class="tx4 n-motion n-bottom">테마가있는<br>공익광고 모여라</h4>
                    <p class="tx1 n-motion n-bottom n-delay1">주제에 따라 재미있게 구성된 공익광고 <br class="pc-br">테마관을<br class="mo-br">소개합니다.</p>
                </div>
            </div>
            <div class="theme-ad">
                <div class="theme-ad-nav">
                    <div class="theme-sd-nav">
                        <div class="tx1"><span>스타관</span></div>
                        <div class="tx1"><span>공포관</span></div>
                        <div class="tx1"><span>명품관</span></div>
                        <div class="tx1"><span>바이럴관</span></div>
                    </div>
                </div>
                <div class="theme-ad-cont">
                    <div class="theme-sd-slider">
                        <div>
                            <div class="bx">
                                <img src="/static/images/@theme.jpg" alt="">
                                <a href="<?=$star_url?>" class="ico-play" target="_blank"></a>
                            </div>
                        </div>
                        <div>
                            <div class="bx">
                                <img src="/static/images/@theme2.jpg" alt="">
                                <a href="<?=$horror_url?>" class="ico-play" target="_blank"></a>
                            </div>
                        </div>
                        <div>
                            <div class="bx">
                                <img src="/static/images/@theme.jpg" alt="">
                                <a href="<?=$Luxury_url?>" class="ico-play" target="_blank"></a>
                            </div>
                        </div>
                        <div>
                            <div class="bx">
                                <img src="/static/images/@theme.jpg" alt="">
                                <a href="<?=$viral_url?>" class="ico-play" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <script>ui.slider.themeSd()</script>
            </div>
        </div>
        <!-- //content -->
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>


</body>
</html>