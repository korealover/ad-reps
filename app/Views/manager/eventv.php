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
    <!-- datapiker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/static/js/datepicker-ko.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script language="JavaScript">
        function fnBoardCk() {
            if ($("#subject").val() == "") {
                alert("제목을 등록해주세요")
                $("#subject").focus();
                return false;
            }
            if ($("#ckeditor_full").val() == "") {
                alert("내용을 등록해주세요")
                $("#ckeditor_full").focus();
                return false;
            }
        }

        function fnFaqDel(id) {
            var f = confirm("삭제하시겠습니까?");
            if (f == true) {
                location.href='/manager/eventd/' + id;
            }
        }

        $(function(){
            $("#startDt").datepicker({
                dateFormat:"yy-mm-dd"
            });
            $("#endDt").datepicker({
                dateFormat:"yy-mm-dd"
            });
        });
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
        <div class="col-md-10 text-right">

            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">이벤트 관리</div>
                        <!--
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div> -->
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" id="fm" name="fm" method="post" onsubmit="return fnBoardCk();"
                              action="/manager/eventp" encType="multipart/form-data">
                            <input type="hidden" id="id" name="id" value="<?= $vs['id'] ?>">
                            <input type="hidden" id="mode" name="mode" value="edit">
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 text-center"><h5><b>제목</b></h5></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="제목" value="<?= $vs['subject'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFilePc" class="col-lg-2 text-center"><h5><b>썸네일<br>(PC)</b></h5></label>
                                <div class="col-lg-10">
                                    <input type="file" class="btn btn-default" id="uploadedfile" name="uploadedfile">
                                    <p class="help-block text-left">
                                        <?php
                                        if ($vs['pc_file_size'] > 0 && $vs['pc_file_name'] != "") {
                                            ?>
                                            <a href="/upload/<?=$vs['pc_file_name']?>" target="_blank"><?=$vs['pc_org_file_name']?></a>
<!--                                            <a href="#" class="glyphicon glyphicon-trash"></a>-->
                                            <?php
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFileMo" class="col-lg-2 text-center"><h5><b>썸네일<br>(Mobile)</b></h5></label>
                                <div class="col-lg-10">
                                    <input type="file" class="btn btn-default" id="moUploadedfile" name="moUploadedfile">
                                    <p class="help-block text-left">
                                        <?php
                                        if ($vs['mo_file_size'] > 0 && $vs['mo_file_name'] != "") {
                                            ?>
                                            <a href="/upload/<?=$vs['mo_file_name']?>" target="_blank"><?=$vs['mo_org_file_name']?></a>
<!--                                            <a href="#" class="glyphicon glyphicon-trash"></a>-->
                                            <?php
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputStartDt" class="col-lg-2 text-center"><h5><b>시작일</b></h5></label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="startDt" id="startDt" value="<?= $vs['start_dt'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEndDt" class="col-lg-2 text-center"><h5><b>종료일</b></h5></label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="endDt" id="endDt" value="<?= $vs['end_dt'] ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputContent" class="col-lg-2 text-center"><h5><b>내용</b></h5></label>
                                <div class="col-lg-10">
                                    <textarea id="ckeditor_full" name="ckeditor_full"><?= $vs['contents'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10 text-center">
                                    <button type="submit" class="btn btn-success">수정</button>
                                    <button type="button" class="btn btn-info" onclick="location.href='/manager/view/event'">목록</button>
                                    <button type="button" class="btn btn-danger" onclick="fnFaqDel('<?= $vs['id'] ?>');">삭제</button>
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