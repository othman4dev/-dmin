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
#this is for users
if(isset($_POST['username']) && isset($_POST['usermail']) && isset($_POST['squadid'])) {
  $username = $_POST['username'];
  $usermail = $_POST['usermail'];
  $squadid = $_POST['squadid'];
  $table = $_POST['table'];

  // Prepare and bind
  $stmt = $conn->prepare("INSERT INTO $table (UserName, UserEmail, squad_ID) VALUES (?, ?, ?)");
  $stmt->bind_param("ssi", $username, $usermail, $squadid);

  // Execute the statement
  $stmt->execute();

  $stmt->close();
} else
#this is for squads
if(isset($_POST['squadname']) && isset($_POST['leaderID']) && isset($_POST['projectID'])) {
  $squadname = $_POST['squadname'];
  $leaderID = $_POST['leaderID'];
  $projectID = $_POST['projectID'];
  $table = $_POST['table'];

  // Prepare and bind
  $stmt = $conn->prepare("INSERT INTO $table (squadName, leaderID, Current_projectID) VALUES (?, ?, ?)");
  $stmt->bind_param("sii", $squadname, $leaderID, $projectID);

  // Execute the statement
  $stmt->execute();

  $stmt->close();
} else
#This is for projects
if(isset($_POST['projectName']) && isset($_POST['projectDescription']) && isset($_POST['projectDeadline'])) {
  $squadname = $_POST['squadname'];
  $leaderID = $_POST['leaderID'];
  $projectID = $_POST['projectID'];
  $table = $_POST['table'];

  // Prepare and bind
  $stmt = $conn->prepare("INSERT INTO $table (squadName, leaderID, Current_projectID) VALUES (?, ?, ?)");
  $stmt->bind_param("sii", $squadname, $leaderID, $projectID);

  // Execute the statement
  $stmt->execute();

  $stmt->close();
}

$conn->close();
?>