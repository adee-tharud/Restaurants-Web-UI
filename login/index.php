<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Qbox</title>
  </head>
  <body>
    <!-- Container -->
    <div class="container" id="container">
      <!-- Row -->
      <div class="row">
        <!-- Sign Up -->
        <div class="col align-center flex-col sign-up">
          <div class="form-wrapper align-center">
            <form class="form sign-up">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" placeholder="Full Name" />
              </div>
              <div class="input-group">
                <i class="bx bx-mail-send"></i>
                <input type="text" placeholder="Username" />
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password" />
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="text" placeholder="Address" />
              </div>
                <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="text" placeholder="Tel-no" />
              </div>
               <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="text" placeholder="email" />
              </div>
              <button>Sign up</button>
              <p>
                <span>Already have an account?</span>
                <b id="sign-in">Sign in here</b>
              </p>
            </form>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-up">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign Up -->
        <!-- Sign In -->
        <div class="col align-center flex-col sign-in">
          <div class="form-wrapper align-center">
            <div class="form sign-in">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" placeholder="Username" />
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password" />
              </div>
              <button>Sign in</button>
              <p>
                <b>Forgot password?</b>
              </p>
              <p>
                <span> Don't have an account? </span>
                <b id="sign-up">Sign up here</b>
              </p>
            </div>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-in">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign In -->
      </div>
      <!-- End Row -->
      <!-- Content Section -->
      <div class="row content-row">
        <!-- Sign In Content -->
        <div class="col align-items flex-col">
          <div class="text sign-in">
            <h2>Welcome Back</h2>
            <p>
              Welcome Back To Treat Restuarent.
            </p>
          </div>
          <div class="img sign-in">
            <img src="images/rest1.png" alt="" />
          </div>
        </div>

        <!-- Sign Up Content -->
        <div class="col align-items flex-col">
          <div class="img sign-up">
            <img src="images/rest2.png" alt="" />
          </div>
          <div class="text sign-up">
            <h2>Join with us</h2>
            <p>
              Welcome to our Treat restaurent....Join With Us and Enjoy ...
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->

    <!-- Script -->
    <script src="index.js"></script>
  </body>
</html>
