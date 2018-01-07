<section class='search'>
  <table width='100%'>
    <tr>
      <th>Users Found:</th>
    </tr>
    {foreach $Search as $user}
    <tr>
      <th><a href='{$BASE_URL}pages/profile/?user={$user.name}'>{$user.name}</th>
    </tr>
    {/foreach}
  </table>
</section>
