<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEADER PHYSICS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <style>
 

      
      .rgukt-logo {
      width: 80px;
      height: 70px;
      padding-left: 1%;
    
    }
    
    
    #navItem1 {
      color: #323f4b;
      font-family: "Roboto";
      font-weight: bold;
    }
    #navItem2 {
      color:#020a11;
      font-family: "Roboto";
      font-weight: bolder;
    }
    #navItem3 {
      color: #020a11;
      font-family: "Roboto";
      font-weight: bold;
    }
    #navItem4 {
      color: #020a11;
      font-family: "Roboto";
      font-weight: bold;}

    
  .style{
    background-color: #fca26e;
  }
     </style>

</head>
<body>
 
    <header class="main-tool-bar sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light style" style="font-family: Arial, sans-serif;">
          <a class="navbar-brand" href="#">
              <img src="rgukt-img.png" class="rgukt-logo" />
          </a>
          <h4><strong> Department of Physics</strong></h4>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                  <a class="nav-link active" id="navItem1" href="index.php">
                      HOME
                      <span class="sr-only">(current)</span>
                  </a>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="About.php" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <b> ACADEMICS</b>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                          <a class="dropdown-item" href="academicdoc.php">ACADEMICS DOCUMENTS</a>
                          <a class="dropdown-item" href="https://rguktn.ac.in/academics/academic_calendar/">CALENDER</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="research.php" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <b> RESEARCH</b>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                          <a class="dropdown-item" href="research.php">RESEARCH AREAS</a>
                          <a class="dropdown-item" href="facilities.php">FACILITIES</a>
                          <a class="dropdown-item" href="publications.php">PUBLICATIONS</a>
                          
                      </div>
                  </li>
                 
                  <a class="nav-link contact" href="laboratories.php" id="navItem5"><b>LABORATORIES</b></a>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="About.html" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <b> PEOPLE</b>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                          <a class="dropdown-item" href="faculty.php">FACULTY </a>
                          <a class="dropdown-item" href="staff.php">STAFF</a>
                          <a class="dropdown-item" href="student.php">STUDENTS</a>
                         
                      </div>
                  </li>
                  <a class="nav-link contact" href="project.php" id="navItem5"><b>PROJECT</b></a>
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="About.php" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b> PROGRAMS</b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                        <a class="dropdown-item" href="puc_physics.php">PUC PHYSICS </a>
                        <a class="dropdown-item" href="engineering_physics.php">ENGINEERING PHYSICS</a>
                        <a class="dropdown-item" href="minor_physics.php">MINOR PHYSICS</a>
                    </div>
                </li>
                  <a class="nav-link contact" href="contact.php" id="navItem5"><b>CONTACT US</b></a>
              </div>
          </div>
      </nav>
        </header>

</body>
</html>