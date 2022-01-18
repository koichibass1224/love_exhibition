<?php
$id = $_GET["id"];

$db_name = '../db/myapp.db';
$view="";
$limit = 3;

try {
  $db = new SQLite3($db_name);
} catch (Exception $e) {
  print 'DB接続エラー。<br>';
  print $e->getTraceAsString();
}

$images ="";

$results = $db->query("SELECT * FROM image_table 
WHERE number = $id
");
while ($res= $results->fetchArray(1))
{
    $images =$res["images"];
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="New life Falmily Church _ Christmas event 2021/December">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/image/logo_b.png">

    <!-- Fonts
    ============================================= -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,700,900%7CRuthie%7CAbril+Fatface' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!-- Hannari -->
    <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
    <!-- M plus -->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

    <!-- Stylesheets
    ============================================= -->
    <link href="../assets/css/external.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-dark.css" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="../assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="../assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="../assets/revolution/css/navigation.css">

    <!-- Document Title
    ============================================= -->
    <title>New life Falmily Church _ Christmas event 2021/December</title>
</head>

<body class="body-dark">
  <div class="preloader">
  <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
  </div>
</div>


  <header id="navbar-spy" class="header header-3 header-transparent header-fixed">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse-2">
                <ul class="nav navbar-nav nav-pos-right navbar-left">

                    <li class="has-dropdown mega-dropdown active">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">home</a>
                    </li>
                </ul>
            </div>

        <div class="navbar-header">
            <a class="logo" href="calender_dec_kanri.php">
              <img class="logo-light" style="width:5em" src="../assets/image/logo_w.png"  draggable="false">
              <img class="logo-dark" style="width:5em"src="../assets/image/logo_b.png"  draggable="false">
            </a>
        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container end  -->
  </nav>
</header>


<div id="wrapper" class="wrapper clearfix">

</div>



<!-- Blog Single Right Sidebar
============================================= -->
<section id="blog" class="blog blog-single">
    <div class="container">
        <div class="row">
            <div class="upload mt-4">
            <p style="font-weight:bold;">”ファイルを選択”から、画像アップロードできます。</br></p>
            <img style="width:80%;" src="../upload/<?=$images?>" alt="entry image"/>
                <form method="post" action="fileupload.php" enctype="multipart/form-data">
                    <input class="" type="file" name="upfile" accept="image/*">
                    <input style="display:none" name="ad1" type="text" value=<?=$id?>>
                    <!-- <input style="" name="ad1" type="text" value=<?=$id?>> -->
                    <input class="btn btn-primary btn-sm" type="submit" value="投稿！！">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- #blog end -->


<!-- footer -->
<footer id="footer" class="footer footer-8 text-center">
  <!-- Copyrights
============================================= -->
  <div class="footer--copyright text-center">
      <div class="divider--shape-dark2"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="text-align: center;">
                  <span>&copy; 2021 New Life Family Church </span>All Copyrights
              </div>
          </div>
      </div>
      <!-- .container end -->
  </div>
  <!-- .footer-copyright end -->
</footer>

<!-- Footer Scripts
============================================= -->
<script src="../assets/js/jquery-2.2.4.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/functions.js"></script>
<!-- RS5.0 Core JS Files -->
<script src="../assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="../assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- RS Configration JS Files -->
<script src="../assets/js/rsconfig.js"></script>

<!-- lottie animation -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>
