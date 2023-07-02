<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="icon" href="icon_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Abel', Georgia, 'Times New Roman', Times, serif
    }

    .navbar {
      margin: 0;
      padding: 0;
      box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.2);
    }

    .active-filter-btn {
      background-color: var(--pink) !important;
      color: #fff !important;
      border-color: var(--pink) !important;
    }

    .filter-button-group .btn:hover {
      color: #fff !important;
    }

    .collection-img span {
      top: 20px;
      right: 20px;
      width: 46px;
      height: 46px;
      border-radius: 50%;
    }

    footer {
      background-color: rgb(26, 17, 17);
      /* height: 50px; */
      color: azure;
      padding: 24px;
      text-align: center;
      margin-top: -4px;
    }

    .navbar-toggler {
      background-color: darkgoldenrod;
    }

    /* .carousel{
      width: 640px;
      height: 360px;
    } */
  </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-dark sticky-top ">
    <div class="container-fluid ">
      <a class="navbar-brand " href="index.php">
        <img src="logo_nobg.png" alt="Logo" width="199" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse text-white" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item p-2">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
          </li>

          <?php
          if (!isset($_SESSION['email'])) {
            echo '<li class="nav-item p-2">
            <a class="nav-link active text-white" aria-current="page" href="signup.php">SignUp</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link text-white" href="login.php">Login</a>
          </li>';
          } else {
            echo '<li class="nav-item p-2">
            <a class="nav-link active text-white" aria-current="page" href="index.php#collection" >Collection</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link text-white" href="index.php#mens">Men</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link text-white" href="index.php#womens">Women</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link text-white" href="cart.php">Cart</a>
          </li> 
          </ul>
          
          <ul class="navbar-nav ">
          <li class="nav-item p-2 ">
          <a class="nav-link text-white" href="logout.php">Logout</a>
          </li>
          </ul>';
        }
            ?>
      </div>
    </div>
  </nav>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <?php
                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "phpproject";
                    $conn = mysqli_connect($server, $username, $password, $database);
                    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                        $p = $_GET['p_id'];
                        if ($p >= 31) {
                            $query = "SELECT * from woman where p_id=$p";
                        } elseif ($p >= 11) {
                            $query = "SELECT * from man where p_id=$p";
                        } else {
                            $query = "SELECT * from product where p_id=$p";
                        }
                        $result = mysqli_query($conn, $query);
                        while ($r = mysqli_fetch_assoc($result)) {
                            echo '<img class="card-img-top mb-5 mb-md-0" src=' . $r['img_path'] . ' alt="productimage" />';
                            echo '</div>
                            <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder">'.$r['p_name'].'</h1>
                    <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through">₹ '.$r['p_price'].'</span>
                    <span>₹ '.$r['p_price'].'</span>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem
                    quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis
                    delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                    style="max-width: 3rem" />
                    
                    <a href="index.php?cart='.$r['p_id'].'">
                    <button class="btn btn-outline-dark flex-shrink-0 " name="cart" id="cart" value="'.$r['p_id'].'" type="button">
                    <i class="bi-cart-fill me-1"></i>
                    Add to cart
                    </button>
                    </a>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Jeelani Collection 2023</p>
        </div>
    </footer>

  <!-- Footer End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>