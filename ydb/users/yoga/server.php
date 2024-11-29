<?php
$yoganame = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'ydb');


if (isset($_POST['reg_user'])) {
  
  $yoganame = mysqli_real_escape_string($db, $_POST['yoganame']);
  $player_id = mysqli_real_escape_string($db, $_POST['player_id']);
  
  if (empty($yoganame)) { array_push($errors, "yoganame is required"); }
  if (empty($player_id)) { array_push($errors, "player_id is required"); }
 
  if (count($errors) == 0) {
    $query = "INSERT INTO yoga (yoga_id, yoganame, player_id) 
  			  VALUES(default, '$yoganame', '$player_id')";
  	$status = mysqli_query($db, $query);
    if($status == 1)
    {
     array_push($errors, "record inserted successfully");
    }
    else
    {
     array_push($errors, "Given player_id does not exist!! plz enter a vaild player_id");
    }
  }
}
?>