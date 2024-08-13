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
        .button {
    width: 8%;
    color:white;
    font-size: 16px;
    padding: 0.6rem;
    background: #fca26e;
    border: 0;
    border-radius: 20px;
    outline: none;
    margin-top: 20px;
    margin-right:20px;
}
    </style>

</head>
<body>
<?php include "header.php"?>
<main>

    <button class=" button"><a href="student.php">BACK</a></button>
    

    <div class="container">
        <h2 class="title-text p-3"><center>B.TECH </center></h2>
        <hr style="color: orange;">

        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link tab act" href="#" onclick="changeTab('2018')" id="nav-2018">2018</a>
            <a class="nav-item nav-link tab" href="#" onclick="changeTab('2019')" id="nav-2019">2019</a>
            <a class="nav-item nav-link tab" href="#" onclick="changeTab('2020')" id="nav-2020">2020</a>
            <a class="nav-item nav-link tab" href="#" onclick="changeTab('2021')" id="nav-2021">2021</a>
            <a class="nav-item nav-link tab" href="#" onclick="changeTab('2022')" id="nav-2022">2022</a>
            <a class="nav-item nav-link tab" href="#" onclick="changeTab('2023')" id="nav-2023">2023</a>
        </nav>
        <br>
        <br>
        <div id="content-2018" class="content act">
            <div>
                <h5>Content for 2018</h5>
                <!-- Insert your content for 2018 here -->
                <table class="table table-striped" id="2023">
                    <thead>
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ALFIEN JESSURUN P</td>
                        <td>EP23BTECH11001</td>
                    </tr> 
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>AMAY ABHIJIT DEODHAR</td>
                        <td>EP23BTECH11002</td>
                    </tr> 


                        
                    <tr>
                        <th scope="row">3</th>
                        <td>ARAV P</td>
                        <td>EP23BTECH11003</td>
                    </tr> 

                    <tr>
                        <th scope="row">4</th>
                        <td>AVANTIKA DHANANJAY PATIL</td>
                        <td>EP23BTECH11004</td>
                    </tr> 

                    <tr>
                        <th scope="row">5</th>
                        <td>BODDU HADASSAH</td>
                        <td>EP23BTECH11005</td>
                    </tr> 

                    <tr>
                        <th scope="row">31</th>
                        <td>TANAY SHARDUL GANGAN</td>
                        <td>EP23BTECH11031</td>
                    </tr> 

                    <tr>
                        <th scope="row">32</th>
                        <td>VADLA GAYATRI PRIYA</td>
                        <td>EP23BTECH11032</td>
                    </tr> 


                    </tbody>
                </table>
            </div>
        </div>

        <div id="content-2019" class="content">
            <div>
                <h5>Content for 2019</h5>
                <!-- Insert your content for 2019 here -->
                <table class="table table-striped" id="2023">
                    <thead>
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ALFIEN JESSURUN P</td>
                        <td>EP23BTECH11001</td>
                    </tr> 
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>AMAY ABHIJIT DEODHAR</td>
                        <td>EP23BTECH11002</td>
                    </tr> 


                        
                    <tr>
                        <th scope="row">3</th>
                        <td>ARAV P</td>
                        <td>EP23BTECH11003</td>
                    </tr> 

                    <tr>
                        <th scope="row">4</th>
                        <td>AVANTIKA DHANANJAY PATIL</td>
                        <td>EP23BTECH11004</td>
                    </tr> 

                    <tr>
                        <th scope="row">5</th>
                        <td>BODDU HADASSAH</td>
                        <td>EP23BTECH11005</td>
                    </tr> 

                    <tr>
                        <th scope="row">31</th>
                        <td>TANAY SHARDUL GANGAN</td>
                        <td>EP23BTECH11031</td>
                    </tr> 

                    <tr>
                        <th scope="row">32</th>
                        <td>VADLA GAYATRI PRIYA</td>
                        <td>EP23BTECH11032</td>
                    </tr> 


                    </tbody>
                </table>
            </div>
        </div>
        <div id="content-2020" class="content">
            <div>
                <h5>Content for 2020</h5>
                <!-- Insert your content for 2020 here -->
                <table class="table table-striped" id="2023">
                    <thead>
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ALFIEN JESSURUN P</td>
                        <td>EP23BTECH11001</td>
                    </tr> 
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>AMAY ABHIJIT DEODHAR</td>
                        <td>EP23BTECH11002</td>
                    </tr> 


                        
                    <tr>
                        <th scope="row">3</th>
                        <td>ARAV P</td>
                        <td>EP23BTECH11003</td>
                    </tr> 

                    <tr>
                        <th scope="row">4</th>
                        <td>AVANTIKA DHANANJAY PATIL</td>
                        <td>EP23BTECH11004</td>
                    </tr> 

                    <tr>
                        <th scope="row">5</th>
                        <td>BODDU HADASSAH</td>
                        <td>EP23BTECH11005</td>
                    </tr> 

                    <tr>
                        <th scope="row">31</th>
                        <td>TANAY SHARDUL GANGAN</td>
                        <td>EP23BTECH11031</td>
                    </tr> 

                    <tr>
                        <th scope="row">32</th>
                        <td>VADLA GAYATRI PRIYA</td>
                        <td>EP23BTECH11032</td>
                    </tr> 


                    </tbody>
                </table>
            </div>
        </div>
        <div id="content-2021" class="content">
            <div>
                <h5>Content for 2021</h5>
                <!-- Insert your content for 2019 here -->
                <table class="table table-striped" id="2023">
                    <thead>
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ALFIEN JESSURUN P</td>
                        <td>EP23BTECH11001</td>
                    </tr> 
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>AMAY ABHIJIT DEODHAR</td>
                        <td>EP23BTECH11002</td>
                    </tr> 


                        
                    <tr>
                        <th scope="row">3</th>
                        <td>ARAV P</td>
                        <td>EP23BTECH11003</td>
                    </tr> 

                    <tr>
                        <th scope="row">4</th>
                        <td>AVANTIKA DHANANJAY PATIL</td>
                        <td>EP23BTECH11004</td>
                    </tr> 

                    <tr>
                        <th scope="row">5</th>
                        <td>BODDU HADASSAH</td>
                        <td>EP23BTECH11005</td>
                    </tr> 

                    <tr>
                        <th scope="row">31</th>
                        <td>TANAY SHARDUL GANGAN</td>
                        <td>EP23BTECH11031</td>
                    </tr> 

                    <tr>
                        <th scope="row">32</th>
                        <td>VADLA GAYATRI PRIYA</td>
                        <td>EP23BTECH11032</td>
                    </tr> 


                    </tbody>
                </table>
            </div>
        </div>
        <div id="content-2022" class="content">
            <div>
                <h5>Content for 2022</h5>
                <!-- Insert your content for 2019 here -->
                <table class="table table-striped" id="2023">
                    <thead>
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ALFIEN JESSURUN P</td>
                        <td>EP23BTECH11001</td>
                    </tr> 
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>AMAY ABHIJIT DEODHAR</td>
                        <td>EP23BTECH11002</td>
                    </tr> 


                        
                    <tr>
                        <th scope="row">3</th>
                        <td>ARAV P</td>
                        <td>EP23BTECH11003</td>
                    </tr> 

                    <tr>
                        <th scope="row">4</th>
                        <td>AVANTIKA DHANANJAY PATIL</td>
                        <td>EP23BTECH11004</td>
                    </tr> 

                    <tr>
                        <th scope="row">5</th>
                        <td>BODDU HADASSAH</td>
                        <td>EP23BTECH11005</td>
                    </tr> 

                    <tr>
                        <th scope="row">31</th>
                        <td>TANAY SHARDUL GANGAN</td>
                        <td>EP23BTECH11031</td>
                    </tr> 

                    <tr>
                        <th scope="row">32</th>
                        <td>VADLA GAYATRI PRIYA</td>
                        <td>EP23BTECH11032</td>
                    </tr> 


                    </tbody>
                </table>
            </div>
        </div>
        <div id="content-2023" class="content">
            <div>
                <h5>Content for 2023</h5>
                <!-- Insert your content for 2019 here -->
                <table class="table table-striped" id="2023">
                    <thead>
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ALFIEN JESSURUN P</td>
                        <td>EP23BTECH11001</td>
                    </tr> 
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>AMAY ABHIJIT DEODHAR</td>
                        <td>EP23BTECH11002</td>
                    </tr> 


                        
                    <tr>
                        <th scope="row">3</th>
                        <td>ARAV P</td>
                        <td>EP23BTECH11003</td>
                    </tr> 

                    <tr>
                        <th scope="row">4</th>
                        <td>AVANTIKA DHANANJAY PATIL</td>
                        <td>EP23BTECH11004</td>
                    </tr> 

                    <tr>
                        <th scope="row">5</th>
                        <td>BODDU HADASSAH</td>
                        <td>EP23BTECH11005</td>
                    </tr> 

                    <tr>
                        <th scope="row">31</th>
                        <td>TANAY SHARDUL GANGAN</td>
                        <td>EP23BTECH11031</td>
                    </tr> 

                    <tr>
                        <th scope="row">32</th>
                        <td>VADLA GAYATRI PRIYA</td>
                        <td>EP23BTECH11032</td>
                    </tr> 


                    </tbody>
                </table>
            </div>
        </div>
        <!-- Repeat the above pattern for the remaining years -->

    </div>
</main>
<script>
    window.onload = function() {
        changeTab('2018');
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
        document.getElementById("content-" + tabName).classList.add("act");
    }
</script>
<?php include "footer.php"?>
</body>
</html>
