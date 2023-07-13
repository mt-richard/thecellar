<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <title>TheCellar Login</title>
    
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5 d-flex justify-content-center">
        <div class="row">

        <div>
          <?php
            require_once('../models/user.php');
            if (isset($_POST['login'])) {
                $user = new user();
                $result = $user->login($_POST['username'], $_POST['password']);
                if ($result == 'Success') {
                  echo "<script>window.location='dashboard.php';</script>";
                }else {
                echo "<script>alert('$result');</script>";
                }
            }
          ?>
        </div>
          
            <div class="card border-0 shadow">
              <div class="card-body">
                <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <form action="" method="POST">
                  <input type="text" name="username" id="" class="form-control my-4 py-2" placeholder="Username" />
                  <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="Password" />
                  <div class="text-center mt-3">
                    <button class="btn btn-primary" name="login">Login...</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
