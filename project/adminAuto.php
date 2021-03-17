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
 
// Define $myusername and $mypassword 
$email=$_POST['email']; 
$password=$_POST['mypassword']; 
 
$sql = "SELECT email, password FROM admin WHERE email='$email' and password='$password'"; 
$result = $conn->query($sql); 
 
// Mysql_num_row is counting table row 
if ($result->num_rows > 0)  
{ 
    //redirect to file "admin.php"     
    header("location:mainMenu.php"); 
} 
else  
{ 
    echo "<p>Wrong Username or Password. Please try again.</p>"; 
} 
$conn->close(); 
?> 