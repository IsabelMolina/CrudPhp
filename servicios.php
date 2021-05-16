<?php
  include 'masterPage.php';
  $masterPage = new masterPage();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php - Servicios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php echo $masterPage->obtenerScriptsCabecera(); ?>

  </head>

  <body>

    <?php echo $masterPage->obtenerNavegacion(); ?>

    <div class="container">
        <h1>Servicios</h1>
    </div>

    <?php echo $masterPage->obtenerScriptsPie(); ?>

  </body>
</html>
