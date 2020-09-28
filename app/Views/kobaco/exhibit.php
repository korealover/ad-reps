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
        <div class="sub-visual sub-exhibit">
            <div class="static">
                <div class="vs-title n-motion">
                    <h2 class="text-line"><em>전시관 소개</em></h2>
                    <p class="text-line"><em>40년 가까운 오랜 전통의 공익광고에<br>새로운 가치를 부여하고</em><br><em>언제 어디서나 공익광고를 즐길 수 있도록<br>온라인 전시관을 개관하였습니다. </em></p>
                </div>
            </div>
        </div>
        <div class="contents static">
            <div class="sub-sect1 exhibit">
                <h3 class="h-ty1 n-motion n-bottom">온라인 전시관</h3>
                <p class="tx4 ag-c n-motion n-bottom">
                    <span class="st">“</span><br>
                    20년 코로나19 바이러스가<br class="mo-br">장기화되면서 갑작스럽게 <br class="pc-br"><br class="mo-br">비대면 시대가 우리에게 찾아왔습니다.
                </p>
                <p class="tx1 ag-c mgt16">KOBACO는 포스트 코로나 시대에 대비해, 언제 어디서나 공익광고를 보고 즐길 수 있도록<br class="pc-br"> 온라인 전시관을 구축, 개관하게 되었습니다.<br class="pc-br">
                    온라인 전시관은 40년 가까이 축적된 공익광고를 다시 한 번 재정비하여 새로운 가치를<br class="pc-br"> 전달하는데도 의미가 있습니다. 역사관, 광고제작관, 테마관 등 다양한 주제로 구성된<br class="pc-br"> 전시관은 온라인에서 누구나 자유롭게 즐기고, 교육적 목적으로 활용할 수 있습니다. </p>
                <p class="tx1 ag-c mgt8">사회적 거리두기로 서로의 몸은 멀어졌지만, 온라인 전시관이 공익적 가치 전파로 국민들의<br class="pc-br"> 마음과 마음을 잇는 사회통합의 매개체로 활용되길 기대합니</p>

                <div class="exhibit-lists">
                    <div class="exhi-item">
                        <h4 class="h-ty2">역사관</h4>
                        <p class="tx2">시대별 대표 공익작품들을 통해 사회 변화와 가치관의 역사를 살펴볼 수 있습니다</p>
                        <p class="p-img">
                            <img src="/static/images/exih-img1.jpg" alt="">
                            <a href="#" class="link-go">보러가기</a>
                        </p>
                    </div>
                    <div class="exhi-item">
                        <h4 class="h-ty2">수상작관</h4>
                        <p class="tx2">2020 대한민국 공익광고제 공모전 영광의 수상작들을 만나보시죠</p>
                        <p class="p-img">
                            <img src="/static/images/exih-img2.jpg" alt="">
                            <a href="#" class="link-go">보러가기</a>
                        </p>
                    </div>
                    <div class="exhi-item">
                        <h4 class="h-ty2">광고제작관</h4>
                        <p class="tx2">공익광고가 제작되는 일련의 과정과 통합 캠페인까지 실제 제작사례를 통해 확인할 수 있습니다</p>
                        <p class="p-img">
                            <img src="/static/images/exih-img3.jpg" alt="">
                            <a href="#" class="link-go">보러가기</a>
                        </p>
                    </div>
                    <div class="exhi-item">
                        <h4 class="h-ty2">특별관</h4>
                        <p class="tx2">공익광고는 변화의 시기마다 사회인식과 행동문화를 광고적으로 풀어내 국민들의 공감을 이끌어내고 사회 통합에 기여해왔습니다. 새로운 시대상을 제시해 시대와 시대를 잇고, 갈등으로 멀어진 마음을 이어 국민들의 마음을 하나로 만들어 준 공익광고를 소개합니다.</p>
                        <p class="p-img">
                            <img src="/static/images/exih-img4.jpg" alt="">
                            <a href="#" class="link-go">보러가기</a>
                        </p>
                    </div>
                    <div class="exhi-item">
                        <h4 class="h-ty2">글로벌관</h4>
                        <p class="tx2">세계 3대 광고제로 불리는 칸 광고제, 클리오 광고제, 뉴욕 페스티벌에서 수상한 해외광고 중에서 공익적 메시지와 창의적인 표현이 뛰어난 작품들을 소개합니다</p>
                        <p class="p-img">
                            <img src="/static/images/exih-img5.jpg" alt="">
                            <a href="#" class="link-go">보러가기</a>
                        </p>
                    </div>
                    <div class="exhi-item">
                        <h4 class="h-ty2">테마관</h4>
                        <p class="tx2">재미있는 테마들의 공익광고 모음입니다</p>
                        <p class="tx2">① 스타관 : 스타들이 출연했던 공익광고를 볼 수<br class="pc-br">  있습니다<br>
                            ② 공포관 : 공포스러운 분위기로 경각심을 강조했던,<br class="pc-br"> 공익광고를 볼 수 있습니다<br>
                            ③ 명품관 : 국내외 광고제에서 수상한 주요<br class="pc-br">  공익광고를 볼 수 있습니다<br>
                            ⑤ 바이럴관 : 텔레비전에서 볼 수 없는 특별한<br class="pc-br"> 공익광고를 볼 수 있습니다</p>
                        <p class="p-img">
                            <img src="/static/images/exih-img6.jpg" alt="">
                            <a href="#" class="link-go">보러가기</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>