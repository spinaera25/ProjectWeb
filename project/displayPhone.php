<?php 
  $servername="localhost"; // Host name 
  $email="root"; // Mysql username 
  $password=""; // Mysql password 
  $dbName="phone"; // Database name 
   
  // Create connection 
  $conn = new mysqli($servername, $email, $password, $dbName); 
   
  // Check connection 
  if ($conn->connect_error) { 
      die("Connection failed: " . $conn->connect_error); 
  }   
   
  //escape special characters in a string 
  //$custName = mysqli_real_escape_string($conn, $_POST['custName']); 
 
  //create and execute query 
    $sql = "SELECT * FROM customer";	 
    $result = $conn->query($sql); 
 
  //check if records were returned   
  if ($result->num_rows > 0) { 
 
     //create a table to display the record 
     echo 'Selected record as the following: <br><br>'; 
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';      
     echo '<tr><td align="center"><b>No</b></td>      
     <td align="center"><b>Name</b></td> 
     <td align="center"><b>Addres</b></td> 
     <td align="center"><b>Number Phone</b></td> 
     <td align="center"><b>Email</b></td> 
     <td align="center"><b>Phone</b></td> 
     <td align="center"><b>Price</b></td> 
     <td align="center">&nbsp&nbsp</td> 
     </tr>'; 
      
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["custName"].'</td>';
        echo '<td align="center">'.$row["custAdd"].'</td>';
        echo '<td align="center">'.$row["custEmail"].'</td>';
        echo '<td align="center">'.$row["custNo"].'</td>';
        echo '<td align="center">'.$row["phone"].'</td>';
        echo '<td align="center">'.$row["price"].'</td>';  
        ?>
        <td><a href="editPhone.php?id=<?php echo $row["Bil"]; ?>">UPDATE</a></td></tr>
        <?php
        echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

  //close connection 
  $conn->close();

?>