<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<?php

$link = mysqli_connect("localhost", "root", "", "YDB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM judges";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
             
                echo "<th>judgename</th>";
                echo "<th>marks</th>";
                echo "<th>player_id</th>";
              
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               
                echo "<td>" . $row['judgename'] . "</td>";
                echo "<td>" . $row['marks'] . "</td>";
                echo "<td>" . $row['player_id'] . "</td>";
              
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<p>
      <a href="../home.php">Home page</a>
    </p>
</body>
</html>