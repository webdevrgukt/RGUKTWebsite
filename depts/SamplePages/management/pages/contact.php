<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
  <style>
    .contact-container{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: space-evenly;
  }
  
  </style>

</head>

<body>
  <?php include "header.php" ?>

  <div class="contact-container m-5">
    <div>
      <div>
        <h5>Address</h5>
        <p>Department of Management<br>Indian Institutes of Information Technology Nuzvid<br>Nuzvid 521201</p>
      </div>
      <div>
        <h5>Office</h5>
        <p></p>
      </div>
      <div>
        <h5>Head of the Department</h5>
        <p></p>
      </div>
    </div>
    <div>
      <h5 class="panel-title">Map and Directions</h5> <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d15279.162714954222!2d80.82662381888812!3d16.78708660841841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a3675c991d9388f%3A0xdce2dff068f3bc9b!2sBus+Depot%2C+Usha+Bala+Nagar%2C+Nuzividu%2C+Andhra+Pradesh+521201%2C+India!3m2!1d16.7811341!2d80.8483309!4m5!1s0x3a3675e58d8d14d1%3A0x322c1c10f5cf82ac!2sRajiv+Gandhi+University+of+Knowledge+Technologies%2C+Nuzividu%2C+Andhra+Pradesh%2C+India!3m2!1d16.7931609!2d80.82474239999999!5e0!3m2!1sen!2sin!4v1448710948817" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>                                           
    </div>
  </div>

  <?php include "footer.php" ?>
</body>
</html>
