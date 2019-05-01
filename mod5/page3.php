<!DOCTYPE html>
<html>
  <head>
    <title>Radiology Support Unite Home Page</title>
    <meta charset=utf-8>
    <link href="style-3dh.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">

figure {float:left; margin:15 20px 0 0;}
</style>
    <!--[if lte IE 8]>
		<script src="html5.js">
    </script>
		<![endif]-->
  </head>
  <body>

    <div id="wrapper">
      <div id="logo">
        <img src="RSA logo.JPG"  alt="RSA logo"></div>
        <div id="right-header-text"> Events and Education</div>
      <div id="header">
      <div id="header-text"><h1>Radiology Support Unite</h1></div>
    </div>
      <div id="content">
          <nav>
          <ul>
            <li class="btn"><a href="index.html">Home Page</a></li>
             <li class="btn"><a href="page2.html">Tips Blogs and Forums</a></li>
            <li class="btn"><a href="page4.html">Student</a></li>
            <li class="btn">Search</li>
            <li class="btn">Contact Us</li>
            </ul>
        </nav>
      </div>
    </div>
    <br class="clear">

  <h3> Professional Organizations</h3>

        <?php
            $servername = "localhost";
            $username = "janmountain";
            $password = "J&J1939jbjb1";
            $dbname = "mysampledb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, name, address, website, email FROM organization";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Name: " . $row["name"]. "<br>";
                    echo "Address: " . $row["address"]. "<br>";
                    echo "Website: " .  $row["website"]. "<br>";
                    echo "Email:" .  $row["email"]. "<br><hr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
             <br>
      </div> <br>



<p>The main content will have links for different Radiology Support Events and Links
for getting education for Radiology Support as well as continuing education for those already registered
and or certified in Radiology Support.</p>


      <div id="content-text">



  </div>

      <div id="midcol-right">
        <figure>
          <img src="Radiology.jpg" alt="Radiology">
        </figure>
      </div>


    </div>

    <br class="clear">

  <div id="footer"></div>
  <div id="footer=text"></div>
<div id="bottom-nav">
  <div class="nav-btn"><a href="index.html">Home Page</a></div>
  <div class="nav-btn">Copyright</div>
  <div class="nav-btn">Privacy</div>
  <div class="nav-btn">Legal</div>
        </div>

</div>
  </body>
</html>
