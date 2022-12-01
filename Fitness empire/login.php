
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS\styles0.css">
  <meta charset="utf-8">
  <meta name="google-signin-client_id" content="216517326524-a9k0t3ktgtk4667tdivtnc8okr394kq8.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  <title>LOGIN</title>
</head>

<body>
  <div class="login-div">
    <div class="logo">
      <img src="img\FitFormula.png" alt="">
    </div>

    <!-- <div class="title">fit formula.</div> -->
    <div class="subtitle">Be Fit.</div>
    <div class="form">
      <form action="includes/login.inc.php" method="post" onsubmit="return check_empty_field()">
        <div class="username" >
          <svg class="svg-icon" viewBox="0 0 20 20">
  							<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
  						</svg>
          <input type="text" name="uid" placeholder="Username OR Email">
        </div>
        <div class="password">
          <svg class="svg-icon" viewBox="0 0 20 20">
  							<path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
  						</svg>
          <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="option">
          <div class="remember-me">
            <input id="remember-me" type="checkbox">
            <label for="remember-me">Remember-Me?</label>
          </div>
          <div class="forgot-password">
            <a href="#">Forgot-Password?</a>
          </div>
        </div>
        <a href=""><button name="submit" class="signin-btn">LOGIN</button></a>
          </div>
          <p class="or">OR</p>
<!-- ==================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================== -->
<?php
require 'gdb_connection.php';

if(isset($_SESSION['login_id'])){
    header('Location: index.php');
    exit;
}

require 'google-api/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('216517326524-38tmed0fm24rolgv4e3j6up7objkddm2.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost:4000/Desktop/fit%20formula/login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        // Storing data into database
        $id = mysqli_real_escape_string($gdb_connection, $google_account_info->id);
        $full_name = mysqli_real_escape_string($gdb_connection, trim($google_account_info->name));
        $email = mysqli_real_escape_string($gdb_connection, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($gdb_connection, $google_account_info->picture);

        // checking user already exists or not
        $get_user = mysqli_query($gdb_connection, "SELECT `google_id` FROM `users` WHERE `google_id`='$id'");
        if(mysqli_num_rows($get_user) > 0){

            $_SESSION['login_id'] = $id;
            header('Location: index.php');
            exit();

        }
        else{

            // if user not exists we will insert the user
            $insert = mysqli_query($gdb_connection, "INSERT INTO `users`(`google_id`,`name`,`email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");

            if($insert){
                $_SESSION['login_id'] = $id;
                header('Location: index.php');
                exit();
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }

        }

    }
    else{
        header('Location: login.php');
        exit();
    }

else:
    // Google Login Url = $client->createAuthUrl();
?>
<button class="a">
  <img src="img\google logo.png" width="25%" height="25%"alt="">
  <a class="login-btn" align="center" href="<?php echo $client->createAuthUrl(); ?>">Login With Google</a>
</button>
<?php endif; ?>
<!-- ==================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================== -->
          <div class="sign-up">
            <a href="signup.php">New to fit formula? Sign Up here</a>
          </div>
          <!-- <div class="home">
            <a href="index.php" >HOME PAGE</a>
          </div> -->
          <div class="array">
            <?php
            if(isset($_GET["error"]))
            {
              if($_GET["error"] == "emptyinput")
              {
                echo"<p> Fill in all fields!<p>";
              }
              elseif ($_GET["error"] == "wrongpassword") {
                echo "<p>Incorrect username or passsword!</p>";
              }
            }
              ?>
        </div>
      </form>
    </div>
    <script src="app.js"></script>
</body>
</html>
