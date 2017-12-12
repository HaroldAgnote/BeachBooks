<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cover.css">
  <link rel="stylesheet" href="css/style.css">
  <title>BeachBooks - Welcome</title>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
  <div class="site-wrapper">

    <div class="site-wrapper-inner" style="background-image:url(https://c2.staticflickr.com/6/5320/5885317790_548e064c29_o.jpg);background-size:cover;background-repeat:no-repeat;">

      <div class="cover-container">

        <div class="masthead clearfix">
          <div class="inner">
            <?php include('nav.php'); ?>
          </div>
        </div>

        <div class="inner cover">
          <h1 class="cover-heading">Welcome to<br><img src="images/BeachBooksLogoFINAL.png" alt="BeachBooks" style="width:500px;height:600px;"/></h1>
          <p class="lead">
            <a href="home.php" class="btn btn-lg btn-default outset" style="border-radius:25px;">Start searching</a>
          </p>
          <p class="lead">A website for students to post and exchange their books at reasonable and affordable prices, or even for <strong>free</strong>, amongst themselves.</p>
        </div>

        <div class="mastfoot">
              <ul style="display:inline-block;">
                <li><a href="about.php" style="color:black;">About BeachBooks</a></li>
                <li><a href="privacy.php" style="color:black;">Privacy</a></li>
              </ul>
            <!--<p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>-->
        </div>

      </div>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
