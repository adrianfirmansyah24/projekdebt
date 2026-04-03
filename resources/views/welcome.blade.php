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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

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

<section class="hero">
  <div class="hero-content">
    <h1>Having troubles on overdue debts or lack enough resources in collecting account receivable?</h1>
    <h2>A Leading Debt Recovery Solution With The Most Practical, Legal and Effective Approach</h2>
    <p>We offer the proven solution & strategy to return your money without burden any financial risk for the Company.</p>
    <div class="highlight">NO SUCCESS NO FEE BASIS</div>
  </div>
</section>


<section class="quote">
  <div class="profile-container">
    <img src="{{ asset('/images/palabotak.png') }}" alt="gambar palabotak">
    <div class="profile-card">
      <h3>Palabotak</h3>
      <p>Founder & CEO</p>
    </div> 
  </div>
  
  <div>
    <div class="top-quote">
      <h2>Debt Recovery Indonesia is a service provided by HADS Partnership Law Office established Since 2005.</h2>
    </div>
    <div class="highlight-quote">
      <p>We consist of talented and experienced professional 
      with a wide range of expertise and experiences.
      Answering the challenges and demand offset by the
      increasing needs and complexities services, we consistently and continuously 
      develop ourself to be the company who provide debt recovery services with practical,
      legal and effective approach for both national and multinational companies. We commit to provide precise solution,
      proven strategy and powerful actions in collecting bad debts and receivable.
      We passionately strive to become your strategic business partner to </p>
    </div>
    <div class="bottom-quote">
      <h2> Maintain Your Cashflow and Protect Your Cash from Bad Customers</h2>
    </div>
  </div>
</section>  
    </body>
</html>
