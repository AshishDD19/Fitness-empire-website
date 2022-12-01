<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIGN.UP</title>
    <link rel="stylesheet" href="CSS\styles1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <form action="includes/signup.inc.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name:</span>
            <input type="text" name="name" placeholder="Enter your Name" required>
          </div>
          <div class="input-box">
            <span class="details">Username:</span>
            <input type="text"  name="uid" placeholder="Enter your Username" required>
          </div>
          <div class="input-box">
            <span class="details">Email:</span>
            <input type="email"  name="email" placeholder="Enter your Email">
          </div>
          <div class="input-box">
            <span class="details">Phone-Number:</span>
            <input type="tel"  name="pnum" placeholder="Enter your Number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
          </div>
          <div class="input-box">
            <span class="details">Password:</span>
            <input type="password"  name="pwd" placeholder="Enter your Password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password:</span>
            <input type="password"  name="repwd" placeholder="Confirm your Password"required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender:</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <sapn class="gender">Male</sapn>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <sapn class="gender">Female</sapn>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <sapn class="gender">Other</sapn>
            </label>
          </div>
        </div>
        <div class="button">
          <button type="submit" name="submit"> REGISTER </button>
        </div>
      </form>
      <div class="array">
        <?php
        if(isset($_GET["error"]))
        {
          if($_GET["error"]== "emtyinput")
          {
            echo"<p> Fill in all fields!<p>";
          }
          elseif ($_GET["error"] == "invalidUid") {
            echo "<p>Choose a properusername!</p>";
          }
          elseif ($_GET["error"] == "invalidEmail") {
            echo "<p>Choose a properemail!</p>";
          }
          elseif ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>passwords doesn't match!</p>";
          }
          elseif ($_GET["error"] == "stmtfail") {
            echo "<p>Something went wrong try again!</p>";
          }
          elseif ($_GET["error"] == "usernametake") {
            echo "<p>choose a different username!</p>";
          }
          elseif ($_GET["error"] == "none") {
            echo "<p>You Have SignedUp!<br/>Go To LoginPage</p>";
          }
        }
          ?>
      </div>
    </div>
  </body>
</html>
