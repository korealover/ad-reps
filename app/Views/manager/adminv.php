<!DOCTYPE html>
<html>
<head>
    <title>2020 대한민국 공익광고제</title>
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
    <script language="JavaScript">
        function fnBoardCk() {
            if ($("#belong").val() == "") {
                alert("소속을 입력해주세요")
                $("#belong").focus();
                return false;
            }
            if ($("#admin_id").val() == "") {
                alert("아이디를 입력해주세요")
                $("#admin_id").focus();
                return false;
            }
            if ($("input:checkbox[id='pwd_change']").is(":checked") == true) {
                if ($("#pwd1").val() == "") {
                    alert("비밀번호를 입력해주세요")
                    $("#pwd1").focus();
                    return false;
                }
                if ($("#pwd2").val() == "") {
                    alert("비밀번호를 한번 더 입력해주세요")
                    $("#pwd2").focus();
                    return false;
                }
                $("#pwd_mode").val(1);
            } else {
                $("#pwd_mode").val(0);
            }
            if ($("#admin_name").val() == "") {
                alert("이름을 입력해주세요")
                $("#admin_name").focus();
                return false;
            }
        }

        function fnAdminDel(id) {
            var f = confirm("삭제하시겠습니까?");
            if (f == true) {
                location.href='/manager/admind/' + id;
            }
        }
    </script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="main">2020 대한민국 공익광고제</a></h1>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-lg-12">
<!--                        <div class="input-group form">-->
<!--                            <input type="text" class="form-control" placeholder="Search...">-->
<!--                            <span class="input-group-btn">-->
<!--	                         <button class="btn btn-primary" type="button">Search</button>-->
<!--	                       </span>-->
<!--                        </div>-->
                    </div>
                </div>
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
                                    <li><a href="/manager/logout">Logout</a></li>
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

            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">관리자 관리</div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" id="fm" name="fm" method="post" onsubmit="return fnBoardCk();" action="/manager/adminp" encType="multipart/form-data">
                            <input type="hidden" id="number" name="number" value="<?=$vs['number']?>" />
                            <input type="hidden" id="mode" name="mode" value="edit" />
                            <input type="hidden" id="pwd_mode" name="pwd_mode" />
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>구분</b></h5></label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="gbn" name="gbn">
                                        <option value="1001"<?=$vs['gbn']=='1001'?" selected":FALSE?>>수퍼 관리자</option>
                                        <option value="1002"<?=$vs['gbn']=='1002'?" selected":FALSE?>>전시관 관리자</option>
                                        <option value="1003"<?=$vs['gbn']=='1003'?" selected":FALSE?>>일반 관리자</option>
                                        <option value="1004"<?=$vs['gbn']=='1004'?" selected":FALSE?>>이벤트 관리자</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>소속</b></h5></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="belong" name="belong" placeholder="소속" value="<?=$vs['belong']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>아이디</b></h5></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="admin_id" name="admin_id" placeholder="아이디" value="<?=$vs['admin_id']?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>비밀번호 변경</b></h5></label>
                                <div class="col-lg-8">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="pwd_change" name="pwd_change" value="Y"> 비밀번호 변경 여부 </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>비밀번호</b></h5></label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>비밀번호 확인</b></h5></label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>이름</b></h5></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="이름" value="<?=$vs['admin_name']?>">
                                </div>
                            </div>
                            <!--
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>접근권한</b></h5></label>
                                <div class="col-lg-8">
                                    <label class="checkbox-inline">
                                        <input type="checkbox"> 전시관 관리 </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"> 게시판 관리 </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"> 이벤트 관리 </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"> 통계 </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"> 관리자 관리 </label>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8  text-center">
                                    <button type="submit" class="btn btn-primary">관리자 수정</button>
                                    <button type="button" class="btn btn-info" onclick="location.href='/manager/view/admin'">관리자 목록</button>
                                    <button type="button" class="btn btn-danger" onclick="fnAdminDel('<?= $vs['number'] ?>');">관리자 삭제</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>

<link href="/static/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="/static/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/bootstrap/js/bootstrap.min.js"></script>

<script src="/static/vendors/datatables/js/jquery.dataTables.min.js"></script>

<script src="/static/vendors/datatables/dataTables.bootstrap.js"></script>


<script src="/static/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="/static/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

<script src="/static/vendors/ckeditor/ckeditor.js"></script>
<script src="/static/vendors/ckeditor/adapters/jquery.js"></script>

<script type="text/javascript" src="/static/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="/static/js/custom.js"></script>
<script src="/static/js/tables.js"></script>
<script src="/static/js/editors.js"></script>

</body>
</html>