<!DOCTYPE html>
<html>
<head>
    <title>대한민국 공익광고제 공모전</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="/static/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="main">대한민국 공익광고제 공모전</a></h1>
                </div>
            </div>
            <div class="col-md-5">

            </div>
            <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="admin">관리자 관리</a></li>
                                    <li><a href="login">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
        <?= $this->include('templates/menu') ?>
        <div class="col-md-10">

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">에디터 사용 법</div>
                </div>

                <div class="panel-body">
                    <h3>1. sftp로 접속하여 www 폴더(디렉토리) 하위 img 폴더(디렉토리)로 이동한다.</h3>
                    <div><img src="/static/images/editor_howto01.png" /> </div>
                    <p></p>
                    <h3>2. img 폴더(디렉토리)에 이미지를 업로드한다.</h3>
                    <div><img src="/static/images/editor_howto02.png" /> </div>
                    <p></p>
                    <h3>3. 브라우저에서 해당 이미지가 뜨는 지 확인한다.
                        <br/> 위 처럼 올렸다면 주소는 http://pas.kobaco.co.kr/img/이미지명</h3>
                    <div><img src="/static/images/editor_howto03.png" /></div>
                    <p></p>
                    <h3>4. 게시판 또는 이벤트 에디터에서 이미지를 선택한다.</h3>
                    <div><img src="/static/images/editor_howto04.png" width="80%" /></div>
                    <p></p>
                    <h3>5. 이미지 설정 팝업에서 URL에 이미지 경로를 넣는다 이미지는 이미 sftp로 올렸기 때문에 도메인을 제외한 /img/이미지명 으로 넣는다.
                        <br /> 미리보기에 이미지가 뜨는 지 확인하고 '예' 버튼을 누른다.
                    </h3>
                    <div><img src="/static/images/editor_howto05.png" width="80%" /></div>
                    <p></p>
                    <h3>6. 게시판 또는 이벤트 에디터에 이미지가 들어간 것을 확인하고 '등록' 또는 '수정'을 누른다.</h3>
                    <div><img src="/static/images/editor_howto06.png" width="80%" /></div>
                    <p></p>
                    <h3>7. 게시판 또는 이벤트를 확인한다.</h3>
                    <div><img src="/static/images/editor_howto07.png" width="80%" /></div>
                    <p></p>
                </div>
            </div>


        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>

<link href="/static/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/bootstrap/js/bootstrap.min.js"></script>

<script src="/static/vendors/datatables/js/jquery.dataTables.min.js"></script>

<script src="/static/vendors/datatables/dataTables.bootstrap.js"></script>

<script src="/static/js/custom.js"></script>
<script src="/static/js/tables.js"></script>
</body>
</html>