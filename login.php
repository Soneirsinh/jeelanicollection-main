<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://bootstrapious.com/i/snippets/sn-page-split/bg.jpg');
            background-size: cover;
            background-position: center center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            
            
            <!-- The content half -->
            <!-- <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    
                    Demo content -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <a href="index.html">
                                    <img src="logo_nobg.png" alt="Logo" width="199" class="d-inline-block align-text-top">
                                </a>
                                <h3 class="display-4 py-5">Sign In</h3>
                                <!-- <p class="text-muted mb-4">Create a login split page using Bootstrap 4.</p> -->
                                <form action="login.php" method="post">
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" placeholder="Email address" required=""
                                            autofocus="" name="email" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" name="pswd" placeholder="Password" required=""
                                         class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <!-- <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div> -->
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                    
                                    <!-- <hr class="my-4"> 
                                     <div class="d-grid mb-2">
                                        <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                          <i class="fab fa-google me-2"></i> Sign in with Google
                                        </button>
                                      </div>
                                      <div class="d-grid">
                                        <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                                          <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                                        </button>
                                      </div> -->
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>

</body>

</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
                
        $server = "localhost";
        $username = "root"; 
        $password = "";
        $database = "phpproject"; 
        //Hello this is the change
        $conn = mysqli_connect($server, $username, $password, $database);

        $Email = $_POST["email"];
        $Pass = $_POST["pswd"];

        $sql = "SELECT * FROM customer WHERE email='$Email' AND pwd='$Pass'";

        $res = mysqli_query($conn, $sql);
   
        $num = mysqli_num_rows($res);
    // hello
        if($num > 0)
        {
          echo '
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Successfully!</strong> Looged In😊.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        
            // header('Location: index.php');
            exit();

        }
        else
        {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Soory!</strong>you are not Looged In🤔🤔.
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span>X</span>
          </button>
        </div>';
        }
    }
?>