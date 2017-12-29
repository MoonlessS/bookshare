{include file='common/header.tpl'}

<section id="tweets">
  <h2>Tweets</h2>

  {foreach $tweets as $tweet}

  <article class="tweet-data">
    <span class="realname">{$tweet.realname}</span>
    <a href="{$BASE_URL}pages/tweets/list_user.php?username={$tweet.username}" class="username">@{$tweet.username}</a>

    <span class="time">{$tweet.time}</span>
    <div class="tweet-text">{$tweet.text}</div>
  </article>

  {/foreach}

</section>

{include file='common/footer.tpl'}
