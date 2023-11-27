<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Welcome</title>
</head>
<body>
    <?php
    echo '<h1>Welcome to my page</h1>';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myressources";

    // Create connection
    $conn = new mysqli($servername, $username,$password,$dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    echo "<div class ='table' >";
    echo "<div class='table-row'><div class='table-case id'>ID</div><div class='table-case name'>userName</div><div class='table-case mail'>UserEmail</div><div class='table-case id'>SquadID</div></div>";
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<div class='table-row'><div class='table-case id'>". $row["UserID"]. "</div><div class='table-case name'>". $row["UserName"]. "</div><div class='table-case mail'> " . $row["UserEmail"] ."</div><div class='table-case id'> " . $row["squad_ID"]. " </div></div>";
      }
    } else {
      echo "0 results";
    }
    echo "</div>";
    $conn->close();
?>
</body>
</html>
<style>

.table {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.table-row {
    height: 70px;
    width: 100%;
    display: flex;
    align-items: center;
    gap:5px;
    font-family: viga;
}
.table-case {
    box-sizing:border-box;
    padding:7px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:dashed black 1px;
    height:95%;
    background-color: #f9f9f9;
}
.id {
    width : 50px;
}
.name {
    width : 300px;
}
.mail {
    width : 300px;
}
</style>