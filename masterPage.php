<?php
  class masterPage {

    function obtenerScriptsCabecera(){
      $scripts = "<link href='assets/css/bootstrap.min.css' rel='stylesheet'>";
      $scripts .= "<link rel='stylesheet' href='https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css'>";
      return $scripts;
    }

    function obtenerScriptsPie(){
      $scripts = "<script src='https://code.jquery.com/jquery-2.2.4.min.js' integrity='sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=' crossorigin='anonymous'></script>";
      $scripts .= "<script type='text/javascript' src='https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js'></script>";
      $scripts .= "<script src='assets/js/bootstrap.min.js' ></script>";
      return $scripts;
    }

    function obtenerNavegacion(){
      $nav = "<nav class='navbar navbar-expand-lg navbar-light bg-light'>";
      $nav .= "<a class='navbar-brand' href='index.php'>Php</a>";
      $nav .= "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>";
      $nav .= "<span class='navbar-toggler-icon'></span>";
      $nav .= "</button>";
      $nav .= "<div class='collapse navbar-collapse' id='navbarSupportedContent'>";
      $nav .= "<ul class='navbar-nav mr-auto'>";
      $nav .= "<li class='nav-item active'>";
      $nav .= "<a class='nav-link' href='index.php'>Inicio <span class='sr-only'>(current)</span></a>";
      $nav .= "</li>";
      $nav .= "<li class='nav-item'>";
      $nav .= "<a class='nav-link' href='servicios.php'>Servicios</a>";
      $nav .= "</li>";
      $nav .= "<li class='nav-item'>";
      $nav .= "<a class='nav-link' href='mascotas.php'>Mascotas</a>";
      $nav .= "</li>";
      $nav .= "</ul>";
      $nav .= "</div>";
      $nav .= "</nav>";
      return $nav;
    }
  }

?>
