<!DOCTYPE html>
<html>
<head>
  
 <style>

.header {
 /* width: 100%;
  margin: 50px auto 0px;*/
  color: red;
 /* background: blue;*/
  text-align: center;
  text-shadow: 5px 3px grey;
  font-family: cursive;
 /* border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;*/
}

.container {
    position: relative;
    text-align: center;
    color: white;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 80px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

  body {
  background-image: url("breathe.jpeg");
  /*background-color: #cccccc;*/
  
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

</style>
</head>

<body>
<div class="header">
<p><h1><strong>YOGA IS LIFE</strong></h1></p>
</div>

<div class="container">

<div class="navbar">
 
  <div class="dropdown">
    <button class="dropbtn">Competitors</button>
    <div class="dropdown-content">
      <a href="competitors/insert.php">Insert</a>
      <a href="competitors/fetch.php">Fetch</a>
     
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Judges</button>
    <div class="dropdown-content">
      <a href="judges/insert.php">Insert</a>
      <a href="judges/fetch.php">Fetch</a>
    
    </div>
  </div>
  <div class="dropdown">  
    <button class="dropbtn">Yoga</button>
    <div class="dropdown-content">
      <a href="yoga/insert.php">Insert</a>
      <a href="yoga/fetch.php">Fetch</a>
   	</div>
  </div>
  <a href="winner.php">Results</a>
  <a href="index.php?logout='1'">Logout</a>
</div>
<img src="breathe.jpeg" width="100%" height="100%">
</div>


</body>
</html>
