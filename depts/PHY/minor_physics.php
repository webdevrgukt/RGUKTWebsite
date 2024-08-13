<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <style>
         .nav-pills .nav-item .tab {
            background-color: white;
            color: #fca26e;
        }
        .nav-pills .nav-item .tab.act{
            background-color: orange;
            color: white;
        }
        .content {
            display: none;
        }
        .content.act {
            display: block;
        }
     .nav-link.contact.act {
          color: black;
      }
      .content {
            display: none;
        }
        .content.active {
            display: block;
        }
      
      .containers {
            position: relative;
            width: 600px;
            height: 150px;
            border: 1px solid #ccc;
            background: #f7f6f2 none repeat scroll 0 0;
            overflow: visible; /* Allowing overflow */
      }
      .double-line-bottom-theme-colored-2 {
        margin-bottom: 20px;
        margin-top: 8px;
        padding-bottom: 5px;
        position: relative;
    }
      

   
     </style>

</head>
<body>
 <?php include "header.php"?>
 <main>
    <div class="container">
<h2 class="title-text p-3"><center>PUC </center></h2>
<hr style="color: orange;">

<nav class="nav nav-pills nav-fill">
    <a class="nav-item nav-link tab act" href="#" onclick="changeTab('about')" id="nav-about">About</a>
    <a class="nav-item nav-link tab" href="#" onclick="changeTab('curriculum')" id="nav-curriculum">Curriculum</a>
</nav>
<br>
<br>
<div id="about-content" class="content act">
    <div>
        <h5>Minor Physics Program</h5>
        <br>
        The Department of Physics is one of the most vibrant centers of learning in the campus. The theme of the department is to broaden the boundaries of research across its undergraduate, post-graduate and research programmes and become an outstanding center for Physics in the next decade. The technological and scientific aptitude that is nourished through contemporary learning methodologies, enable the students to bring significant contribution to industries, research and academia. The PhD program offers several exciting frontier research areas spreading across theory experiments and applications.
        <br>
        <br>
        <b>Research Areas</b> 
        <br>
        <br>
        At present the department has 22 faculty members in the areas of MEMS & Micro/Nano Systems,  Energy Conversion Devices, Statistical and Biological Physics, Astrophysics and Cosmology, Computational Condensed Matter Physics, Experimental Condensed Matter Physics, High Energy Physics, Optics, Spectroscopy and Laser-Plasma Physics.
        <br>
        <br>
        <b>Research Facilities / Labs</b> 
        <br>
        <br> 
        Advanced Detector Materials Design and Simulations, Energy Conversion Devices Lab, Intense Laser-Matter Interaction Lab,  MEMS & Micro/Nano Systems Laboratory, Nanomagnetism and Microscopy, Advanced Functional Materials laboratory apart from the B. Tech. and M.Sc boasting of state-of-the-art teaching experimental demonstrations.
        
        </div>
</div>

<div id="curriculum-content" class="content">
    <h2>Curriculum Content</h2>
    <br>
    <div class="list-group">
           <a href="EP-2020 Batch.pdf" class="list-group-item list-group-item-action">Batch 2020 onwards</a>
           <a href="EP-2019 Batch.pdf" class="list-group-item list-group-item-action">Batch 2019</a>
           <a href="EP-2018 Batch.pdf" class="list-group-item list-group-item-action">Batch 2018</a>
           </div>
</div>
<br>
<div class="d-none" id="curriculum">
<div class="list-group">
  <a href="/assets/docs/P.hd Syllabus.pdf" class="list-group-item list-group-item-action">Ph.D Curriculum</a>
  </div>
</div>

</div>
  </main>
  <script>
     window.onload = function() {
        changeTab('about');
    };

    function changeTab(tabName) {
        var tabs = document.getElementsByClassName("tab");
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove("act");
            tabs[i].style.backgroundColor = "white";
            tabs[i].style.color = "#fca26e";
        }
        document.getElementById("nav-" + tabName).classList.add("act");
        document.getElementById("nav-" + tabName).style.backgroundColor = "#fca26e";
        document.getElementById("nav-" + tabName).style.color = "white";

        var contents = document.getElementsByClassName("content");
        for (var i = 0; i < contents.length; i++) {
            contents[i].classList.remove("act");
        }
        document.getElementById(tabName + "-content").classList.add("act");
    }
  </script>
  <?php include "footer.php"?>
</body>
</html>