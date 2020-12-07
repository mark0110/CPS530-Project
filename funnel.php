<!DOCTYPE HTML>
<html>

<head>
  <title>Music store - Contact Us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  

</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="./index.php">Music<span class="logo_colour"> store</span></a></h1>
          <h2>Advanced music online store</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./catalog.php">Catalog</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./cart.php">Cart</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
         <h3>Music for sale</h3>
        <ul>
        <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Paradise">Paradise</a></li>
          <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Happiness">Happiness</a></li>
          <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Happiness">Inspiring</a></li>
          <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Happiness">Uplifting</a></li>
        </ul>
      </div>
      <div id="content">

        <h1>Would you like any of these products?</h1>
        <!--    COME BACK TO WHEN ITEM PAGE/ADD TO CART IS FINISHED

        show random items from catalog

        make a items clickable like on item page that directly add them to your cart

        after it takes the user to the checkout -->


        <!-- COME BACK TO
            Change "checkout.html" to whatever the extention is for the checkout page
            Button is just a redirect to checkout. The other page will do the same but this one is without adding anything additional to cart
        -->
        <div class="form_settings">
            <form action="checkout.html" method="POST" >
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Checkout" /></p>
            </form>
        </div>

      </div>
    </div>
    <div id="footer">
      Made with love in Toronto | <a href="./terms.php">Terms and Conditions</a> | <a href="./privacy.php">Privacy</a>
     </div>
  </div>
</body>
</html>
