<?php
$judgename = "";
$marks = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'ydb');

if (isset($_POST['reg_user'])) {
  $judgename = mysqli_real_escape_string($db, $_POST['judgename']);
  $marks = mysqli_real_escape_string($db, $_POST['marks']);
  $player_id = mysqli_real_escape_string($db, $_POST['player_id']);
  

  if (empty($judgename)) { array_push($errors, "judgename is required"); }
  if (empty($marks)) { array_push($errors, "marks is required"); }
  if (empty($player_id)) { array_push($errors, "player_id is required"); }

 /* $sql = "SELECT * FROM competitors WHERE player_id='$player_id' LIMIT 1";
  $result = mysqli_query($db, $sql);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    if ($user['player_id'] === $player_id) {
      array_push($errors, "Given player_id does not exist!! plz enter a vaild player_id");
    }
    
  }*/

 if (count($errors) == 0) {
  	$query = "INSERT INTO judges ( judgename, marks, player_id) 
  			  VALUES( '$judgename', '$marks', '$player_id')";
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