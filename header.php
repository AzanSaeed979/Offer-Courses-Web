<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduLerns Header</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>

  <header>
    <div class="header-left">
      <img src="images/academics.jpeg" alt="logo" width="55" height="55" />
      <h1><span>Edu</span>Lerns</h1>

    </div>

    <div class="hamburger" id="hamburger">
      <i class="fas fa-bars"></i>
    </div>
    
    <nav class="nav-bar">
      <ul class="menu">
        <li class="menu-item">
          <a href="#">Home</a>
          <ul class="submenu">
            <li><a href="#">Home Page 01</a></li>
            <li><a href="#">Home Page 02</a></li>
          </ul>

        </li>

        <li class="menu-item">
          <a href="#">Dark</a>
          <ul class="submenu">
            <li><a href="#">Home Dark 1</a></li>
            <li><a href="#">Home Dark 2</a></li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#">Header Styles</a>
          <ul class="submenu">
            <li><a href="#">Style 1</a></li>
            <li><a href="#">Style 2</a></li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#">Courses</a>
          <ul class="submenu">
            <li><a href="#">Course List</a></li>
            <li><a href="#">Course Detail</a></li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#">Shop</a>
          <ul class="submenu">
            <li><a href="#">Product</a></li>
            <li><a href="#">Sidebar</a></li>
            <li><a href="#">Detail</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#">Checkout</a></li>
          </ul>
        </li>

        <li class="menu-item"><a href="#">Pricing</a></li>
        <li class="menu-item"><a href="#">FAQ</a></li>
      </ul>

      <div class="icons" id="icon">
        <i class="fas fa-search" id="search"></i>
        <i class="fas fa-shopping-cart"></i>
        <button>Buy Now</button>
      </div>
      <div id="showsearchbar"></div>
    </nav>
  </header>

  <script src="index.js"></script>
</body>

</html>