<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/order_books.php');
?>

<?php
  if(isset($_POST['name'])){
    $order = 1;
    $page_order = OnGoingOrderBy($order);

    $_SESSION['order-page'] = $page_order;
    header("Location: $BASE_PAGES/pages/ongoing_book_list/order-page.php");
    exit;
  }
  else if(isset($_POST['author'])){
    $order = 2;
    $page_order = OnGoingOrderBy($order);

    $_SESSION['order-page'] = $page_order;
    header("Location: $BASE_PAGES/pages/ongoing_book_list/order-page.php");
    exit;
  }
  else if(isset($_POST['popularity'])){
    $order = 3;
    $page_order = OnGoingOrderBy($order);

    $_SESSION['order-page'] = $page_order;
    header("Location: $BASE_PAGES/pages/ongoing_book_list/order-page.php");
    exit;
  }
  else header("Location: $BASE_PAGES/pages/ongoing_book_list");
  
  exit;
?>
