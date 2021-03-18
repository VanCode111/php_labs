<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laba 3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
  <div class="place">
    <div class="text-out">
      <?php 
        if (!isset($_GET['store'])){
          $_GET['store'] = '';
        }
        if (isset($_GET['key'])) {
            $_GET['store'] .= $_GET['key'];
        }
       echo $_GET['store'];
      ?>
    </div>
    <a class="button" href="/?key=1&store=<?php echo $_GET['store'];?>">1</a>
    <a class="button" href="/?key=2&store=<?php echo $_GET['store'];?>">2</a>   
    <a class="button" href="/?key=3&store=<?php echo $_GET['store'];?>">3</a>   
    <a class="button" href="/?key=4&store=<?php echo $_GET['store'];?>">4</a>  
    <a class="button" href="/?key=5&store=<?php echo $_GET['store'];?>">5</a>  
    <a class="button" href="/?key=6&store=<?php echo $_GET['store'];?>">6</a>  
    <a class="button" href="/?key=7&store=<?php echo $_GET['store'];?>">7</a>   
    <a class="button" href="/?key=8&store=<?php echo $_GET['store'];?>">8</a>   
    <a class="button" href="/?key=9&store=<?php echo $_GET['store'];?>">9</a>   
    <a class="button" href="/?key=0&store=<?php echo $_GET['store'];?>">0</a> 
    <a class="button reset" href="/?key=&store=">СБРОС</a>
  </div>
  </div>
</body>
</html>