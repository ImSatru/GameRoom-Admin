<?php
require_once __DIR__ . '/../config/conex.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/main.css" />
  <title>Console</title>
</head>

<body>
  <?php
  include 'components/side-bar.php';
  ?>
  <div class="container">
    <div class="container-info">
      <div class="container-info-page-title">
        <h1>Consolas</h1>
      </div>
      <div class="container-info-time">
        <script src="js/hour.js" defer></script>
        <h1 id="page-hour">
        </h1>
      </div>
    </div>
    <div class="container-table">
      <?php
      include 'components/console-table.php';
      ?>
    </div>
  </div>
</body>

</html>