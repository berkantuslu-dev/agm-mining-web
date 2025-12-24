<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="navbar.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="anasayfa.php"><img src="./pics/logo.png" alt=""></a></div>
        <ul class="links">
          <li><a href="anasayfa.php">Ana Sayfa</a></li>
          <li>
            <a href="hakkimizda.php" class="desktop-link">Kurumsal</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Kurumsal</label>
            <ul>
              <li><a href="hakkimizda.php">Hakkımızda</a></li>
              <li><a href="kurucularimiz.php">Kurucumuz</a></li>
              <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
            </ul>
          </li>
          <li><a href="yatirim.php">Yatırım&Ortaklık</a></li>
          <li><a href="katalog.php">Katalog</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="iletisim.php">İletişim</a></li>
          <li><a style="font-size: 12px;" href="index.php">English</a></li>
        </ul>
      </div>
    </nav>
  </div>



</body>
</html>