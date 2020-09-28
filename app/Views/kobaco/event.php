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
        <div class="sub-visual sub-community">
            <div class="static">
                <div class="vs-title n-motion">
                    <h2 class="text-line"><em>커뮤니티</em></h2>
                    <p class="text-line"><em>공익광고는 인간존중의 정신을 바탕으로<br>국민들이 공공의 이익을 지향하여</em><br> <em>밝고 건강한 사회를 만들어 가는데
                            목표를<br>가지고 있습니다.</em></p>
                </div>
            </div>
        </div>
        <div class="contents static">
            <div class="sub-sect2 community3">
                <h3 class="h-ty1">이벤트</h3>
                <ul class="event-lists">
                    <li>
                        <a href="#"><img src="/static/images/@event-thumb1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="/static/images/@event-thumb2.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="/static/images/@event-thumb3.jpg" alt=""></a>
                    </li>
                </ul>
                <!-- paging  : pc-->
                <div class="pagination">
                    <div class="paging">
                        <a href="#self" class="page_prev"><span class="hide">이전</span></a>
                        <span class="page">
                            <a href="#self" class="on">1</a>
                            <a href="#self">2</a>
                            <a href="#self">3</a>
                            <a href="#self">4</a>
                            <a href="#self">5</a>
                        </span>
                        <a href="#self" class="page_next"><span class="hide">다음</span></a>
                    </div>
                </div>
                <!-- //paging -->

                <!-- mo : 더보기 -->
                <button type="button" class="btn-more"><span>더보기</span></button>
                <!-- // -->
            </div>
        </div>
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>