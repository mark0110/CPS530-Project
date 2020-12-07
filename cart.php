<!DOCTYPE HTML>
<html>

<head>
  <title>Music store - Catalog</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="./style/style.css" title="style" />
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
          <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Happiness">Inspiring</a></li>
          <li><a href="http://webdev.scs.ryerson.ca/~e237lee/itempage.php?id=Happiness">Uplifting</a></li>
        </ul>
      
      </div>
      <div id="content">
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
    
		session_start();
		
		$total = 0;
		foreach($_SESSION['cart'] as $value){
		  $name = $value;

		  $sql = "SELECT name,cost FROM songs WHERE name ='" .$name."';";
			$result = $conn->query($sql);
		
			
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p>Name: " . $row["name"]. "<br> <br>Cost: " . $row["cost"]."</p>";
					$total = $total + $row['cost'];
					echo "-----------------";
				}
			} else {
				echo "0 results";
			}
		  
		}
		
		
    
		echo "<br>Total cost: " .  $total;

		$conn->close();
		?>
		<br><br>
		<button onclick="document.location='shipping.php'">Check Out</button>
		<a href="./shipping.php">
	</div>

 
    
      
    
  </div>
</body>

<div id="footer">
<footer>
	Made with love in Toronto | <a href="./terms.php">Terms and Conditions</a> | <a href="./privacy.php">Privacy</a>
</footer>
</div>

</html>