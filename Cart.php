<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Excursy | Dell XPS 17</title>
    <!-- <link rel="stylesheet" href="XPS-buy.css" /> -->
    <link rel="stylesheet" href="cart.css" />
    <link rel="shortcut icon" href="images/icons/x.svg" />
  </head>
  <body>
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
            <li class="nav-item nav-item-hidden">
              <a href="Logout.php" class="nav-link">Log out</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="hero cart">
      <div class="heading">
        <p class="cartname">Your bag.</p>
      </div>
      <div class="product-list">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Item name</th>
              <th scope="col">Varient</th>
              <th scope="col">Price</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $total=0;
              if(isset($_SESSION['cart']))
              {
                foreach($_SESSION['cart'] as $key =>$value) {
            $total+=$value['Laptop_price']; echo"
            <tr>
              <td>$value[Laptop_name]</td>
              <td>$value[Laptop_varient]</td>
              <td>$$value[Laptop_price]</td>
              <td>
                <form action='manage-cart.php' method='POST'>
                  <input
                    type='hidden'
                    name='Laptop_name'
                    value='$value[Laptop_name]'
                  />
                  <button class='remove-btn' name='Remove_Item'>Remove</button>
                </form>
              </td>
            </tr>
            "; 
            } 
            } ?>
          </tbody>
        </table>
      </div>
      <div class="total-div">
        <h2 class="total-heading">Your bag total is</h2>
        <hr />
        <h3 id="amount">$<?php echo $total ?></h3>
        <a class="checkout" href="Signup-page.php">Check out</a>
      </div>
    </section>
  </body>
</html>
