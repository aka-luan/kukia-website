<header>
  <nav class="container">
    <div class="nav__logo">
      <?php the_custom_logo();
      ?>
    </div>
    <div class="nav__menu">
      <div class="nav__mobile__menu">
        <button type="button" id="open_menu" onclick="kukia.openNav()">
          <i class="fas fa-bars"></i>
        </button>
        <div id="fs_menu">
          <button type="button" id="close_menu" onclick="kukia.closeNav()">
            <i class="fas fa-times fa-lg"></i>
          </button>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <ul class="nav__menu__list">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="nav__contact">
      <ul>
        <li><a href="#"><i class="fab fa-instagram fa-lg"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook fa-lg"></i></a></li>
        <li><a href="#"><i class="fab fa-tiktok fa-lg"></i></a></li>
      </ul>
    </div>
  </nav>
</header><!-- header -->