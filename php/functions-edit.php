<?php
            function printUserTable($limit) {
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
                $sql = "";
                if ($limit == 0) {
                  $sql = "SELECT * FROM users";
                } else {
                  $sql = "SELECT * FROM users LIMIT $limit";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<div class='row'><div><input class='select-check' type='checkbox' onchange='selectOne(this)'>". $row["UserID"]. "</div><div>". $row["UserName"]. "</div><div> " . $row["UserEmail"] ."</div><div> " . $row["squad_ID"]. " </div></div>";
                  }
                } else {
                  echo "0 results";
                }
                echo "</div>";
            }
            function printSquadTable($limit) {
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
            
                $sql = "";
                if ($limit == 0) {
                  $sql = "SELECT * FROM squads";
                } else {
                  $sql = "SELECT * FROM squads LIMIT $limit";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<div class='row'><div><input class='select-check' type='checkbox' onchange='selectOne(this)'>". $row["squadID"]. "</div><div>". $row["squadName"]. "</div><div> " . $row["leaderID"] ."</div><div> " . $row["Current_projectID"]. " </div></div>";
                  }
                } else {
                  echo "0 results";
                }
                echo "</div>";
            }
            function printProjectTable($limit) {
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
                $sql = "";
                if ($limit == 0) {
                  $sql = "SELECT * FROM projects";
                } else {
                  $sql = "SELECT * FROM projects LIMIT $limit";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<div class='row'><div><input class='select-check' type='checkbox' onchange='selectOne(this)'>". $row["projectID"]. "</div><div>". $row["projectNAME"]. "</div><div> " . $row["projectDescription"] ."</div><div class='start'> " . $row["projectStart"]."</div><div class='end'> ". $row["projectEnd"]." </div></div>";
                  }
                } else {
                  echo "0 results";
                }
                echo "</div>";
            }
            function printRessourcesTable($limit) {
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
            
                $sql = "";
                if ($limit == 0) {
                  $sql = "SELECT * FROM ressources";
                } else {
                  $sql = "SELECT * FROM ressources LIMIT $limit";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<div class='row'><div class='start'><input class='select-check' type='checkbox' onchange='selectOne(this)'>". $row["ressourceID"]. "</div><div>". $row["ressourceNAME"]. "</div><div class='start'> " . $row["category_ID"] ."</div></div>";
                  }
                } else {
                  echo "0 results";
                }
                echo "</div>";
            }
            function printCategoryTable($limit) {
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
          
              $sql = "";
              if ($limit == 0) {
                $sql = "SELECT * FROM category";
              } else {
                $sql = "SELECT * FROM category LIMIT $limit";
              }
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<div class='row'><div class='start'><input class='select-check' type='checkbox' onchange='selectOne(this)'>". $row["categoryID"]. "</div><div>". $row["categoryNAME"]. "</div><div class='start'> " . $row["Its_subcategoryID"] ."</div></div>";
                }
              } else {
                echo "0 results";
              }
              echo "</div>";
          }
          function printSubcategoryTable($limit) {
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
        
            $sql = "";
            if ($limit == 0) {
              $sql = "SELECT * FROM subcategory";
            } else {
              $sql = "SELECT * FROM subcategory LIMIT $limit";
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<div class='row'><div class='start'><input class='select-check' type='checkbox' onchange='selectOne(this'>". $row["subcategoryID"]. "</div><div>". $row["subcategoryNAME"]. "</div><div style='display:none;'></div></div>";
              }
            } else {
              echo "0 results";
            }
            echo "</div>";
        }
                function getCount($table) {
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
                
                    $sql = "SELECT COUNT(*) AS userCount FROM $table";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo $row["userCount"];
                      }
                    } else {
                      echo "0 Users";
                    }
                    $conn->close();
                }
                ?>