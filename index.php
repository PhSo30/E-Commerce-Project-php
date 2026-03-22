<?php
    require_once './init/init.php';
    include 'includes/header.php';


$admin_pages = ['admin_dashboard'];
$non_logged_pages = ['login', 'register', 'forgotten'];
$main_pages = ['dashboard'];
$logged_pages = ['profile', 'logout'];
$array_pages = [...$non_logged_pages, ...$logged_pages, ...$admin_pages, ...$main_pages];

$page = ''; //default page
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
if(!in_array($page, $non_logged_pages)){

    include 'includes/navbar.php';
}
if(in_array($page, $array_pages)){
    include './pages/' . $page . '.php';
} else{
    header('Location: ./?page=dashboard');
    exit();
}



include 'includes/footer.php';
?>