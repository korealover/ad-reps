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
    <!-- 라이브리 프로퍼티설정-->
    <!-- SNS에포스팅 될 설명 -->
    <meta property="og:description" content="2020 대한민국 공익광고제 - <?=$vs['subject'] ?>" />
    <!-- SNS에 포스팅 될 사이트 URL -->
    <meta property="og:site" content="psa.kobaco.co.kr/kobaco/edetail/<?=$id?>" />
    <!-- SNS에포스팅 될 썸네일 이미지 -->
    <meta property="og:image" content="/upload/<?=$vs['pc_file_name']?>" />
    <!-- SNS 포스팅 될 타이틀 값 -->
    <meta property="og:title" content="2020 대한민국 공익광고제 - <?=$vs['subject'] ?>" />
    <!— 프로퍼티 설정 끝 -->
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
                    <p class="text-line"><em>공익광고는 인간존중의 정신을 바탕으로<br>국민들이 공공의 이익을 지향하여</em><br> <em>밝고 건강한 사회를 만들어 가는데 목표를<br>가지고 있습니다.</em></p>
                </div>
            </div>
        </div>
        <div class="contents static">
            <div class="sub-sect2 community3">
                <h3 class="h-ty1">이벤트</h3>
                <div class="event-dt-top">
                    <h4><?=$vs['subject'] ?></h4>
                    <div class="elt">
                        <span class="date"><?=str_replace('-', '.', $vs['start_dt']) ?> ~ <?=str_replace('-', '.', $vs['end_dt']) ?></span>
                    </div>
                </div>
                <div class="event-dt-body">
                    <?=$vs['contents'] ?>
                </div>
                <!-- 라이브리 시티 설치 코드 -->
                <div id="lv-container" data-id="<?=LIVERE_ID?>" data-uid="<?=LIVERE_UID?>">
                    <script type="text/javascript">
                        (function(d, s) {
                            var j, e = d.getElementsByTagName(s)[0];

                            if (typeof LivereTower === 'function') { return; }

                            j = d.createElement(s);
                            j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
                            j.async = true;

                            e.parentNode.insertBefore(j, e);
                        })(document, 'script');
                    </script>
                    <noscript>라이브리 댓글 작성을 위해 JavaScript를 활성화 해주세요</noscript>
                </div>
                <!-- 시티 설치 코드 끝 -->
                <div class="event-dt-btn">
                    <a href="/kobaco/event" class="btn-list">목록</a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>