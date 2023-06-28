<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jeelani collection</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet2" href="main.css">
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
  <nav class="navbar navbar-expand-lg bg-dark sticky-top ">
    <div class="container-fluid ">
      <a class="navbar-brand " href="#">
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

         <li class="nav-item p-2">
            <a class="nav-link active text-white" aria-current="page" href="signup.php" target="_blank">SignUp</a>
            </li>
            <li class="nav-item p-2">
            <a class="nav-link text-white" href="login.php" target="_blank">Login</a>
            </li>
       
          <!--<li class="nav-item p-2">
            <a class="nav-link text-white" href="collection.html">Collection</a>
          </li>
           <li class="nav-item p-2">
            <a class="nav-link text-white" href="#">Pricing</a>
          </li>
         <li class="nav-item p-2">
            <a class="nav-link text-white" href="#popular">Popular</a>
          </li>
           <li class="nav-item p-2">
            <a class="nav-link text-white" href="about_us.html">About us</a>
          </li> -->
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>

  <!-- Bootstrap Caraousel -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/banner-img-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>New Arrivals</h2>
          <p>Shop Now</p>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
          class="d-block w-100" alt="...">

        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>  
        </div>

      </div>
      <div class="carousel-item">
        <img
          src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carousel End -->


  <!-- collection -->
  <section id="collection" class="py-5">
    <div class="container-fluid">

      <div class="title text-center">
        <h2 class="position-relative d-inline-block">New Collection</h2>
      </div>

      <div class="row g-0">
      <div class="collection-list mt-4 row gx-0 gy-3">
        <?php
    
          $server = "localhost";
          $username = "root"; 
          $password = "";
          $database = "phpproject"; 

          $conn = mysqli_connect($server, $username, $password, $database);

          // $sql = "INSERT INTO `customer` (`p_id`, `p_name`, `p_price`, `date`, `img_path`, `category`, 'descp') VALUES ('01', 'top', 'd', '$Email', '$Pass', '$City');";
          // $sql = "INSERT INTO `PRODUCT` (``)VALUES(01, 'top', 1499, date(), 'images/c_formal_gray_shirt.png', 'top', 'kjdfk;la fj g')";

          $sql = 'SELECT * from product';
          $res = mysqli_query($conn, $sql);

          // $row = mysqli_num_rows($res);
          // echo "$row rows in result set\n";
          // if ($res)
          // {
          // // echo "secc";
          // }
          // else{
          // echo "not";
          // }

            while($r = mysqli_fetch_assoc($res))
            {
              echo 
              '
              <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
              <div class="collection-img position-relative">
              <img src="'.$r['img_path'].'" class="w-100">
              <span
              class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
              </div>
              <div class="text-center">
              <p class="text-capitalize my-1">'.$r['p_name'].'</p>
              <span class="fw-bold">&#8377; '.$r['p_price'].'</span>
              </div>
              
              <div class="text-center">
                <button class="btn btn-outline-primary px-4 my-1">Buy</button>
              </div>
              </div>';
          }
        ?>
<!-- 
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="images/c_pant_girl.png" class="w-100">
              <span
                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <p class="text-capitalize my-1">gray shirt</p>
              <span class="fw-bold">&#8377; 1499</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
            <div class="collection-img position-relative">
              <img src="images/c_polo-shirt.png" class="w-100">
              <span
                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <p class="text-capitalize my-1">gray shirt</p>
              <span class="fw-bold">&#8377; 1499</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="images/c_shirt-girl.png" class="w-100">
              <span
                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <p class="text-capitalize my-1">gray shirt</p>
              <span class="fw-bold">&#8377; 1499</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="images/c_t-shirt_men.png" class="w-100">
              <span
                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <p class="text-capitalize my-1">gray shirt</p>
              <span class="fw-bold">&#8377; 1499</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
            <div class="collection-img position-relative">
              <img src="images/c_tunic-shirt_girl.png" class="w-100">
              <span
                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <p class="text-capitalize my-1">gray shirt</p>
              <span class="fw-bold">&#8377; 1499</span>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="images/c_undershirt.png" class="w-100">
              <span
                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <p class="text-capitalize my-1">gray shirt</p>
              <span class="fw-bold">&#8377; 1499</span>
            </div>
          </div> -->
<!-- 
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="images/c_western-shirt.png" class="w-100">
              <span
                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <p class="text-capitalize my-1">gray shirt</p>
              <span class="fw-bold">&#8377; 1499</span>
            </div>
          </div> -->
 
        </div>
      </div>
    </div>
  </section>
  <!-- end of collection -->

  <!-- popular -->
  <section id="popular" class="py-5">
    <div class="container">
      <div class="title text-center pt-3 pb-5">
        <h2 class="position-relative d-inline-block ms-4">Popular Of This Year</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 row g-3">
          <h3 class="fs-5">Top Rated</h3>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/top_rated_1.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 599</span>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/top_rated_2.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 599</span>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/top_rated_3.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 599</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 row g-3">
          <h3 class="fs-5">Best Selling</h3>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/best_selling_1.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 799</span>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/best_selling_2.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 799</span>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/best_selling_3.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 799</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 row g-3">
          <h3 class="fs-5">On Sale</h3>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/on_sale_1.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 999</span>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/on_sale_2.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 999</span>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/on_sale_3.jpg" alt="" class="img-fluid pe-3 w-25">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>&#8377; 999</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of popular -->

  <!-- Footer -->

  <footer id="footer">
    Copyright &copy; Jeelani Collection - All rights reserved
    <!-- <a href="#">About us</a>
    <a href="#">&copyCopyright</a> -->

  </footer>

  <!-- Footer End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>