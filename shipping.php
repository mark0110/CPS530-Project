<!DOCTYPE HTML>
<html>

<head>
  <title>Billing</title>
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
          <li ><a href="./catalog.php">Catalog</a></li>
          <li><a href="./about.php">About</a></li>
          <li class="selected"><a href="./cart.php">Cart</a></li>
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
        <form action="./payment.php" method="GET">
            
              <h3>Billing</h3>
              <label for="fname">Full Name</label>
              <input type="text" id="fname" name="fname" placeholder="James J Hill">
              <label for="email"> Email</label>
              <input type="text" id="email" name="email" placeholder="a123@gmail.com">
              <br>
              <label for="adress"> Address</label>
              <input type="text" id="adrress" name="address" placeholder="300-1200 beach view street">
              <label for="city"> City</label>
              <input type="text" id="city" name="city" placeholder="Toronto">
              <br>
              <label for="province">Province</label>
              <input type="text" id="province" name="province" placeholder="ON">
              <br>
              <label for="zip">Zip</label>
              <input type="text" id="zip" name="zip" placeholder="A5CX4Z">
          <br>
            
        <button>Checkout</button>
          
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
