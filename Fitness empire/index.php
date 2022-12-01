<?php
require 'gdb_connection.php';

if(isset($_SESSION['login_id']));

$id = $_SESSION['login_id'];

$get_user = mysqli_query($gdb_connection, "SELECT * FROM `users` WHERE `usersId`='$id'");

if(mysqli_num_rows($get_user) > 0){
    $user = mysqli_fetch_assoc($get_user);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Empire</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS\styles-home.css">

</head>
<body>

<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>Fitness</span>Empire</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#features">features</a>
        <a href="#pricing">pricing</a>
        <a href="#trainers">trainers</a>
        <?php
          if (isset($_SESSION["useruid"])) {
            // echo "<a href='profile.php' >Profile Page</a>";
            echo "<a href='includes/logout.inc.php' class='btn' style='color:black;'' >Log Out</a>";
          }
          elseif (isset($_SESSION['login_id'])) {
            // echo "<a href='profile.php' >Profile Page</a>";
            echo "<a href='glogout.php' class='btn' style='color:black;'' >Log Out</a>";
          }
          else {
            echo "<a href='login.php' class='btn' style='color:black;'' >LOGIN/SIGN-UP</a>";
          }
          ?>
          <div class="msg">
            <?php
            if (isset($_SESSION["useruid"])) {
              echo "Hello " .$_SESSION["useruid"]."";
            }
            if(isset($_SESSION['login_id']))
            {
              echo "Hello ".$user['name'];
            }
            ?>
            <!-- <div class="msg">
              <?php
              // if(isset($_SESSION['submit1']))
              // {
              //   echo "Successfully Registered For Membership";
              // }
               ?>
            </div> -->
    </nav>
</header>


<!-- header section ends     -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/5-home.png) no-repeat;">
                <div class="content">
                    <span class="head-title">be strong, be fit</span>
                    <h3 class="head-title">Make yourself stronger than your excuses.</h3>
                    <a href="appli.html" class="btn" id="btn-home">get started</a>
                </div>
            </div>

            <!-- <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div> -->

        <!-- </div> -->

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>about us</span>
        <h3 class="title">Every day is a chance to become better</h3>
        <p>"If you want something you’ve never had, you must be willing to do something you’ve never done"</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>body and mind</h3>
                <p>A Body & Mind Health Services is committed to helping people find the support they need.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>healthy life</h3>
                <p>A healthy lifestyle keeps you fit, energetic and at reduced risk for disease.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>strategies</h3>
                <p>Execution is a specific set of behaviors and techniques that companies need to master in order to have competitive advantage.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>workout</h3>
                <p>Regular exercise and physical activity may: Help you control your weight.</p>
            </div>
        </div>
        <a href="/appli" class="btn" id="btn-home">get started</a>
    </div>

</section>

<!-- about section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span>gym features</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-1.png" alt="">
                <h3>body building</h3>
                <p>Bodybuilding is the use of progressive resistance exercise to control and develop one's muscles (muscle building) by muscle hypertrophy for aesthetic purposes. </p>
                <!-- <a href="/application" class="btn" id="btn-home">get started</a> -->
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-2.png" alt="">
                <h3>gym for men</h3>
                <p>    </p>
                <p>    </p>
                <p>    </p>
                <a href="appli.html" class="btn" id="btn-home">get started</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <p>    </p>
                <p>    </p>
                <img src="images/icon-3.png" alt="">
                <h3>gym for women</h3>
                <!-- <p>    </p> -->
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p> -->
                <!-- <a href="/application" class="btn" id="btn-home">get started</a> -->
            </div>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your</h3>
        <p>Achieve more muscle growth and fat loss while building your dream summer body. Consistency and training in the "off-season" help you keep the body you want year-round.</p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
        <a href="#" class="btn">all pricing</a>
    </div>

    <div class="plan basic">
        <h3>basic plan</h3>
        <div class="price"><span>₹</span>599<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-xmark fa-1x">X</i> diet plans </p>
        <p> <i class="fas fa-xmark fa-1x">X</i> overall results </p>
       </div>
       <a href="appli.html" class="btn">get started</a>
    </div>

    <div class="plan">
        <h3>premium plan</h3>
        <div class="price"><span>₹</span>1299<span>/3mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="appli.html" class="btn">get started</a>
    </div>

</section>

<!-- pricing section ends -->

<!-- trainers section starts  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>----</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>----</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>----</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <!-- <div class="box">
            <img src="images/trainer-4.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div> -->

    </div>

</section>

<!-- trainers section ends -->

<!-- banner section starts  -->

<section class="banner">

    <span>join us now</span>
    <h3>get upto 20% discount</h3>
    <p>FIGHT FOR FITNESS</p>
    <a href="appli.html" class="btn">get started</a>

</section>

<!-- banner section ends -->

<!-- review section starts  -->

<section class="review">

    <div class="information">
        <span>testimonials</span>
        <h3>what our clients says</h3>
        <p>The customers are the backbone of every business. That is why it is very important for every business to ensure that their customers are satisfied with their products and services. </p>
        <!-- <a href="#" class="btn">read more</a> -->
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>----</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>----</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>----</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>----</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<!-- <section class="blogs" id="blogs">

    <h1 class="heading"> <span>daily posts</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section> -->

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="links" href="#home">home</a>
            <a class="links" href="#about">about</a>
            <a class="links" href="#features">features</a>
            <a class="links" href="#pricing">pricing</a>
            <a class="links" href="#trainers">trainers</a>
            <?php
              if (isset($_SESSION["useruid"])) {
                // echo "<a href='profile.php' >Profile Page</a>";
                echo "<a href='includes/logout.inc.php' class='btn' >Log Out</a>";
              }
              elseif (isset($_SESSION['login_id'])) {
                // echo "<a href='profile.php' >Profile Page</a>";
                echo "<a href='glogout.php' class='btn' >Log Out</a>";
              }
              else {
                echo "<a href='login.php' class='links' >LOGIN/SIGN-UP</a>";
              }
              ?>
            <!-- <a class="links">Sign In</a> -->
        </div>

        <div class="box">
            <h3>opening hours</h3>
            <p> monday : <i> 5:30am - 10:30pm </i> </p>
            <p> tuesday : <i> 5:30am - 10:30pm </i> </p>
            <p> wednesday : <i> 5:30am - 10:30pm </i> </p>
            <p> friday : <i> 5:30am - 10:30pm </i> </p>
            <p> saturday : <i> 5:30am - 10:30pm </i> </p>
            <p> sunday : <i> 5:30am - 1:30pm </i> </p>
        </div>

        <div class="box">
            <h3>opening hours</h3>
            <p> <i class="fas fa-phone"></i> +91-9742727729 </p>
            <p> <i class="fas fa-phone"></i> +91-8431454159 </p>
            <p> <i class="fas fa-envelope"></i> fitnessempire18@gmail.com </p>
            <p> <i class="fas fa-map"></i> Arsikere, Hassan, India </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <!-- <a href="#" class="fab fa-pinterest"></a> -->
            </div>
        </div>

        <!-- <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" class="email" placeholder="enter your email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div> -->

    </div>

</section>


<!-- footer section ends -->













<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="app.js"></script>



<script type="text/javascript">
  function handclick() {
    console.log("I got clicked");
  }
  document.querySelector("#btn-home").addEventListener("click", handclick);
</script>

</body>
</html>
