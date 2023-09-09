<?php
 <?php
 $servername = "localhost"; // Replace with your database server name
 $username = "your_username"; // Replace with your database username
 $password = "your_password"; // Replace with your database password
 $dbname = "student";
 
 // Create a connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 // Sample query - you can modify this according to your needs
 $sql = "SELECT myname, phonenumber, myclass, mygender, email FROM student_table";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
     // Output data of each row
     while ($row = $result->fetch_assoc()) {
         echo "Name: " . $row["myname"] . "<br>";
         echo "Phone Number: " . $row["phonenumber"] . "<br>";
         echo "Class: " . $row["myclass"] . "<br>";
         echo "Gender: " . $row["mygender"] . "<br>";
         echo "Email: " . $row["email"] . "<br>";
     }
 } else {
     echo "No results found.";
 }
 
 // Close the connection
 $conn->close();
 ?>
?>