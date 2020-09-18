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
                        <div class="input-group form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
                        </div>
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
        <div class="col-md-10">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">주간 접속 추이</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="hero-bar" style="height: 230px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">월간 접속 추이</div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
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
            {visits_date: '<?=$row->stats_date?>', visits_count: <?=$row->stats_count?>},
            <?php
            }
            ?>
        ],
        xkey: 'visits_date',
        ykeys: ['visits_count'],
        labels: ['방문자 수'],
        barRatio: 0.4,
        xLabelMargin: 10,
        hideHover: 'auto',
        barColors: ["#3d88ba"]
    });

    // Morris Line Chart
    var tax_data = [
        <?php
        foreach ($month_row as $mrow) {
        ?>
        {"period": "<?=$mrow->stats_date?>", "visits": <?=$mrow->stats_count?>},
        <?php
        }
        ?>
    ];
    Morris.Line({
        element: 'hero-graph',
        data: tax_data,
        xkey: 'period',
        xLabels: "month",
        ykeys: ['visits'],
        labels: ['월 방문자']
    });
</script>
</body>
</html>