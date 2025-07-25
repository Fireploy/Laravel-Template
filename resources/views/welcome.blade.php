<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
     <link rel="stylesheet" href="{{ secure_asset('index.css') }}" defer>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div>
      <div class="container" style="width: 1000px; margin-top: -50px;">
        <div id="containerRaysWrapper">
          <div id="containerRays"></div>
        </div>
        <div class="sun"></div>
        <!-- cohete -->
        <div class="iconContainer">
          <img style="width: 70%; height: 70%" class="icon" src="{{ secure_asset('rocket.svg') }}" defer/>
        </div>
        <!-- otros iconos -->
        <div>
          <img class="iconElement" src="{{ secure_asset('braces-asterisk.svg') }}" defer/>
          <img class="iconElement" src="{{ secure_asset('database-fill.svg') }}" defer/>
          <img class="iconElement" src="{{ secure_asset('palette-fill.svg') }}" defer/>
          <img class="iconElement" src="{{ secure_asset('person-vcard-fill.svg') }}" defer/>
        </div>
        <div>
           <svg class="containerLines" height="100%" width="100%">
      <line x1="150" y1="120" x2="300" y2="120" stroke="#1976d2" />
      <line x1="300" y1="120" x2="300" y2="200" stroke="#1976d2" />
      <line x1="300" y1="200" x2="500" y2="200" stroke="#1976d2" />
      <line x1="500" y1="200" x2="700" y2="200" stroke="#1976d2" />
      <line x1="700" y1="200" x2="700" y2="120" stroke="#1976d2" />
      <line x1="700" y1="120" x2="800" y2="120" stroke="#1976d2" />
      <line x1="300" y1="280" x2="500" y2="280" stroke="#1976d2" />
      <line x1="300" y1="280" x2="300" y2="360" stroke="#1976d2" />
      <line x1="300" y1="360" x2="140" y2="360" stroke="#1976d2" />
      <line x1="500" y1="280" x2="700" y2="280" stroke="#1976d2" />
      <line x1="700" y1="280" x2="700" y2="360" stroke="#1976d2" />
      <line x1="700" y1="360" x2="820" y2="360" stroke="#1976d2" />
    </svg>
        </div>
      </div>
      <h1 style="font-size: 48px; text-align: center; font-weight: 500px;">Fireploy App</h1>
      <div style="display: flex; justify-content: center; margin-top: 20px;"><button id="navigation" style="background-color: rgb(25, 118, 210); color: rgb(255, 255, 255); border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-size: 16px;" onclick="window.location.href='{{ url('/last') }}'">Inicia tu viaje en Fireploy</button></div>
    </div>
    <script src="/resources/js/app.js"></script>
  </body>
</html>
