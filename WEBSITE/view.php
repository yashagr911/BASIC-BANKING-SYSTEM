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
        
        $sql = "SELECT * FROM Customers";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><th>" . $row["CustID"]. "</th><th>" . $row["CustName"]. "</th><th>" . $row["CustEmail"]."</th><th>". $row["balance"]."</th></tr>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>