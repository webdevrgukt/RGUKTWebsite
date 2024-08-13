<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrap JS bundle (use this if you don't have it already) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <style>
        .carousel{
  height:52%; 
  width: 90%; 
  align-items: center;
  margin-left: 63px;
}
.carousel-card{
  height:32%; 
  width: 90%; 
  align-items: center;
  margin-left: 63px;
}
.para-content{
   margin-left:110px;
   margin-right:110px;
   align-items:center;
}
.title{
  text-align:center;
  border-bottom:2px solid orange;
  padding-bottom:5px;
}
.card-container{
  background-color:grey;
}
.card-content{
  margin-left:110px;
  margin-right:110px;
  display:flex;
  flex-direction:row;
  padding:20px;
}
.title{
  text-align:center;
}
.single-card{
  background-color:white;
  display:flex;
  padding:10px;
  margin:10px;
  flex-wrap:wrap;
  width:33%;
  flex-direction:column;
}
h4{
  border-bottom:2px solid orange;
  text-align:center;
  font-weight:border;
  padding:10px;
}
.flexcard:hover{
  box-shadow:0 2px 4px orange;
  padding:10px;
  margin-top:10px;
  overflow:hidden;
  border-radius:5px;
  opacity:1;
}
.card-header{
  padding:20px;
  text-align:center;
  color:red;
  scrollbar-color:lightgreen;
  height:20vh;
}


    </style>
</head>
<body>
<?php include "header.php" ?>


<section>
<div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="faculty_images/group.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="all_images/student.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="faculty_images/group_pic.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  
      </div>
       

      <br><br>
      <div class="para-content"> 
        <h1 class="title">About Us</h1><br>
        <p>
The Department of Physics at Rajiv Gandhi University of Knowledge Technology (RGUKT) is known for its commitment to excellence in education and research. With a focus un cutting-edge technologies and innovative tenching methods, the department aims to nurture s strong foundation in physics among PUC and Engineering students. Faculty members are dedicated to imparting theoretical knowledge and fostering practical skills, preparing students for both academic and real-world challenges. The department's rescarch endeavors contribute to advancementa in various fields of physics, positioning RGUKT as a hub for scientific exploration and learning.<br><br>
The Department of Physice broadens ita academic spectrum to encompass multiple educational tiers. This includes delivering Physics instruction within the Pre-University Course (PUC) framework, equivalent to Board of Intermediate Education, AP, as well as offering Engineering Physics to first-year studenta across varied ongineering disciplines such as Mechanical Engineering. Electranies and Communication Engineering, Metallurgical and Materials Engineering, Chemical Engineering, Computer Science and Engineering, and Electrical Engineering. The physics syllabi for the aforementioned courses are meticulously crafted to align with the specific requirements of each discipline. Moreover, the department actively engages and nurtures the interests of budding physics enthusiasts through specialized coursework designed for a Minor in Physics.<br><br>
The Physics Department at RGUKT-Nuzvid, prides itself on a dedicated and accomplished faculty, Comprising 20 members, the faculty is recruited through a meticulous proсння, drawing talent from osteumed institutions, including IITs and universitios across the nation. Each faculty member holds a distinct designation and contributes to the department's commitment to excellence in teaching and research. Engaged en a full-time contractual basis, they bring a wealth of experience to foster academic growth and innovation within the RGURT community.<br><br>
The Department of Physics at RGUKT is at the forefront of cutting-edge research endeavors. With a focus on advancing knowledge and innovation, the department actively engages in impactful research activities spanning various fields of physics.<br><br>
The research initiatives encompass both theoretical and experimental domains, fostering an environment conducive to exploration and discovery. The department encourages interdisciplinary collaboration and partnerships, ensuring a holistic approach to address contemporary challenges. Through a commitment to excellence and a passion for pushing the boundaries of knowledge, the research activities in the Department of Physics at RGUKT play a pivotal role in shaping the academic landscape and making significant contributions to the broader scientific community.
        </p>
      </div>

      <br><br>

      <div class="card-container">
        <div class="card-content">
          <div class="single-card"> 
          <h4>Announcements</h4>
          <div class="flexcard">
            <div  class="card-header">
              updated soon...
            </div>
            <div class="card-footer">Date: updated</div>
          </div><br>
          <div class="flexcard">
            <div  class="card-header">
              updated soon...
            </div>
            <div class="card-footer">Date: updated</div>
          </div>
          </div>

          <div class="single-card"> 
          <h4>News</h4>
          <div class="flexcard">
            <div  class="card-header">
              updated soon...
            </div>
            <div class="card-footer">Date: updated</div>
          </div>
          </div>

          <div class="single-card"> 
          <h4>Awards & Recognition</h4>
          <div class="flexcard">
            <div  class="card-header">
              updated soon...
            </div>
            <div class="card-footer">Date: updated</div>
          </div>
          </div>
        </div>
      </div>
    </section>

<?php include "footer.php" ?>
</body>
</html>