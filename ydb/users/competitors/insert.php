<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert records in YDB</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
 /* body {
  background-image: url("om.jpeg");
  background-color: #cccccc;
  
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}*/
</style>
<body>
  <div class="header">
  	<h2>Insert</h2>
  </div>
	
  <form method="post" action="insert.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Playername</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Age Group</label>
  	  <input type="text" name="agegroup" value="<?php echo $agegroup; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Dob</label>
  	  <input type="date" name="dob" value="<?php echo $dob; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Gender</label>
  	  <input type="text" name="gender" value="<?php echo $gender; ?>">
  	</div>
  	<div class="input-group">
      <label>District</label>
      <input type="text" name="district" value="<?php echo $district; ?>">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Insert</button>
    </div>
    <p>
      <a href="../home.php">Home page</a>
    </p>
  </form>
</body>
</html>