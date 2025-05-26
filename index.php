<!DOCTYPE html>
<!-- ICS2O-Assignment4-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Ice Cream Cone Cost, in JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Lynn Lukose" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Lynn's Ice Cream!, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Lynn's Ice Cream!</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/ice-cream-truck.jpg" alt="icecream" />
      </div>
      <div class="page-content">
        Select the number of scoops and the flavor you'd like!
      </div>
      <div class="page-content">Select which flavor you'd like!'</div>
      <br />
      <form action="answer.php" method="GET">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="onescoop">
          <input type="radio" id="onescoop" class="mdl-radio__button" name="scoops" value="onescoop" checked>
          <span class="mdl-radio__label">One Scoop ($1)</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="twoscoops">
          <input type="radio" id="twoscoops" class="mdl-radio__button" name="scoops" value="twoscoops">
          <span class="mdl-radio__label">Two Scoops ($1.50)</span>
        </label>
        <br />
        <br />
        <div class="page-content">Pick Which flavor you want!</div>
        <br />
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="vanilla">
          <input type="radio" id="vanilla" class="mdl-radio__button" name="flavor" value="vanilla" checked>
          <span class="mdl-radio__label">Vanilla</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="choco">
          <input type="radio" id="choco" class="mdl-radio__button" name="flavor" value="choco">
          <span class="mdl-radio__label">Chocolate ($0.50)</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="cookie">
          <input type="radio" id="cookie" class="mdl-radio__button" name="flavor" value="cookie">
          <span class="mdl-radio__label">Cookies and Cream ($1.00)</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="dipped">
          <input type="radio" id="dipped" class="mdl-radio__button" name="flavor" value="dipped">
          <span class="mdl-radio__label">Chocolate dipped cone ($1.50)</span>
        </label>
        <br />
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="check-button">
          Order!
        </button>
      </div>
    </main>
  </div>
</body>

</html>