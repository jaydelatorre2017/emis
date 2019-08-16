<!DOCTYPE html>
<html lang="en">
<head>
<title>EMIS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 550px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
 
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>


<header>
  <h2>EMIS</h2>
</header>

<section>
  
  <nav>
      Welcome back ,
      <hr>
    <ul>
            <li><a href="{{ url('/')}}">Home</a></li>
            <hr>
      <li><a href="divisions">Division</a></li>
      <hr>
      
      <li><a href="#">Functional Divisions</a></li>
      <li><a href="#">Sections</a></li>
      <li><a href="#">Units</a></li>
      <hr>
      
      <li><a href="#">Districts</a></li>
      <li><a href="#">Schools</a></li>
      <hr>
      <li><a href="#">Employees</a></li>
      <hr>
      <li><a href="#">Reports</a></li>
    </ul>
  </nav>

  <article>
    @yield('content')
</section>

<footer>
  <p>Employee Management Information System</p>
</footer>

</body>
</html>
