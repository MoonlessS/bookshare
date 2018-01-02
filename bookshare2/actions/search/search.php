<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/search.php');
?>


<?php
 if(isset($_GET['book'])){
   $book = htmlentities($_GET['book']);
   $book = ucwords(strtolower($book));

   $_SESSION['searched'] = search_book($book);
   $_SESSION['search'] = 'book';

   header("Location: $BASE_PAGES/pages/search/results.php");
   exit;
 }
 elseif(isset($_GET['chapter'])){
   $chapter = htmlentities($_GET['chapter']);
   $chapter = ucwords(strtolower($chapter));

   $_SESSION['searched'] = search_chapter($chapter);
   $_SESSION['search'] = 'chapter';

   header("Location: $BASE_PAGES/pages/search/results.php");
   exit;
 }
 elseif(isset($_GET['user'])){
   $user = htmlentities($_GET['user']);
   $user = (strtolower($user));

   $_SESSION['searched'] = search_user($user);
   $_SESSION['search'] = 'user';

   header("Location: $BASE_PAGES/pages/search/results.php");
   exit;
 }
 elseif(isset($_GET['general_search'])){
   $search_input = htmlentities($_GET['general_search']);
   $search_user = (strtolower($search_input));
   $search_input = ucwords(strtolower($search_input));

   $_SESSION['searched_book'] = search_book($search_input);
   $_SESSION['searched_chapter'] = search_chapter($search_input);
   $_SESSION['searched_user'] = search_user($search_user);
   $_SESSION['search'] = 'general';

   header("Location: $BASE_PAGES/pages/search/results.php");
   exit;
 }
?>
