<?php
function starRating($name,$type,$value = 3) {
  echo'
<fieldset title="'.$value.' stars" class="rating">
    <input type="radio" id="'.$name.'star5" onclick="submitRating('.$name.',\''.$type.'\','.'5'.')"' . (($value >= 4.5) ?'checked=""':"") . 'name="'.$name.'" value="5" /><label class = "full" for="'.$name.'star5" ></label>
    <input type="radio" id="'.$name.'star4" onclick="submitRating('.$name.',\''.$type.'\','.'4'.')"' . (($value >= 3.5 and $value < 4.5) ?'checked=""':"") . 'name="'.$name.'" value="4" /><label class = "full" for="'.$name.'star4" ></label>
    <input type="radio" id="'.$name.'star3" onclick="submitRating('.$name.',\''.$type.'\','.'3'.')"' . (($value >= 2.5 and $value < 3.5) ?'checked=""':"") . 'name="'.$name.'" value="3" /><label class = "full" for="'.$name.'star3"></label>
    <input type="radio" id="'.$name.'star2" onclick="submitRating('.$name.',\''.$type.'\','.'2'.')"' . (($value >= 1.5 and $value < 2.5) ?'checked=""':"") . 'name="'.$name.'" value="2" /><label class = "full" for="'.$name.'star2" ></label>
    <input type="radio" id="'.$name.'star1" onclick="submitRating('.$name.',\''.$type.'\','.'1'.')"' . (($value >= 0.5 and $value < 1.5) ?'checked=""':"") . 'name="'.$name.'" value="1" /><label class = "full" for="'.$name.'star1"></label>
</fieldset>';
}

function starIndicator($name,$value) {
  echo'
<fieldset class="rating">
    <input type="radio" id="star5" onclick="event.preventDefault();"' . (($value >= 4.5) ?'checked=""':"") . 'name="'.$name.'" value="5" /><label class = "full" for="star5" ></label>
    <input type="radio" id="star4" onclick="event.preventDefault();"' . (($value >= 3.5 and $value < 4.5) ?'checked=""':"") . 'name="'.$name.'" value="4" /><label class = "full" for="star4" ></label>
    <input type="radio" id="star3" onclick="event.preventDefault();"' . (($value >= 2.5 and $value < 3.5) ?'checked=""':"") . 'name="'.$name.'" value="3" /><label class = "full" for="star3"></label>
    <input type="radio" id="star2" onclick="event.preventDefault();"' . (($value >= 1.5 and $value < 2.5) ?'checked=""':"") . 'name="'.$name.'" value="2" /><label class = "full" for="star2" ></label>
    <input type="radio" id="star1" onclick="event.preventDefault();"' . (($value >= 0.5 and $value < 1.5) ?'checked=""':"") . 'name="'.$name.'" value="1" /><label class = "full" for="star1"></label>
</fieldset>';
}
 ?>
