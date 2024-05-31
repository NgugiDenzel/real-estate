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
                            <h4>Add Properties</h4>
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
                            <h5>Fill in the form below</h5>
                            <small>
                                <?php echo (isset($_GET['msg']) ? $_GET['msg'] : "") ?>
                            </small>
                        </div>
                        <div class="card-body">
                            <form action="operations/save_property_to_db.php" method="POST" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input name="title" type="text" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Title</label>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="floatingInput">Description</label>
                                    <textarea name="description" class="form-control" id="floatingInput" style="width:100%;"></textarea>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="type" class="form-control" id="floatingInput">
                                        <option value="0">---Choose One--</option>
                                        <option value="1">Rental</option>
                                        <option value="2">For Sale</option>
                                    </select>
                                    <label for="floatingInput">Property Type</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="price" class="form-control" type="number" id="floatingInput">
                                    <label for="floatingInput">Price</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="featured_image" class="form-control" type="file" id="floatingInput">
                                    <label for="floatingInput">Featured Image</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Add Property</button>
                                <hr class="my-4">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





    
</body>
</html>