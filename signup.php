  
  <?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    if ($password !== $confirmPassword) {
        echo("❌ Passwords do not match!");
        
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL
    $sql = "INSERT INTO user_auth (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // DEBUG: check if prepare() failed
    if (!$stmt) {
        die("❌ Prepare failed: " . $conn->error);
    }

    // Bind parameters and execute
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: login.php");
        // echo "✅ Signup successful! <a href='login.php'>Login here</a>";
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LA'FLEUR DECOR/SignUp Your Account</title>
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
      <link rel="stylesheet" href="signup.css">    
        
      
      </head>
<body>
    <div>
    <div class="gif"></div>
    <div class="bg-white">
      <!-- logo and search bar -->
      <div class="container-fluid border-bottom pb-3 " style="width: 95%;">
        <div class="row">
          <div class="col-sm-4 d-flex justify-content-center ">
            <i class=" mt-5 fs-6 bi bi-search h-50 "></i>
            <input class="border-0 fs-6 mt-5 w-100 " type="text" placeholder="search" style="height: fit-content;">
          </div>
          <div class="col-sm-4 text-center py-0 "><img class="w-50" src="./img/laf.webp" alt="" srcset=""></div>
          <div class="col-sm-4 d-flex justify-content-center mt-5">
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
                  <a class="anchor nav-link" aria-current="page" href="./index.php">Home</a>
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
    <div class="">

      
    <!-- sign up start my account -->
    


    
    <div class=" container-fluid  py-5 my-5 " >
        <div class="container border-5 ">
          <div class="row d-flex justify-content-center">
            <div class=" col-sm-5 border border-5  p-5 border-pink " style="background-color: rgba(0, 0, 0, 0.253);">
              <h1 class="text-center">Create Account</h1>
              <h2 class="pt-5 ">Sign Up</h2>
              <form action="" method="post" class="pt-5 border-top">
                <input class=" w-100 p-2 " type="text" placeholder="Username" name="username" required><br>
                <input class="mt-2 w-100 p-2 " type="text" placeholder="Email" name="email" required><br>
                <input class="mt-2 w-100 p-2" type="password" placeholder="Password" name="password" required><br>
                <input class="mt-2 w-100 p-2" type="password" placeholder="Confirm Password" name="confirm_password" required><br>
                <div class="d-flex">
                  <input type="checkbox">
                  <p class="mt-3 px-2">Confirm your email</p>
                </div>
                <input type="submit" class="signup btn btn-outline-danger w-100" value="Sign Up">
                <!-- <button class=">Login</button> -->
                <button class="btn btn-dark w-100 mt-3">Cancel</button>
              </form>
              <div class="d-flex ">
                <p class=" px-2 pt-2">Already have an account? please <span class=" text-danger Login"><a href="login.php" class="text-danger">  Login </a></span> to
                    your existing account.</p>

            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- sign up start my account -->


      <!-- sign in start my account -->
      <div class="sign0 container-fluid  " style="background-color: rgba(231, 220, 229, 0.548);">
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
                <h6 class="text-info pt-2"><a class="text-decoration-none" href="./signup.php"> Creat New Account </a> </h6>
  
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- sign in start my account -->
    </div>
</div>
<footer style="background-color: rgba(255, 255, 255, 0.76)">
    <div class="container-fluid">
      <div class="row py-5 h-50">
        <div class="col-sm-4 h-50 ">
          <div class=" d-flex justify-content-between px-5 border-end" style="font-size: 13px;">
            <div >
          <p><b>INFORMATION</b></p>
          <p>About Us</p>
          <p>Contact</p>
          <p>Careers</p>
          <p>Blog</p>
          <p>Privacy Policy</p>
          <p>Terms & Conditions</p>
        </div>
            <div >
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
            <div >
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
    $(document).ready(function(){
        $('.Login').click(function () {
      $('.signin').slideToggle()
    })
        $('.account').click(function () {
      $('.signin').slideToggle()
    })
    $('.signup').click(function () {
      $('.signin').slideToggle()
    })

    })
</script>
</html>