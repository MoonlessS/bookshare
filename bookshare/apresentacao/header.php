<?php

  function display_header($title = "BookShare - Read Our Amazing Collection Or Write And Share Your Own Books On The Internet"){



    echo "
  <head>
    <meta charset='utf-8'>
  ";
  include_once("base.html");
  echo  "
    <title>{$title}</title>
    <link rel='stylesheet' href='css/master.css'>
    <script src='js/bookshare.js' charset='utf-8'></script>
  </head>
      ";

  }
?>
