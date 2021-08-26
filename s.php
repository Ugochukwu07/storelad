<?php
include('path.php');
//$_SESSION['store']['about'] = 1;
if(isset($_GET['store'])){
    if(isset($_SESSION['store']['about'])){
        include(ROOT_PATH . '/store/about.php');
        unset($_SESSION['store']['about']);
    }elseif(isset($_SESSION['store']['about'])){
        include(ROOT_PATH . '/store/about.php');
        unset($_SESSION['store']['about']);
    }elseif(isset($_SESSION['store']['contact'])){
        include(ROOT_PATH . '/store/contact.php');
        unset($_SESSION['store']['contact']);
    }else{
        include(ROOT_PATH . '/store/index.php');
    }
}else{
    header('location: ' . BASE_URL . '/');
    exit();
}