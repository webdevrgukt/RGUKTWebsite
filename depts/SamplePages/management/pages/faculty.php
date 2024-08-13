<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Faculty</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
  <style>
    <style>
  .faculty-container {
    margin: 60px;
  }

  .faculty-row {
    display: flex;
    justify-content: space-around;
    margin-bottom: 40px;
  }

  .faculty-profile {
    padding: 20px;
    width: 200px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px; 
  }

  .faculty-profile img {
    max-width: 150px;
    height: 150px;
    border-radius: 50%;
  }

  .faculty-profile h5,
  .faculty-profile p {
    text-align: center;
    margin: 5px 0;
  }
</style>

</head>

<body>
  <?php include "header.php" ?>

  <div class="faculty-container">
    <div class="faculty-row">
      <div class="faculty-profile">
        <img src="../images/faculty1.jpg" alt="Faculty 1">
        <h5>Dr.Deepti Sahoo</h5>
        <p>MA,Ph.D</p>
        <p>Assistant Professor (C)<br> sahood9@rguktn.ac.in</p>
      </div>
      <div class="faculty-profile">
        <img src="../images/faculty2.jpg" alt="Faculty 2">
        <h5>Dr. D.V.Venu Gopal</h5>
        <p>MA,Ph.D,NET,SET</p>
        <p>Assistant Professor (C)<br> venugopal.psy@rguktn.ac.in</p>
      </div>
      <div class="faculty-profile">
        <img src="../images/faculty5.jpg" alt="Faculty 5">
        <h5>Dr.Chandra Sekhar Yadav Thota</h5>
        <p>Ph.D</p>
        <p>Assistant Professor (C)<br> sekhar.mba20@rguktn.ac.in</p>
      </div>
    </div>

    <div class="faculty-row">
      <div class="faculty-profile">
        <img src="../images/faculty6.jpg" alt="Faculty 6">
        <h5>Dr. Nalliboyina Suresh Babu</h5>
        <p>M.Com,MBA,Ph.D</p>
        <p>Assistant Professor (C)<br> babu40806@rguktn.ac.in</p>
      </div>
      <div class="faculty-profile">
        <img src="../images/faculty3.jpg" alt="Faculty 3">
        <h5>Dr. Parala VenkataSree Vyshnavi</h5>
        <p>MBA,NET,SET, Ph.D</p>
        <p>Assistant Professor (C)<br> svyshnavi76@rguktn.ac.in</p>
      </div>
      <div class="faculty-profile">
        <img src="../images/faculty4.jpg" alt="Faculty 4">
        <h5>Ms. P.Swathi</h5>
        <p>MBA,NET</p>
        <p>Guest Lecturer<br> petla.swathi@rguktn.ac.in</p>
      </div>
    </div>
  </div>

  <?php include "footer.php" ?>
</body>
</html>
