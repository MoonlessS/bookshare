{function starRating nameprop=prop type=ty value=3 }
  {$value = round($value,1)}
<fieldset title="{$value} stars" class="rating">
    <input title="{$value} stars" type="radio" id="{$nameprop}star5" onclick="submitRating({$nameprop},'{$type}',5)" {if $value >= 4.5} checked="checked" {/if} name="{$nameprop}" value="5" /><label class = "full" for="{$nameprop}star5" ></label>
    <input title="{$value} stars" type="radio" id="{$nameprop}star4" onclick="submitRating({$nameprop},'{$type}', 4 )" {if $value >= 3.5  and $value < 4.5} checked="checked" {/if} name="{$nameprop}" value="4" /><label class = "full" for="{$nameprop}star4" ></label>
    <input title="{$value} stars" type="radio" id="{$nameprop}star3" onclick="submitRating({$nameprop},'{$type}', 3 )" {if $value >= 2.5  and $value < 3.5} checked="checked" {/if} name="{$nameprop}" value="3" /><label class = "full" for="{$nameprop}star3"></label>
    <input title="{$value} stars" type="radio" id="{$nameprop}star2" onclick="submitRating({$nameprop},'{$type}', 2 )" {if $value >= 1.5  and $value < 2.5} checked="checked" {/if} name="{$nameprop}" value="2" /><label class = "full" for="{$nameprop}star2" ></label>
    <input title="{$value} stars" type="radio" id="{$nameprop}star1" onclick="submitRating({$nameprop},'{$type}', 1 )" {if $value >= 0.5  and $value < 1.5} checked="checked" {/if} name="{$nameprop}" value="1" /><label class = "full" for="{$nameprop}star1"></label>
</fieldset>
{/function}

{function starIndicator nameprop=prop value=val }
  {$value = round($value,1)}
<fieldset title="{$value} stars" class="rating">
    <input title="{$value} stars" type="radio" id="star5" onclick="event.preventDefault();" {if $value >= 4.5} checked="checked" {/if}name=" {$nameprop}" value="5" /><label class = "full" for="star5" ></label>
    <input title="{$value} stars" type="radio" id="star4" onclick="event.preventDefault();" {if $value >= 3.5  and $value < 4.5} checked="checked" {/if} name="{$nameprop}" value="4" /><label class = "full" for="star4" ></label>
    <input title="{$value} stars" type="radio" id="star3" onclick="event.preventDefault();" {if $value >= 2.5  and $value < 3.5} checked="checked" {/if} name="{$nameprop}" value="3" /><label class = "full" for="star3"></label>
    <input title="{$value} stars" type="radio" id="star2" onclick="event.preventDefault();" {if $value >= 1.5  and $value < 2.5} checked="checked" {/if} name="{$nameprop}" value="2" /><label class = "full" for="star2" ></label>
    <input title="{$value} stars" type="radio" id="star1" onclick="event.preventDefault();" {if $value >= 0.5  and $value < 1.5} checked="checked" {/if} name="{$nameprop}" value="1" /><label class = "full" for="star1"></label>
</fieldset>
{/function}
