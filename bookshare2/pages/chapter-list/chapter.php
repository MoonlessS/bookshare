<?php
include_once("database/chapter.php");
function display_chapter_list($book){
  $bookID = $book['id'];
  $bookTitle = $book['title'];

  global $smarty;
  $smarty->assign('book', $book);
  $smarty->assign('bookTitle', $bookTitle);
  $smarty->assign('bookID', $bookID);
  $smarty->assign('chapterList', getBookChapters($bookID));
  $smarty->assign('newChapter',isset($chapter['number'])? $chapter['number']+1:0);
  $smarty->assign('userAuthenticationStatus',userAuthenticationStatus());
  $smarty->assign('libraryIcon', userAuthenticationStatus()  ?(getBookAddedToLibraryState($bookID) ?"right" :"remove") :"no-go");

    $smarty->display('templates/chapters/chapter-list.tpl');
}

function display_chapter($book,$chapter){
  $bookID = $book['id'];
  $nextChapter = getChapterInfoByBookAndNumber($bookID,$chapter['number']+1);

  global $smarty;
  if ($chapter['number'] + 0 > 1){
    $smarty->assign('previousChapter', getChapterInfoByBookAndNumber($bookID,$chapter['number']-1));
  }
  $smarty->assign('bookName', "T{$book['title']}");
  $smarty->assign('nextChapter', getChapterInfoByBookAndNumber($bookID,$chapter['number']+1));
  $smarty->assign('chapter', $chapter);
  $smarty->assign('book', $book);
  $smarty->assign('bookID', $bookID);
//  $smarty->assign('chapterList', getBookChapters($bookID));
  $smarty->assign('newChapter', isset($chapter['number'])?$chapter['number']+1:0 );
  $smarty->assign('userAuthenticationStatus',userAuthenticationStatus());
  $smarty->assign('libraryIcon', userAuthenticationStatus()  ?(getBookAddedToLibraryState($bookID) ?"right" :"remove") :"no-go");

    $smarty->display('templates/chapters/chapter.tpl');
}

function display_new_chapter($book){
  $bookID = $book['id'];
  $chapter = array();
  $chapter['number'] = getBookTotalChapterNumber($bookID) +1;

  global $smarty;
  if ($chapter['number'] + 0 > 1){
    $smarty->assign('previousChapter', getChapterInfoByBookAndNumber($bookID,$chapter['number']-1));
  }
  $smarty->assign('chapter', $chapter);
  $smarty->assign('book', $book);
  $smarty->assign('bookID', $bookID);
  $smarty->assign('bookName', "T{$book['title']}");
//  $smarty->assign('chapterList', getBookChapters($bookID));
  $smarty->assign('newChapter', isset($chapter['number'])?$chapter['number']+1:0 );
  $smarty->assign('userAuthenticationStatus',userAuthenticationStatus());
  $smarty->assign('libraryIcon', userAuthenticationStatus()  ?(getBookAddedToLibraryState($bookID) ?"right" :"remove") :"no-go");

    $smarty->display('templates/chapters/new-chapter-edit.tpl');
}

 ?>
