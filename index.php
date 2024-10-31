<?php
include_once('./app/config.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
</head>

<body>
  <div class="card">
    <div class="card-body">
      <div class="row g-3">
        <div class="col">
          <img
            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F22%2Fc7%2Fd2%2F22c7d2bf5a72eeb184a70ede080ad83c.jpg&f=1&nofb=1&ipt=1c0d06546778ee8a04afc491fdd665154115d75fa685f9133c52ee5a18f05b53&ipo=images"
            class="img-responsive object-fit-cover border rounded"
            style="width: 100%"
            alt="..." />
        </div>
        <div class="col">
          <div class="row">
            <form class="col d-flex flex-column" method="POST" action="auth">
              <img
                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogos-world.net%2Fwp-content%2Fuploads%2F2020%2F04%2FMcDonalds-Logo.png&f=1&nofb=1&ipt=3c815ed62bc3a8e0f7a49061dd031b41932d168f0eeef0dcf6cf492ca8054bd6&ipo=images"
                class="object-fit-cover border rounded"
                style="width: 20%" />
              <label for="">Email</label>
              <input type="text" name="global_token" value=<?= $_SESSION['global_token'] ?> hidden>
              <input
                name="email"
                type="email"
                class="form-control"
                placeholder="Email"
                aria-label="email" />
              <label for="" class="text-secondary-emphasis">We do not share your email</label>

              <label for="">Password</label>
              <input
                name="password"
                type="password"
                class="form-control"
                placeholder="Last name"
                aria-label="Last name" />
              <div>
                <input name="check" id="checkmeout" type="checkbox" name="" value="" />
                <label for="checkmeout">Check me out</label>
              </div>
              <input type="text" hidden name="action" value="login">
              <button
                class="btn btn-primary me-md-2 --bs-dark-bg-subtle"
                type="submit">
                Submit
              </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
