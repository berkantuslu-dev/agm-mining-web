<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dropdown Menu with Search Box | CodingNepal</title>
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
      <div class="logo"><a href="index.php"><img src="./pics/logo.png" alt=""></a></div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li>
            <a href="about.php" class="desktop-link">Institutional</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Institutional</label>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="founders.php">Founder</a></li>
              <li><a href="services.php">Services</a></li>
            </ul>
          </li>
          <li><a href="investment.php">Invesment&Partnership</a></li>
          <li><a href="catalog.php">Catalog</a></li>
          <li><a href="galery.php">Galery</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a style="font-size: 12px;" href="anasayfa.php">Türkçe</a></li>
        </ul>
      </div>
    </nav>
  </div>



</body>
</html>