<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style3.css" rel="stylesheet" type="text/css">

  <title> Radiology Support Unite Events and Education</title>


  </head>
  <body>
    <div class="container-fluid">
    <div id="header">
      <div id="logo">
        <img src="RSA logo.JPG"  alt="RSA logo"></div>
      <div id="header-text">Radiology Support Unite</div>
      <div id="right-header-text"> Events and Education</div>
      <div id="top-nav">

        <a href="index.html">Home</a>
        <a href="page2.html">Tips Blogs and Forums</a>
        <div class="nav-btn">Menu</div>
        <div class="nav-btn">About Us</div>
        <div class="nav-btn">Log In</div>
        <div class="nav-btn">Search</div>
      </div>
    </div>
    <div id="main-container">

      <div id="left-column"><h3> Professional Organizations</h3>

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



      <div id="main-content"> The main content will have links for different Radiology Support Events and Links for getting education for Radiology Support as well as continuing education for those already registered and or certified in Radiology Support.</div>


      <div id="content-text">



  </div>

      <div id="mid-column">
      </div>


    </div>

    <div id="footer"></div>
    <div id="footer=text"></div>
    <div id="bottom-nav">
      <div class="nav-btn">Back to Top</div>
      <div class="nav-btn">Events and Education</div>
      <div class="nav-btn">Copyright</div>
      <div class="nav-btn">Privacy</div>
      <div class="nav-btn">Legal</div>
    </div>

</div>
  </body>
</html>
