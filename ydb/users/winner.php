<!DOCTYPE html>
<html>
<head>
	<title>RESULT OF COMPETITION</title>
</head>
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
<body>
<?php 
  		$link = mysqli_connect('localhost', 'root', '', 'ydb');

  		if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
		}
  		//$flag=0;
  		$sql = "CALL winner1()";
  		if($result = mysqli_query($link, $sql)){
    		if(mysqli_num_rows($result) > 0){
        	echo "<table>";
            	echo "<tr>";
                	echo "<th>Marks obtained</th>";
                	echo "<th>Player_id</th>";
               		echo "<th>Rankwise Name</th>";
                //  echo "<th>Rank</th>";
               	echo "</tr>";
               	
               	while($row = mysqli_fetch_array($result)){
                 // $flag++;
            echo "<tr>";
                echo "<td>" . $row['SUM(judges.marks)'] . "</td>";
                echo "<td>" . $row['player_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
            //    echo "<td>" . $row['row'] . "</td>";
            echo "</tr>";   
            }     
        echo "</table>";
        
        mysqli_free_result($result);	
  		}
  		}	
  		mysqli_close($link);
    
  		?>
   <p>
      <a href="home.php">Home page</a>
    </p>    
</body>
</html>  		