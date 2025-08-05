<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA'FLEUR DECOR/ABOUT US</title>
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


<style>
    .background {
    position: fixed;
    top: 50%;
    transform: translateY(-50%);
    background-image: url(./img/banner_breadcrumb-1-1.jpg);
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100vh;
    /* Adjust the height as needed */
    z-index: -1;
}

.about {
    width: 100%;
    height: 70vh;
    background-color: rgba(0, 0, 0, 0.048);

}

.us {
    width: 100%;
    height: 70vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 80px;
    color: white;
}

.cat {
    border-bottom-right-radius: 100px;
    filter: drop-shadow(2px 2px 5px black);
}

.office {
    filter: drop-shadow(2px 2px 5px black);

}
.flowers{
    background-color: pink;
    width: 140px;
    height: 45px;
    position: fixed;
    top: 45%;
    right: -20px;
    z-index: 5; 
    border-radius: 50px;
    
}
.flower{
    position: sticky;
    z-index: 5;
    filter: drop-shadow(2px 2px 5px black);
    

}
</style>

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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="anchor nav-link " aria-current="page" href="./home.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="anchor mx-2 nav-link " href="shop.html" role="button"
                            aria-expanded="false">
                            Shop
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="anchor mx-2 nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            F-categories
                        </a>
                        <ul class="dropdown-menu">
                            <p class="px-3 pt-2 lh-1"><b>Spacial</b></p>
                            <li><a class="dropdown-item " href="birthday.html">Birthday Flowers</a></li>
                            <li><a class="dropdown-item" href="./wedding.html">Wedding Flowers</a></li>
                            <li><a class="dropdown-item" href="./party.html">Party Flowers</a></li>
                            <li><a class="dropdown-item " href="./anniversary.html">anniversary Flowers</a></li>
                            <li><a class="dropdown-item" href="./valentine.html">Valentine Flowers</a></li>
                            <li><a class="dropdown-item" href="./valentine.html">Flowers Day</a></li>
                            <li><a class="dropdown-item" href="./office.html">Office Flowers</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="anchor nav-link " aria-current="page" href="./contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="anchor mx-2 nav-link " href="about.html" role="button"
                            aria-expanded="false">
                            About Us
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="anchor mx-2 nav-link " href="comparison.html" role="button"
                            aria-expanded="false">
                    Comparison
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- navebar links  -->

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


    <div class="container border my-5">
        <div class="row py-5">
            <div class="col-sm-6">
                <img class="w-100 flower" src="./img/card2.jpg" alt="">
            </div>
            <div class="col-sm-6">
                <h4 class="fw-bold">Beauty Flower</h4>
                <p class="text-secondary">SKU: 232</p>
                <div>
                    <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                    <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                    <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                    <span class="fa fa-star" style="font-size: 13px;"></span>
                    <span class="fa fa-star" style="font-size: 13px;"></span>
                  </div>
                  <p class="fs-3 pt-3 fw-bold" style="color: rgb(247, 84, 111);">$30.62</p>
                  <p class="pt-3">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                  <p class="pt-2">Quantity: 1</p>
                  <button class="btn btn-danger w-50 m-4">Add to Cart</button>
                  <div class="mt-3">
                  <input type="checkbox">
                  <span> I agree with the terms and conditions</span>
                </div>
                <button class="btn btn-outline-danger w-100  mt-4">BUY IT NOW</button>
            </div>
        </div>
    </div>
    <div class="container border">
        <p class="border-bottom pt-3 px-3 pb-2 fw-bold">
            Description
        </p>
        <p class="p-2 text-secondary">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.

            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
    </div>

    <div class="container-fluid ">
        <h2 class="text-center  py-5">Related Flowers</h2>
        

        <!-- swiper-slider cards  -->
      <swiper-container class="mySwiper pb-5" init="false">
        <!-- swiper-slide 1 -->
        <swiper-slide >
          <div class="swiper-shadow border border-2 mb-5 w-100 ">
            <img src="./img/card1.jpg" alt="" srcset="">
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
              <div class="swiper-hover p-2 fs-6 border fw-bold text-center">
                ADD TO CART</div>
            </div>
          </div>
        </swiper-slide>
        <!-- swiper-slide 1 -->
        <!-- swiper-slide 2 -->
        <swiper-slide class="border ">
          <div class="swiper-shadow border w-100 ">
            <img src="./img/card2.jpg" alt="" srcset="">
            <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
              <div>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star" style="font-size: 13px; color: orange;"></span>
                <span class="fa fa-star" style="font-size: 13px;"></span>
              </div>
              <p class="fs-6" style="color: rgb(247, 84, 111);">$30.62</p>
            </div>
            <div class=" bg-white d-flex px-3 justify-content-between">
              <p class="fs-6"><b>Beauty Flower</b></p>
              <p class="fs-6 text-decoration-line-through " style="color: grey;">$80.30</p>
            </div>
            <div class="bg-white px-4 pb-3">
              <div class="swiper-hover text-center p-2 fs-6 border fw-bold">
                ADD TO CART</div>
            </div>
          </div>
        </swiper-slide>
        <!-- swiper-slide 2 -->
        <!-- swiper-slide 3 -->
        <swiper-slide class="border ">
          <div class="swiper-shadow border w-100 ">
            <img src="./img/card3.jpg" alt="" srcset="">
            <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
              <div>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star checked" style="font-size: 13px;"></span>
                <span class="fa fa-star" style="font-size: 13px;"></span>
                <span class="fa fa-star" style="font-size: 13px;"></span>
              </div>
              <p class="fs-6" style="color: rgb(247, 84, 111);">$25.62</p>
            </div>
            <div class=" bg-white d-flex px-3 justify-content-between">
              <p class="fs-6"><b>New Rose</b></p>
              <p class="fs-6 text-decoration-line-through " style="color: grey;">$60.30</p>
            </div>
            <div class="bg-white px-4 pb-3">
              <div class="swiper-hover text-center p-2 fs-6 border fw-bold">
                ADD TO CART</div>
            </div>
          </div>
        </swiper-slide>
        <!-- swiper-slide 3 -->
        <!-- swiper-slide 4 -->
        <swiper-slide class="border ">
          <div class="swiper-shadow border w-100 ">
            <img src="./img/card4.jpg" alt="" srcset="">
            <div class="bg-white d-flex justify-content-between px-3 pt-3 ">
              <div>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star checked" style="color: orange; font-size: 13px;"></span>
                <span class="fa fa-star" style="font-size: 13px;"></span>
                <span class="fa fa-star" style="font-size: 13px;"></span>
              </div>
              <p class="fs-6" style="color: rgb(247, 84, 111);">$15.62</p>
            </div>
            <div class=" bg-white d-flex px-3 justify-content-between">
              <p class="fs-6"><b>Heavenly Red Rose</b></p>
              <p class="fs-6 text-decoration-line-through " style="color: grey;">$50.30</p>
            </div>
            <div class="bg-white px-4 pb-3">
              <div class="swiper-hover text-center p-2 fs-6 border fw-bold">
                ADD TO CART</div>
            </div>
          </div>
        </swiper-slide>
        <!-- swiper-slide 4 -->
        <!-- swiper-slide 5 -->
        <swiper-slide class="border ">
          <div class="swiper-shadow border w-100 ">
            <img src="./img/card5.jpg" alt="" srcset="">
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
              <p class="fs-6"><b>Birthday Flower</b></p>
              <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
            </div>
            <div class="bg-white px-4 pb-3">
              <div class="swiper-hover text-center p-2 fs-6 border fw-bold">
                ADD TO CART</div>
            </div>
          </div>
        </swiper-slide>
        <!-- swiper-slide 5 -->
        <!-- swiper-slide 6 -->
        <swiper-slide class="border ">
          <div class="swiper-shadow border w-100 ">
            <img src="./img/card6.jpg" alt="" srcset="">
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
              <p class="fs-6"><b>Birthday Flower</b></p>
              <p class="fs-6 text-decoration-line-through " style="color: grey;">$70.30</p>
            </div>
            <div class="bg-white px-4 pb-3">
              <div class="swiper-hover text-center p-2 fs-6 border fw-bold">
                ADD TO CART</div>
            </div>
          </div>
        </swiper-slide>
        <!-- swiper-slide 6 -->
      </swiper-container>
      <!-- swiper-slider cards  -->

    </div>
 

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

</script>
</html>