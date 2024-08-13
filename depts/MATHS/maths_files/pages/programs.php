<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maths Department</title>

    <link rel="stylesheet" href="../styles.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
   integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous"> 

   <link rel="shortcut icon" href="../images/favicon.ico"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    .text-center{
        font-family:'open sans', arial, sans-serif;
        color: #777;
        font-size:23px;
    } 
    .content-border{
        border: 1px solid #e8e8e8;
        padding: 15px;
        margin-bottom: 20px;
    }
    .table{
        width:100%;
        max-width:100%;
        margin-bottom:20px;
        
    }
    </style>
    <body class="home-page">
        <div class="wrapper">
            
    <!-- ******HEADER****** --> 
    <?php 
        include "header.php";
    ?>
    <!--*********CONTENT*********-->
    <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left header1">Programs</h1>
                </header>
                <div class="content-border">
                    <h3 class="text-center">
                        <u><b>Programme of Mathematics<b></u>
                    </h3>
                    <p style="font-size:16px;font-weight:100;">The minor programme in Mathematics is designed to allow engineering and science students to pursue a more rigourous education in mathematics. The minor courses have been selected to represent the different basic areas of mathematics. A student completing these courses will achieve a better understanding of the mathematical techniques used in the sciences and engineering disciplines and will also be well equipped for further advanced mathematical education. </p>
                    <h3 class="text-center">
                        <u><b>Courses<b></u>
                    </h3>
                    <table class="table table-striped" style="font-size:16px;">
                    <thead>
                        <tr>
                            <th>Course code</th>
                            <th>Title</th>
                            <th>Credits</th>
                            <th>Pre-requisites</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>MA 403</th>
                            <th>Real analysis</th>
                            <th>0</th>
                            <th>None</th>
                        </tr>
                        <tr>
                            <th>MA 404</th>
                            <th>Basic algebra</th>
                            <th>0</th>
                            <th>None</th>
                        </tr>
                        <tr>
                            <th>MA 405</th>
                            <th>General Topology</th>
                            <th>0</th>
                            <th>None</th>
                        </tr>
                        <tr>
                            <th>MA 405</th>
                            <th>Complex analysis</th>
                            <th>0</th>
                            <th>None</th>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
    </div>
    <?php 
        include "footer.php";
    ?>
    </div>
    </body>
</html>
