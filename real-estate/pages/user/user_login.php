<?php

include '../../components/header.php';
include '../../components/navbar.php';
?>

<section class="hcf-bp-center hcf-bs-cover hcf-overlay" style="background-image: url('../../assets/images/hero_02.jpg');">
<div class="b-example-divider"></div>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-4 fw-bold lh-1 mb-3 text-white">Welcome back</h1>
      <p class="col-lg-10 fs-4 text-white">
      With more neighborhood insights than any other real estate website, we've captured the color and diversity of communities.
    </p>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
      <form class="p-4 p-md-5 border rounded-3 bg-light" action="operations/perform_login.php" method="POST">
        <div class="form-floating mb-3">
          <input name="email" type="email" class="form-control" id="floatingInput">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input name="password" type="password" class="form-control" id="floatingPassword">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <hr class="my-4">
        <small class="text-muted">Don't have an account? <a href="user_register.php">Register Here.</a></small>
      </form>
    </div>
  </div>
</div>

<div class="b-example-divider"></div>

</section>