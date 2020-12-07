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
          <h1><a href="index.html">Music<span class="logo_colour"> store</span></a></h1>
          <h2>Advanced music online store</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li class="selected"><a href="catalog.php">Catalog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        
        <h3>Music for sale</h3>
        <ul>
          <li><a href="#">Song 1</a></li>
          <li><a href="#">Song 2</a></li>
          <li><a href="#">Song 3</a></li>
          <li><a href="#">Song 4</a></li>
        </ul>
      
      </div>
      <div id="content">
       <table id="cataTable">
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
			
			$sql = "SELECT name,photourl FROM songs";
			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {	
					echo " <a href='itempage.php?id=".$row['name']."'>  <img src='" .$row['photourl']. "'  alt='' style='width:100px;height:100px;'> <br> ".$row['name']."</a> <br><br>";
				}

			} else {
				echo "0 results";
			}
			$conn->close();
			?>		
	   </table>
      </div>
    </div>
    <div id="footer">
      Made with love in Toronto | <a href="terms.html">Terms and Conditions</a> | <a href="privacy.html">Privacy</a>
    </div>
  </div>
</body>
</html>