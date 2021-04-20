<?php
       
        $send = $_POST['send'];
        $rece = $_POST['rece'];
        $amt = $_POST['amt'];
        
        if(!empty($send)||!empty($rece)||!empty($amt))
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "yash_bank";
            $flag=0;
             // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        else{

            $sql2 = "SELECT `CustName` FROM `customers` WHERE `CustName`='".$send."'";
            $result1 = $conn->query($sql2);
            $sql3 = "SELECT `CustName` FROM `customers` WHERE `CustName`='".$rece."'";
            $result2 = $conn->query($sql3);
            $sql4 = "SELECT * FROM `customers` Where `CustName`='".$send."'";
            $result3 = $conn->query($sql4);
            $row = mysqli_fetch_assoc($result3);
            if($result1->num_rows == 0 or $result2->num_rows == 0) {$flag=1; echo '<script> alert("Customer not found. Try Again.")</script>
                <meta http-equiv="refresh" content="0; url=transfer.php" />';}

                else if($row["balance"]-$amt<0)
        {
            echo '<script> alert("Low Balance. Try Again. ")</script>
                <meta http-equiv="refresh" content="0; url=transfer.php" />';
        } else{

            $sql = "UPDATE customers 
            SET balance  = balance +($amt)
            where CustName = '$rece';";
            
            
            if ($conn->query($sql) === TRUE) {
                $sql = "UPDATE customers 
            SET balance  = balance -($amt)
            where CustName = '$send';";

            $sql_1 = "INSERT into History (  Sender, Receiver, Amt)
                VALUES ('$send','$rece','$amt');";
            
                if ($conn->query($sql) === TRUE) {
                    $conn->query($sql_1);
                    
                    echo '<script> alert("TRANSACTION SUCCESSFUL")</script>
                    <meta http-equiv="refresh" content="0; url=history.php" />';

              }} else {
                echo "Error updating record: " . $conn->error;
              }
              }}
        }
        else
        {
            echo "All fields are required";die();
        }
        
        $conn->close();
       ?>