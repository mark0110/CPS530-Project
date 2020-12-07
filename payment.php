<!DOCTYPE HTML>
<html>

<head>
  <title>Payment</title>
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
          <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Inspiring">Inspiring</a></li>
          <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Uplifting">Uplifting</a></li>
        </ul>
      
      </div>
      <div id="content">
       <P>Please fill out the payment page! Thank you!</P>
       <form action="./Thankyou.php" method="GET"></form>
       <h3>Payment</h3>
              <label for="fname">Name On Card</label>
              <input type="text" id="fname" name="fullname" placeholder="James J Hill">
              <br>
              <label for="cardnumber"> Credit/Debit Number</label>
              <input type="text" id="cardnumber" name="cardnum" placeholder="2133-2132-1232-1231">
              <br>
              <label for="EXP"> EXP Month</label>
              <input type="text" id="EXP" name="expmon" placeholder="December">
              <label for="EXPyear"> EXP Year</label>
              <input type="text" id="EXPyear" name="expyr" placeholder="2020">
              <br>
              <label for="CVV"> CVV</label>
              <input type="text" id="CVV" name="cvv" placeholder="765">
              
              
              <br>
              <a href= "Thankyou.php"> <button> Confirm Payment</button>
              </a> 
              <br>
              <div>
                <a href="shipping.php">Back to Billing</a>
              </div>
    </div>
    

    </div>
    <div id="footer">
      Made with love in Toronto | <a href="./terms.php">Terms and Conditions</a> | <a href="./privacy.php">Privacy</a>
    </div>
  </div>
</body>
</html>
