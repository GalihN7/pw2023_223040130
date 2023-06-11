<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/registrasi.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  </head>
  <body>
    <div class="global-container">
      <div class="card login-form">
        <div class="card-body">
          <h1 class="card-tittle text-center">Registrasi</h1>
        </div>
        <div class="card-text">
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password2" class="form-control" aria-describedby="emailHelp" placeholder="Masukan Password" />
            </div>
            <div class="dropdown mb-3">
              <button class="btn btn-secondary dropdown-toggle btn-outline-warning" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">As</button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="#">User</a></li>
                <li><a class="dropdown-item" href="#">Admin</a></li>
              </ul>
            </div>
            <button class="signup" type="submit" name="register">Sign Up</button>
            <span class="register">Already have an acoount? <a class="register-a text-decoration-none" href="login.php">Log In</a></span>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
