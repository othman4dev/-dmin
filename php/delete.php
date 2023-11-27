<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myressources";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_POST['id'])) {
      $index = $_POST['id'];
      $table = $_POST['table'];
      $column = $_POST['column'];
  
      // Prepare and bind
      $stmt = $conn->prepare("DELETE FROM $table WHERE $column = ?");
      $stmt->bind_param("i", $index);
  
      // Execute the statement
      $stmt->execute();
  
      $stmt->close();
  }
    
    $conn->close();
?>