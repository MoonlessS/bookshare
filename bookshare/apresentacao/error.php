<?php
function display_error($error = "Unknown Error ocurred!",$title = "Error!",$color = "red"){
  echo "
  <div class='block title $color'>$title</div>
  <div class='block description $color'>
    <p>$error</p>
  </div>
        ";
}
 ?>
