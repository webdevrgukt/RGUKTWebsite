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
      .name{
       text-align:center;
      background-color:#fca26e;
      border-bottom-right-radius: 15px;
       height:150px;
       padding:15px;
      }
.image_style{
  box-shadow: 0 6px 9px 0 #fca26e;
  height:90vh;
  width:140vh;
  margin-bottom:100px;
  align-items:center;
}
 .profile-button {
  background-color: white;
  border-radius: 5px;
  padding: 10px 20px;
  border: none;
  font-size: 16px;
  position: relative;
}
.fixed-bottom {
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 20px; 
   
}
.profile-button i {
  margin-left: 5px;
  position: absolute;
  bottom: 5px;
  right: 5px;
}
.back-card-text{
    color:#fca26e;
}
       
.icon-style{
    color: #fca26e;
    font-size: 33px;
    margin: 7px;
}
.flip-card {
  width: 300px;
  height: 500px;
  perspective: 1000px;
}


.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-top-left-radius: 20px; 
  border-bottom-right-radius: 20px; 
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
  
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
 
}

.flip-card-back {
  background-color: #0a031a;
  color: white;
  transform: rotateY(180deg);
  
}

</style>

</head>

<body>
<?php
include "header.php";
?>
  
        <div><h2 ><br><center>FACULTY MEMBERS</center></h2></div>
        <hr>
        <div class="container"> 
            <img src="faculty_images/group.jpg" class="image_style">
        </div>


        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/1.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>Name</center></h5>
                          <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>  
                                                   
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div>  
                <div class="col-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/2.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 
                <div class="col-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/3.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4>
                          </div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div>  
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/4.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div>  
                
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/6.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div>  
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/7.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/8.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/9.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/10.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/11.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/12.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <div><img src="faculty_images/13.jpg" alt="Avatar" style="width:300px;height:350px;"></div>
                            <div class="name"><h5><center>name</center></h5>
                            <h4 style="color:white;">ASSISTANT PROFESSOR</h4></div>                           
                          </div>
                          <div class="flip-card-back">
                            <h6 class="back-card-text mt-2 ml-2">Office:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Phone:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Email:</h6><span><p></p></span>
                            <h6 class="back-card-text mt-2 ml-2">Area of Research:</h6><span><p></p></span>
                            <div class="container fixed-bottom" style="padding-left:95px;">
                                <div class="row">
                                    <span><i class="fa fa-envelope icon-style" aria-hidden="true"></i></span>
                                    <span><i class="fa fa-image icon-style" aria-hidden="true"></i></span>
                                    <button class="profile-button">
                                        Full Profile <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                </div> 

            </div>  
        </div>


<?php
include "footer.php";
?>
       
</body>
</html>