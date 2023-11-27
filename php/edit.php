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
    
    if(isset($_POST['username']) && isset($_POST['usermail']) && isset($_POST['squadid'])) {
        $username = $_POST['username'];
        $usermail = $_POST['usermail'];
        $squadid = $_POST['squadid'];
        $index = $_POST['id'];
    
        // Prepare and bind
        $stmt = $conn->prepare("UPDATE users SET UserName = ?, UserEmail = ?, squad_ID = ? WHERE UserID = ?");
        $stmt->bind_param("ssii", $username, $usermail, $squadid, $index);
    
        // Execute the statement
        $stmt->execute();
    
        $stmt->close();
    } else
    #this is for squads
    if(isset($_POST['squadname']) && isset($_POST['leaderID']) && isset($_POST['projectID'])) {
      $squadname = $_POST['squadname'];
      $leaderID = $_POST['leaderID'];
      $projectID = $_POST['projectID'];
      $index = $_POST['id'];
      $table = $_POST['table'];
  
      // Prepare and bind
      $stmt = $conn->prepare("UPDATE $table SET squadName = ?, leaderID = ?, Current_projectID = ? WHERE squadID = ?");
      $stmt->bind_param("ssii", $squadname, $leaderID, $projectID, $index);
  
      // Execute the statement
      $stmt->execute();
  
      $stmt->close();
  } else
  #This is for projects
  if(isset($_POST['projectID']) && isset($_POST['projectName']) && isset($_POST['projectDescription']) && isset($_POST['projectDeadline'])) {
    $projectID = $_POST['projectID'];
    $projectName = $_POST['projectName'];
    $projectDescription = $_POST['projectDescription'];
    $projectStart = $_POST['projectStart'];
    $projectEnd = $_POST['projectEnd'];
    $index = $_POST['id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE users SET UserName = ?, UserEmail = ?, squad_ID = ? WHERE UserID = ?");
    $stmt->bind_param("ssii", $squadname, $leaderID, $projectID, $index);

    // Execute the statement
    $stmt->execute();

    $stmt->close();
  }
    
    $conn->close();
?>