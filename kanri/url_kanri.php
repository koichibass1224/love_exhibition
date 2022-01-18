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

$db_name = '../db/url.db';
$view="";

try {
  $db = new SQLite3($db_name);
} catch (Exception $e) {
  print 'DB接続エラー。<br>';
  print $e->getTraceAsString();
}

$results = $db->query("SELECT * FROM url_table
");


while ($res= $results->fetchArray(1))
{
$view =  $res["ad1"];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>url_kanri</title>
    <!-- css libraries-->
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>

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
<div id="" class="col-12 mt-5">

    <p>表示のURL : <?=$view?></p>

    <form name="form1" action="url_upload.php" method="post">
        <input type="text" class="form-control p-3" name="ad1" id="" placeholder="URL">
        <button type="submit"  id="login"  class="mt-5 btn btn-primary btn-lg">Input</button>

    </form>

</div>
</body>

</html>