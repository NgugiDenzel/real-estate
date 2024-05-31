<?php 

include "../../connection_to_database.php";
session_start();

if(!isset($_SESSION['fname'])){
    header('Location: user_login.php');
}


$user_id = $_SESSION['user_id'];
$propertySQL = "SELECT * FROM properties WHERE user_id ='".$user_id."'";
$propertyRES = mysqli_query($conn,$propertySQL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <title>Add Property</title>
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
                            <h4>View Properties</h4>
                        </div>
                        <div class="right-header">
                            <p>
                            <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>
                            </p>
                        </div>
                </div>
                <div class="content-area">
                    <div class="card">
                        <div class="card-header">
                            <h5>Your listed properties</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = mysqli_fetch_array($propertyRES)){
                                            echo "<tr>";
                                                echo "<td>".$row['title']."</td>";
                                                echo "<td>".typer($row['type'])."</td>";
                                                echo "<td>".$row['price']."</td>";
                                                echo "<td> <a href='#'>View</a> </td>";
                                                echo "<td> <a href='#'>Edit</a> </td>";
                                                echo "<td> <a href='#'>Delete</a> </td>";
                                            echo "</tr>";
                                        }
                                        
                                        function typer($number){
                                            if ($number == 1){
                                                return "Rental";
                                            }else if($number == 2){
                                                return "For Sale";
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





    
</body>
</html>