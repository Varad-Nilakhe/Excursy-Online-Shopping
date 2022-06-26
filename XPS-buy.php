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
    <link rel="stylesheet" href="XPS-buy.css" />
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
              <a href="MS.php" class="nav-link">Microsoft</a>
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

    <div class="intro">
      <div class="intro-text">
        <h1 class="hide">
          <span class="text">Experience the</span>
        </h1>
        <h1 class="hide">
          <span class="text">Colossal</span>
        </h1>
        <h1 class="hide">
          <span class="text">Power</span>
        </h1>
      </div>
    </div>
    <div class="slider"></div>

    <section class="hero xps-17">
      <div class="container spacing">
        <div class="title title-dark">
          <p class="title-price" id="new">New</p>
          <h2 class="animation title-heading">XPS 17</h2>
          <h3 class="title-sub-heading">Experience Colossal Power.</h3>
          <p class="title-price">
            From $1549.99. No interest if paid in full within 12 mos on $799+^ *
          </p>
          <button class="button-id">
            <a id="buy-button" href="#buying-opt">Buy</a>
          </button>
          <input type="hidden" name="" value="" />
          <input type="hidden" name="" value="" />
          <input type="hidden" name="" value="" />
          <a class="cta-link" href="XPS.html">Learn more ></a>
          <img
            class="animation"
            id="xps-green"
            src="images/Dell buy.jpg"
            alt="dell xps 17"
          />
        </div>
      </div>
    </section>

    <section class="container lapi-details">
      <div class="title heading-which">
        <h2 class="title-heading which-heading">Which XPS is right for you?</h2>
        <p class="title-price" id="compare-model">Compare all XPS models</p>
      </div>
      <div class="grid-compare">
        <div class="bottom-border">
          <img
            class="png center-align"
            style="width: 320px"
            src="images/xps comp (2).jpg"
            alt=""
          />
          <p class="price center-align">From $1549.99*</p>
        </div>
        <div class="bottom-border">
          <img
            class="png center-align"
            style="width: 320px"
            src="images/xps comp (2).jpg"
            alt=""
          />
          <p class="price center-align">From $2049.99*</p>
        </div>
        <div class="bottom-border">
          <img
            class="png"
            style="width: 320px"
            src="images/xps comp (2).jpg"
            alt=""
          />
          <p class="price center-align">From $2599.99*</p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 80px"
            src="images/Intel_Core_i5.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">Intel core i5</p>
          <p class="mini-description center-align">
            11th Generation Intel® Core™ i5-11400H<br />(12MB Cache, up to 4.5
            GHz, 6 cores)
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 80px"
            src="images/Intel_Core_i7.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">Intel core i7</p>
          <p class="mini-description center-align">
            11th Generation Intel® Core™ i7-11800H<br />(24MB Cache, up to 4.6
            GHz, 8 cores)
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 80px"
            src="images/Intel_Core_i9.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">Intel core i9</p>
          <p class="mini-description center-align">
            11th Generation Intel® Core™ i9-11900H<br />(24MB Cache, up to 4.9
            GHz, 8 cores) <br />11th Generation Intel® Core™ i9-11980HK<br />(24MB
            Cache, up to 5.0 GHz, 8 cores)
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 50px"
            src="images/windows.svg"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">Windows 10</p>
          <p class="mini-description center-align">
            Windows 10 Home English<br />Windows 10 Pro English
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 50px"
            src="images/windows.svg"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">Windows 10</p>
          <p class="mini-description center-align">
            Windows 10 Home English<br />Windows 10 Pro English
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 50px"
            src="images/windows.svg"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">Windows 10</p>
          <p class="mini-description center-align">
            Windows 10 Home English<br />Windows 10 Pro English
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 50px"
            src="images/ram.svg"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">8 GB <br />16 GB<br /></p>
          <p class="mini-description center-align">2x4GB, DDR4, 3200MHz</p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 50px"
            src="images/ram.svg"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">8 GB<br />16 GB<br />32 GB</p>
          <p class="mini-description center-align">
            DDR4, 3200MHz<br />2x16GB, DDR4, 3200MHz
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 50px"
            src="images/ram.svg"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">16 GB<br />32 GB</p>
          <p class="mini-description center-align">DDR4, 3200MHz</p>
        </div>
        <div class="margin-top">
          <h1 class="ssd center-align">1TB</h1>
          <p class="description center-align">Maximum configuration storage*</p>
          <p class="mini-description center-align">
            512GB M.2 PCIe NVMe Solid State Drive <br />
            1TB M.2 PCIe NVMe Solid State Drive
          </p>
        </div>
        <div class="margin-top">
          <h1 class="ssd center-align">2TB</h1>
          <p class="description center-align">Maximum configuration storage*</p>
          <p class="mini-description center-align">
            512GB M.2 PCIe NVMe Solid State Drive<br />
            1TB M.2 PCIe NVMe Solid State Drive<br />
            2TB M.2 PCIe NVMe Solid State Drive
          </p>
        </div>
        <div class="margin-top">
          <h1 class="ssd center-align">2TB</h1>
          <p class="description center-align">Maximum configuration storage*</p>
          <p class="mini-description center-align">
            512GB M.2 PCIe NVMe Solid State Drive<br />
            1TB M.2 PCIe NVMe Solid State Drive<br />
            2TB M.2 PCIe NVMe Solid State Drive
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 150px"
            src="images/rtx.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">
            Intel® UHD Graphics <br />NVIDIA® GeForce RTX™ 3060
          </p>
          <p class="mini-description center-align">
            2GB GDDR6 [60W]<br />6GB GDDR6 [70W]
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 150px"
            src="images/rtx.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">
            NVIDIA® GeForce RTX™ 3050<br />NVIDIA® GeForce RTX™ 3060
          </p>
          <p class="mini-description center-align">
            4GB GDDR6 [60W]<br />6GB GDDR6 [70W]
          </p>
        </div>
        <div class="margin-top">
          <img
            class="png center-align"
            style="width: 150px"
            src="images/rtx.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">NVIDIA® GeForce RTX™ 3060</p>
          <p class="mini-description center-align">6GB GDDR6 [70W]</p>
        </div>
        <div class="bottom-border">
          <img
            class="png center-align"
            style="width: 150px"
            src="images/laptop.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">
            17.0" UHD+ (3840 x 2400)<br />17.0" FHD+ (1920 x 1200)
          </p>
          <p class="mini-description padding center-align">
            InfinityEdge Touch Anti-Reflecitve 500-Nit Display<br />InfinityEdge
            Non-Touch Anti-Glare 500-Nit Display
          </p>
        </div>
        <div class="bottom-border">
          <img
            class="png center-align"
            style="width: 150px"
            src="images/laptop.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">
            17.0" UHD+ (3840 x 2400)<br />17.0" FHD+ (1920 x 1200)
          </p>
          <p class="mini-description padding center-align">
            InfinityEdge Touch Anti-Reflecitve 500-Nit Display<br />InfinityEdge
            Non-Touch Anti-Glare 500-Nit Display
          </p>
        </div>
        <div class="bottom-border">
          <img
            class="png center-align"
            style="width: 150px"
            src="images/laptop.png"
            alt="Intel_Core_i5"
          />
          <p class="description center-align">17.0" FHD+ (1920 x 1200)</p>
          <p class="mini-description padding center-align">
            InfinityEdge Non-Touch Anti-Glare 500-Nit Display
          </p>
        </div>

        <!-- i5 -->
        <div class="bottom-border varientSelect">
          <div class="varient-button">
            <form action="manage-cart.php" method="POST">
              <label for="varienti52" class="for-border"
                ><p class="varient-btn">
                  Intel® Core™ i5-11400H <br />8 GB RAM
                  <br />
                  512GB SSD <br />Intel® UHD Graphics <br />
                  FHD+ Non-Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$1549</span
                  >
                </p></label
              >
              <button type="submit" id="varienti52" name="i5" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i5 (8GB / 512GB)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel® Core™ i5-11400H"
              />
              <input type="hidden" name="Laptop_price" value="1549" />
            </form>

            <form action="manage-cart.php" method="POST">
              <label for="varienti51" class="for-border"
                ><p class="varient-btn">
                  Intel Core™ i5-11400H <br />8 GB RAM
                  <br />
                  1TB SSD <br />Intel® UHD Graphics <br />
                  UHD+ Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$1649</span
                  >
                </p></label
              >
              <button type="submit" id="varienti51" name="i5" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i5 (8GB / 1TB)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel® Core™ i5-11400H"
              />
              <input type="hidden" name="Laptop_price" value="1649" />
            </form>

            <form action="manage-cart.php" method="POST">
              <label for="varient2" class="for-border"
                ><p class="varient-btn">
                  Intel® Core™ i5-11400H <br />16 GB RAM
                  <br />
                  1TB SSD <br />NVIDIA® GeForce RTX™ 3060<br />
                  UHD+ Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$1749</span
                  >
                </p></label
              >
              <button type="submit" id="varient2" name="i5" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i5 (16GB / 1TB)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel® Core™ i5-11400H"
              />
              <input type="hidden" name="Laptop_price" value="1749" />
            </form>
          </div>
        </div>

        <!-- i7 -->
        <div class="bottom-border varientSelect">
          <div class="varient-button">
            <form action="manage-cart.php" method="POST">
              <label for="varienti71" class="for-border"
                ><p class="varient-btn">
                  Intel Core™ i7-11800H <br />8 GB RAM
                  <br />
                  512SSD SSD <br />NVIDIA® GeForce RTX™ 3050<br />
                  UHD+ Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$2049</span
                  >
                </p></label
              >
              <button type="submit" id="varienti71" name="i7" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i7 (8GB / 512BG)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel Core™ i7-11800H"
              />
              <input type="hidden" name="Laptop_price" value="2049" />
            </form>
            <form action="manage-cart.php" method="POST">
              <label for="varienti73" class="for-border"
                ><p class="varient-btn">
                  Intel® Core™ i7-11800H <br />16 GB RAM
                  <br />
                  2TB SSD <br />NVIDIA® GeForce RTX™ 3060<br />
                  UHD+ Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$2149</span
                  >
                </p></label
              >
              <button type="submit" id="varienti73" name="i7" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i7 (16GB / 2TB)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel Core™ i7-11800H"
              />
              <input type="hidden" name="Laptop_price" value="2149" />
            </form>
            <form action="manage-cart.php" method="POST">
              <label for="varienti74" class="for-border"
                ><p class="varient-btn">
                  Intel® Core™ i7-11800H <br />32 GB RAM
                  <br />
                  2TB SSD <br />NVIDIA® GeForce RTX™ 3060<br />
                  FHD+ Non-Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$2249</span
                  >
                </p></label
              >
              <button type="submit" id="varienti74" name="i7" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i7 (32GB / 2TB)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel Core™ i7-11800H"
              />
              <input type="hidden" name="Laptop_price" value="2249" />
            </form>
          </div>
        </div>

        <!-- i9 -->
        <div class="bottom-border varientSelect">
          <div class="varient-button">
            <form action="manage-cart.php" method="POST">
              <label for="varienti91" class="for-border"
                ><p class="varient-btn">
                  Intel Core™ i9-11900H <br />16 GB RAM
                  <br />
                  512GB SSD <br />NVIDIA® GeForce RTX™ 3060<br />
                  UHD+ Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$2599</span
                  >
                </p></label
              >
              <button type="submit" id="varienti91" name="i9" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i9 (16GB / 512BG)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel Core™ i9-11900H"
              />
              <input type="hidden" name="Laptop_price" value="2599" />
            </form>
            <form action="manage-cart.php" method="POST">
              <label for="varienti93" class="for-border"
                ><p class="varient-btn">
                  Intel Core™ i9-11900H <br />16 GB RAM
                  <br />
                  2TB SSD <br />NVIDIA® GeForce RTX™ 3060<br />
                  UHD+ Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$2699</span
                  >
                </p></label
              >
              <button type="submit" id="varienti93" name="i9" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i9 (16GB / 2TB)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel Core™ i9-11900H"
              />
              <input type="hidden" name="Laptop_price" value="2699" />
            </form>
            <form action="manage-cart.php" method="POST">
              <label for="varienti94" class="for-border"
                ><p class="varient-btn">
                  Intel Core™ i9-11980HK<br />32 GB RAM
                  <br />
                  2TB SSD <br />NVIDIA® GeForce RTX™ 3060<br />
                  UHD+ Touch Anti-Reflecitve Display<br /><span
                    style="font-size: 4rem; color: rgb(0, 132, 255)"
                    >$2799</span
                  >
                </p></label
              >
              <button type="submit" id="varienti94" name="i9" class="addToBag">
                Add to Bag
              </button>
              <input
                type="hidden"
                name="Laptop_name"
                value="XPS 17 i9 (32GB / 2TB)"
              />
              <input
                type="hidden"
                name="Laptop_varient"
                value="Intel Core™ i9-11980HK"
              />
              <input type="hidden" name="Laptop_price" value="2799" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="tile">
      <div class="tile-div">
        <h1 id="tag-line">Unleash your creativity.</h1>
      </div>
    </section>

    <section class="extra-specs container">
      <div class="info">
        <table class="specs-table">
          <tr>
            <th class="last-row">Battery life</th>
            <td class="last-row">6-Cell Battery, 97WHr (Integrated)</td>
          </tr>

          <tr>
            <th class="last-row" rowspan="4">Connections</th>
            <td>4 Thunderbolt™ 4 ports</td>
          </tr>
          <tr>
            <td>1 Universal Audio Jack (3.5 mm)</td>
          </tr>
          <tr>
            <td>1 SD-card slot</td>
          </tr>
          <tr>
            <td class="last-row">1 Wedge-shaped lock slot</td>
          </tr>
          <tr>
            <th class="last-row" rowspan="2">Security</th>
            <td>McAfee® LiveSafe™ 12 Month Subscription</td>
          </tr>
          <tr>
            <td class="last-row">1 Year Premium Support</td>
          </tr>
          <tr>
            <th class="last-row">Audio and Speakers</th>
            <td class="last-row">
              Stereo woofer 2 W x 2 and stereo tweeter 2.5 W x 2 = 5 W total
              peak
            </td>
          </tr>
          <tr>
            <th class="last-row">Wireless</th>
            <td class="last-row">
              Killer™ Wi-Fi 6 AX1650 (2 x 2) and Bluetooth 5.1
            </td>
          </tr>
          <tr>
            <th class="last-row" rowspan="2">Camera</th>
            <td>User-facing camera 720p 30 fps HD RGBIr camera</td>
          </tr>
          <tr>
            <td class="last-row">Digital-array microphones</td>
          </tr>
          <tr>
            <th class="last-row" rowspan="6">Dimensions & Weight</th>
            <td>Height: 0.77” (19.05 mm)</td>
          </tr>
          <tr>
            <td>Width: 14.74” (374.45 mm)</td>
          </tr>
          <tr>
            <td>Depth: 9.76” (248.05 mm)</td>
          </tr>
          <tr>
            <td>
              <b>Starting weight:</b>
            </td>
          </tr>
          <tr>
            <td>4.87 lb (2.21 kg) for non-touch with 97WHr battery;</td>
          </tr>
          <tr>
            <td class="last-row">
              5.34 lb (2.42 kg) for touch with 97Whr battery
            </td>
          </tr>
        </table>
      </div>
    </section>

    <section class="tile">
      <h1 id="tag-line1">Creator Edition: Expand what's possible.</h1>
      <div class="tile-div2"></div>
    </section>

    <section class="container">
      <div class="info">
        <p id="info">
          All other trademarks are the property of their respective owners
          <br />
          For warranty information, see website below and select Location :
          <a
            href="https://www.dell.com/learn/us/en/uscorp1/campaigns/global-consumer-service-contracts"
            target="_blank"
            >www.dell.com/servicecontracts</a
          ><br />
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
          <p id="info">Copyright © 2021 Varad Excursy All rights reserved.</p>
        </center>
      </div>
      <div class="contact"></div>
    </section>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    <script src="xpsapp.js"></script>
  </body>
</html>
