<!DOCTYPE html>
<html lang="en">

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
              <h6 class="text-info pt-2"><a class="text-decoration-none" href="signup.php"> Creat New Account </a>
              </h6>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- sign in start my account -->

    <!-- slider with three pics -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="./about.html">
            <img src="./img/2023-07-05 (3).png" width="100%" class="d-block " alt="...">
          </a>
        </div>
        <div class="carousel-item">
          <a href="./about.html">
            <img src="./img/2023-07-05 (4).png" class="d-block w-100" alt="...">
          </a>
        </div>
        <div class="carousel-item">
          <a href="./about.html"><img src="./img/2023-07-05 (5).png" class="d-block w-100" alt="..."></a>
        </div>
      </div>
    </div>
    <!-- slider with three pics -->

    <!-- online flowers  -->
    <div class="container-fluid ">
      <div class="row">
        <div class="col-sm-3 pt-5">
          <div class=" ">
            <h1 class="pt-5 mt-5">Online Flower <br class="pt-3"> Delivery Experts</h1>
            <p class=" pt-3" style="font-size: 14px;">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
              amet
              sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
            </p>
            <a href="./about.html"><button class="btn btn-outline-danger rounded-pill px-4 mt-3">LEARN MORE
                ></button></a>
          </div>
        </div>
        <div class="col-sm-9 px-0">
          <div class="pic pt-5 ">

            <img class="pic2   mt-5 px-5" src="./img/h1-banner2.jpg" alt="" srcset="">
          </div>
        </div>
      </div>
    </div>
    <!-- online flowers  -->

    <!-- TRENDY FLOWER NEW COLLECTION -->
    <div class="container-fluid py-5">
      <div class="row ">
        <div class="col-sm-6 p-5">
          <div class="img p-5">
            <p class="bg-danger p-1 mt-4 d-inline-block text-white"> NEW COLLECTION</p>
            <h3>TRENDY FLOWER
              <br> BOUQUET
            </h3>
            <p class="pt-"><a class="text-black " href="./birthday.html">SHOP NOW</a></p>
          </div>
        </div>
        <div class="col-sm-6 p-5">
          <div class="img1 p-5">
            <p class="bg-danger p-1 mt-4 d-inline-block text-white">NEW COLLECTION</p>
            <h3>VALENTINE BEST
              <br> FLOWER
            </h3>
            <p class=""><a class="text-black " href="./valentine.html">SHOP NOW</a></p>

          </div>
        </div>
      </div>
    </div>
    <!-- TRENDY FLOWER NEW COLLECTION -->

    <!-- Deals Of The Week -->
    <div class="container text-center">
      <h5 class="style pt-5" style="color: rgb(247, 84, 111);">𝓦𝓲𝓽𝓱 𝓵𝓸𝓿𝓮 & 𝓭𝓮𝓭𝓲𝓬𝓪𝓽𝓲𝓸𝓷</h5>
      <h2>Deals Of The Week</h2>
      <div class="d-flex justify-content-center">
        <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
        <i class="bi bi-brightness-high fs-4 px-2" style="color: rgb(247, 84, 111);"></i>
        <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
      </div>
    </div>
    <!-- Deals Of The Week -->

    <!-- caruesal card countdown picture deatail -->
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active w-100">
          <div class="container">
            <div class="row">
              <!-- Backword countown col-2 -->
              <div class="col-sm-2 bg-dark border p-2">
                <div class="border p-1">
                  <div class="border ">
                    <div class=" text-center fs-2 text-white pt-2">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class=" text-center">
                      <div class="border-bottom pt-4 fs-4">
                        <div class="count day" style="color: rgb(247, 84, 111);">224</div>
                        <p class="text-white fs-5">DAYS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count hr" style="color: rgb(247, 84, 111);">18</div>
                        <p class="text-white fs-5">HOURS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count min" style="color: rgb(247, 84, 111);">57</div>
                        <p class="text-white fs-5">MINs</p>
                      </div>
                      <div class=" pt-1 fs-4">
                        <div class="count sec" style="color: rgb(247, 84, 111);">43</div>
                        <p class="text-white fs-5">SECS</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Backword countown col-2 -->
              <!-- card picture col-5 -->
              <div class="col-sm-5 mt-3">
                <img class="w-100" src="./img/f1.jpg" class="d-block w-100" alt="...">
              </div>
              <!-- card picture col-5 -->
              <!-- card buyer details col-5  -->
              <div class="col-sm-5 ">
                <img class="fs-6 w-25 " src="./img/rating.png" alt="">
                <h4>Mummy Flowers</h4>
                <p class="fs-5" style="color: rgb(247, 84, 111);">$22.62 <span
                    class="fs-6 text-decoration-line-through px-3" style="color: grey;">$35.30</span></p>
                <p style="font-size: small;">"Mum flowers" is a term commonly used to refer to chrysanthemums, which are
                  a
                  popular type of flower. Chrysanthemums come in various colors and have a unique appearance with
                  multiple
                  layers of petals. They symbolize joy, happiness, and longevity. These flowers are often associated
                  with
                  autumn and are frequently used in floral arrangements and bouquets due to their vibrant colors and
                  long-lasting blooms.</p>
                <a href="./cart1.php"><button class="btn btn-danger px-4 rounded-0 mt-5 mx-3">BUY NOW</button></a>
            

              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <!-- Backword countown col-2 -->
              <div class="col-sm-2 bg-dark border p-2">
                <div class="border p-1">
                  <div class="border ">
                    <div class=" text-center fs-2 text-white pt-2">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class=" text-center">
                      <div class="border-bottom pt-4 fs-4">
                        <div class="count day" style="color: rgb(247, 84, 111);">33</div>
                        <p class="text-white fs-5">DAYS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count hr" style="color: rgb(247, 84, 111);">23</div>
                        <p class="text-white fs-5">HOURS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count min" style="color: rgb(247, 84, 111);">47</div>
                        <p class="text-white fs-5">MINs</p>
                      </div>
                      <div class=" pt-1 fs-4">
                        <div class="count sec" style="color: rgb(247, 84, 111);">59</div>
                        <p class="text-white fs-5">SECS</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Backword countown col-2 -->
              <!-- card picture col-5 -->
              <div class="col-sm-5">
                <img class="w-100" src="./img/f2.jpg" class="d-block w-100" alt="...">
              </div>
              <!-- card picture col-5 -->
              <!-- card buyer details col-5  -->
              <div class="col-sm-5 ">
                <img class="fs-6 w-25 " src="./img/rating.png" alt="">
                <h4>Heavenly Red Rose</h4>
                <p class="fs-5" style="color: rgb(247, 84, 111);">$18.62 <span
                    class="fs-6 text-decoration-line-through px-3" style="color: grey;">$20.30</span></p>
                <p style="font-size: small;">The heavenly red rose blooms with timeless elegance, its petals embodying
                  passion and love. Its fragrance dances on the breeze, enchanting all who encounter its beauty. A
                  celestial gift, a symbol of devotion that whispers of eternal romance.</p>
                <a href="./cart2.php"><button class="btn btn-danger px-4 rounded-0 mt-5 mx-3">BUY NOW</button></a>
                <div class="col-sm-1"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- card buyer details col-5  -->

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <!-- Backword countown col-2 -->
              <div class="col-sm-2 bg-dark border p-2">
                <div class="border p-1">
                  <div class="border ">
                    <div class=" text-center fs-2 text-white pt-2">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class=" text-center">
                      <div class="border-bottom pt-4 fs-4">
                        <div class="count day" style="color: rgb(247, 84, 111);">33</div>
                        <p class="text-white fs-5">DAYS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count hr" style="color: rgb(247, 84, 111);">23</div>
                        <p class="text-white fs-5">HOURS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count min" style="color: rgb(247, 84, 111);">47</div>
                        <p class="text-white fs-5">MINs</p>
                      </div>
                      <div class=" pt-1 fs-4">
                        <div class="count sec" style="color: rgb(247, 84, 111);">59</div>
                        <p class="text-white fs-5">SECS</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Backword countown col-2 -->
              <!-- card picture col-5 -->
              <div class="col-sm-5">
                <img class="w-100" src="./img/f3.jpg" class="d-block w-100" alt="...">
              </div>
              <!-- card picture col-5 -->
              <!-- card buyer details col-5  -->
              <div class="col-sm-5 ">
                <img class="fs-6 w-25 " src="./img/rating.png" alt="">
                <h4>Luxery Red Rose</h4>
                <p class="fs-5" style="color: rgb(247, 84, 111);">$33.62 <span
                    class="fs-6 text-decoration-line-through px-3" style="color: grey;">$49.30</span></p>
                <p style="font-size: small;">The luxurious red rose stands as a regal testament to opulence and desire.
                  Its velvety petals beckon with grace, a statement of refined taste and lavish indulgence. A symbol of
                  grandeur, it captivates hearts and embodies the essence of luxury, inviting admiration and adoration
                  in
                  its wake.</p>
                <button class="btn btn-danger px-4 rounded-0 mt-5 mx-3">BUY NOW</button>
                <div class="col-sm-1"></div>
              </div>
              <!-- card buyer details col-5  -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <!-- Backword countown col-2 -->
              <div class="col-sm-2 bg-dark border p-2">
                <div class="border p-1">
                  <div class="border ">
                    <div class=" text-center fs-2 text-white pt-2">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class=" text-center">
                      <div class="border-bottom pt-4 fs-4">
                        <div class="count day" style="color: rgb(247, 84, 111);">55</div>
                        <p class="text-white fs-5">DAYS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count hr" style="color: rgb(247, 84, 111);">24</div>
                        <p class="text-white fs-5">HOURS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count min" style="color: rgb(247, 84, 111);">57</div>
                        <p class="text-white fs-5">MINs</p>
                      </div>
                      <div class=" pt-1 fs-4">
                        <div class="count sec" style="color: rgb(247, 84, 111);">59</div>
                        <p class="text-white fs-5">SECS</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Backword countown col-2 -->
              <!-- card picture col-5 -->
              <div class="col-sm-5">
                <img class="w-100" src="./img/f4.jpg" class="d-block w-100" alt="...">
              </div>
              <!-- card picture col-5 -->
              <!-- card buyer details col-5  -->
              <div class="col-sm-5 ">
                <img class="fs-6 w-25 " src="./img/rating.png" alt="">
                <h4>Birthday Flower</h4>
                <p class="fs-5" style="color: rgb(247, 84, 111);">$27.62 <span
                    class="fs-6 text-decoration-line-through px-3" style="color: grey;">$44.30</span></p>
                <p style="font-size: small;">On your special day, I present you with a bouquet of birthday flowers,
                  vibrant and full of life. Each bloom carries wishes for happiness, love, and success. May their colors
                  brighten your world, their fragrance fill your heart, and their beauty be a reminder of how cherished
                  you are.</p>
                <a href="./cart3.php"><button class="btn btn-danger px-4 rounded-0 mt-5 mx-3">BUY NOW</button></a>
                <div class="col-sm-1"></div>
              </div>
              <!-- card buyer details col-5  -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <!-- Backword countown col-2 -->
              <div class="col-sm-2 bg-dark border p-2">
                <div class="border p-1">
                  <div class="border ">
                    <div class=" text-center fs-2 text-white pt-2">
                      <i class="bi bi-alarm"></i>
                    </div>
                    <div class=" text-center">
                      <div class="border-bottom pt-4 fs-4">
                        <div class="count day" style="color: rgb(247, 84, 111);">87</div>
                        <p class="text-white fs-5">DAYS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count hr" style="color: rgb(247, 84, 111);">14</div>
                        <p class="text-white fs-5">HOURS</p>
                      </div>
                      <div class="border-bottom pt-1 fs-4">
                        <div class="count min" style="color: rgb(247, 84, 111);">36</div>
                        <p class="text-white fs-5">MINs</p>
                      </div>
                      <div class=" pt-1 fs-4">
                        <div class="count sec" style="color: rgb(247, 84, 111);">59</div>
                        <p class="text-white fs-5">SECS</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Backword countown col-2 -->
              <!-- card picture col-5 -->
              <div class="col-sm-5">
                <img class="w-100" src="./img/f5.jpg" class="d-block w-100" alt="...">
              </div>
              <!-- card picture col-5 -->
              <!-- card buyer details col-5  -->
              <div class="col-sm-5 ">
                <img class="fs-6 w-25 " src="./img/rating.png" alt="">
                <h4>New Rose</h4>
                <p class="fs-5" style="color: rgb(247, 84, 111);">$50.62 <span
                    class="fs-6 text-decoration-line-through px-3" style="color: grey;">$70.30</span></p>
                <p style="font-size: small;">The new rose emerged, its petals unfurling like delicate whispers of hope.
                  Vibrant and captivating, it exudes a mesmerizing fragrance, inviting hearts to indulge in its
                  enchantment. A symbol of fresh beginnings, its velvety embrace embraces the promise of love, igniting
                  a
                  symphony of emotions in its wake.</p>
                <button class="btn btn-danger px-4 rounded-0 mt-5 mx-3">BUY NOW</button>
                <div class="col-sm-1"></div>
              </div>
              <!-- card buyer details col-5  -->
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- caruesal card countdown picture deatail -->

    <!-- Container fluid (swiper-cards),(background picture),(three grid col),(swiper-slide card Shop by Category) -->
    <div class="container-fluid  w-100 mt-5 pb-5" style="background-color: #f5f5f5;">

      <!-- background-color and background picture   -->
      <div class="row">
        <div class="col-sm-4 px-0">
          <div class="bgproduct "></div>
        </div>
        <div class="col-sm-4">
          <!-- Deals Of The Week -->
          <div class="container text-center mt-4 mt-5 pb-5 mb-5">
            <h5 class="style pt-5" style="color: rgb(247, 84, 111);">𝓦𝓲𝓽𝓱 𝓵𝓸𝓿𝓮 & 𝓭𝓮𝓭𝓲𝓬𝓪𝓽𝓲𝓸𝓷</h5>
            <h2>Deals Of The Week</h2>
            <div class="d-flex justify-content-center">
              <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
              <i class="bi bi-brightness-high fs-4 px-2" style="color: rgb(247, 84, 111);"></i>
              <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
            </div>
          </div>
          <!-- Deals Of The Week -->
        </div>
        <div class="col-sm-4"></div>
      </div>
      <!-- background-color and background picture   -->

      <!-- swiper-slider cards  -->
      <swiper-container class="mySwiper pb-5" init="false">
  <!-- swiper-slide 1 -->
  <swiper-slide>
    <div class="swiper-shadow border border-2 mb-5 w-100">
      <a href="cart1.php"><img src="./img/card1.jpg" alt=""></a>
      <div class="bg-white d-flex justify-content-between px-3 pt-3">
        <div>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
        </div>
        <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
      </div>
      <div class="bg-white d-flex px-3 justify-content-between">
        <p class="fs-6"><b>Mummy Flower</b></p>
        <p class="fs-6 text-decoration-line-through" style="color: grey;">$70.30</p>
      </div>
      <form action="add_to_cart.php" method="post" class="bg-white px-4 pb-3">
        <input type="hidden" name="product_name" value="Mummy Flower">
        <input type="hidden" name="product_price" value="22.62">
        <input type="hidden" name="product_image" value="./img/card1.jpg">
        <button type="submit" class="swiper-hover p-2 fs-6 border fw-bold text-center w-100 bg-transparent border-0">
          ADD TO CART
        </button>
      </form>
    </div>
  </swiper-slide>

  <!-- swiper-slide 2 -->
  <swiper-slide>
    <div class="swiper-shadow border w-100">
      <a href="cart5.php"><img src="./img/card2.jpg" alt=""></a>
      <div class="bg-white d-flex justify-content-between px-3 pt-3">
        <div>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px; color: orange;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
        </div>
        <p class="fs-6" style="color: rgb(247, 84, 111);">$30.62</p>
      </div>
      <div class="bg-white d-flex px-3 justify-content-between">
        <p class="fs-6"><b>Beauty Flower</b></p>
        <p class="fs-6 text-decoration-line-through" style="color: grey;">$80.30</p>
      </div>
      <form action="add_to_cart.php" method="post" class="bg-white px-4 pb-3">
        <input type="hidden" name="product_name" value="Beauty Flower">
        <input type="hidden" name="product_price" value="30.62">
        <input type="hidden" name="product_image" value="./img/card2.jpg">
        <button type="submit" class="swiper-hover p-2 fs-6 border fw-bold text-center w-100 bg-transparent border-0">
          ADD TO CART
        </button>
      </form>
    </div>
  </swiper-slide>

  <!-- swiper-slide 3 -->
  <swiper-slide>
    <div class="swiper-shadow border w-100">
      <a href="cart6.php"><img src="./img/card3.jpg" alt=""></a>
      <div class="bg-white d-flex justify-content-between px-3 pt-3">
        <div>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
        </div>
        <p class="fs-6" style="color: rgb(247, 84, 111);">$25.62</p>
      </div>
      <div class="bg-white d-flex px-3 justify-content-between">
        <p class="fs-6"><b>New Rose</b></p>
        <p class="fs-6 text-decoration-line-through" style="color: grey;">$60.30</p>
      </div>
      <form action="add_to_cart.php" method="post" class="bg-white px-4 pb-3">
        <input type="hidden" name="product_name" value="New Rose">
        <input type="hidden" name="product_price" value="25.62">
        <input type="hidden" name="product_image" value="./img/card3.jpg">
        <button type="submit" class="swiper-hover p-2 fs-6 border fw-bold text-center w-100 bg-transparent border-0">
          ADD TO CART
        </button>
      </form>
    </div>
  </swiper-slide>

  <!-- swiper-slide 4 -->
  <swiper-slide>
    <div class="swiper-shadow border w-100">
     <a href="cart2.php"> <img src="./img/card4.jpg" alt=""></a>
      <div class="bg-white d-flex justify-content-between px-3 pt-3">
        <div>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
        </div>
        <p class="fs-6" style="color: rgb(247, 84, 111);">$15.62</p>
      </div>
      <div class="bg-white d-flex px-3 justify-content-between">
        <p class="fs-6"><b>Heavenly Red Rose</b></p>
        <p class="fs-6 text-decoration-line-through" style="color: grey;">$50.30</p>
      </div>
      <form action="add_to_cart.php" method="post" class="bg-white px-4 pb-3">
        <input type="hidden" name="product_name" value="Heavenly Red Rose">
        <input type="hidden" name="product_price" value="15.62">
        <input type="hidden" name="product_image" value="./img/card4.jpg">
        <button type="submit" class="swiper-hover p-2 fs-6 border fw-bold text-center w-100 bg-transparent border-0">
          ADD TO CART
        </button>
      </form>
    </div>
  </swiper-slide>

  <!-- swiper-slide 5 -->
  <swiper-slide>
    <div class="swiper-shadow border w-100">
      <a href="cart4.php"><img src="./img/card5.jpg" alt=""></a>
      <div class="bg-white d-flex justify-content-between px-3 pt-3">
        <div>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
        </div>
        <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
      </div>
      <div class="bg-white d-flex px-3 justify-content-between">
        <p class="fs-6"><b>Birthday Flower</b></p>
        <p class="fs-6 text-decoration-line-through" style="color: grey;">$70.30</p>
      </div>
      <form action="add_to_cart.php" method="post" class="bg-white px-4 pb-3">
        <input type="hidden" name="product_name" value="Birthday Flower">
        <input type="hidden" name="product_price" value="22.62">
        <input type="hidden" name="product_image" value="./img/card5.jpg">
        <button type="submit" class="swiper-hover p-2 fs-6 border fw-bold text-center w-100 bg-transparent border-0">
          ADD TO CART
        </button>
      </form>
    </div>
  </swiper-slide>

  <!-- swiper-slide 6 -->
  <swiper-slide>
    <div class="swiper-shadow border w-100">
      <a href="cart7.php"><img src="./img/card6.jpg" alt=""></a>
      <div class="bg-white d-flex justify-content-between px-3 pt-3">
        <div>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
          <span class="fa fa-star" style="font-size: 13px;"></span>
        </div>
        <p class="fs-6" style="color: rgb(247, 84, 111);">$22.62</p>
      </div>
      <div class="bg-white d-flex px-3 justify-content-between">
        <p class="fs-6"><b>Jasmine Flower</b></p>
        <p class="fs-6 text-decoration-line-through" style="color: grey;">$70.30</p>
      </div>
      <form action="add_to_cart.php" method="post" class="bg-white px-4 pb-3">
        <input type="hidden" name="product_name" value="Birthday Flower 2">
        <input type="hidden" name="product_price" value="22.62">
        <input type="hidden" name="product_image" value="./img/card6.jpg">
        <button type="submit" class="swiper-hover p-2 fs-6 border fw-bold text-center w-100 bg-transparent border-0">
          ADD TO CART
        </button>
      </form>
    </div>
  </swiper-slide>
</swiper-container>

      <!-- swiper-slider cards  -->

      <!-- three grid col -->
      <div class="row py-5 mt-5">
        <div class="col-sm-4 mt-2">
          <img class="w-100" src="./img/bn1.png" alt="" srcset="">
        </div>
        <div class="col-sm-4 mt-2">
          <img class="w-100" src="./img/bn2.png" alt="" srcset="">
        </div>
        <div class="col-sm-4 mt-2">
          <img class="w-100" src="./img/bn3.png" alt="" srcset="">
        </div>
      </div>
      <!-- three grid col -->
      <div class="pt-5">
        <h1 class="text-center mt-5 ">Shop by Category</h1>
      </div>
      <!-- swiper-slide card Shop by Category -->
      <swiper-container id="swiper-container" class="mySwiper mt-5 pb-5" init="false">
        <!-- Shop by Category 1 -->
        <swiper-slide id="swiper-slide">
          <div class="mb-5">
            <img class="border rounded-circle" src="./img/categories-1.jpg" alt="" srcset="">
            <div class="Category">
              <h5><a href=""> Best Sellers</a></h5>
            </div>
          </div>
        </swiper-slide>
        <!-- Shop by Category 1 -->
        <!-- Shop by Category 2 -->
        <swiper-slide id="swiper-slide">
          <img class="border rounded-circle" src="./img/categories-2.jpg" alt="" srcset="">
          <div class="Category">
            <h5><a href=""> Same Day Flower </a></h5>
          </div>
        </swiper-slide>
        <!-- Shop by Category 2 -->
        <!-- Shop by Category 3 -->
        <swiper-slide id="swiper-slide">
          <img class="border rounded-circle" src="./img/categories-3.jpg" alt="" srcset="">
          <div class="Category">
            <h5><a href=""> Next Day Flower </a></h5>
          </div>
        </swiper-slide>
        <!-- Shop by Category 3 -->
        <!-- Shop by Category 4 -->
        <swiper-slide id="swiper-slide">
          <img class="border rounded-circle" src="./img/categories-4.jpg" alt="" srcset="">
          <div class="Category">
            <h5><a href=""> Curiuse Flower </a></h5>
          </div>
        </swiper-slide>
        <!-- Shop by Category 4 -->
        <!-- Shop by Category 5 -->
        <swiper-slide id="swiper-slide">
          <img class="border rounded-circle" src="./img/categories-5.jpg" alt="" srcset="">
          <div class="Category">
            <h5><a href=""> Plants & Gifts </a></h5>
          </div>
        </swiper-slide>
        <!-- Shop by Category 5 -->
        <!-- Shop by Category 6 -->
        <swiper-slide id="swiper-slide">
          <img class="border rounded-circle" src="./img/categories-3 (1).jpg" alt="" srcset="">
          <div class="Category">
            <h5><a href=""> Luxury Flower </a></h5>
          </div>
        </swiper-slide>
        <!-- Shop by Category 6 -->
        <!-- Shop by Category 7 -->
        <swiper-slide id="swiper-slide">
          <img class="border rounded-circle" src="./img/categories-1.jpg" alt="" srcset="">
          <div class="Category">
            <h5><a href=""> Luxury Flower </a></h5>
          </div>
        </swiper-slide>
        <!-- Shop by Category 7 -->
      </swiper-container>
      <!-- swiper-slide card Shop by Category -->
    </div>
    <!-- Container fluid (swiper-cards),(background picture),(three grid col),(swiper-slide card Shop by Category) -->
  </div>
  <!-- background color black opacity low intensity -->
  <div class="black pt-5">
    <!-- swiper-container Swiper-slider clints sider  -->
    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="pt-5 mySwiper"
      speed="600" parallax="true" pagination="true" pagination-clickable="true" navigation="true">
      <div slot="container-start" class="parallax-bg"
        style="background-image: url(https://swiperjs.com/demos/images/nature-1.jpg);" data-swiper-parallax="-23%">
      </div>
      <!-- Swiper-slider clicnt side 1 -->
      <swiper-slide>
        <!-- Deals Of The Week -->
        <div class="container text-center">
          <h5 class="style" style="color: rgb(247, 84, 111);">𝓦𝓲𝓽𝓱 𝓵𝓸𝓿𝓮 & 𝓭𝓮𝓭𝓲𝓬𝓪𝓽𝓲𝓸𝓷</h5>
          <h2>Deals Of The Week</h2>
          <div class="d-flex justify-content-center ">
            <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
            <i class="bi bi-brightness-high fs-4 px-2" style="color: rgb(247, 84, 111);"></i>
            <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
          </div>
        </div>
        <!-- Deals Of The Week -->

        <div class="d-flex justify-content-center " style="align-items: center;">
          <div class="container w-50">
            <div class="title d-flex justify-content-center " data-swiper-parallax="-300">
              <img class="avatar rounded-circle mt-5" style="width: 110px;" src="./img/avatar-1.jpg" alt="">
            </div>
            <div class="subtitle pt-3 text-center" data-swiper-parallax="-200">
              <h6 class="client">Cornelius Reeves - <span style="color: rgb(247, 84, 111);">Online Marketer</span></h6>
            </div>
            <div class="text" data-swiper-parallax="-100">
              <p class="text-center pt-3" style="font-size: 10px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                tincidunt ut libero. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
        </div>

      </swiper-slide>
      <!-- Swiper-slider clicnt side 1 -->
      <!-- Swiper-slider clicnt side 2 -->
      <swiper-slide>
        <!-- Deals Of The Week -->
        <div class="container text-center">
          <h5 class="style" style="color: rgb(247, 84, 111);">𝓦𝓲𝓽𝓱 𝓵𝓸𝓿𝓮 & 𝓭𝓮𝓭𝓲𝓬𝓪𝓽𝓲𝓸𝓷</h5>
          <h2>Deals Of The Week</h2>
          <div class="d-flex justify-content-center ">
            <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
            <i class="bi bi-brightness-high fs-4 px-2" style="color: rgb(247, 84, 111);"></i>
            <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
          </div>
        </div>
        <!-- Deals Of The Week -->

        <div class="d-flex justify-content-center " style="align-items: center;">
          <div class="container w-50">
            <div class="title d-flex justify-content-center " data-swiper-parallax="-300">
              <img class="avatar rounded-circle mt-5" style="width: 110px;" src="./img/avatar-2.jpg" alt="">
            </div>
            <div class="subtitle pt-3 text-center" data-swiper-parallax="-200">
              <h6 class="client">Adwerd Bosmen - <span style="color: rgb(247, 84, 111);">Online Sells Marketer</span>
              </h6>
            </div>
            <div class="text" data-swiper-parallax="-100">
              <p class="text-center pt-3" style="font-size: 10px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                tincidunt ut libero. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
        </div>

      </swiper-slide>
      <!-- Swiper-slider clicnt side 2 -->
      <!-- Swiper-slider clicnt side 3 -->
      <swiper-slide>
        <!-- Deals Of The Week -->
        <div class="container text-center">
          <h5 class="style" style="color: rgb(247, 84, 111);">𝓦𝓲𝓽𝓱 𝓵𝓸𝓿𝓮 & 𝓭𝓮𝓭𝓲𝓬𝓪𝓽𝓲𝓸𝓷</h5>
          <h2>Deals Of The Week</h2>
          <div class="d-flex justify-content-center ">
            <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
            <i class="bi bi-brightness-high fs-4 px-2" style="color: rgb(247, 84, 111);"></i>
            <hr class="w-25 border-4" style="color: rgb(247, 84, 111);">
          </div>
        </div>
        <!-- Deals Of The Week -->

        <div class="d-flex justify-content-center " style="align-items: center;">
          <div class="container w-50">
            <div class="title d-flex justify-content-center " data-swiper-parallax="-300">
              <img class="avatar rounded-circle mt-5" style="width: 110px;" src="./img/avatar-3.jpg" alt="">
            </div>
            <div class="subtitle pt-3 text-center" data-swiper-parallax="-200">
              <h6 class="client">Salena Gomez - <span style="color: rgb(247, 84, 111);">Online Advertisment</span></h6>
            </div>
            <div class="text" data-swiper-parallax="-100">
              <p class="text-center pt-3" style="font-size: 10px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                tincidunt ut libero. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
        </div>

      </swiper-slide>
      <!-- Swiper-slider clicnt side 3 -->
    </swiper-container>
    <!-- swiper-container Swiper-slider clints sider  -->
  </div>
  <!-- background color black opacity low intensity -->

  <!-- Worldwide shipping -->
  <div class="bg-white container-fluid">
    <div class="container">
      <div class="row py-5 ">
        <div class="col-sm-3 py-5 my-5 text-center">
          <img style="width: 50px;" src="./img/1.png" alt="">
          <h5 class="mt-3">Worldwide Shipping</h5>
          <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
        <div class="col-sm-3 py-5 my-5 text-center">
          <img style="width: 50px;" src="./img/2.png" alt="">
          <h5 class="mt-3">Worldwide Shipping</h5>
          <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
        <div class="col-sm-3 py-5 my-5 text-center">
          <img style="width: 50px;" src="./img/3.png" alt="">
          <h5 class="mt-3">Worldwide Shipping</h5>
          <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
        <div class="col-sm-3 py-5 my-5 text-center">
          <i class="bi bi-flower2 " style="font-size: 40px;"></i>
          <h5 class="mt-2">Worldwide Shipping</h5>
          <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Worldwide shipping -->

  <footer style="background-color: rgba(0, 0, 0, 0.062);">
    <div class="container-fluid">
      <div class="row py-5 h-50">
        <div class="col-sm-4 h-50 ">
          <div class=" d-flex justify-content-between px-5 border-end" style="font-size: 13px;">
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
        <div class="col-sm-4  border-end">
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
              <p class="pb-3"><b>SHOP</b></p>
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

    // days
    function dec_day() {
      let day = parseInt($('.day').html())
      if (day !== 0) {
        $('.day').html(day - 1)
        $('.hr').html(59)
        $('.min').html(59)
        $('.sec').html(59)
      }
      else {
        dec_month()
      }
    }
    // days

    // hours
    function dec_hr() {
      let hr = parseInt($('.hr').html())
      if (hr !== 0) {
        $('.hr').html(hr - 1)
        $('.min').html(59)
        $('.sec').html(59)
      }
      else {
        dec_day()
      }
    }
    // hours
    // minutes


    function dec_min() {
      let min = parseInt($('.min').html())
      if (min !== 0) {
        $('.min').html(min - 1)
        $('.sec').html(59)
      }
      else {
        dec_hr()
      }
    }
    // minuts
    // seconds

    let update = function () {
      $('.sec').each(function () {
        let count = parseInt($(this).html())
        if (count !== 0) {
          $(this).html(count - 1)
        }
        else {
          dec_min()
        }
      })
    }
    setInterval(update, 1000)
  })
  // seconds
  const swiperEl = document.querySelector('swiper-container')
  Object.assign(swiperEl, {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      clickable: true,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });

  swiperEl.initialize();


  const swiperE2 = document.querySelector('#swiper-container')
  Object.assign(swiperE2, {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
  swiperE2.initialize();
  const swiperE3 = document.querySelector('#swiper-container2')
  Object.assign(swiperE3, {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
  swiperE3.initialize();

</script>

</html>