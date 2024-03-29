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
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    
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
        <li><a href="#WORKEXPERIENCE">WORKEXPERIENCE</a></li>
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
  <a data-toggle="popover" title="MCA Aggregate" data-placement="right" data-trigger="hover" data-content="70%"><div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    MCA Science
  </div>
</a>
</div>
<a data-toggle="popover" title="BCS Aggregate" data-placement="right" data-trigger="hover" data-content="65.51%"><div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="66"
  aria-valuemin="0" aria-valuemax="100" style="width:65%">
    BSc. Computer Science
  </div>
</a>
</div>

<a data-toggle="popover" title="12th Science" data-placement="right" data-trigger="hover" data-content="64.83%"><div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="66"
  aria-valuemin="0" aria-valuemax="100" style="width:64%">
    12th HSC
  </div>
</a>
</div>

<a data-toggle="popover" title="10th %" data-placement="right" data-trigger="hover" data-content="81.53%">
    <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="82"
  aria-valuemin="0" aria-valuemax="100" style="width:82%">
    10th SSC
  </div>
</a>
</div>
    

<div  id="WORKEXPERIENCE" class="container-fluid bg-3 text-center ">
    
  <h1 class="margin"><span class="glyphicon glyphicon-briefcase"><h2> Work Experience</h2></span></h1>
 <?php 

$date1 = strtotime('2017-12-16');
$date2 =  strtotime(date("Y-m-d"));
$months = 0;

while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
    $months++;

echo '<a data-toggle="popover" title="Cognizant Technology Solutions" data-placement="right" data-trigger="hover" data-content="'.$months.' months"><div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$months.'"
  aria-valuemin="0" aria-valuemax="100" style="width:'.$months.'%">
   Cognizant Technology solutions (DEC 2017 - OCT 2022) </br>
   BOSCH (OCT 2022 - Present)
  </div>
</a>' ;
?>
</div>
 <h1 class="margin"><span class="glyphicon glyphicon-tasks"><h2> Software Engineer</h2></span></h1>
      
      <div class="row">
    <div class="col-sm-4" style="background-color:#ffffff;">
        <div class="panel panel-success">
      <div class="panel-heading"> Roles and Responsibilities</div>
      <div class="panel-body">
• Analysis of requirements and prepare Technical or design 
documents.
• Create API documentation.
• Implement requirement by following good coding standards.
• Write unit testing and perform load testing.
• Generate code coverage reports.
• Generate code complexity reports.
• Perform code refactoring if required.
• Build and deploy code in testing environment.
• Be known to security scans like fortify, blackduck ,checkmarxs
• Be known to code quality scans and reports generated by 
tools , analyze and fix issues if any.
• Peer code review assistance and raise request for peer code 
review and justify or implement comments given by code 
reviewer.
      </div>
    </div>
          </div>
         <div class="row">
    <div class="col-sm-4" style="background-color:#ffffff;">
        <div class="panel panel-success">
      <div class="panel-heading"> 2020- 2021 highlights</div>
      <div class="panel-body">
Lead end to end development of a new springboot java messaging 
service.
Lead a poc assignment for migrating .net microservice to java 
microservice.
Lead team and provided guidance for migrating application from a 
traditional build and deployment to new build and deploy pipeline 
under CICD architecture. Accelerator tool was developed and shared 
with team.
      </div>
    </div>
             </div>
                 <div class="row">
    <div class="col-sm-4" style="background-color:#ffffff;">
        <div class="panel panel-success">
      <div class="panel-heading"> 2018- 2019 highlights</div>
      <div class="panel-body">
Worked on development and maintenance of multiple monolith and
REST microservices. 
Highly involved in innovations/ POC/tools/accelerator for ease of 
developers in our team which would reduce development time.
One of the accelerator which I developed helped teams to speed up 
migration of all application from a traditional build and deploy pipeline 
to an automated build and deploy pipeline which implements CICD. 
Developed over 4 tools/accelerators in span of 3 years.
      </div>
    </div>
                     </div>
    </div>
</div>

    <h1 class="margin"><span class="glyphicon glyphicon-thumbs-up"><h2>Rewards,Recognition and Certifications</h2></span></h1>
      
      <div class="row">
    <div class="col-sm-4" style="background-color:#ffffff;">
        <div class="panel panel-success">
      <div class="panel-heading">Rewards & Recognition </div>
      <div class="panel-body">
         •  Received Client Focus in 2020. 
         •  Received Outstanding performer in year 2020.
      </div>
    </div>
          </div>
                        <div class="row">
    <div class="col-sm-4" style="background-color:#ffffff;">
        <div class="panel panel-success">
      <div class="panel-heading"> Certifications</div>
      <div class="panel-body">
• Cognizant certified Full stack Engineer(2019)
• AWS certified Cloud Practitioner(2020)
      </div>
    </div>
                     </div>
    </div>
</div>

  
  <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
</div>
 <div id="PROJECTS" class="container-fluid bg-3 text-center">
      <h1 class="margin"><span class="glyphicon glyphicon-tasks"><h2> Academic Projects</h2></span></h1>
      
      <div class="row">
    <div class="col-sm-4" style="background-color:#ffffff;">
        <div class="panel panel-success">
      <div class="panel-heading">Connection</div>
      <div class="panel-body">An Assignment submission System & forum.Developed using Php and MySQL as Backend,HTML & CSS3 at front Connection won 1st price an a Software Project Competition.
      </div>
    </div>

    </div>
    <div class="col-sm-4" style="background-color:#ffffff;">
    <div class="panel panel-success">
      <div class="panel-heading">City Stats</div>
      <div class="panel-body">A dynamic information Display System.Developed using  .net framework.Build using ASP.net and C# ,City stats displays census Data in graphical form.
      </div>
      </div>
      </div>
    <div class="col-sm-4" style="background-color:#ffffff;">
        <div class="panel panel-success">
      <div class="panel-heading">J Player</div>
      <div class="panel-body">J Player is a  MP3 player is developed in Java Environment.UI developed using JAVA SWING framework.J Player has a Playlist,shuffle and repeat feature.
      </div>
    </div>
  </div>
</div>
 </div>
 <div id="SKILLS" class="container-fluid bg-3 text-center ">
     <h1 class="margin"><span class="glyphicon glyphicon-wrench"><h2>Skills</h2></span></h1>
     <h3><span class="label label-info">Java</span></h3>
      <h3><span class="label label-info">Springboot</span></h3>
      <h3><span class="label label-info">C#</span></h3>
      <h3><span class="label label-info">.NET</span></h3> 
      <h3><span class="label label-info">REST API</span></h3>
      <h3><span class="label label-info">Micro services</span></h3>
     <h3><span class="label label-info">C</span></h3>
     <h3><span class="label label-info">HTML</span></h3>
     <h3><span class="label label-info">CSS</span></h3>
     <h3><span class="label label-info">JavaScript</span></h3>
     <h3><span class="label label-info">Photoshop</span></h3>
     </div>
     <div id="HOBBIES" class="container-fluid bg-2 text-center">
         <h1 class="margin"><span class="glyphicon glyphicon-tower"><h2>Hobbies</h2></span></h1>
         <h3>Photography</h3>
         <h3>Book Reading</h3>
         <h3>Cooking</h3>
         <h3>Travelling</h3>
         <a href="https://www.instagram.com/nomad_clicks_/">visit my instagram</a>
         <a href="http://aksinstagraph.blogspot.in">visit my blog</a>
        
        
     </div>
      <div  class="container-fluid bg-2 text-center">
          <h1 class="margin"><span class="glyphicon glyphicon-phone-alt"><h2>Contact</h2></span></h1>
          <h4><span class="label label-primary">Mobile<span class="badge">9765009987</span></span></h4>
          <h4><span class="label label-primary">Email<span class="badge">akshayshah.1893@gmail.com</span></span></h4>
             <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="akshay-shah-484a0549"><a class="LI-simple-link" href='https://in.linkedin.com/in/akshay-shah-484a0549?trk=profile-badge'>Akshay Shah</a></div>    
    </div>          
          
          
</body>
</html>

