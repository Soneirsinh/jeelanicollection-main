<?php
    session_start();        
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $server = "localhost";
        $username = "root"; 
        $password = "";
        $database = "phpproject"; 

        $conn = mysqli_connect($server, $username, $password, $database);

        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pswd"];
        $city = $_POST["city"];

        $sql = "INSERT INTO customer (`name`, `email`, `pwd`, `city`)VALUES('$name', '$email', '$pass', '$city')";

        $res = mysqli_query($conn, $sql);
   
        if($res)
        {

            // $_SESSION['username']=$name;
            header('location:login.php');

        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Soory!</strong>you are not Registration🤔🤔.
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span>X</span>
            </button>
            </div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="icon" href="icon_logo.png">
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
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <a href="index.html">
                                    <img src="logo_nobg.png" alt="Logo" width="199" class="d-inline-block align-text-top">
                                </a>
                                <h3 class="display-4 py-5">Sign Up</h3>
                                <!-- <p class="text-muted mb-4">Create a login split page using Bootstrap 4.</p> -->
                                <form action="signup.php" method="post">
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Enter name" required=""
                                            autofocus="" name="name" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" name="email" placeholder="Enter email" required=""
                                         class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" name="pswd" placeholder="Enter password" required=""
                                         class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" name="city" placeholder="Enter city" required=""
                                         class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                               
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" href="index.html">Sign
                                        in</button>

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
