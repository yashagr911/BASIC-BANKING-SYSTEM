<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "yash_bank";
        echo "<br><br>";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM History";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><th>" . $row["Trans_id"]. "</th><th>" . $row["Sender"]. "</th><th>" . $row["Receiver"]."</th><th>". $row["Amt"]."</th></tr>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>