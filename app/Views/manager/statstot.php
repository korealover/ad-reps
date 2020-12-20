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
    <script>
        function fnExcelDownload(t) {
            location.href="/manager/exceldownload/" + t;
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
        <div class="col-md-3">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">일별 접속 통계</div>

                    <div class="panel-options">
                        <button class="btn btn-success" onclick="fnExcelDownload(1);"><i class="glyphicon glyphicon-floppy-save"></i> Excel 다운로드</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr style="background-color: #f5f5f5">
                            <th class="text-center">일별 <br/>접속일자</th>
                            <th class="text-center">일별 <br/>PC 접속수</th>
                            <th class="text-center">일별 <br/>Mobile 접속수</th>
                            <th class="text-center">일별 <br/>총접속수</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($day_list as $day_row) {
                            ?>
                            <tr>
                                <td class="text-center"><?= $day_row->stats_date ?></td>
                                <td class="text-center"><?= $day_row->pc_count ?></td>
                                <td class="text-center"><?= $day_row->mo_count ?></td>
                                <td class="text-center"><?= $day_row->stats_count ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">주별 접속 통계</div>

                    <div class="panel-options">
                        <button class="btn btn-success" onclick="fnExcelDownload(2);"><i class="glyphicon glyphicon-floppy-save"></i> Excel 다운로드</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr style="background-color: #f5f5f5">
                            <th class="text-center">주별 <br/>접속일자</th>
                            <th class="text-center">주별 <br/>PC 접속수</th>
                            <th class="text-center">주별 <br/>Mobile 접속수</th>
                            <th class="text-center">주별 <br/>총접속수</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($week_list as $week_row) {
                            ?>
                            <tr style="text-align: center;">
                                <td><?= $week_row->start ?> ~ <?= $week_row->end ?></td>
                                <td><?= $week_row->pc_count ?></td>
                                <td><?= $week_row->mo_count ?></td>
                                <td><?= $week_row->stats_count ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">월별 접속 통계</div>

                    <div class="panel-options">
                        <button class="btn btn-success" onclick="fnExcelDownload(3);"><i class="glyphicon glyphicon-floppy-save"></i> Excel 다운로드</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr style="background-color: #f5f5f5">
                            <th class="text-center">월별 <br/>접속연월</th>
                            <th class="text-center">월별 <br/>PC 접속수</th>
                            <th class="text-center">월별 <br/>Mobile 접속수</th>
                            <th class="text-center">월별 <br/>총접속수</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($month_list as $month_row) {
                            ?>
                            <tr style="text-align: center;">
                                <td><?= $month_row->stats_date ?></td>
                                <td><?= $month_row->pc_count ?></td>
                                <td><?= $month_row->mo_count ?></td>
                                <td><?= $month_row->stats_count ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
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