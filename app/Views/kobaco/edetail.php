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
            <h1 class="logo"><a href="#">2020 대한민국공익광고제</a></h1>
            <button type="button" class="hamburger-box"><span class="hamburger">메뉴오픈</span></button>
        </div>
        <div class="header-gnb">
            <div class="static">
                <?= $this->include('templates/gbn') ?>
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
                    <h4>친구 추천하고, 최대 100만원 받자! </h4>
                    <div class="elt">
                        <span class="date">2020.09.01 ~ 2020.12.31</span>
                        <span class="sns">
                            <a href="#" class="ico-sns-fb">페이스북</a>
                            <a href="#" class="ico-sns-kka">카카오톡</a>
                            <a href="#" class="ico-sns-link">링크</a>
                        </span>
                    </div>
                </div>
                <div class="event-dt-body">
                    <img src="/static/images/@event-detail.jpg" alt="">
                </div>
                <div class="event-dt-sns">
                    <p class="tx1">이벤트 페이지를 가족, 친구들과 함께 공유해보세요!</p>
                    <span class="sns">
                        <a href="#" class="ico-sns-fb">페이스북</a>
                        <a href="#" class="ico-sns-kka">카카오톡</a>
                        <a href="#" class="ico-sns-link">링크</a>
                    </span>
                </div>

                <div class="event-reply">
                    <h4>이벤트 참여하기</h4>
                    <div class="reply-edit">
                        <textarea name="" id="" cols="30" rows="3" placeholder="최대 500자까지 입력이 가능하며 주제와 무관한 내용은 작성자 동의 없이 삭제될 수 있습니다."></textarea>
                        <button type="submit" class="btn-reg">등록</button>
                    </div>
                    <ul class="reply">
                        <li>
                            <p class="rp1">nowo***님 (2020.10.20)</p>
                            <p class="tx">참여완료! 대한민국공익광고제를 응원합니다!</p>
                        </li>
                        <li>
                            <p class="rp1">nowo***님 (2020.10.20)</p>
                            <p class="tx">참여완료! 대한민국공익광고제를 응원합니다!</p>
                        </li>
                        <li>
                            <p class="rp1">nowo***님 (2020.10.20)</p>
                            <p class="tx">참여완료! 대한민국공익광고제를 응원합니다!</p>
                        </li>
                    </ul>
                </div>

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

                <div class="event-dt-btn">
                    <a href="#" class="btn-list">목록</a>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</div>

</body>
</html>