<!DOCTYPE html>
<html lang="en">
<head>
    <title>Digital Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">About Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#PROJECTS">PROJECTS</a></li>
        <li><a href="#SKILLS">SKILLS</a></li>
        <li><a href="#ACADEMICS">ACADEMICS</a></li>
        <li><a href="#HOBBIES">HOBBIES</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div id="WHO" class="container-fluid bg-1 text-center">
    <h1 class="margin"> I am </h1>
    <img src="akshay.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Profile Pic" width="250" height="250">
    <h1 >Akshay Shah</h1>

</div>

<div class="container-fluid bg-2 text-center ">
    
  <h3 class="margin">Born on </h3>
  <h1 class="margin"><span class="glyphicon glyphicon-baby-formula"><h2>18 Jan 1993</h2></span></h1>
  <h3 class="margin">Lives in </h3>
  <h1 class="margin"><span class="glyphicon glyphicon-home"><h2>Pune</h2></span></h1>
  
  

</div>
<div  id="ACADEMICS" class="container-fluid bg-3 text-center ">
    
  <h1 class="margin"><span class="glyphicon glyphicon-education"><h2> Academics</h2></span></h1>
  <a data-toggle="popover" title="MCA Science" data-content="68% Aggregate"><div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    68%
  </div>
</a>
</div>
  
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>

</div>



     </div>
</body>
</html>

