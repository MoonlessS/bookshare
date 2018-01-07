<script type='text/javascript'>
    document.querySelector('article.main').style.width = '70%';
</script>

<div class='user-container'>
		<div id='title' width=40%><a href='{$BASE_URL}pages/profile/index.php?user={$UserName}'>{$UserName}</a></div>
		{include 'templates/common/starRating.tpl'}
		<div id='stars' width=10%>{call starIndicator nameprop=$UserName value=$UserPopularity }</div>

    <div class="float-right library-icon-container">
      <span style="display:inherit">
        <i id="library-icon" class="big-logo pencil"></i>
      </span>
    </div>
</div>

<form method='POST' action='actions/profile/profile.php'>
<div>
	<div class='float border' style='width:250px;max-height:350px;margin-left: 20px;'>
		<img src='{$UserAvatar}' alt='{$BASE_URL}img/avatar.png'>
    <div class='green title' style='margin-right:10px;top:0px;'>New Avatar URL:
      <input type='text' id='url' class='invisible' name='url' placeholder='http://img.pt/img.png' pattern='(file|gopher|news|nntp|telnet|https?|ftps?|sftp)://([a-z0-9-]+\.)+[a-z0-9]{ldelim}0,1000{rdelim}.*' title='URL format not correct!\nhttp://example.com/image.png'>
    </div>
  </div>
	<div class='float' style='min-width: 70%;width:calc(100% - 250px - 20px)'>
		<div class='green title' style='margin-right:50%;'>Description</div>
		<div class='green description' style='min-height:250px;'>
      <textarea id='synopsis' class='invisible' name='synopsis' rows='8' cols='80' placeholder='Take advantage of this space to write about yourself, for instance you can write about the type of books you enjoy or even talk about the books you wrote, if you ever wrote some' pattern='[\w]{ldelim}0,1000{rdelim}.*' title='The synopsis character count should not exceed 1000!'>{$UserDescription}</textarea>
    </div>
	</div>
</div>

<div class='float' style='clear:left;width:100%;' >
  <button type='submit' class='button button2 float-left purple' style='width:50%;/*vertical-align:middle*/' name='edit-book'><i class='logo pencil'></i><p>Update your informations!</p></button>
</div>

</form>
