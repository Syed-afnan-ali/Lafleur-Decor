<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA'FLEUR DECOR/Contact Page</title>
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
    <link rel="stylesheet" href="shop.css">
</head>

<body>
    <div class="bg-white">
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



        <!-- logo and search bar -->
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
        <!-- logo and search bar -->

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
                  <a class="anchor nav-link " aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="anchor mx-2 nav-link active text-danger " href="shop.php" role="button" aria-expanded="false">
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
                            <a style="color: rgb(209, 209, 51);" href=""><i
                                    class="fa-brands fa-google px-2 fs-3"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- sidebar offcanvas -->
    </div>

    <!-- sign in start my account -->
    <div class="sign0 container-fluid  pt-5" style="background-color: rgba(231, 220, 229, 0.548);">
        <div class="container border-top border-5">
            <div class="row d-flex justify-content-center">
                <div class="signin col-sm-5 border-5  p-5 " id="signin">
                    <h1 class="text-center">Welcome Back</h1>
                    <h2 class="pt-5 ">Sign in</h2>
                    <form action="" class="pt-5 border-top">
                        <input class="w-100 p-2 " type="text" placeholder="Email"><br>
                        <input class="mt-2 w-100 p-2" type="password" placeholder="Password"><br>
                        <div class="d-flex">
                            <input type="checkbox">
                            <p class="mt-3 px-2">Confirm your email</p>
                        </div>
                        <button class="btn btn-outline-danger w-100">Login</button>
                        <button class="btn btn-dark w-100 mt-3">Cancel</button>
                    </form>
                    <div class="d-flex">
                        <h6 class=" text-info pt-2"><a class="text-decoration-none" href=""> Reset Password </a> </h6>
                        <p class=" pt-2">Or follow here to</p>
                        <h6 class="text-info pt-2"><a class="text-decoration-none" href="./signup.php"> Creat New
                                Account </a> </h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign in start my account -->

    <!-- about us write -->
    <div class="about">
        <div class="container-fluid ">
            <h1 class="us">Products</h1>
        </div>
    </div>
    <!-- about us write -->
    <!-- background picture -->
    <div class="conatainer-fluid">
        <div class="background">
        </div>
    </div>
    <!-- background picture -->
    <!-- Mothers day Spacial -->
    <div class="container-fluid bg-white py-2">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-3">
                    <img class="w-100 my-5" src="./img/red.avif" alt="" srcset="">
                </div>
                <div class="col-sm-9">
                    <a href="./flowers.html"><img class="w-100" src="./img/mothers.webp" alt="" srcset=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mothers day Spacial -->
<!-- buy the cards all over -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 pt-4">
                    <p class="fw-bold border-bottom border-dark">CUSTOM CATEGORY</p>
                    <p class="fw-bold border-bottom border-dark pt-3">CATEGORIES</p>
                    <div class="d-flex justify-content-between lh-1 pt-3">
                        <div>
                            <p>Best Sellers</p>
                            <p>Featured</p>
                            <p>New</p>
                        </div>
                        <div>
                            <p>(8)</p>
                            <p>(12)</p>
                            <p>(15)</p>
                        </div>
                    </div>
                    <p class="fw-bold border-bottom border-dark pt-5">TOP RATED PRODUCTS</p>

                    <div class="d-flex pb-4">
                        <div class="" style="width: 40%;">
                            <img class="w-100" src="./img/palm.webp" alt="" srcset="">
                        </div>
                        <div class="px-3 pt-2">
                            <p class="pb-0 mb-0">Majesty Palm</p>
                            <div class="pb-3 ">
                                <span class=" fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star" style="font-size: 10px;"></span>
                                <span class="fa fa-star" style="font-size: 10px;"></span>
                            </div>
                            <p class="fs-6 " style="color: rgb(247, 84, 111);">$22.62 <span
                                    class="fs-6 text-decoration-line-through px-2" style="color: grey;">$70.30</span>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex py-4">
                        <div class="" style="width: 40%;">
                            <img class="w-100" src="./img/fox.webp" alt="" srcset="">
                        </div>
                        <div class="px-3 pt-2">
                            <p class="pb-0 mb-0">Foxglove Flower</p>
                            <div class="pb-3 ">
                                <span class=" fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star" style="font-size: 10px;"></span>
                                <span class="fa fa-star" style="font-size: 10px;"></span>
                            </div>
                            <p class="fs-6 " style="color: rgb(247, 84, 111);">$22.62 <span
                                    class="fs-6 text-decoration-line-through px-2" style="color: grey;">$70.30</span>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex py-4">
                        <div class="" style="width: 40%;">
                            <img class="w-100" src="./img/scarlet.webp" alt="" srcset="">
                        </div>
                        <div class="px-3 pt-2">
                            <p class="pb-0 mb-0">Scarlet Sage</p>
                            <div class="pb-3 ">
                                <span class=" fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star checked" style="color: orange; font-size: 10px;"></span>
                                <span class="fa fa-star" style="font-size: 10px;"></span>
                                <span class="fa fa-star" style="font-size: 10px;"></span>
                            </div>
                            <p class="fs-6 " style="color: rgb(247, 84, 111);">$22.62 <span
                                    class="fs-6 text-decoration-line-through px-2" style="color: grey;">$70.30</span>
                            </p>
                        </div>
                    </div>
                    <p class="fw-bold border-bottom border-dark pt-3">TAGS</p>
                    <div class="row ">
                        <div class="col-3 border rounded mx-1">Black</div>
                        <div class="col-3 border mx-1 rounded">Blue</div>
                        <div class="col-3 border mx-1 rounded">Fiber</div>
                        <div class="col-3 border mx-1 mt-1 rounded">Gold</div>
                        <div class="col-3 border mt-1 mx-1 rounded">Gray</div>
                        <div class="col-3 border mt-1 mx-1 rounded">Green</div>
                        <div class="col-3 border mt-1 mx-1 rounded">Leather</div>
                        <div class="col-3 border mt-1 mx-1 rounded">Hexa</div>
                    </div>

                </div>
                <div class="col-sm-9">
                    <div class="row border d-flex justify-content-between">
                        <div class="col-sm-9 pt-2">
                            <a href=""> <img style="width: 5%; cursor: pointer;" src="./img/download.jpg" alt=""
                                    srcset=""></a>
                            <a href=""> <img style="width: 5%; cursor: pointer;" src="./img/download2.png" alt=""
                                    srcset=""></a>
                        </div>
                        <div class="col-sm-3 text-center pt-3">
                            <p class="text-secondary">Showing 16 - 16 of 16 result</p>
                        </div>
                    </div>
                    <!-- Cards row 1 -->
                    <div class="row pt-5">
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f16.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mt-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f17.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mb-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f18.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mt-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Cards row 1 -->
                    <!-- Cards row 2 -->
                    <div class="row ">
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f19.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mt-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f20.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mb-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f21.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mt-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Cards row 2 -->
                    <!-- Cards row 3 -->
                    <div class="row pb-5">
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f22.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mt-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f23.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mb-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class=" border border-2 mb-5 w-100 ">
                                <img class="w-100" src="./img/f24.jpg" alt="" srcset="">
                                <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
                                    <div>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                        <span class="fa fa-star" style="font-size: 13px;"></span>
                                    </div>
                                    <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
                                </div>
                                <div class=" bg-white d-flex px-3 justify-content-between">
                                    <p class="fs-6"><b>Mummy Flower</b></p>
                                    <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
                                </div>
                                <div class="bg-white px-4 pb-3">
                                    <div class="mt-4 swiper-hover p-2 fs-6 border fw-bold text-center">
                                        ADD TO CART</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Cards row 3 -->
                    
                </div>
            </div>
        </div>
    </div>
<!-- buy the cards all over -->

    <footer style="background-color: rgba(255, 255, 255, 0.76)">
        <div class="container-fluid">
            <div class="row py-5 h-50">
                <div class="col-sm-4 h-50 ">
                    <div class=" d-flex justify-content-between px-5 border-end border-dark" style="font-size: 13px;">
                        <div>
                            <p><b>INFORMATION</b></p>
                            <p>About Us</p>
                            <p>Contact</p>
                            <p>Careers</p>
                            <p>Blog</p>
                            <p>Privacy Policy</p>
                            <p>Terms & Conditions</p>
                        </div>
                        <div>
                            <p><b>HELP</b></p>
                            <p>Flower Care</p>
                            <p>Shipping</p>
                            <p>Account</p>
                            <p>Accessibility</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4  border-end border-dark">
                    <div class="text-center ">
                        <img class=" w-50" src="./img/laf.webp" alt="" srcset="">
                        <p class="py-4">Follow us on social media</p>
                        <a href=""><i class="fa-brands fa-facebook px-2 fs-3"></i></a>
                        <a href=""><i class="fa-brands fa-twitter px-2 fs-3"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin px-2 fs-3"></i></a>
                        <a style="color: red;" href=""><i class="fa-brands fa-pinterest px-2 fs-3"></i></a>
                        <a style="color: rgb(209, 209, 51);" href=""><i class="fa-brands fa-google px-2 fs-3"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 h-50 ">
                    <div class=" d-flex justify-content-between px-5 " style="font-size: 13px;">
                        <div>
                            <p class="pb-3 "><b>SHOP</b></p>
                            <p>All Products</p>
                            <p>Flowers</p>
                            <p>Plants</p>
                            <p>Gifts</p>
                            <p>Spring Flowers</p>
                            <p>Mother's Day</p>
                        </div>
                        <div class="pt-5">
                            <p>Same Day Flowers</p>
                            <p>Spring Flowers</p>
                            <p>Easter Sunday</p>
                            <p>Admin Day</p>
                            <p>Discounts and Coupons</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>
<script src="./code.jquery.com_jquery-3.7.0.min.js"></script>
<script>

    $(document).ready(function () {

        $('.account').click(function () {
            $('.signin').slideToggle()
        })

    })
</script>

</html>