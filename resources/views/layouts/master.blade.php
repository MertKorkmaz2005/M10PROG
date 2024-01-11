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
    @include('layouts.gemeente.header')

    @yield('content')

    @include('layouts.gemeente.footer')
  </body>
</html>
