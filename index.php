<!DOCTYPE html>

<?php
include_once("connect.php");
session_start();
?>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css" />
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 450px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }

      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php?page=home">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if (!isset($_SESSION["user"])) {

          ?>

            <li><a href="index.php?page=login">
                <span class="glyphicon glyphicon-log-in">
                </span> Login</a></li>

            <li><a href="index.php?page=signup">
                <span class="glyphicon glyphicon-plus">
                </span> SignUp</a></li>
          <?php  } else {
          ?>
            <li><a href="#">Xin chào, <?php echo $_SESSION["user"] ?> </a></li>
            <li><a href="index.php?page=logout">
                <span class="glyphicon glyphicon-log-out"> Logout
                </span></a></li>
          <?php  } ?>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <p><a href="index.php?page=loaihang">Cập Nhật Loại hàng</a></p>
        <p><a href="index.php?page=hanghoa">Cập Nhật Hàng Hóa</a></p>
        <p><a href="#">Link</a></p>
      </div>
      <div class="col-sm-8 text-left">

        <!-- Noi dung -->
        <?php
        $page = "home";
        if (isset($_GET["page"]))
          $page = $_GET["page"];
        if ($page == "home")
          include_once("home.php");
        if ($page == "login")
          include_once("login.php");
        if ($page == "logout")
          include_once("logout.php");
        if ($page == "signup")
          include_once("signup.php");
        if($page == "loaihang")
            include_once("loaihang.php");
        if($page == "themmoiloaihang")
            include_once("themmoiloaihang.php");
        if($page == "sualoaihang")
            include_once("sualoaihang.php");
        // if($page == "xoaloaihang")
        //     include_once("xoaloaihang.php");
        if($page == "hanghoa")
            include_once("hanghoa.php");
        ?>

      </div>
      <div class="col-sm-2 sidenav">
        <div class="well">
          <p>ADS</p>
        </div>
        <div class="well">
          <p>ADS</p>
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>Footer Text</p>
  </footer>

</body>

</html>