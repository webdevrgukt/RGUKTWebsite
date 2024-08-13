<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .styles {
            background-image: url("all_images/student.jpg");
            background-size: cover;
            background-position: center;
            height: 100%;
            width: 100%;
            align-items:center;
            position: relative; /* Ensure proper layering */
        }
        h1 {
            font-size: 3em;
            color: white;
            font-family: Arial, sans-serif;
            font-weight: bold;
            padding-top:290px;
            padding-left:50px;
            z-index: 1; /* Ensure the text is above the background */
        }
    .sbuttons {
    display: flex; 
    align-items: center;
    padding-left:50px;
}
        .sbuttons a {
    width: 15%;
    color: #000;
    font-size: 20px;
    padding: 0.6rem;
    background: #fff;
    border: 0;
    border-radius: 20px;
    outline: none;
    margin-top: 20px;
    margin-right:20px;
}
    </style>

</head>

<body>
    <?php include "header.php"; ?>
    
    <div class="styles">

        <h1 >STUDENTS</h1>    
        <div class="sbuttons">
        <a href="puc_student.php" class="btn"> PUC </a>
        <a href="btech_student.php" class="btn">B.tech</a>       
      </div>
    </div> 

    <?php include "footer.php"; ?>
       
</body>
</html>
