<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대한민국공익광고제</title>
    <link rel="stylesheet" href="/static/common/css/style.css">
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
    <main id="container" class="main">
        <section class="main-intro">
            <div class="static">
                <div class="text-box n-motion n-bottom">
                    <h3 class="text-line"><em>2020<br> 대한민국<br>공익광고제</em><br><em>마음, 세상을 잇다</em></h3>
                    <p class="tx n-motion n-bottom n-delay3">
                        <span class="text-line"><em>꽃씨가 퍼져 나가 예쁜 들판을 이루듯</em> </span>
                        <span class="text-line"><em>공익광고는 밝고 아름다운 세상을 꿈꿉니다</em></span>
                        <span class="text-line"><em>SINCE 1981</em></span>
                    </p>
                </div>
                <img src="/static/images/main-indi.png" alt="" class="indi">
            </div>
        </section>
        <section class="main-sect1">
            <div class="static n-motion n-bottom">
                <div class="sect">
                    <div class="text-box">
                        <h3 class="title n-motion n-bottom">
                            <div class="text-line stit"><em>역사관</em></div>
                            <div class="text-line"><em>공익광고의</em></div>
                            <div class="text-line ln2"><em>현재와 미래를<br> 말한다</em></div>
                        </h3>
                        <div class="text">
                            <p class="n-motion n-bottom n-delay2">
                                <span class="text-line"><em>최초의 방송공익광고 "저축으로</em></span>
                                <span class="text-line"><em>풍요로운 내일을"부터 현재의 다양한 </em></span>
                                <span class="text-line"><em>공익광고까지 시대별 대표 공익작품들을 </em></span>
                                <span class="text-line"><em>통해 우리 사회의 생활양식과 가치관의 </em></span>
                                <span class="text-line"><em>역사를 살펴볼 수 있습니다</em></span>
                            </p>
                            <a href="/kobaco/history" class="btn-cir-link n-motion n-bottom n-delay3">역사관 링크</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-sect2">
            <div class="static n-motion n-bottom">
                <div class="sect">
                    <div class="text-box">
                        <h3 class="title n-motion n-bottom">
                            <div class="text-line stit"><em>수상작관</em></div>
                            <div class="text-line"><em>대한민국<br> 공익광고제</em></div>
                            <div class="text-line ln2"><em>마음<sub>,</sub> 세상을<br>잇다</em></div>
                        </h3>
                        <div class="text">
                            <p class="n-motion n-bottom">
                                <span class="text-line"><em>더 나은 사회를 위한 작은 아이디어와 실천으로</em></span>
                                <span class="text-line"><em>누구나 참여할 수 있는 대한민국 공익광고제 공모전</em></span>
                                <span class="text-line"><em>2020 영광의 수상작들을 만나보시죠</em></span>
                            </p>
                            <a href="/kobaco/winner" class="btn-cir-link n-motion n-bottom">수장작관 링크</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-sect3">
            <div class="static n-motion n-bottom">
                <div class="sect">
                    <div class="text-box">
                        <h3 class="title n-motion n-bottom">
                            <div class="text-line stit"><em>광고제작관</em></div>
                            <div class="text-line"><em>국민과 함께<sub>,</sub><br> 미디어와 함께</em></div>
                            <div class="text-line ln2"><em>공익광고를<br> 만듭니다</em></div>
                        </h3>
                        <div class="text">
                            <p class="n-motion n-bottom">
                                <span class="text-line"><em>국민이 제안한 공익광고 스토리보드가</em></span>
                                <span class="text-line"><em>공익광고로 제작되는 일련의 과정과 통합 캠페인까지</em></span>
                                <span class="text-line"><em>실제 제작사례를 통해 확인할 수 있습니다</em></span>
                            </p>
                            <a href="/kobaco/adv" class="btn-cir-link n-motion n-bottom">광고제작관 링크</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-sect4">
            <div class="static n-motion n-bottom">
                <div class="sect">
                    <div class="text-box">
                        <h3 class="title n-motion n-bottom">
                            <div class="text-line stit"><em>특별관</em></div>
                            <div class="text-line"><em>시대와 시대를<br>잇고<sub>,</sub> </em></div>
                            <div class="text-line ln2"><em>국민의 마음을<br>하나로</em></div>
                        </h3>
                        <div class="text">
                            <p class="n-motion n-bottom">
                                <span class="text-line"><em>공익광고는 변화하는 시대와 시대를 잇고</em></span>
                                <span class="text-line"><em>새로운 시대상과 그에 필요한 행동문화를 보여주며</em></span>
                                <span class="text-line"><em>국민의 마음을 하나로 잇기 위해 노력해 왔습니다</em></span>
                            </p>
                            <a href="/kobaco/special" class="btn-cir-link n-motion n-bottom">특별관 링크</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-sect5">
            <div class="static n-motion n-bottom">
                <div class="sect">
                    <div class="text-box">
                        <h3 class="title n-motion n-bottom">
                            <div class="text-line stit"><em>글로벌관</em></div>
                            <div class="text-line"><em>세계 3대<br>광고제에서 </em></div>
                            <div class="text-line ln2"><em>수상한 해외 광고 산책</em></div>
                        </h3>
                        <div class="text">
                            <p class="n-motion n-bottom">
                                <span class="text-line"><em>칸 광고제, 클리오 광고제, 뉴욕 페스티벌에서 수상한 </em></span>
                                <span class="text-line"><em>해외광고 중에서 공익적인 메시지와 창의적인 표현이</em></span>
                                <span class="text-line"><em>뛰어난 작품들을 둘러볼 수 있습니다</em></span>
                            </p>
                            <a href="/kobaco/global" class="btn-cir-link n-motion n-bottom">글로벌관 링크</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-sect6">
            <div class="static n-motion n-bottom">
                <div class="sect">
                    <div class="text-box">
                        <h3 class="title n-motion n-bottom">
                            <div class="text-line stit"><em>테마관</em></div>
                            <div class="text-line"><em>재미있는<br>테마들의 </em></div>
                            <div class="text-line ln2"><em>공익광고 모음전</em></div>
                        </h3>
                        <div class="text">
                            <p class="n-motion n-bottom">
                                <span class="text-line"><em>스타관, 공포관, 명품관, 바이럴관</em></span>
                                <span class="text-line"><em>테마별로 재미있게 구성된 콘텐츠와 </em></span>
                                <span class="text-line"><em>참신한 전시 체험을 선사합니다</em></span>
                            </p>
                            <a href="/kobaco/theme" class="btn-cir-link n-motion n-bottom">테마관 링크</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>