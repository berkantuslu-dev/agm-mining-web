<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AGM Mining</title>
    <link rel="shortcut icon" href="./pics/logo.ico" type="image/x-icon">
  <style>
  .responsive-iframe-container {
    position: relative;
    width: 100%;
    height: 130vh; /* Masaüstünde büyük görünmesini sağlar */
    padding-top: 40px;
    
   
  }

  @media (max-width: 768px) {
    .responsive-iframe-container {
      height: 100vh; /* Mobilde tam ekran */
    }
  }

  .responsive-iframe-container iframe {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    border: none;
  }
</style>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="responsive-iframe-container">
  <iframe src="https://online.fliphtml5.com/yoilc/nrgn/"
          seamless="seamless" scrolling="no" frameborder="0" 
          allowtransparency="true" allowfullscreen="true">
  </iframe>
</div>

  <?php include 'footer.php'; ?>
</body>
</html>
