<?php
  /**
  * home.php
  * this is the main entry point for our application
  */
  require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo($config_site_title) ?></title>
    <meta name="description" content="<?php echo($config_site_description) ?>">

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bundle.css" rel="stylesheet">

    <?php if ($config_ga_key && !empty($config_ga_key)) { ?>
    <script>
       !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
       (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
       r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
       }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

       ga('create', '<?php echo($config_ga_key) ?>');
       ga('send', 'pageview');
    </script>
    <?php } ?>
</head>
<body>
    <div class="container">
      <?php /** TODO drop it like it's hot here */ ?>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bundle.js"></script>
</body>
</html>
