<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/order_books.php');
?>

<?php

  if(isset($_POST['name'])){
    $order = 1;
    $page_order = FinishedOrderBy($order);

    $_SESSION['finished-order-page'] = $page_order;
    header("Location: $BASE_PAGES/pages/finished-book-list/order-page.php");
    exit;
  }
  else if(isset($_POST['author'])){
    $order = 2;
    $page_order = FinishedOrderBy($order);

    $_SESSION['finished-order-page'] = $page_order;
    header("Location: $BASE_PAGES/pages/finished-book-list/order-page.php");
    exit;
  }
  else if(isset($_POST['popularity'])){
    $order = 3;
    $page_order = FinishedOrderBy($order);

    $_SESSION['finished-order-page'] = $page_order;
    header("Location: $BASE_PAGES/pages/finished-book-list/order-page.php");
    exit;
  }
  else{
    header("Location: $BASE_PAGES/pages/finished-book-list/index.php");
    exit;
  }
?>
