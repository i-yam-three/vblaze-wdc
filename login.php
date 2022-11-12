<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>VBLAZE 14 Day Website Design Challenge || St. Thomas College of Engineering & Technology, Kannur</title>
   <meta name="description" content="St Thomas Engineering College, Sivapuram, Mattannur was established by St Thomas Educational Society, Adoor with a view to impart high quality engineering education through systematic studies and efficient training. The college has a team of eminent faculty members and a disciplined atmosphere which help to promote a holistic approach to learning. There is a right balance of cognitive, conceptual, ethical, humane and spiritual growth as a whole. . The institution within its short span of existence plans to be a centre of excellence in engineering education, by bringing out the young engineers devoted and socially committed.The college is approved by the All India council for Technical Education and affiliated to both Kannur University and A P J Abdul Kalam Technological University placement Portal">
   <meta name="keywords" content="ktu, kannur university, St.Thomas College of Engineering, Sivapuram, Mattannur, Kannur, Kerala, India, Kerala Technological University, Apj Abdulkalam, jose thomas, Engineering College, Stthomas Kannur, stm, stc, B.Tech, Civil Engineering, Mechanical Engineering, Electronics and COmmunication Engineering, COmputer Scinece and Engineering, Maloor, Kannur Airport">
   <meta name="author" content="VBLAZE - STM Design Club">
   <link rel="stylesheet" href="style.css">
   <title>Login page</title>
</head>
<body>

<style>
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://res.cloudinary.com/mhmd/image/upload/v1555917661/art-colorful-contemporary-2047905_dxtao7.jpg');
  background-size: cover;
  background-position: center center;
}
   </style>
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
                            <h3 class="display-4">VBLAZE-WDC Portal</h3>
                            <p class="text-muted mb-4">            Login to your account using email and password.</p>
                            <form method="post" action="login_action.php">
                            <?php
         if(isset($_SESSION['error'])){
            echo "<div class='errorMsg'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
         }
         ?>
                                <div class="form-group mb-3">
                                <label for="email">Email</label>
                                    <input id="inputEmail" type="text" name="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                <label for="password">Password</label>
                                    <input id="inputPassword" type="password" name="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" value="LOGIN">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

   <!--div class="formContainer">
      <form method="post" action="login_action.php">
         <h2 class="title">Login</h2>
         <div class="tip">
            Login to your account using email and password
         </div>
         <?php
         if(isset($_SESSION['error'])){
            echo "<div class='errorMsg'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
         }
         ?>
         <label for="email">Email</label>
         <input type="text" name="email" autocomplete="off">
         <label for="password">Password</label>
         <input type="password" name="password">
         <input type="submit" value="LOGIN">
      </form>
      <!--div class="link">
         Don't have an account yet? <a href="signup.php">Sign up</a>
      </div-->
   </div-->
</body>
</html>