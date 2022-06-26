<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Support Page</title>
    <link rel="stylesheet" href="Support.css" />
    <link rel="shortcut icon" href="images/icons/x.svg" />
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

    <section id="sup">
      <div class="supportbg">
        <h1 id="suphead">Excursy Support</h1>
      </div>
    </section>

    <!-- Support form -->
    <section class="hero">
      <h1 id="formhead">
        Service and Support From <br />
        <span id="experts-text">Excursy Experts</span>
      </h1>
      <div id="sform">
        <form name="supform" onsubmit="validate()">
          <div class="formitem">
            <label for="name"><h3 class="heading">Name :</h3></label>
            <input name="name" type="name" autocomplete="off" required />
          </div>
          <div class="formitem">
            <label for="email"><h3 class="heading">E-mail id :</h3></label>
            <input name="email" type="email" autocomplete="off" required />
          </div>

          <div class="formitem">
            <label for="contact"><h3 class="heading">Contact :</h3></label>
            <input
              name="contact"
              type="text"
              minlength="10"
              maxlength="10"
              autocomplete="off"
              required
            />
          </div>

          <div class="formitem">
            <input
              type="checkbox"
              id="forSupportService"
              name="Service"
              value="SupportService"
            />
            <label for="forSupportService"
              ><h3 class="heading1">Support Service</h3></label
            >
            <input
              type="checkbox"
              id="forCustomerService"
              name="Service"
              value="CustomerService"
            />
            <label for="forCustomerService"
              ><h3 class="heading1">Customer Service</h3></label
            >
          </div>

          <div class="formitem">
            <input type="radio" id="forDell" name="Laptop" value="Dell" />
            <label for="forDell"><h3 class="heading1">Dell</h3></label>
            <input
              type="radio"
              id="forMicrosoft"
              name="Laptop"
              value="Microsoft"
            />
            <label for="forMicrosoft"
              ><h3 class="heading1">Microsoft</h3></label
            >
          </div>

          <div class="formitem">
            <h3 class="heading">How can we help you?</h3>
            <br />
            <textarea name="Complaint" cols="45" rows="5"></textarea>
          </div>
          <div class="formitem">
            <input
              id="send-button"
              type="submit"
              value="Send your request >"
              name="Request"
              onClick="validate(this.form);"
            />
          </div>
        </form>
      </div>
    </section>
    <!-- Support form end -->

    <div id="end">
      <h2 id="Thankmsg">Thank you!</h2>
    </div>
    <script src="support.js"></script>
  </body>
</html>
