<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeelani collection | Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">

                <!-- main cart starts-->
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart items</h5>
                        </div>


                        <div class="card-body">

                            <!-- Single item -->
                            
                            <?php
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "phpproject";
                            $conn = mysqli_connect($server, $username, $password, $database);
                            if (!$conn) {
                                die('chala ja bsdk');
                            }
                            $em = $_SESSION['email'];

                            $sql = "SELECT * FROM cart ";

                            $res = mysqli_query($conn, $sql);

                            while ($r = mysqli_fetch_assoc($res)) {
                                $em = $r['email'];
                                $p = $r['p_id'];

                                $query = "SELECT * from product where p_id=$p";
                                $result = mysqli_query($conn, $query);
                                echo "<br>";

                                while ($r = mysqli_fetch_assoc($result)) {
                                    // echo $r['p_name'];
                                    echo '<div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                <!-- Image -->
                                <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                data-mdb-ripple-color="light">
                                <img src=' . $r['img_path'] . '
                                class="w-100" alt="Blue Jeans Jacket" />
                                <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                </a>
                                </div>
                                <!-- Image -->
                                        </div>
                                        
                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong>' . $r['p_name'] . '</strong></p>
                                        <p>Category : ' . $r['category'] . '</p>
                                        <p>Color: blue</p>
                                        <p>Size: M</p>
                                        <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                        data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                                        title="Move to the wish list">
                                        <i class="fas fa-heart"></i>
                                        </button>
                                        <!-- Data -->
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <!-- Quantity -->
                                            <div class="d-flex mb-4" style="max-width: 300px">
                                            <button class="btn btn-primary px-3 me-2"
                                            onclick="this.parentNode.querySelector(`input[type=number]`).stepDown()">
                                            <i class="fas fa-minus"></i>
                                            </button>
                                            
                                            <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                            class="form-control" />
                                            <label class="form-label" for="form1">Quantity</label>
                                            </div>
                                            
                                            <button class="btn btn-primary px-3 ms-2"
                                            onclick="this.parentNode.querySelector(`input[type=number]`).stepUp()">
                                            <i class="fas fa-plus"></i>
                                            </button>
                                            </div>
                                            <!-- Quantity -->
                                            
                                            <!-- Price -->
                                            <p class="text-start text-md-center">
                                            <strong>₹ ' . $r['p_price'] . '</strong>
                                            </p>
                                            <!-- Price -->
                                            </div>
                                            </div>
                                <!-- Single item -->
                                <hr class="my-4" />';
                                }
                            }

                            ?>


                        </div>
                    </div>

                </div>
                <!-- main cart ends-->

                <!-- right side summary starts -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </button>
                        </div>
                    </div>
                </div>
                <!-- right side summary ends -->

            </div>
        </div>
    </section>
</body>

</html>