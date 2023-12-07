<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GemeenteAmsterdam BMV</title>
        <script src="https://kit.fontawesome.com/cb4527b064.js" crossorigin="anonymous"></script>
    

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="/dist/app.css" rel="stylesheet" />
    </head>
    <body>
    <section class="home">
      <header class="header">
        <ul class="header__ul">
          <div class="header__logowrapper">
            <figure class="header__logo">
              <img src="img/gemeente.png" alt="" class="header__logoimg" />
            </figure>
          </div>
          <li class="header__li"> <a href="" class="header__link">Organisatie</a></li>
          <li class="header__li"> <a href="" class="header__link">Projecten</a></li>
          <li class="header__li"> <a href="" class="header__link">Werken bij</a></li>
        </ul>
      </header>
      <div class="home__wrapperText">
        <h2 class="home__h2">Wij bouwen met passie</h2>
        <h3 class="home__h3">Creatief, deskundig en betrouwbaar</h3>
      </div>
      <figure class="home__buttonWrapper">
        <a class="home__arrowLink" href=""
          ><button class="home__arrowButton">
            <i class=" home__arrowI fa-solid fa-arrow-down"></i>
           </button
        ></a>
          </figure>
    </section>
    </body>
</html>
