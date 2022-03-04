
<?php
require 'DBConnection.php';
if(isset($_POST['User_Phone_Number']) && isset($_POST['User_Password'])){

// CHECK IF FIELDS ARE NOT EMPTY
    if(!empty($_POST['User_Phone_Number']) && !empty($_POST['User_Password'])){

// Escape special characters
        $User_Phone_Number = mysqli_real_escape_string($DBConnection, htmlspecialchars(trim($_POST['User_Phone_Number'])));

        $query = mysqli_query($DBConnection, "SELECT * FROM `users_login` WHERE User_Phone_Number = '$User_Phone_Number'");

        if(mysqli_num_rows($query) > 0){

            $row = mysqli_fetch_assoc($query);
            $user_db_pass = $row['User_Password'];

            // VERIFY PASSWORD
            //$check_password = password_verify($_POST['User_Password'], $user_db_pass);

            if($_POST['User_Password'] === $user_db_pass){
                session_regenerate_id(true);
                $_SESSION['User_Phone_Number'] = $User_Phone_Number;
                header('Location: dashboard.php');

                exit;
            } else{
// INCORRECT PASSWORD
                $error_message = "Incorrect password";

            }
        } else{
// EMAIL NOT REGISTERED
            $error_message = "Incorrect Email Address and Password";
        }
    } else{
// IF FIELDS ARE EMPTY
        $error_message = "Please fill in all the required fields";
    }
}
?>
