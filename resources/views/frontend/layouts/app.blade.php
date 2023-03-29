<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mooqf</title>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
    />
    <link rel="stylesheet" href="frontend/css/style.css" />
  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="uil uil-arrow-up" style="font-size: 30px"></i>
    </button>
    <header>
      <div class="top-bar">
        <div class="logo-menu">
          <a href="#" ><img class="logo" src="frontend/images/greenblack.png"/></a>
          <a href="#" class="menu-toggle">
            <span><i class="uil uil-phone"></i>APPELEZ-NOUS 06 66 19 22 47</span>
          </a>
        </div>
        <div class="nav-links">
          <div class="lang-menu">
            <span class="fi fi-ma"></span>
            <a href="#"><div class="selected">Arabe</div></a>
            <!-- <i class="uil uil-angle-down" style="font-size: 20px"></i> -->
            <div class="lang-dropdown">
              <a href="#"><span class="fi fi-ma"></span> Arabe</a>
              <a href="#"><span class="fi fi-fr"></span> French</a>
              <a href="#"><span class="fi fi-us"></span> English</a>
            </div>
          </div>
          <div class="links">
            <a href="#" class="borderd"
              ><i class="uil uil-user-plus" style="padding-right: 8px"></i
              >Inscription</a
            >
            <a href="#"
              ><i
                class="uil uil-sign-in-alt"
                style="color: rgb(54, 156, 126) !important; padding-right: 8px"
              ></i
              >Connexion</a
            >
          </div>
        </div>
        <i class="u uil uil-bars"></i>
      </div>
      <div class="bottom-bar">
        <a href="#" class="project"><i class="uil uil-plus-circle"></i> J'ai un projet</a>
        <a href="#" class="devis"><i class="uil uil-telegram-alt first"></i> Devise</a>
        <a href="#" class="conseils"><i class="uil uil-comments second"></i> Conseils</a>
      </div>
    </header>
    @yield('content')
    <footer class="footer">
      <div class="footer-content">
        <div class="left-area">
          <img src="frontend/images/WHITEGREEN.png" alt="logo" class="footer-logo" />
          <ul class="box">
            <li><a href="#">Conditions générales d'utilisation</a></li>
            <li><a href="#">Qui sommes-nous ?</a></li>
            <li><a href="#">Données personnelles</a></li>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">Contactez-nous</a></li>
          </ul>
        </div>
        <div class="contact">
          <ul class="box">
            <li>
              <a href="#"><i class="uil uil-phone-alt"></i> 06778900</a>
            </li>
            <li>
              <a href="#"><i class="uil uil-envelope"></i> Conatct@mooqf.ma</a>
            </li>
            <li>
              <a href="#"
                ><i class="uil uil-location-point"></i> Agadir, Inzegan</a
              >
            </li>
          </ul>
        </div>
        <div>
          <div class="newsletter">
            <h3>Newsletter</h3>
            <form action="">
              <input type="email" placeholder="Votre email" />
              <button type="submit">Envoyer</button>
            </form>
          </div>
          <div class="icons">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-twitter-alt"></i></a>
            <a href="#"><i class="uil uil-instagram"></i></a>
            <a href="#"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </div>
      </div>
      <h3 class="credit">Copyright &copy; 2022 Mooqf.com</h3>
    </footer>
    <script src="frontend/js/script.js"></script>
  </body>
</html>
