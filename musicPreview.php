<!DOCTYPE HTML>
<html>

<head>
  <title>Music store</title>
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
          <li class="selected"><a href="./catalog.php">Catalog</a></li>
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
		
		$sql = "SELECT name, songurl FROM songs WHERE name = '" .$_GET["id"]. "';";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<h2>$row["name"]</h2>
        <div class="container-audio">
            <audio controls  loop controlsList="nodownload">
                       <source src=$row["songurl"] type="audio/mp3">
                       Your browser dose not Support the music preview feature
                   </audio>
        </div>"	}
		} else {
			echo "Not found";
		}
		$conn->close();
		?>

    
    </div>
      </div>
    </div>
    <div id="footer">
      Made with love in Toronto | <a href="./terms.php">Terms and Conditions</a> | <a href="./privacy.php">Privacy</a>
    </div>
  </div>
</body>
</html>
