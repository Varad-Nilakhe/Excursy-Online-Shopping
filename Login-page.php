<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Excursy Sign in</title>
    <link rel="stylesheet" href="login.css" />
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
          <form id="login-form" action="login.php" method="post">
            <center>
              <div class="formsec">
                <label for="name"><h6 class="heading">Email-id :</h6> </label>
                <input type="email" autocomplete="off" name="email" required />
              </div>
              <div class="formsec">
                <label for="password"
                  ><h3 class="heading">Password :</h3>
                </label>
                <input
                  type="password"
                  autocomplete="off"
                  name="pass"
                  minlength="8"
                  required
                />
              </div>
              <div class="formsec">
                <input type="submit" class="login-btn" value="Sign In" />
              </div>
              <div class="formsec">
                <a href="Signup-page.php" id="login-btn"
                  >Create a new account ></a
                >
              </div>
            </center>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
