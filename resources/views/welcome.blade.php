<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GemeenteAmsterdam BMV</title>
    <script
      src="https://kit.fontawesome.com/cb4527b064.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Poppins:ital,wght@0,300;0,400;0,500;0,800;1,300;1,400;1,500&family=Roboto&display=swap" rel="stylesheet">

   @vite(['resources/css/style.css'])
  </head>
  <body id="app">
    <section class="home">
      <header class="header">
        <div class="header__logowrapper">
          <figure class="header__logo">
            <img src="img/gemeente.png" alt="" class="header__logoimg" />
          </figure>
        </div>
        <ul class="header__ul">
       
          <li class="header__li">
            <a href="index.html" class="header__link">Home</a>
          </li>
          <li class="header__li">
            <a href="src/organisatie.html" class="header__link">Organisatie</a>
          </li>
          <li class="header__li">
            <a href="{{route('projecten')}}" class="header__link">Opdrachten en Projecten</a>
          </li>
          <li class="header__li">
            <a href="src/werkenbij.html" class="header__link">Werken bij</a>
          </li>
        </ul>
      </header>
      <div class="home__wrapperText home__wrapperText--home">
        <h2 class="home__h2 ">Wij bouwen met </h2>
        <h3  class="home__h3">Passie</h3>
      </div>
      <figure class="home__buttonWrapper">
        <a class="home__arrowLink" href="#about"
          ><button class="home__arrowButton">
            <i class="home__arrowI fa-solid fa-arrow-down"></i></button
        ></a>
      </figure>
    </section>
    <section id="about" class="about">
      <h2 class="about__h2">
        Bouwmanagement en Maatschappelijk Vastgoed
      </h2>
      <figure class="about__imgFigure">
        <img src="img/about.jpg" alt="" class="about__img" />
      </figure>
      <h2 class="about__h2">Bijdragen aan een toekomstbestendige stad</h2>
      <p class="about__text">
        Een sociaal-duurzaam Amsterdam Voor veel mensen is en blijft Amsterdam
        een zeer aantrekkelijke plek om te wonen en dus blijven we bouwen aan de
        groei van de stad.
      </p>
      <p class="about__text">
        Maar Amsterdam bestaat natuurlijk uit méér dan alleen woningen. Daarom
        bouwen we aan een sociaal-duurzaam Amsterdam: een stad die het welzijn
        van haar bewoners belangrijk vindt en verbetert, door niet alleen
        woningen te bouwen maar ook te zorgen voor maatschappelijke
        voorzieningen, voor huidige bewoners en toekomstige generaties.
      </p>
      <figure class="about__imgFigure2">
        <img src="img/about2.jpg" alt="" class="about__img" />
      </figure>
    </section>
    <section class="nextPage">
      <article class="nextPage__card">
        <h2 class="nextPage__h2">Organisatie</h2>
        <figure class="nextPage__figureImg">
          <img src="img/organisatie.jpg" alt="" class="nextPage__img" />
        </figure>
        <p class="nextPage__p">
          De BMV van de Gemeente Amsterdam is de spil van gemeenschapsdiensten.
          Wij streven ernaar een inclusieve omgeving te bieden, met diensten
          variërend van onderwijs tot zorg en cultuur. Samen bouwen we aan een
          welvarende en verbonden gemeenschap.
        </p>
        <figure class="nextPage__buttonWrapper">
          <a class="nextPage__arrowLink" href="src/organisatie.html"
            ><button class="nextPage__arrowButton">
              <i class="nextPage__arrowI fa-solid fa-arrow-right"></i></button
          ></a>
        </figure>
      </article>
      <article class="nextPage__card">
        <h2 class="nextPage__h2">Projecten</h2>
        <figure class="nextPage__figureImg">
          <img src="img/projecten.jpg" alt="" class="nextPage__img" />
        </figure>
        <p class="nextPage__p">
          Ontdek de innovatieve projecten van de BMV Gemeente Amsterdam. Van
          duurzaamheid tot sociale betrokkenheid, onze projecten zijn gericht op
          het verbeteren van het dagelijks leven in de stad. Samen werken we aan
          een betere toekomst voor alle inwoners.
        </p>
        <figure class="nextPage__buttonWrapper">
          <a class="nextPage__arrowLink" href="src/projecten.html"
            ><button class="nextPage__arrowButton">
              <i class="nextPage__arrowI fa-solid fa-arrow-right"></i></button
          ></a>
        </figure>
      </article>
      <article class="nextPage__card">
        <h2 class="nextPage__h2">Werken bij</h2>
        <figure class="nextPage__figureImg">
          <img src="img/werkenbij.jpg" alt="" class="nextPage__img" />
        </figure>
        <p class="nextPage__p">
          Maak deel uit van de BMV Gemeente Amsterdam en draag bij aan het
          vormgeven van onze gemeenschap. Ontdek boeiende carrièremogelijkheden
          in een inclusieve omgeving. Samen creëren we een betere plek om te
          wonen en te werken.
        </p>
        <figure class="nextPage__buttonWrapper">
          <a class="nextPage__arrowLink" href="src/werkenbij.html"
            ><button class="nextPage__arrowButton">
              <i class="nextPage__arrowI fa-solid fa-arrow-right"></i></button
          ></a>
        </figure>
      </article>
    </section>

    <footer class="footer">
      <ul class="footer__ul">
        <li class="footer__li">
          <h2 class="footer__h2">Mail</h2>
          <p class="footer__p">PMB is bereikbaar op werkdagen tussen 8.30 - 17.30 uur.</p>
          <a href="https://www.amsterdam.nl/pmb/contact/" target="_blank" class="footer__link">Contact</a>
        </li>
        <li class="footer__li">
          <h2 class="footer__h2">Volg het ProjectManagement Bureau</h2>
          <div class="footer__linkWrapper">
            <a href="https://twitter.com/PMB020" target="_blank" class="footer__link"><i class=" footer__icon fa-brands fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/projectmanagement-bureau" target="_blank" class="footer__link"><i class=" footer__icon fa-brands fa-linkedin"></i></a>
          </div>
    
        </li>
        <li class="footer__li">
          <h2 class="footer__h2">Over deze website</h2>
          <div class="footer__linkWrapper footer__linkWrapper--letter">
            <a href="https://www.amsterdam.nl/pmb/algemene-onderdelen/colofon/" target="_blank" class="footer__link">Colofon</a>
            <a href="https://www.amsterdam.nl/pmb/algemene-onderdelen/proclaimer-copyright/" target="_blank" class="footer__link">Proclaimer en Copyright</a>
            <a href="https://www.amsterdam.nl/pmb/algemene-onderdelen/sitemap/" target="_blank" class="footer__link">Sitemap</a>
          </div>
        </li>
        <li class="footer__li">
          <h2 class="footer__h2">Amsterdam.nl</h2>
          <p class="footer__p">Nieuws en publieksinformatie van de gemeente Amsterdam vindt u op amsterdam.nl</p>
          <a href="https://www.amsterdam.nl/" target="_blank" class="footer__link">Naar amsterdam.nl</a>
        </li>
      </ul>
    </footer>
  </body>
</html>
