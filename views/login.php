<?php
include_once "../app/config.php";
?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>
    Login
  </title>
  <?php
  include "layouts/head.php";
  ?>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>

  <!-- [ Main Content ] start -->
  <div class=" ms-auto auth-main v2">
    <div class="bg-overlay bg-dark"></div>
    <div class=" auth-wrapper">
      <div class="auth-form">
        <div class="card my-5 ms-auto me-4" style="min-height: 30vh!important;">
          <div class="card-body">
            <h4 class="f-w-500 mb-1">Login with your email</h4>
            <p class="mb-3">Don't have an Account? <a href="register-v2.html" class="link-primary ms-1">Create Account</a></p>
            <form method="POST" action="auth">
              <input type="text" hidden name="action" value="login">
              <input type="text" name="global_token" value=<?= $_SESSION['global_token'] ?> hidden>
              <div class="mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email Address" />
              </div>
              <div class="mb-3">
                <input type="password" name="password" class="form-control" id="floatingInput1" placeholder="Password" />
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- [ Main Content ] end -->

  <?php

  include "layouts/footer.php";

  ?>
  <?php

  include "layouts/scripts.php";

  ?>

  <?php

  include "layouts/modals.php";

  ?>

</body>
<!-- [Body] end -->

</html>
