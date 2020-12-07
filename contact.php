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
          <li><a href="./about.php">About</a></li>
          <li><a href="./cart.php">Cart</a></li>
          <li class="selected"><a href="./contact.php">Contact Us</a></li>
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
     
        <h1>Contact Us</h1>
        <!-- Script to send email from my our own gmail, that contains the users data. Name, Email and Message -->
        <form method="POST" class="gform" action="https://script.google.com/macros/s/AKfycbxtHImT1hYhLgrmTgRt_qBtHDKQKDbKMGyxY51V/exec" >
          <div class="form_settings">
            <p><span>Name</span><input class="contact" id="name" type="text" name="name" value="" /></p>
            <p><span>Email</span><input class="contact" id="email" type="email" name="email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" id="message" rows="8" cols="50" name="message"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
          <!-- Message that is hidden until the form is submitted, Js script is called when submitted.-->
          <div style="display:none" class="thankyou_message">
            <h2><em>Thank you for contacting us! We will get back to you soon!
            </h2>
          </div>
        </form>
      </div>
    </div>
    <div id="footer">
      Made with love in Toronto | <a href="./terms.php">Terms and Conditions</a> | <a href="./privacy.php">Privacy</a>
     </div>
  </div>
  <script data-cfasync="false" type="text/javascript" src="form-submission-handler.js"></script>
</body>
</html>
