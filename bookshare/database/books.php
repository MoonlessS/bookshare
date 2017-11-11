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
function rateBook($rate,$book){
  $userID = $_SESSION['user']['id'];

  $query = "DELETE FROM book_usersrate
            WHERE book = '$bookID' and user='$userID'";
  $result = execQuery($query);

  $query = "INSERT INTO book_usersrate(book,users,rate) VALUES ($bookID,$userID,$rate)";
  return $result = execQuery($query);
}

function getUserBookRate($bookID){
  $userID = $_SESSION['user']['id'];
  $query = "SELECT rate FROM book_usersrate WHERE book='$bookID' and users='$userID'";
  if(!($result = execQuery($query))) return false;
  $query = "UPDATE book SET popularity = (SELECT AVG(rate) FROM book_usersrate WHERE book=$bookID) WHERE book=$bookID";
  execQuery($query);
  return pg_fetch_assoc($result)['rate'];
}

function updateBookInfo($title = null,$url = null,$synopsis = null,$genreList = null){
  $authorID = $_SESSION['user']['id'];
  $query = "UPDATE book
            SET
            cover = ". (empty($url) ?"DEFAULT" :"'$url'").",
            synopsis = '$synopsis'
            WHERE title='$title' and author='$authorID'";
  $result1 = execQuery($query);


  if(count($genreList)>0){
    $bookID = getIDfromTitle($title);
    $query = "DELETE FROM book_genres
              WHERE book = '$bookID'";
    $result = execQuery($query);

    $query = "INSERT INTO book_genres(book,genre) VALUES ";
    foreach ($genreList as $genre){
      $query .= "($bookID,'$genre'),";
    }
    $query = rtrim($query,',');
    $result2 = execQuery($query);
  }
  return ($result1 and $result2);
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
  $query = "SELECT book.id as id, title, author as authorID, name as author,start_publish_date, end_publish_date, book.popularity, cover, status, synopsis
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
