<?php

session_start();
    require '../config/config.php';
    if(empty($_SESSION['user_id']&&$_SESSION['logged_in'])){
      header('Location: login.php');
    }
    
    $product_id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM products WHERE id='$product_id'");
    $stmt->execute();
    echo "<script>alert('Deleted Successfully!');;window.location.href = 'index.php'</script>";