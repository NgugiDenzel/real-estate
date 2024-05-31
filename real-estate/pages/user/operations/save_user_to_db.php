<?php 


require '../../../connection_to_database.php';

//here we check if the for method has been set to POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

    //here we create variables and asign the values from the HTML register form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //here we check if any of the variables is empty
    if (empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($password)) {

        //if any of the above variables is empty... we redirect the user back to the register form with a message.
        header("Location: ../user_register.php?msg=<p class='form-error'>Please ensure no field is empty</p>");

    } else {
  
        //here we perform more specific data validation.
        
        //check if the given first name is less than two characters and greater than 20 characters
        if(strlen($fname) < 2){
            header("Location: ../user_register.php?msg=<p class='form-error'>First Name must be 2 or more characters</p>");
        }
        if(strlen($fname) > 20){
            header("Location: ../user_register.php?msg=<p class='form-error'>First Name must not exceed 20 characters</p>");
        }

        //check if given last name is less than two characters and greater than 20 characters
        if(strlen($lname) < 2){
            header("Location: ../user_register.php?msg=<p class='form-error'>Last Name must be 2 or more characters</p>");
        }
        if(strlen($lname) > 20){
            header("Location: ../user_register.php?msg=<p class='form-error'>Last Name must not exceed 20 characters</p>");
        }
        //check if the mobile number consists of digits only, if its exactly 10 digits 0790 818789
        if(!is_numeric($phone)){
            header("Location: ../user_register.php?msg=<p class='form-error'>Mobile Number must consist of digits only</p>");
        }
        if(strlen($phone) != 10){
            header("Location: ../user_register.php?msg=<p class='form-error'>Mobile Number must be 10 digits</p>");
        } 
        //check if email has the '@' character
        if(strpos($email, '@') == false){
            header("Location: ../user_register.php?msg=<p class='form-error'>Invalid Email address</p>");
        }
        //check if email is atleast 6 chrachters but not more than 15 characters
        if(strlen($password) < 6){
            header("Location: ../user_register.php?msg=<p class='form-error'>Password Must be more than 6 characters</p>");
        }
        if(strlen($password) > 13){
            header("Location: ../user_register.php?msg=<p class='form-error'>Password Must be less than 6 characters</p>");
        }

        //we create the sql to insert the validated data into our table
        $sql = "INSERT INTO users(fname,lname,phone,email,password)VALUES('$fname','$lname','$phone','$email','$password')";
        $res = mysqli_query($conn,$sql);

        if($res){
            header("Location: ../user_register.php?msg=<p class='form-msg'>Registration Successfull.</br> Welcome to RealProperties</p>");
        } else {
            echo "Something went wrong!: ".mysqli_error($conn);
        }
        
    }


}else{
    //we tell the user the form has an invalid method value
    echo "Something went wrong!: The form method is invalid";
}



