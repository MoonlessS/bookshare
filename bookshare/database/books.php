<?php
function addNewBook($title = null,$url = null,$synopsis = null,$genreList = null){
  $authorID = $_SESSION['user']['id'];
  $query = "INSERT INTO book(title,author,start_publish_date,cover,status,synopsis) VALUES ('$title','$authorID',current_date,". (empty($url) ?"DEFAULT" :"'$url'"). ",'On-going','$synopsis')";
  $result = execQuery($query);

  $bookID = getIDfromTitle($title);
  if(count($genreList)>0){
      $query = "INSERT INTO book_genres(book,genre) VALUES ";
      foreach ($genreList as $genre){
        $query .= "($bookID,'$genre'),";
      }
      $query = rtrim($query,',');
    }
    $result = execQuery($query);
}

function getIDfromTitle($title) {
  $title = trim($title);
  $query = "SELECT id FROM bookshare.book where lower(title)=lower('$title')";
  $result = execQuery($query);
  if(!$result) return $result;
    else return pg_fetch_assoc($result)['id'];

}

function getGenreList($bookID = null){
  if(!is_null($bookID)){
    $query = "SELECT genre FROM bookshare.book_genres WHERE book='$bookID'";
  }else {
    $query = 'SELECT genre FROM bookshare.genre';
  }
  $result = execQuery($query);

  return $result;
}

function getBookInfo($bookID){
  $query = "SELECT title, author as authorID, name as author,start_publish_date, end_publish_date, book.popularity, cover, status, synopsis
              FROM bookshare.book
              join bookshare.users on book.author=users.id
              where book.id='$bookID'";
  $result = execQuery($query);
  if(!$result) return $result;
    else return pg_fetch_assoc($result);
}
function getBookInfoByAuthor($username){
  $query = "SELECT title, author as authorID, name as author,start_publish_date, end_publish_date, book.popularity, cover, status, synopsis
              FROM bookshare.book
              join bookshare.users on book.author=users.id
              where name='$username'";
  //"SELECT * FROM bookshare.book where id='$bookID'";
  $result = execQuery($query);
  return $result;
}
?>
