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

    <link href="/static/css/stats.css" rel="stylesheet">

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
        <div class="col-md-10">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">일일 접속율 & 주간 접속 추이 - <b>총 누적 접속자 : <?=$total?></b></div>

                    <div class="panel-options">
                       <!-- <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="hero-donut" style="height: 230px;"></div>
                            <div class="text-center"><b>누적 접속자</b></div>
                        </div>
                        <div class="col-md-2">
                            <div id="hero-donut2" style="height: 230px;"></div>
                            <div class="text-center"><b>일일 접속율</b></div>
                        </div>
                        <div class="col-md-8">
                            <div id="hero-bar" style="height: 230px;"></div>
                            <div class="text-center"><b>주간 접속 추이</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">일일 접속 추이</div>

                    <div class="panel-options">
                        <!-- <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                         <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
                    </div>
                </div>
                <div class="panel-body">
                    <div id="hero-graph2" style="height: 230px;"></div>
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">월간 접속 추이</div>

                    <div class="panel-options">
                       <!-- <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
                    </div>
                </div>
                <div class="panel-body">
                    <div id="hero-graph" style="height: 230px;"></div>
                </div>
            </div>


        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="/static/vendors/morris/morris.css">


<script src="/static/vendors/jquery.knob.js"></script>
<script src="/static/vendors/raphael-min.js"></script>
<script src="/static/vendors/morris/morris.min.js"></script>

<script src="/static/vendors/flot/jquery.flot.js"></script>
<script src="/static/vendors/flot/jquery.flot.categories.js"></script>
<script src="/static/vendors/flot/jquery.flot.pie.js"></script>
<script src="/static/vendors/flot/jquery.flot.time.js"></script>
<script src="/static/vendors/flot/jquery.flot.stack.js"></script>
<script src="/static/vendors/flot/jquery.flot.resize.js"></script>

<script src="/static/js/custom.js"></script>
<script>
    // Morris Bar Chart
    Morris.Bar({
        element: 'hero-bar',
        data: [
            <?php
            foreach ($week_row as $row) {
            ?>
            {visits_date: '<?=$row->stats_date?>', visits_pc: <?=$row->pc_count?>, visits_mobile: <?=$row->mo_count?>},
            <?php
            }
            ?>
        ],
        xkey: 'visits_date',
        ykeys: ['visits_pc', 'visits_mobile'],
        labels: ['PC 방문자', 'mobile 방문자'],
        barRatio: 0.4,
        xLabelMargin: 10,
        hideHover: 'auto',
        barColors: ["#0b62a4", "#7A92A3"]
    });

    // Morris Donut Chart
    Morris.Donut({
        element: 'hero-donut',
        data: [
            {label: 'PC 누적 접속', value: '<?=$pc_total?>' },
            {label: 'Mobile 누적 접속', value: '<?=$mo_total?>' },
        ],
        colors: ["#0b62a4", "#7A92A3"],
        formatter: function (y) { return y}
    });

    // Morris Donut Chart
    Morris.Donut({
        element: 'hero-donut2',
        data: [
            {label: 'PC 방문율', value: <?=$pc_per?> },
            {label: 'Mobile 방문율', value: <?=$mo_per?> },
        ],
        colors: ["#30a1ec", "#76bdee", "#c4dafe"],
        formatter: function (y) { return y + "%" }
    });

    // Morris Line Chart
    var tax_data = [
        <?php
        foreach ($month_row as $mrow) {
        ?>
        {"period": "<?=$mrow->stats_date?>", "PC": <?=$mrow->pc_count?>, "Mobile": <?=$mrow->mo_count?>},
        <?php
        }
        ?>
    ];
    Morris.Line({
        element: 'hero-graph',
        data: tax_data,
        xkey: 'period',
        xLabels: "month",
        ykeys: ['PC', 'Mobile'],
        labels: ['PC 방문', 'Mobile 방문']
    });

    // Morris Line Chart
    var tax_data2 = [
        <?php
        foreach ($today_row as $trow) {
        ?>
        {"period": "<?=$trow->stats_datetm?>", "PC": <?=$trow->pc_count?>, "Mobile": <?=$trow->mo_count?>},
        <?php
        }
        ?>
    ];
    Morris.Line({
        element: 'hero-graph2',
        data: tax_data2,
        xkey: 'period',
        xLabels: "hour",
        ykeys: ['PC', 'Mobile'],
        labels: ['PC 방문', 'Mobile 방문']
    });
</script>
</body>
</html>