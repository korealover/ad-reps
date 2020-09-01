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
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="main"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="current"><a href="display"><i class="glyphicon glyphicon-list"></i> 전시관 관리</a></li>
                    <li><a href="calendar"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <li><a href="login">Login</a></li>
                            <li><a href="signup">Signup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">전시관 관리</div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped"">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>구분</th>
                                <th>VR URL</th>
                                <th>최종 업데이트일</th>
                                <th>저장</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>역사관</td>
                                <td><input type="text" class="form-control"></td>
                                <td>@mdo</td>
                                <td>
                                    <button class="btn btn-primary">저장</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>수상작관</td>
                                <td><input type="text" class="form-control"></td>
                                <td>@fat</td>
                                <td>
                                    <button class="btn btn-primary">저장</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td><input type="text" class="form-control"></td>
                                <td>@twitter</td>
                                <td>
                                    <button class="btn btn-primary">저장</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<footer>
    <div class="container">

        <div class="copy text-center">
            Copyright 2014 <a href='#'>Website</a>
        </div>

    </div>
</footer>

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