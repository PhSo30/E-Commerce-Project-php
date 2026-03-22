<?php
    include 'includes/header.php';

$admin_pages = ['admin_dashboard'];
$non_logged_pages = ['login', 'register'];
$main_pages = ['dashboard'];
$logged_pages = ['profile', 'logout'];
$array_pages = [...$non_logged_pages, ...$logged_pages, ...$admin_pages, ...$main_pages];

$page = $_GET['page'];
if(!in_array($page, $non_logged_pages)){

    include 'includes/navbar.php';
}
if(in_array($page, $array_pages)){
    include './pages/' . $page . '.php';
} else{
    header('Location: ./?page=dashboard');
}



include 'includes/footer.php';
?>