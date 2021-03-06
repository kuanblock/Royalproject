
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Controlpanel Royalproject</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <style >
    body {
  padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}

.img-center {
margin: 0 auto;
}

footer {
  margin: 50px 0;
}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Royalproject backend</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <a href="../controller/logout.php" onclick="return confirm('กรุณายืนยันอีกครั้ง !!!')" class="btn btn-danger" style="margin-top:10px;">ออกจากระบบ</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">โครงการหลวง Royalproject
                    <small>backend ControlPanal</small>
                </h1>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">สวัสดี คุณ <?php  echo $_SESSION['userName']; ?> เมนูจัดการ </h2>
            </div>
            <div class="col-lg-3 col-sm-3 text-center ">
              <a href="projectmanager.php" class="btn btn-default">
                <i class="fa fa-pencil-square-o fa-5x"></i>
                  <h3>จัดการโครงการหลวง
                  </h3>

                  <p>เพิ่ม แก้ไข ลบ โครงการ</p>
              </a>

            </div>
            <div class="col-lg-3 col-sm-3 text-center ">
              <a href="#" class="btn btn-default">
                <i class="fa fa-home fa-5x"></i>
                  <h3>จัดการที่พัก
                  </h3>

                  <p>เพิ่ม แก้ไข ลบ ที่พัก</p>
              </a>

            </div>
            <div class="col-lg-3 col-sm-3 text-center ">
              <a href="#" class="btn btn-default">
                <i class="fa fa-shopping-cart fa-5x"></i>
                  <h3>จัดการร้านค้า
                  </h3>

                  <p>เพิ่ม แก้ไข ลบ ร้านค้า</p>
              </a>

            </div>
            <div class="col-lg-3 col-sm-3 text-center ">
              <a href="#" class="btn btn-default">
                <i class="fa fa-user fa-5x"></i>
                  <h3>จัดการผู้ดูแลระบบ
                  </h3>

                  <p>เพิ่ม แก้ไข ลบ ผู้ดูแลระบบ</p>
              </a>

            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
