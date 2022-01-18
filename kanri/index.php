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

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>kanri_news</title>
    <!-- css libraries-->
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <!-- style -->
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/style2.css"/>
    <link rel="stylesheet" href="../css/text.css"/>

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

<body>
    
<h1>管理ページ</h1></br>
<a href="news_kanri.php">ニュース管理</a></br>
<a href="url_kanri.php">URL管理</a></br>
<a href="">アーティスト管理</a></br>
<a href=""></a></br>
<a href=""></a></br>
</br></br>
<a href="../login/logout.php">ログアウト</a>

</body>
</html>