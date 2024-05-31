<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>HOME</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand text-primary" href="#">RealProperties</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="all_properties.php">View All Propeties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/user/user_register.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/user/user_login.php">Sign In</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<section class="container">
    <div class="pt-5 pb-5">
        <h1 class="text-center">Explore Homes on RealProperties</h1>
        <p class="text-center">
        Take a deep dive and browse homes for sale, original neighborhood photos, resident reviews and local insights to find what is right for you. 
        </p>
    </div>
    <div class="row">
        <?php
        include "connection_to_database.php";
        $propertiesSQL = "SELECT * FROM properties";
        $propertiesRES = mysqli_query($conn,$propertiesSQL); 
        while($row = mysqli_fetch_array($propertiesRES)){
            echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">';
                echo '<div class="card mb-5">';
                    echo '<img src="assets/images/featured_images/'.$row['featured_image'].'" class="card-img-top" alt="">';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">'.$row['title'].'</h5>';
                        echo '<p class="card-text">';
                            echo '<b>Type:</b>'.typer($row['type']).'<br>';
                            echo '<b>Kshs</b>'.$row['price'];
                        echo '</p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }

        function typer($number){
            if ($number == 1){
                return "Rental";
            }else if($number == 2){
                return "For Sale";
            }
        }
        ?>
        <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card mb-5">
                <img src="assets/images/hero_01.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">House in...</h5>
                    <p class="card-text">
                        Four bedrooms...
                    </p>
                </div>
            </div>
        </div> -->
        
        
    </div>
    

</section>




<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>