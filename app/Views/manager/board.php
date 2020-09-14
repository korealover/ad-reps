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
                                    <li><a href="profile">Profile</a></li>
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

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">공지사항 관리</div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                        <tr>
                            <th style="width: 7%;text-align: center;">번호</th>
                            <th style="width: *;text-align: center;">제목</th>
                            <th style="width: 15%;text-align: center;">등록일</th>
                            <th style="width: 10%;text-align: center;">조회</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($list as $row) {
                            ?>
                            <tr style="text-align: center;">
                                <td><?=$cnt--?></td>
                                <td style="text-align: left;"><a
                                            href="/manager/view/boardv/<?= $row->id ?>"><?= $row->subject ?></a></td>
                                <td><?= $row->reg_date ?></td>
                                <td><?= $row->hits ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" onclick="javascript:location.href='/manager/view/boardw';">글쓰기</button>
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