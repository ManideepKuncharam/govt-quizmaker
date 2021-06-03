<html>
<div class="header">
  <div class="row">
    <div class="col-3">
    <a href="index.php"><img src="img/school.png" style="height:100px; width:190px;"></a>
    </div>
    <div class="col-9">
      
    </div>
  </div>
</div>
<style>
body {
  margin: 0;
  font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: white;
  padding: 30px;
}


#navbar a {
  float: right;
  display: block;
  color:white;
  text-align: center;
  padding: 14px 16px;
  font-size:20px;
  text-decoration: none;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 40px;
}
li:hover{
  background-color:#FF9933;
}
</style>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#" style="color:white;" >SchoolEdu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color:white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
    <a class="nav-link" href="list.php" style="color:white;">Take Quiz</a></i>
      </li>
      <li class="nav-item">
    <a class="nav-link" href="login.php" style="color:white;">Login</a></i>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" style="color:white;">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://schooledu.co.in/tstextbooks/allclasses.html" style="color:white;">Text Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php" style="color:white;">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</html>