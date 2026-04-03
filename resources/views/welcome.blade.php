<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>talentgroup.id</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbz0g5a2QFh6bK9kN8sNQZl+0n5i5e5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5a5             crossorigin="anonymous">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="logo">
         <img src="{{ asset('/images/dbt.png') }}" alt="Logo Debt Recovery Indonesia">
      </div>
  <nav class="menu">
    <ul>
      <li><a href="#">HOME</a></li>
      <li><a href="#">SERVICES</a></li>
      <li><a href="#">FEE</a></li>
      <li><a href="#">CLIENTS</a></li>
      <li><a href="#">VIDEO & ARTICLE</a></li>
      <li><a href="#">CONTACT US</a></li>
    </ul>
  </nav>
  <a href="#" class="btn">Contact us now</a>
</header>
    </body>
</html>
