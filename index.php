<?php
  session_start();
  if(!isset($_SESSION["State"])) $_SESSION["State"]=0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Survey Sign-In</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sign-in.css" rel="stylesheet">
    </head>
    <body>
        <main class="form-signin w-100 m-auto text-center">
        <?php
            if ($_SESSION["State"]==0){ 
        ?>
            <form id="email">
                <img class="img-fluid" src="temple-logo.png" style="max-width: 50%">
                <h3 class="h3 mb-3 fw-normal">Thank you for participating in our survey.</h3> 
                <h5 class="h5 mb-3 fw-normal">Please input your Temple email to proceed.</h5>
                <div class="form-floating">
                    <input type="email" class="form-control" name="inputEmail" pattern=".+@temple.edu" required>
                    <label for="floatingEmail" class="text-body-secondary">ex. tuxXXXXX@temple.edu</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; Anyun Chatterjee 2024</p>
            </form>
            <?php
                }
                if($_SESSION["State"==1]){
            ?>
            <form id="authenicate">
                <img class="img-fluid" src="temple-logo.png" style="max-width: 50%">
                <h5 class="h5 mb-3 fw-normal">Please check your Temple email and provide the six-digit authentication code</h5>
                <div class="form-floating">
                    <input type="text" class="form-control" name="authCode" required>
                    <label for="floatingInput" class="text-body-secondary">ex. 000000</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Start survey</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; Anyun Chatterjee 2024</p>
            </form>
            <?php
                }
            ?>
        </main>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.7.1.min.js"></script>
    </body>
</html>