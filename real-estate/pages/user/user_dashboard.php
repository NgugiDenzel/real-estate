<?php 

include "../../connection_to_database.php";
session_start();

if(!isset($_SESSION['fname'])){
    header('Location: user_login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="fullpage">
        <div class="wrapper">
            <div class="sidebar">
                <h2>RealProperties</h2>
                <h4>User Control Panel</h4>
                <ul>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="user_add_property.php">Add Properties</a>
                    </li>
                    <li>
                        <a href="user_view_properties.php">View Properties</a>
                    </li>
                    <li>
                        <a href="operations/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="content-nav">
                    
                        <div class="left-header">
                            <h4>Dashboard</h4>
                        </div>
                        <div class="right-header">
                            <p>
                            <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>
                            </p>
                        </div>
                </div>
                <div class="content-area">
                    <h1>Testing out the dashboard</h1>
                    <h1>Welcome </h1>
                </div>

            </div>
        </div>
    </div>





    
</body>
</html>