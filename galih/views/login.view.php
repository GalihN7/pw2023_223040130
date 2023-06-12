<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  </head>
  <body>
    

  <?php if( isset($error)) : ?>
    <p style="color: red; font-style: italic">username / password salah</p>
    <?php endif; ?>
  
    <div class="global-container">
      <div class="card login-form">
        <div class="card-body">
          <h1 class="card-tittle text-center">LOGIN</h1>
        </div>
        <div class="card-text">
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukan Username" required/>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required/>
            </div>
            <button href = "admin.php" type="submit" name="login" class="signin">Sign In</button>
            <span class="register">Don't have an account? <a class="register-a text-decoration-none" href="registrasi.php">Sign Up</a></span>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?php require('partials/footer.php'); ?>
