<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Bootstrap JS bundle (use this if you don't have it already) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <style>

  
  .gray-bg {
    background: #f7f7f7;
}
.page-section-ptb {
    padding: 80px 0;
}
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


 </style>

</head>
<body>
<?php
include "header.php";?>
      <!-- ------------------------------------------------------------------------------ -->
      <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="sport1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="sport5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="sport7.jpg" class="d-block w-100" alt="...">
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
      
      
      <!--------------------------------------ABOUT SECTION---------------------------------------------------------------> 
<br><br><br>
<br>

      <section class="page-section-ptb gray-bg">

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid full-width mb-20" src="https://bsa.iitd.ac.in/public/storage/misc/bsa home_1668430200.png" alt="">
      </div>
      <div class="col-lg-6">
        <div class="section-title mb-10">
          <h2 class="text-theme-colored2">ABOUT</h2>
        </div>
        <p class="text-justify">We turn novices into champions here at IIIT RGUKT NUZVID The best facilities provided by us have led to great results and our presence is now being felt in the all circles as well as in the inter college meets outside. As an organisation we are a group of around 1000's of people including players, coaches, trainers and administrative staff who are working to take our sporting standards at par with the best in the business. Apart from being the apex body for sports, we are involved in a number of social events, informal events, hosting of sports tournaments and other collaborations and therefore the number of people involved is huge.</p>
        <a class="button gray icon x-small" href="about.php"> Know More <i class="fa fa-long-arrow-right"></i> </a>
      </div>
    </div>
  </div>
</section>
    <!-------------------------------------------GAllery section--------------------------------------------------------> 
   <br><br><br><br> <section class="page-section-ptb gray-bg">
   <h2 style="text-align:center; padding-top:19px;">SPORTS GALLERY</h2>
    <div class="container">
    <div class="row">
        <div class="col-5 mb-3 mr-5">
            <img src="https://www.iitbhu.ac.in/sites/default/files/institute/dean/dosa/img/other/councils_games02.jpg" style="border-radius: 15px; height:400px; width:500px" alt="...">
          </div>
        <div class="col-5 mb-3">
            <img src="https://www.iitbhu.ac.in/sites/default/files/institute/dean/dosa/img/other/councils_games01.jpg" style="border-radius: 15px; height:400px; width:500px" alt="...">
        </div>
        <div class="col-5 mb-3 mr-5">
            <img src="https://www.iitbhu.ac.in/sites/default/files/institute/dean/dosa/img/other/councils_games02.jpg" style="border-radius: 15px; height:400px; width:500px" alt="...">
          </div>
        <div class="col-5 mb-3">
            <img src="https://www.iitbhu.ac.in/sites/default/files/institute/dean/dosa/img/other/councils_games01.jpg" style="border-radius: 15px; height:400px; width:500px" alt="...">
        </div>

    </div>
</div>
</section>


     <!-- -------------------------------------- footer section------------------------------------------- -->

     <?php
include "footer.php";
?>
    

</body>
</html>





