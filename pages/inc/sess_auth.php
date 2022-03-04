<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
$link = "http";
$link .= "://"; 
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['userdata']) && !strpos($link, 'Login.php')){
	redirect('pages/Login.php');
}
if(isset($_SESSION['userdata']) && strpos($link, 'login.php')){
	redirect('index.html');
}
$module = array('','admin','establishment','users');
if(isset($_SESSION['userdata']) && (strpos($link, 'index.html') || strpos($link, 'pages/')) && $_SESSION['userdata']['login_type'] !=  1){
	echo "<script>alert('Access Denied!');location.replace('".base_url.$module[$_SESSION['userdata']['login_type']]."');</script>";
    exit;
}
