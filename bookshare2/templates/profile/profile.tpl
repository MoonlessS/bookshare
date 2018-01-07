<script type='text/javascript'>
    document.querySelector('article.main').style.width = '70%';
</script>

<div class='user-container'>
		<div id='title' width=40%><a href='{$BASE_URL}pages/profile/index.php?user={$UserName}'>{$UserName}</a></div>
		{include 'templates/common/starRating.tpl'}
		<div id='stars' width=10%>{call starIndicator nameprop=$UserName value=$UserPopularity }</div>

    {if $Edit == true}
    <div class="float-right button library-icon-container">
      <a href='{$BASE_URL}pages/profile/index.php?user={$UserName}&options=edit'>
        <span style="display:inherit">
          <i id="library-icon" class="big-logo pencil"></i>
        </span>
      </a>
    </div>
    {/if}
</div>

<div>
	<div class='float border' style='width:250px;max-height:350px;margin-left: 20px;'>
		<img src='{$UserAvatar}' alt='img/avatar.png'>
	</div>
	<div class='float' style='min-width: 70%;width:calc(100% - 250px - 20px)'>
		<div class='green title' style='margin-right:50%;'>Description</div>
		<div class='green description' style='min-height:250px;'>
			<p>{$UserDescription}</p><br><br>
      {if !($Edit == true)}
			<div class='title black' style='position:relative;right:1%;bottom:1%;display:inline-block;'><p>Rate this user:<p>
			{call starRating nameprop=$UserId type='userid' value=$UserPopularity}
      {/if}
			</div>
		</div>
	</div>
</div>

{if $BookWritten != null}
<div class='float' style=' clear:left; width:100%;'>
	<div class='purple title' style=' margin-right:50%;'>Books Written:</div>
	<div class='purple2 description'>
		<table>
			<tbody>
				{foreach $BookWritten as $book}
				<tr>
					<td><a href='{$BASE_URL}pages/book-list/?title={$book.title}'>{$book.title}</a></td>
					<td>{call starIndicator nameprop=$book.title value=$book.popularity }</td>
				</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>
{/if}
