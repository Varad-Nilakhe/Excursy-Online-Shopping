<?php
  printf("<title>Excursy</title>");
  $conn = mysqli_connect("localhost","root","mysql57","wpproject");

  session_start();
  $_SESSION['Email'] = $_POST['email'];
  $_SESSION['Pass'] = $_POST['pass'];
  $check = mysqli_query($conn,"SELECT count(*) FROM Users WHERE Pass = '".$_SESSION["Pass"]."' and Email ='" .$_SESSION["Email"]."';");
  $row = mysqli_fetch_row($check);
  if($row[0] == 1)
  {
      header('Location:../WP_Project/index.php');
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excursy Sign in</title>
  <link rel="stylesheet" href="login.css" />
  <style>
    .error {
  color: rgb(255, 83, 83);
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  font-size: 4rem;
}
  </style>
</head>
<body>
  <!-- Navigation bar -->
  <header>
      <div class="container">
        <nav class="nav">
          <ul class="nav-list nav-list-larger">
            <li class="nav-item nav-item-hidden">
              <a href="index.php" class="nav-link nav-link-apple"></a>
            </li>
            <li class="nav-item">
              <a href="XPS-buy.php" class="nav-link">Dell</a>
            </li>
            <li class="nav-item">
              <a href="Ms-buy.php" class="nav-link">Microsoft</a>
            </li>

            <li class="nav-item">
              <a href="Support-page.php" class="nav-link">Support</a>
            </li>
            <li class="nav-item nav-item-hidden">
              <a href="Cart.php" class="nav-link nav-link-bag"></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Navigation bar -->

    <section class="login">
      <div class="login-form">
        <div class="form-div">
          <h1 id="heading">Excursy</h1>
          <h2 class="signin">Sign-in</h2>
          <form id="login-form" action="Login-page.php" method="post">
            <center>
              <div class="formsec">
                <h1 class="error" >Enter the correct details.</h1>
              </div>
              <div class="formsec">
                <input type="submit" class="login-btn" value="Try login again" />
              </div>
              
            </center>
          </form>
        </div>
      </div>
    </section>

</body>
</html>
