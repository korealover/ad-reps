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
            <div class="sub-sect2 community1">
                <h3 class="h-ty1">공지사항</h3>

                <div class="notice-detail">
                    <div class="notice-detail-top">
                        <h4><?=$row['subject']?> </h4>
                        <span class="date"><?=str_replace("-", ".", substr($row['reg_date'], 0, 10))?></span>
                    </div>
                    <div class="notice-detail-body">
                        <?=$row['contents']?>
                    </div>
                    <div class="notice-detail-btn">
                        <a href="/kobaco/notice" class="btn-list">목록</a>
                    </div>
                    <div class="notice-detail-nav">
                        <?php if (!$prow['id']){ ?>
                            <a href="#" class="np-prev"><span class="tit">이전글</span><span class="con"><?=$prow['subject']?></span></a>
                        <?php }else{?>
                            <a href="/kobaco/detail/<?=$prow['id']?>" class="np-prev"><span class="tit">이전글</span><span class="con"><?=$prow['subject']?></span></a>
                        <?php }?>

                        <?php if (!$nrow['id']){ ?>
                            <a href="#" class="np-next"><span class="tit">다음글</span><span class="con"><?=$nrow['subject']?></span></a>
                        <?php }else{?>
                            <a href="/kobaco/detail/<?=$nrow['id']?>" class="np-next"><span class="tit">다음글</span><span class="con"><?=$nrow['subject']?></span></a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('templates/ffooter') ?>
</div>

</body>
</html>