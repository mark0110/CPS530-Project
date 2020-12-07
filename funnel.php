<?php
if(isset($_GET['press'])){
	session_start();
    $name = $_GET["id"];
   
	if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
	}
	array_push($_SESSION['cart'],$name);
	header("Location: http://webdev.scs.ryerson.ca/~e237lee/cart.php");

	exit();
}
?>


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

        <h1>Would you like any of these products?</h1>
        <?php 
			$servername = "localhost";
			$username = "e237lee";
			$password = "wrehyzCi";
			$dbname = "e237lee";


			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT name,photourl,cost FROM funnel";
			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {	
					echo "  <img src='" .$row['photourl']. "'  alt='' style='width:100px;height:100px;'> <br> ".$row['name']."<br>cost: ".$row['cost']." <br><br>";
					$link = "window.location.href='http://webdev.scs.ryerson.ca/~e237lee/funnel.php?id=" .$row["name"]. "&press=true';";	
					echo "<button onclick=".$link.">Add to Cart</button><br><br>";
				}

			} else {
				echo "0 results";
			}
			$conn->close();
			?>

        <div class="form_settings">
            <form action="cart.php" method="POST" >
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="No Thank You" /></p>
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
