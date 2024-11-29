<?php

$name = "";
$agegroup = "";
$dob = "";
$gender = "";
$district = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'ydb');


if (isset($_POST['reg_user'])) {
  
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $agegroup = mysqli_real_escape_string($db, $_POST['agegroup']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $district = mysqli_real_escape_string($db, $_POST['district']);
  
  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($agegroup)) { array_push($errors, "Age group is required"); }
  if (empty($dob)) { array_push($errors, "dob is required"); }
  if (empty($gender)) { array_push($errors, "gender is required"); }
  if (empty($district)) { array_push($errors, "district is required"); }  
  
    
  
  if (count($errors) == 0) {
  
  	$query = "INSERT INTO competitors (player_id, name, age_group, dob, gender, district) 
  			  VALUES(default, '$name', '$agegroup', '$dob', '$gender', '$district')";
    $status = mysqli_query($db, $query);
   if ($status == 1) {
      array_push($errors, "record inserted successfully");
   }
 }
   /* else
    {
     array_push($errors, "unsuccessful");
    }
 */
  }
?>