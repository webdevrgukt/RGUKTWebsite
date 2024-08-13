<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maths Department</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="../styles.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
   integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous"> 

   <link rel="shortcut icon" href="../images/favicon.ico">  

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    @font-face {
    font-weight: 400;
    font-style:  normal;
    font-family: circular;

    src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
    }

    @font-face {
    font-weight: 700;
    font-style:  normal;
    font-family: circular;
    src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
    }
      .affix {
          top: 0;
          width: 100%;
          z-index: 9999 !important;
      }
    
      .affix + .container-fluid {
          padding-top: 70px;
      }
      #branda{

      }
      #brandb{

      }
.main-header a{
    font-family: "Oswald", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

.content-heading{
  font-family: "Oswald", sans-serif;
  font-optical-sizing: auto;
  font-weight: 300;
  font-style: normal;
}
    .content-heading{
        padding-top:1px;
        padding-bottom: 1px;
        background-color: rgb(243, 241, 241);
        border-radius: 10px;
        align-items: center;
    }
    .content-heading h2{
        border-left: 4px solid #57a89a;
        padding-left: 20px;
    }
    .content-para p{
        font-size: 20px;
        text-align: justify;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-bottom:50px;
    }
    </style>
  </head>
  <body class="home-page">
    <div class="wrapper">
        
<!-- ******HEADER****** --> 
<?php 
include "header.php";
?>
        
        <!-- ******CONTENT****** --> 
        <div class="container">
            <div class="row">
                <div class="col-12 content-heading">
                    <h2>Vision</h2>
                </div>
                <hr>
                <div class="col-12 content-para">
                    <p>To transform rural youth into global leaders and innovators in science, technology and Multidisciplinary areas and 
                      contribute to the maximization of welfare of humanity.</p>

                </div>
                <div class="col-12 content-heading">
                    <h2>Mission</h2>
                </div>
                <hr>
                <div class="col-12 content-para">
                    <p>To provide quality technical education with the goal of inclusiveness in terms of access to the meritorious
                       rural youth, who are perennially deprived of the opportunities; through an innovative blend of modern computer assisted,
                       learner-centric instructional methodology along with rigorous traditional teaching in a world class ambience</p>

                </div>
            </div>
        </div>
    </div><!--//wrapper-->
    
    <!-- ******FOOTER****** --> 
    <?php 
include "footer.php";
?>

</body>
  </html>