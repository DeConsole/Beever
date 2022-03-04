<?php
session_start();
require 'DBConnection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['User_Phone_Number']) && !empty($_SESSION['User_Phone_Number'])){

    $User_Phone_Number = $_SESSION['User_Phone_Number'];
    $get_user_data = mysqli_query($DBConnection, "SELECT * FROM `users_login` WHERE User_Phone_Number = '$User_Phone_Number'");
    $userData =  mysqli_fetch_assoc($get_user_data);

}else{
    header('Location: home.php');
    exit;
}
?>
<!--HTML STARTS HERE-->
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <title>Home</title>
    <style>
        a, a:visited{
            color: #0000EE;
        }
        a:hover{
            color: #EE0000;
        }
    </style>
</head>

<body>
<div class="container">
    <h5>Hello,<?php echo $userData['User_First_Name'];?></h5>
    <h2>Welcome to your home page</h2>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>