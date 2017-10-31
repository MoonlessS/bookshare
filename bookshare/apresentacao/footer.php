<?php
  function display_footer(){
    echo "
    <footer>
      <p>&copy; José Pedro Vieira Gomes - 2017</p>
    </footer>
    ";

    if(isset($conn)) {
      pg_close($conn);
    }
}
?>
