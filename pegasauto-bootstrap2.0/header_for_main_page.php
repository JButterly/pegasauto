<?php require_once ("functions.php"); ?>
<!doctype html>
<html>
<head>
    <!-- About -->
    <title><?php echo $Title;?></title>
    <meta property="og:image" content="image/pegas_logo2.png">
    <meta property="og:title" content="<?echo $Title;?>">
    <meta property="og:description" content="Аренда автомобилей в Санкт-Петербурге и ЛО по фиксированной ставке, прокат автомобилей без ограничения по пробегу">
    <meta charset="utf-8">
    <meta name = "description" content = "Аренда автомобилей в Санкт-Петербурге и ЛО по фиксированной ставке, прокат автомобилей без ограничения по пробегу">
    <meta name = "keywords" content = "Аренда автомобилей по суткам,прокат авто, прокат авто спб, Аренда авто, аренда автомобилей спб, аренда автомобилей, аренда авто без пробега, аренда авто дешево, аренда автомобилей Санкт-Петербург, аренда авто без водителя">
    <meta name = "robots" content = "index,follow">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    
    <!-- Connect -->
    <link rel="stylesheet" href="<?php echo $dostup;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $dostup;?>css/Normalize.css">
    <link rel="stylesheet" href="<?php echo $dostup;?>css/build/style.css">
    
    <script src="<?php echo $dostup;?>js/jquery.js"></script>
    <script src="<?php echo $dostup;?>js/functions.js"></script>
    <script src="<?php echo $dostup;?>js/script.js"></script>
    <!-- Icons -->
    <link rel="shortcut icon" href="../image/favicon.png">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter32823132 = new Ya.Metrika({
                        id:32823132,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/32823132" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
</head>
<body>
<header>
    <nav id="header-nav" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="/">
                <img src="image/pegas_logo2.png" alt="Logo image">
            </a>

          <button id="menu-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li><a href="/formalization-taxi/">Работа в такси</a></li>
            <li><a href="/lease">Сдать в аренду</a></li>
            <li><a href="/rent">Аренда с выкупом</a></li>
            <li><a href="/#avtopark">Автопарк</a></li>
            <li><a href="/">Аренда авто</a></li>
            <li id="phone" class="hidden-xs">
              <p class="header-phone-icon"></p>
              <p class="numbers">
              <a href="tel:8(812)9836002">
                <span>8 (812) 983-60-02</span>
              </a>
              <a href="tel:8(812)9836002">
                <span>8 (812) 983-60-08</span>
              </a>
              </p>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->


      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fixed_content.js"></script>
  <script src="js/dropdown_menu.js"></script>
</body>
</html>
