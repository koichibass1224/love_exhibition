<?php
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>kanri_news</title>
    <!-- css libraries-->
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="login.css"/>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@900&display=swap');
    body {
        max-width:1200px;
        margin:0 auto;
        font-family: 'Zen Old Mincho', serif;
        /* color: #eaeaea; */
        }
     </style>
</head>

<body>
  <div class="container login-container">
    <div class="row">

      <div class="col-md-12 login-form" style="margin-top:10%;">
        <div class="profile-img">
          <!-- <img src="../img/login_icon.jpg" alt="profile_img" height="140px" width="140px;"> -->
        </div>
        <h3>Login</h3>

				<form name="form1" action="login_act.php" method="post">

          <div class="form-group">
            <input type="text" class="form-control" name="lid" id="lid" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lpw" id="lpw" placeholder="Password">
          </div>
          <div class="form-group">
            <button type="submit"  id="login"  class="btn btn-primary btn-lg btn-block">Sign In</button>
          </div>
          <!-- <div class="form-group forget-password">
              <a href="#">Forget Password</a>
          </div> -->
        </form>
      </div>
    </div>
  </div>

</body>

</html>