<!DOCTYPE html>
<html>
  <head>
    <title>2020 대한민국 공익광고제</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<script language="javascript">
	function fcheck_login() {
		if ($("#admin_id").val() == "") {
			alert("ID을 입력하세요.")
			$("#admin_id").focus()
			return;
		}
		if ($("#admin_pwd").val() == "") {
			alert("패스워드가 입력되지 않았습니다.")
			$("#admin_pwd").val().focus()
			return;
		}
		$("#sfm").submit();
	return;
}
</script>
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="main">2020 대한민국 공익광고제</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
					<form method="post" id="sfm" name="sfm" action="/manager/login_proc">
					<div class="box">
						<div class="content-wrap">
							<h6>Admin Login</h6>
							<input class="form-control" type="text" placeholder="아이디" id="admin_id" name="admin_id">
							<input class="form-control" type="password" placeholder="Password" id="admin_pwd" name="admin_pwd">
							<div class="action">
								<a class="btn btn-primary signup" href="javascript:fcheck_login();">Login</a>
							</div>                
						</div>
					</div>
					</form>
                <!--
			        <div class="already">
			            <p>Don't have an account yet?</p>
			            <a href="signup">Sign Up</a>
			        </div> -->
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/static/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/js/custom.js"></script>
  </body>
</html>