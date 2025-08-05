<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA'FLEUR DECOR/HOME</title>
  <link rel="icon" href="./img/laf.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="home.js">
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
<div class="pink"></div>
  <div class="bg-white container-fluid  p-0">
    <div class=" container-fluid" style="position: fixed; z-index: 5;">
      <div class="row">
        <div class="col-lg-2" style="background-color: palevioletred;"></div>
        <div class="col-lg-8 text-white pt-3  " style="background-color: palevioletred;">

          <marquee behavior="scroll" direction="left-to-right" loop="10">
            <p>Save $10 On Mother’s Day Flowers With Flex Delivery
              Order Now</p>
          </marquee>
        </div>
        <div class="col-lg-2" style="background-color: palevioletred;"></div>
      </div>
    </div>

   

    <?php
session_start();
?>

<nav>
  <?php if (isset($_SESSION['username'])): ?>
    <!-- User is logged in -->
       <!-- logo and search bar -->
    <div class="container-fluid border-bottom pb-3 pt-5" style="width: 95%;">
      <div class="row pt-5">
        <div class="col-sm-4 d-flex justify-content-center ">
          <i class=" mt-4 fs-6 bi bi-search h-50 "></i>
          <input class="border-0 fs-6 mt-4 w-100 " type="text" placeholder="search" style="height: fit-content;">
        </div>
        <div class="col-sm-4 text-center py-0 "><img class="w-50" src="./img/laf.webp" alt="" srcset=""></div>
        <div class="col-sm-4 d-flex justify-content-center mt-4">
          <a href="logout.php"><p class=" px-4 text-black "><b>Logout</b></p> </a>
          <a href="profile.php"><p class=" px-4 text-black "><b>Profile</b></p> </a>
          <a href="cart.php"><i class="px-1 bi bi-bag-heart" style="font-size: 20px;"></i></a>

          <i class="bi bi-0-square"></i>
          <div class="flowers d-flex py-2">
            <i class="px-3 bi bi-arrow-bar-left arrow" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"
              style="font-size: 20px;">
              <span class="tooltiptext ">Flowers</span></i>
          </div>
        </div>
      </div>
    </div>
    <!-- logo and search bar -->
    
  <?php else: ?>
    <!-- User is NOT logged in -->
       <!-- logo and search bar -->
    <div class="container-fluid border-bottom pb-3 pt-5" style="width: 95%;">
      <div class="row pt-5">
        <div class="col-sm-4 d-flex justify-content-center ">
          <i class=" mt-4 fs-6 bi bi-search h-50 "></i>
          <input class="border-0 fs-6 mt-4 w-100 " type="text" placeholder="search" style="height: fit-content;">
        </div>
        <div class="col-sm-4 text-center py-0 "><img class="w-50" src="./img/laf.webp" alt="" srcset=""></div>
        <div class="col-sm-4 d-flex justify-content-center mt-4">
          <p class="account px-4  "> <b> My Account </b></p>
          <i class="px-1 bi bi-bag-heart" style="font-size: 20px;"></i>
          <i class="bi bi-0-square"></i>
          <div class="flowers d-flex py-2">
            <i class="px-3 bi bi-arrow-bar-left arrow" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"
              style="font-size: 20px;">
              <span class="tooltiptext ">Flowers</span></i>
          </div>
        </div>
      </div>
    </div>
    <!-- logo and search bar -->
  <?php endif; ?>
</nav>
      <!-- navebar links  -->
      <div class="container d-flex justify-content-center  ">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <button class="media navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                  <a class="anchor nav-link active text-danger" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="anchor mx-2 nav-link " href="shop.php" role="button" aria-expanded="false">
                    Shop
                  </a>

                </li>
                <li class="nav-item dropdown">
                  <a class="anchor mx-2 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    F-categories
                  </a>
                  <ul class="dropdown-menu">
                    <p class="px-3 pt-2 lh-1"><b>Spacial</b></p>
                    <li><a class="dropdown-item " href="birthday.php">Birthday Flowers</a></li>
                    <li><a class="dropdown-item" href="./wedding.php">Wedding Flowers</a></li>
                    <li><a class="dropdown-item" href="./party.php">Party Flowers</a></li>
                    <li><a class="dropdown-item " href="./anniversary.php">anniversary Flowers</a></li>
                    <li><a class="dropdown-item" href="./valentine.php">Valentine Flowers</a></li>
                    <li><a class="dropdown-item " href="./valentine.php">Flowers Day</a></li>
                    <li><a class="dropdown-item" href="./office.php">Office Flowers</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="anchor nav-link " aria-current="page" href="./contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="anchor mx-2 nav-link " href="about.php" role="button" aria-expanded="false">
                    About Us
                  </a>

                </li>
                <li class="nav-item dropdown">
                  <a class="anchor mx-2 nav-link " href="comparison.php" role="button" aria-expanded="false">
                    Comparison
                  </a>

                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- navebar links  -->

     <!-- sidebar offcanvas -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
      aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-center " id="offcanvasWithBothOptionsLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-center">
        <img class="w-50 py- " src="./img/laf.webp" alt="" srcset="">
        <div class="container">
          <div class="row pt-5">
            <div class="col-3 pb-2">
              <img src="./img/Gallery-1-q6qd3bgwfyihpholprlw3gqhlrj0ftqsvdiazq865c.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
              <img src="./img/Gallery-2-q6qd3dcktml2cplvesf58g9esj9qv7y9jmt9ya5dsw.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
              <img src="./img/Gallery-3-q6qd3f897anmzxj53t8edfsbzb0ham5q7w48wu2lgg.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
              <img src="./img/Gallery-4-q6qd3g63e4oxbjhrybn0xxjskovuib9gk0rqe417a8.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
              <img src="./img/Gallery-5-q6qd3i1rrsrhyrf1ncga2x2prgmkxpgx8a2pcnyexs.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
              <img src="./img/Gallery-6-q6qd3izlymssaddohuuwneu6cuhy5eknkeq6txx0rk.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
              <img src="./img/Gallery-7-q6qd3jxg5gu2lzcbcd9j7wlmy8dbd3odwjdob7vmlc.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
              <img src="./img/Gallery-8-q6qd3kvacavcxlay6vo5sed3jm8okss48o15shu8f4.jpg" alt="" srcset="">
            </div>
          </div>
          <div class="text-start pt-5 text-secondary">
            <p>Gulistan-e-johar, Karachi, NY 10018 <br> Pakistan</p>
            <p class="text-black">0304-0810195</p>
            <p>Follow us:</p>
            <div class="text-center">
              <a href=""><i class="fa-brands fa-facebook px-2 fs-3"></i></a>
              <a href=""><i class="fa-brands fa-twitter px-2 fs-3"></i></a>
              <a href=""><i class="fa-brands fa-linkedin px-2 fs-3"></i></a>
              <a style="color: red;" href=""><i class="fa-brands fa-pinterest px-2 fs-3"></i></a>
              <a style="color: rgb(209, 209, 51);" href=""><i class="fa-brands fa-google px-2 fs-3"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- sidebar offcanvas -->

  
   


<?php
// session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = intval($_POST['user_id']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);

    $stmt = $conn->prepare("INSERT INTO orders (user_id, address, phone, order_date) VALUES (?, ?, ?, NOW())");
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters: i = integer, s = string, s = string
    $stmt->bind_param("iss", $user_id, $address, $phone);

    // Execute the statement
    if ($stmt->execute()) {
        $order_id = $stmt->insert_id;

        // Clear cart
        unset($_SESSION['cart']);
    }

    // TODO: Store into orders table if needed
    $conn->query("DELETE FROM cart WHERE user_id = $user_id");
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Order Confirmation</title>
        <style>
            body {
                font-family: 'Segoe UI', sans-serif;
                background: #f4f4f4;
                /* padding: 40px; */
            }
            .container-fluids {
                max-width: 600px;
                margin: auto;
                background: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
                text-align: center;
            }
            h2 {
                color: green;
                margin-bottom: 20px;
            }
            p {
                font-size: 16px;
                margin: 10px 0;
            }
            .btn {
                margin-top: 20px;
                display: inline-block;
                padding: 10px 20px;
                background: green;
                color: white;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                font-size: 16px;
            }
            .btn:hover {
                background: darkgreen;
            }
        </style>
    </head>
    <body>
<div class="div" style="margin-top:55px; height: 18rem;">

    <div class="container_fluids">
        <h2 class="text-center">🎉 Order placed successfully!</h2>
        <p class="text-center"><strong >📍 Address:</strong> <?= htmlspecialchars($address) ?></p>
        <p class="text-center"><strong>📞 Phone:</strong> <?= htmlspecialchars($phone) ?></p>
        <p class="text-center">🛒 We will contact you soon. Thank you for shopping with us!</p>

        <a href="index.php" class="btn" style="position: relative; left: 37rem;">⬅️ Back to Home</a>
    </div>
</div>

    </body>
    </html>

    <?php
} else {
    echo "Invalid access.";
}
?>

