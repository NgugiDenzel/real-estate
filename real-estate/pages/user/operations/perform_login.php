<?php 


require '../../../connection_to_database.php';

//here we check if the for method has been set to POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)) {
        header("Location: ../user_register.php?msg=<p class='form-error'>Please ensure no fields are not empty.</p>");
    }else{
        $emailSQL = "SELECT email FROM users WHERE email='".$email."'";
        $emailRES = mysqli_query($conn, $emailSQL);
        $emailROW = mysqli_num_rows($emailRES);
        if($emailROW > 0){
            $passSQL = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
            $passRES = mysqli_query($conn, $passSQL);
            $passROW = mysqli_num_rows($passRES);
            if($passROW > 0){
                session_start();
                $user = mysqli_fetch_array($passRES);
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['fname'] = $user['fname'];
                $_SESSION['lname'] = $user['lname'];
                header('Location: ../user_dashboard.php');
            } else {
                header("Location: ../user_login.php?msg=<p class='form-error'>Invalid Password</p>");
            }
        }else {
            header("Location: ../user_login.php?msg=<p class='form-error'>Email does not match any of our records</p>");
        }

    }

} else {

    echo "Something went wrong: Ivalid form method";
}