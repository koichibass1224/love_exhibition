<?php
session_start();
if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
  echo"LOGIN Error";
  exit();
}else{
  session_regenerate_id(true);
  $_SESSION["chk_ssid"] = session_id();
}
?>

<?php

$db_name = '../db/news.db';
$view="";

try {
  $db = new SQLite3($db_name);
} catch (Exception $e) {
  print 'DB接続エラー。<br>';
  print $e->getTraceAsString();
}

$results = $db->query("SELECT * FROM news_table
-- クエリ書く（latest + 3行分？
");


while ($res= $results->fetchArray(1))
{
  // $view .=  $res["id"];
  // $view .= "/日付:";
  // $view .=  $res["ad1"];
  // $view .= "/タイトル:";
  // $view .=  $res["ad2"];
  // $view .= "/コメント:";
  // $view .=  $res["ad3"];

  
  $view ='<div class="row price-head align-items-end pb-5 wow fadeInUp">
  <div class="col-lg-2 main-heading">
      <p class="mb-0">'.$res["ad1"].'</p>
  </div>
  <div class="col-lg-1 divider">
  </div>
  <div class="col-lg-9">
      <ul class="price-list">
          <li class="deal-item">'.$res["ad2"].'</li>
      </ul>
  </div>
</div>
}';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>news_kanri</title>
    <!-- css libraries-->
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/style2.css"/>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@900&display=swap');
    body {
        max-width:1200px;
        margin:10% 10%;
        font-family: 'Zen Old Mincho', serif;
        /* color: #eaeaea; */
        }
     </style>
</head>



<body class="body-dark">

<a class="col-12 logo" href="../login/logout.php">！ログアウト！</a>
<a class="col-12 logo" href="index.php">管理に戻る</a>


<!-- news -->
<section class="text-center price text-lg-left mr-5 ml-5" id="news">
    <div class="container-fluid">
        <div class="row align-items-baseline">
            <div class="col-12 mt-4 mb-4 text-center">
                <h2>NEWS</h2>
            </div>
            <div class="col-lg-1 divider">
            </div>
        </div>

        <div class="row price-head align-items-end pb-5 wow fadeInUp">
            <div class="col-lg-2 main-heading">
                <p class="mb-0">2021.12.24</p>
            </div>
            <div class="col-lg-1 divider">
            </div>
            <div class="col-lg-9">
                <ul class="price-list">
                    <li class="deal-item">てきすとてきすとてきすとてきすとてきすと</li>
                </ul>
            </div>
        </div>

        <?=$view?>
    
    </div>
</section>

<div id="" class="col-12 mt-5">

    <!-- <p>ニュース記事 : </p> -->
    <?=$view?>

    <form name="form1" action="news_upload.php" method="post">
        <input type="text" class="form-control p-3" name="ad1" id="" placeholder="URL">
        <button type="submit"  id="login"  class="mt-5 btn btn-primary btn-lg">Input</button>

    </form>

</div>
</body>

</html>