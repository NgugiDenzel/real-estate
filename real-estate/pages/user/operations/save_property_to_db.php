<?php 

require '../../../connection_to_database.php';

session_start();

if(!isset($_SESSION['fname'])){
    header('Location: ../user_login.php');
}

//here we check if the for method has been set to POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

    //here we create variables and asign the values from the HTML register form
    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $user_id = $_SESSION['user_id'];
    

    //here we check if any of the variables is empty
    if (empty($title) || empty($description) || $type==0 || empty($price)) {
        //if any of the above variables is empty... we redirect the user back to the register form with a message.
        header("Location: ../user_add_property.php?msg=<p class='form-error'>Please ensure no field is empty</p>");

    } else {

        if(strlen($title) < 5){
            header("Location: ../user_add_property.php?msg=<p class='form-error'>Title must be 5 or more characters</p>");
        }
        if(strlen($title) > 100){
            header("Location: ../user_add_property.php?msg=<p class='form-error'>Title must not exceed 100 characters</p>");
        }

        //
        if(strlen($description) < 50){
            header("Location: ../user_add_property.php?msg=<p class='form-error'>Description must be atleast 50 characters</p>");
        }
        
        //
        if(!is_numeric($price)){
            header("Location: ../user_register.php?msg=<p class='form-error'>Invalid Email address</p>");
        }



        //here we perform more specific data validation.
        
        $featured_image_tmp = $_FILES['featured_image']['tmp_name'];
        $featured_image_name = $_FILES['featured_image']['name'];
        $target_dir = "../../../assets/images/featured_images/featured_";
        $target_file = $target_dir.basename($featured_image_name);
        $new_file_name = "featured_".$featured_image_name;
        $image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(file_exists($target_file)){
            header("Location: ../user_add_property.php?msg=<p class='form-error'>The image file already exists.</p>");
        }else{
            if(move_uploaded_file($featured_image_tmp, $target_file)){
                //file has beed uploaded
            }else{
                header("Location: ../user_add_property.php?msg=<p class='form-error'>File upload failed. Please try again.</p>");
            }

            $sql = "INSERT INTO properties(user_id,title,description,type,price,featured_image)VALUES('$user_id','$title','$description','$type','$price','$new_file_name')";
            $res = mysqli_query($conn, $sql);
            if($res){
                header("Location: ../user_add_property.php?msg=<p class='form-msg'>Property Added.</p>");
            }
        }

        
    }


}else{
    //we tell the user the form has an invalid method value
    echo "Something went wrong!: The form method is invalid";
}



// Lorem ipsum dolor sit amet consectetur adipisicing elit. Est hic, vitae nostrum in nulla neque minima eos sapiente consequatur explicabo. Cum perspiciatis quod recusandae, eaque expedita adipisci qui placeat labore aut possimus ullam illo facilis repellat rerum est quaerat vero perferendis suscipit maiores id asperiores! Perspiciatis optio reiciendis accusantium blanditiis mollitia saepe, qui odit iusto eos, quam, autem dignissimos doloribus porro! Dignissimos iste eveniet eos eaque consectetur nemo illum rem, id ut repellat soluta autem ipsam quaerat sit iure perspiciatis consequuntur quam minus maxime. Rem sunt accusantium ad nisi velit quasi pariatur, porro exercitationem mollitia obcaecati iure distinctio cum corrupti?