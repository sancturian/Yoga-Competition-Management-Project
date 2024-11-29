<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert records in yoga table</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Insert</h2>
  </div>
	
  <form method="post" action="insert.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Yoga name</label>
  	  <input type="text" name="yoganame">
  	</div>
  
  	<div class="input-group">
  	  <label>player id</label>
  	  <input type="number" name="player_id">
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