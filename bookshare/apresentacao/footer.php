<?php
  function display_footer(){
    echo "
    <footer id='footer'>
      <p>&copy; Filipa Coelho Nunes & José Pedro Vieira Gomes - 2017</p>
      <div id='notification-container' class='notification-container'></div>
    </footer>
    ";
    if(isset($conn)) {
      pg_close($conn);
    }
}
?>
