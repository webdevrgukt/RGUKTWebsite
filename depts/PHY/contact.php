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
         .about-content{
  padding-top: 40px;
  padding-bottom: 30px;
  padding-left: 30px;
  padding-right: 30px;
  margin: 0px;

}
.about-para{
  padding-left:10%;
  padding-right: 60px;
  margin-left: auto;
  margin-right: auto;
  
}
p{
  font-family: Roboto , sans-serif;
  font-weight: normal;
}
.box-contact{
  padding: 10px;
  margin: auto;
  box-shadow: #020a11;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  background-color: #dde5f3;
  height: 30vh;
  width: 20vw;
  
  }
  .head{
    margin-top:9px;
    color:black;
  }
        </style>

</head>
<body>
 <?php include "header.php"?>
 
 <section class="about-content">
  <div>
  <div class="about-para">           
  <h3 class="text-uppercase mt-0">CONTACT US</h3>  <br><br><br>   
 <div class="row">
  <div class="box-contact">
      <i style="font-size:28px" class="fa fa-phone"></i>
      <h6 class="head"> Call Us</h6>
      <p class="para">+91 7670905584</p>
  </div>

  <div class="box-contact">
      <i class="fa fa-map-marker" style="font-size:28px";></i>
      <h6 class="head"> Address</h6>
      <p class="para">
          Department of Physics<br>
          Indian Institute of Information Technology<br>
          Nuzvid- vijayawada, Krishna(Dt.)<br>
          Andhra Pradesh
      </p>
  </div>

  <div class="box-contact">
      <i class="fa fa-envelope" style="font-size:28px";></i>
      <h6 class="head">Email</h6>
      <p class="para">hod_physics@rguktong.ac.in</p>
  </div>

  <div class="box-contact">
      <i class="fas fa-external-link-alt" style="font-size:28px";></i>
      <h6 class="head">Website</h6>
      <p class="para">RGUKT NUZVID</p>
  </div>
  
 </div>
 </div>
<br><br>
 <div>
 <div class="about-para">           
  <h3 class="text-uppercase mt-0">Find Our Location</h3>  <br><br><br> 

  
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22070.378148212152!2d80.82260893543096!3d16.788361535051184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3675e53fa3b4fb%3A0xfd1e193c90e4643!2sRajiv%20Gandhi%20University%20of%20Knowledge%20and%20Technology%20%2C%20Nuzvid!5e0!3m2!1sen!2sin!4v1710401712608!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

 </div>

 </section>

 
  <?php include "footer.php"?>
</body>
</html>