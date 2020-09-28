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
        <div class="sub-visual sub-public">
            <div class="static">
                <div class="vs-title n-motion">
                    <h2 class="text-line"><em>공익광고</em></h2>
                    <p class="text-line"><em>공익광고는 인간존중의 정신을 바탕으로<br>더 나은 내일을 꿈꿉니다</em></p>
                </div>
            </div>
        </div>
        <div class="contents static">
            <div class="sub-sect1 public2">
                <h3 class="h-ty1 n-motion n-bottom">인사말</h3>
                <p class="tx1 ag-c n-motion n-bottom">
                    우리 사회는 여전히 기승을 부리고 있는 코로나 바이러스로 인해 힘든 시기를 보내고 <br class="pc-br">있습니다. 그로 인해, 삶의 방식과 가치관에 있어서도 많은 변화가 일어나고 있습니다. <br class="pc-br">KOBACO는 이러한 상황 속에서 서로의 마음을 이해하고 지금의 어려움을 함께 극복하는<br class="pc-br"> 화합의 장으로서 공익광고 캠페인을 진행하고자 합니다.
                </p>
                <p class="h-ty1-a n-motion n-bottom">2020<br class="mo-br">대한민국공익광고제<br class="pc-br">마음과 마음을 이어<br class="mo-br">새로운 세상을 그리다</p>
                <p class="tx1 ag-c n-motion n-bottom">'대한민국 공익광고제'는 올해 12회를 맞는 국내 유일의 공익광고 축제입니다.<br class="pc-br"><br class="mo-br">
                    20년에도 전국민이 참여하는 공익광고 공모전, 국내외의 다양한 공익광고 작품 전시등을 통해<br class="pc-br">새로운 가치를 나누는 계기를 마련할 것입니다. 또한, 새로운 정보통신 기술을 이용,<br class="pc-br">공익광고에 대한 새로운 경험을 제공하는 한마당이 될 것 입니다. '2020 대한민국<br class="pc-br"> 공익광고제'는 온라인 전시관 도입 등 비대면 전시를 중점적으로 추진하여 여러분들이<br class="pc-br">안전하고 편안하게 공익광고제를 즐길 수 있도록 하겠습니다.</p>

                <div class="img-bx n-motion n-bottom">
                    <img src="/static/images/public2-img.jpg" alt="" class="img-pc">
                    <img src="/static/images/public2-img-m.jpg" alt="" class="img-mo">
                </div>

                <p class="tx1 ag-c n-motion n-bottom">새로운 세상, 더 나은 내일을 위한 '2020 대한민국 공익광고제'에 여러분들의 많은 관심과<br class="pc-br">사랑을 부탁드립니다. 감사합니다.</p>
                <p class="tx1 ag-c sign n-motion n-bottom">한국방송광고진흥공사 사장 김기만</p>
            </div>
        </div>
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>