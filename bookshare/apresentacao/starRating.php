<?php
function starRating($name) {
  echo'
<fieldset class="rating">
    <input type="radio" id="star5" name="$name" value="5" /><label class = "full" for="star5" ></label>
    <input type="radio" id="star4" name="$name" value="4" /><label class = "full" for="star4" ></label>
    <input type="radio" id="star3" name="$name" value="3" /><label class = "full" for="star3"></label>
    <input type="radio" id="star2" name="$name" value="2" /><label class = "full" for="star2" ></label>
    <input type="radio" id="star1" name="$name" value="1" /><label class = "full" for="star1"></label>
</fieldset>';
}
 ?>
