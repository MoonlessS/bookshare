  <a class='dropbtn' onclick='javascript:showLogin(this)' style='word-break: break-all;'>
    <div style='' class='avatar'><img src='css/img/avatar.png'></div>
    <div class='username-box'>{$username}</div>
  </a>
  <div class='space-box'>
    <div class='arrow-up'></div>
  </div>
  <div class='dropdown-content'>
{if $pageType == 'book' }
    <button class='button button2' style='/*vertical-align:middle*/' onclick='toggleBookOnLibrary({$bookID});'>
      <i id='library-status-icon' class='logo {if $onLibrary }"remove"{else}"addition"{/if}'></i>
      <p> {if $onLibrary }"Remove Book From Library"{else}"Add Book to Library"{/if}</p>
    </button>
{/if}
    <a href='library/' class='button button2' style='/*vertical-align:middle*/'>
  <i class='logo library'></i>
  <p>Library</p>
  </a>
    <button class='button button2' style='/*vertical-align:middle*/' onclick=toggleVisibility( 'book-edition-submenu')>
  <i class='logo pencil'></i>
  <p>Book Edition</p>
  </button>
    <div id='book-edition-submenu' class='submenu' style='/*vertical-align:middle;*/display:none'>

{if $userBooks} {foreach $userBooks as $row}
      <a href="pages/book-list/?title={$row.title}&options=edit" id="book{$row@index}-edit-button" class='button button2 purple' style='/*vertical-align:middle;display:none*/'>
        <i class='logo pencil'></i>
        <p>{$row.title}</p>
      </a>
{/foreach}
{/if}
      <a href='pages/start-new-book/' id='start-book-button' class='button button2' style='/*vertical-align:middle;display:none*/'>
        <i class='logo addition'></i>
        <p>Start New Book</p>
      </a>
    </div>
    <a href='{$BASE_URL}pages/profile?user={$username}' class='button button2' style='/*vertical-align:middle*/'>
      <i class='logo profile'></i>
      <p>My Profile</p>
    </a>
    <form class='log-out' action='javascript:logoutUser(this);' method='post' autocomplete='on'>
      <input type='hidden' id='username' name='username' value="{$username}">
      <button class='button button1' style='/*vertical-align:middle*/' onclick='this.form.submit()' name='logout'>
        <i class='logo logout-black'></i>
        <p>LOGOUT</p>
      </button>
    </form>
  </div>
  <script>
    resizeNav(true);
  </script>
  </li>
