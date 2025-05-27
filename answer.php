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
      </br>
      <?php
      $TAX_RATE = 0.13;

      // Price of scoops
      $ONE_SCOOP = 1.0;
      $TWO_SCOOP = 1.5;

      // Constants for chocolate prices
      $VANILLA_PRICE = 0;
      $CHOCOLATE_PRICE = 0.5;
      $COOKIE_PRICE = 1;
      $DIPPED_PRICE = 1.5;

      $scoops = $_GET['scoops'];
      $flavor = $_GET['flavor'];

      $costOfScoops = 0;
      $costOfFlavor = 0;

      // Processes
      if ($scoops === "onescoop") {
        $costOfScoops = $ONE_SCOOP;
      } else {
        $costOfScoops = $TWO_SCOOP;
      }

      if ($flavor === "vanilla") {
        $costOfFlavor = $VANILLA_PRICE;
      } else if ($flavor === "choco") {
        $costOfFlavor = $CHOCOLATE_PRICE;
      } else if ($flavor === "cookie") {
        $costOfFlavor = $COOKIE_PRICE;
      } else {
        $costOfFlavor = $DIPPED_PRICE;
      }

      // Calculations for cost
      $subtotalCost = $costOfScoops + $costOfFlavor;
      $amountTaxed = $subtotalCost * $TAX_RATE;
      $totalCost = $subtotalCost + $amountTaxed;

      // Order and cost
      echo "Scoops: " . $scoops . " " . "Flavor: " . $flavor . "<br>";
      echo "Subtotal: $" . number_format($subtotalCost, 2) . "<br>";
      echo "Tax: $" . number_format($amountTaxed, 2) . "<br>";
      echo "Total: $" . number_format($totalCost, 2) . "<br>";
      ?>
    </main>
  </div>
</body>

</html>