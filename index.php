<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Excursy - Online shopping site for laptops</title>
    <link rel="stylesheet" href="style.css" />
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
              <a href="XPS.php" class="nav-link">Dell</a>
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

    <!-- Website loader -->
    <div class="intro">
      <div class="intro-text">
        <h1 class="hide">
          <span class="text">Everything</span>
        </h1>
        <h1 class="hide">
          <span class="text">you can imagine</span>
        </h1>
        <h1 class="hide">
          <span class="text">is real.</span>
        </h1>
      </div>
    </div>
    <div class="slider"></div>
    <!-- Website loader -->

    <!-- Xps 17 page -->
    <section class="hero dell-xps-17">
      <div class="container">
        <div class="title">
          <h2 class="title-heading">Dell XPS 17</h2>
          <h3 class="title-sub-heading">Experience Colossal Power.</h3>
          <p class="title-price">From $1549.99*</p>
        </div>
        <div class="cta">
          <a href="XPS.php" class="cta-link">Learn more ></a>
          <a href="XPS-buy.php" class="cta-link">Buy ></a>
        </div>
      </div>
    </section>
    <!-- Xps 17 page -->

    <!-- Surface laptop page -->
    <section class="hero Ms-surface">
      <div class="container">
        <div class="stitle title-dark">
          <h2 class="title-heading">Surface Laptop 4</h2>
          <h3 class="title-sub-heading">Just the right amount of everything</h3>
          <p class="title-price">From $999.99*</p>
        </div>
        <div class="cta2">
          <a href="MS.php" class="cta-link cta-link-darker">Learn more ></a>
          <a href="MS-buy.php" class="cta-link cta-link-darker">Buy ></a>
        </div>
      </div>
    </section>
    <!-- Surface laptop page -->

    <!-- Tiles with images -->
    <section class="tiles">
      <div id="tile-grid">
        <div class="tile-design" id="first-tile">
          <h2 class="style-text">
            Stay Stylish and Creative at the same time with..
          </h2>
          <center>
            <h1 id="stylish">;)</h1>
          </center>

          <img
            class="png center-align"
            width="100%"
            src="images/surface-people.jpg"
            alt="Surface people"
          />
        </div>
        <div class="tile-design">
          <img
            class="png center-align"
            width="100%"
            src="images/style surface.jpg"
            alt="XPS lady"
          />
        </div>
        <div class="tile-design">
          <img
            class="png center-align"
            width="100%"
            src="images/happy xps.jpg"
            alt="MS lady"
          />
        </div>
        <div class="tile-design" id="forth-tile">
          <h2 class="xps-text">
            Explore all new XPS series with 2-in-1 laptops.
          </h2>
          <h3 id="xps-line">Unleash your creativity.</h3>
          <a
            class="dell-links"
            href="https://www.dell.com/en-us/shop/dell-laptops/new-xps-13-laptop/spd/xps-13-9310-laptop/xn9310cto210h"
            >All new Dell XPS 13 ></a
          ><br />
          <a
            class="dell-links"
            href="https://www.dell.com/en-us/shop/dell-laptops/xps-15-laptop/spd/xps-15-9500-laptop/xn9500cto200s"
            >All new Dell XPS 15 ></a
          ><br />
          <a
            class="dell-links"
            href="https://www.dell.com/en-us/shop/2-in-1-laptops/xps-13-2-in-1-laptop/spd/xps-13-9310-2-in-1-laptop/x29310cto213s"
            >All new Dell XPS 2-in-1 ></a
          >
          <img
            id="all-xps"
            class="png center-align"
            width="100%"
            src="images/xps tile 1.jpg"
            alt="Different XPSs"
          />
        </div>

        <!-- Surface pen and mouse tiles -->
        <div class="tile-design ms-pen">
          <a
            class="surface-pen"
            href="https://www.microsoft.com/en-us/d/surface-pen/92fp8q09qhxc?icid=SurfaceAccCat_CP1_SurfacePen_010421&activetab=pivot:overviewtab"
            >Surface pen ></a
          >
        </div>
        <div class="tile-design ms-mouse">
          <img
            id="logo-ms"
            height="75px"
            src="images/microsoft-logo.png"
            alt=""
          />
          <a
            class="surface-mouse"
            href="https://www.microsoft.com/en-us/d/microsoft-arc-mouse-black/8mwhbv8qvskr?cid=msft_web_collection&activetab=pivot:overviewtab"
            >Surface Arc Mouse ></a
          >
          <img
            class="png center-align"
            width="100%"
            src="images/surface mouse.jfif"
            alt=""
          />
        </div>
        <!-- Surface pen and mouse tiles -->
      </div>
    </section>
    <!-- Tiles with images -->

    <!-- Footer -->
    <footer class="container">
      <div class="info">
        <hr id="info-hr" />
        <p id="info">
          All other trademarks are the property of their respective owners
          <br />
          For warranty information, see website below and select Location :
          www.dell.com/servicecontracts<br />
          <br />
          Celeron, Intel, the Intel logo, Intel Atom, Intel Core, Intel Inside,
          the Intel Inside logo, Intel vPro, Intel Evo, Intel Optane, Intel Xeon
          Phi, Iris, Itanium, MAX, Pentium, and Xeon are trademarks of Intel
          Corporation or its subsidiaries. <br />
          <br />
          © 2018 NVIDIA, the NVIDIA logo, GeForce, GeForce RTX, GeForce MAX-Q,
          GRID, SHIELD, Battery Boost, CUDA, FXAA, GameStream, G-Sync, NVLINK,
          ShadowPlay, SLI, TXAA, PhysX, GeForce Experience, GeForce NOW,
          Maxwell, Pascal and Turing are trademarks and/or registered trademarks
          of NVIDIA Corporation in the U.S. and other countries. <br />
          <br />
          *Returns: The 30-day return period is calculated from invoice date.
          Exceptions to Dell's standard return policy still apply, and certain
          products are not eligible for return at any time. Television returns
          are subject to restocking fees. See dell.com/returnpolicy. <br />
          <br />
          Offers subject to change, not combinable with all other offers. Taxes,
          shipping, and other fees apply. Free shipping offer valid in
          Continental U.S. (excludes Alaska and P.O. Box addresses). Offer not
          valid for Resellers. Dell reserves the right to cancel orders arising
          from pricing or other errors. <br />
          <br />
          *Rewards are issued to your online Dell Rewards Account (available via
          your Dell.com My Account) typically within 30 business days after your
          order’s ship date. Rewards expire in 90 days (except where prohibited
          by law). “Current rewards balance” amount may not reflect the most
          recent transactions. Check Dell.com My Account for your most
          up-to-date reward balance. Up to 6% rewards only on Dell Preferred
          Account purchases. Up to 3% rewards when you spend $800 in a 12-month
          period on all other purchases. Bose products only eligible for up to
          3% rewards. Total rewards earned may not exceed $2,000 within a 3
          month period. Outlet purchases do not qualify for rewards. Expedited
          Delivery not available on certain monitors, batteries and adapters,
          and is available in Continental (except Alaska) U.S. only. Other
          exceptions apply. Not valid for resellers and/or online auctions.
          Offers subject to change, not combinable with all other offers. See
          Dell.com/rewardsfaq <br />
          <br />
          ^DELL PREFERRED ACCOUNT (DPA): Offered to U.S. residents by WebBank,
          Member FDIC. Taxes and shipping are extra and vary. Payments equal
          greater of 3% of the New Balance or $20. Min Interest Charge is $2.00.
          Dell and the Dell logo are trademarks of Dell Inc.
        </p>
        <hr id="info-hr" />
        <center>
          <p id="info">Copyright © 2021 Excursy All rights reserved.</p>
        </center>
      </div>
      <div class="contact"></div>
    </footer>
    <!-- Footer -->

    <!-- JavaScript -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    <script src="./app.js"></script>
    <!-- JavaScript -->
  </body>
</html>
