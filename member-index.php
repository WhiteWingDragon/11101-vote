<?php include_once "./api/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星塵搖籃線上投票</title>
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/list-card.css">
    <link rel="stylesheet" href="./css/grass.css">
    <link rel="stylesheet" href="./css/front.css">
</head>
<body>
<div id="header">
    <?php include "./layout/header.php";
          include "./layout/member_center_nav.php";
    ?>
</div>
<div id="container">
<?php
if(isset($_GET['do'])){
    $file='./front/'.$_GET['do'].".php";
}
if(isset($file) && file_exists($file)){
    include $file;
}else{
    include "./front/vote_list.php";
}?>
</div>

<div class="ground">
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-1"></div>
  <div class="blade-2"></div>
  <div class="blade-3"></div>
  <div class="blade-4"></div>
  <div class="blade-2"></div>
  <div class="blade-1"></div>
  <div class="blade-4"></div>
</div>
<div>
<?php include "./layout/footer.php";?>    
</div>
</body>
</html>