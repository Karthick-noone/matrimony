<?php  
session_start();
?>
<?php
if(!isset($_SESSION['use'])){
?>
<script>
  window.location.href="index.php";
</script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <style>
    /* .by{
        height: 250px;
        width: 500px;
        
    } */
    .all{
        background-image:url("img_8/bg2.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    .sort{
        font-size: 40px;
        border: 1px solid black;
        border-radius: 10px;
        /* padding: 5px; */
        /* height: 70px; */
        background-color: #ddd;
    }
    .bor{
        font-size: 20px;
        /* height: 100%; */
        border: 1px solid black;
        border-radius: 10px;
        padding-top: 10px;
        padding-left: 10px;
    }
   
    input{
        border: 1px solid black;
        width: 40px;
    }
    .fil{
        font-size: 30px;
        border: 1px solid black;
        border-radius: 10px;
        padding: 5px;
        height: 70px;
        background-color: #ddd;
    }
    .pro{
        font-size: 20px;
        height: 720px;
        border: 1px solid black;
        border-radius: 10px;
        padding-top: 10px;
        padding-left: 10px;
    }
    .file{
        font-size: 20px;
        height: 1470px;
        border: 1px solid black;
        border-radius: 10px;
        padding-top: 10px;
        padding-left: 10px;
    }
    .bio{
        width: 250px;
    }
    .btnr{
        display: inline;
        float:right ; 
        color: red;"
    }
    
    .navbar-nav{
      margin-left:55%;
    }
    .nav-item{
      margin-left:60px;
    }
  </style>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid ">
    <img src="image/img_2/teklogo.png" style="height:70px" alt="error">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Pricing</a>
        </li>
      <a href="index.php?id=lgt"><button type=button style="margin-left:30px" class="btn btn-md btn-danger text-light">Logout</button></a>
    </div>
  </div>
</nav>
    <?php
        require(__DIR__.'/class/db.php')
    ?>

    <div class="container-fluid all">
        <!-- <div class="row" style="background-color: rgb(5, 5, 94);height: 50px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <button style="background-color: rgb(19, 19, 105);color: aliceblue;margin-top: 10px;border-color: aliceblue;border-radius: 5px;" type="submit">Upgrade Now</button>
            </div>
        </div> -->
        <br>
      
        <div class="row bb">
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 ">
                <h1 class="text-danger">50 Matches based on your preferences</h1> 
            </div>
            <div class="col-lg-2 btnr"><button class="btn"><strong>Edit preferences for related matches</strong></button></div> 
            <br><br><br>
        </div>
                <div class="row col-xl-12">
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 by">


                        
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" style="width: 100%;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Sort by
                            </button>
                            <ul class="dropdown-menu" style="width: 100%;">
                              <li><a class="dropdown-item" href="#"><input type="radio" name="r" value="Releavance">Releavance</a></li>
                              <li><a class="dropdown-item" href="#"><input type="radio" name="r" value="Last Login">Last Login</a></li>
                              <li><a class="dropdown-item" href="#"><input type="radio" name="r" value="Data Created">Data Created</a></li>
                              <li><a class="dropdown-item" href="#"><input type="radio" name="r" value="Premium Members">Premium Members</a></li>
                            </ul>
                        </div>

                        

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="width: 100%;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Filter by
                                </button>
                                <ul class="dropdown-menu" style="width: 100%; padding-left: 10px;">
                                  <h2>Profile Type</h2>
                                  <hr>
                                  <h4>Show Profiles Created</h4>
                                  <li><a class="dropdown-item" href="#"><input type="radio" name="r">within a week(1)</a></li>
                                  <li><a class="dropdown-item" href="#"><input type="radio" name="r">within a month(3)</a></li>
                                  <br>
                                  <h4>Profiles</h4>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">With Photo(27)</a></li>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">With Horoscope(12)</a></li>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">Currently Online(31)</a></li>
                                  <h4>Profile Created By</h4>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">Sibilings(19)</a></li>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">Self(18)</a></li>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">Parents(7)</a></li>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">Relative(4)</a></li>
                                  <li><a class="dropdown-item" href="#"><input type="checkbox">Friend(1)</a></li>
                                </ul>
                            </div> 

                       
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="width: 100%;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Basic Details
                                </button>
                                <ul class="dropdown-menu" style="width: 100%;padding-left: 10px; ">
                                    <b>Age(in years)</b><br><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="number"> &nbsp;&nbsp;&nbsp;&nbsp;to &nbsp;&nbsp;&nbsp;&nbsp;<input type="number"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#a">Apply</a>
                                    <br></h2>
                                    <b>Height</b><br><br> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="number"> &nbsp;&nbsp;&nbsp;&nbsp;to &nbsp;&nbsp;&nbsp;&nbsp;<input type="number"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#a">Apply</a><br><br>
                                    <h4>Mother Tongue</h4>
                                    <br>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox">Hindi(23)</a></li>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox">Malayalam(22)</a></li>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox">Bhaojpuri(4)</a></li>
                                    <h4>Profile Created By</h4>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox">Tamil(19)</a></li>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox">Kannada(12)</a></li>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox"></a></li>
                                    <b style="color: red;">show more</b><br><br>
                                    <h4>Marital Status</h4>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox">Never Married(49)</a></li>
                                    <li><a class="dropdown-item" href="#"><input type="checkbox">Widower(1)</a></li>
                                </ul>
                            </div> 
                                
                                <!-- <hr>
                                <h3>Religious Details</h3><hr>
                                <h3>Professional Details</h3><hr>
                                <h3>Location Details</h3><hr>
                                <h4>Country</h4>
                                <input type="checkbox">India(48)<br>
                                <input type="checkbox">Bahrain(1)<br><br>
                                <h4>Citizenship</h4>
                                <input type="checkbox">India(49)<br><br>
                                <h4>Resident Status</h4>
                                <input type="checkbox">Permanent Resident(1)<br><hr>
                                <h3>Personal Details</h3><hr>
                                <h3>Lifestyle Habits</h3><hr>
                                <h3>Family Details</h3><hr> -->

                              <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" style="width: 100%;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      
                                    </button>
                                    <ul class="dropdown-menu" style="width: 100%;">
                                        <h3 style="padding-left: 10px;">Religious Details</h3><hr>
                                        <h3>Professional Details</h3><hr>
                                        <h3 style="padding-left: 10px;">Location Details</h3><hr>
                                        <h4 style="padding-left: 10px;">Country</h4>
                                      <li><a class="dropdown-item" href="#"><input type="checkbox" name="r">India(48)</a></li>
                                      <li><a class="dropdown-item" href="#"><input type="checkbox" name="r">Bahrain(1)</a></li>
                                      <h4 style="padding-left: 10px;">Citizenship</h4>
                                      <li><a class="dropdown-item" href="#"><input type="checkbox" name="r">India(49)</a></li>
                                      <h4 style="padding-left: 10px;">Resident Status</h4>
                                      <li><a class="dropdown-item" href="#"><input type="checkbox" name="r">Permanent Resident(1)</a></li>
                                      <h3 style="padding-left: 10px;">Personal Details</h3><hr>
                                      <h3 style="padding-left: 10px;">Lifestyle Habits</h3><hr>
                                      <h3 style="padding-left: 10px;">Family Details</h3>
                                    </ul>
                                </div>

                            </div>

                            
                                
                    <div class="col-12 col-sm-6 col-md-6 col-lg-9 col-xl-9 "  >
                        
                            <div class="row g-0 ">

                            <?php
                            $eee3=$connect->prepare("select * from client");
                            $eee3->execute();
                            $sss3=$eee3->fetchAll();
                            foreach($sss3 as $sss4)
                            {
                              ?>                           
                                <!-- <div class=" card mb-3 d-flex"> -->
                                <div class="col-12 col-sm-12 col-md-12 col-xl-3 col-lg-3 me-4 mb-5">
                                <img src="image/uploaded/<?php print $sss4['image'];?>"class="card-img-top" alt="..."><br><label style="padding-left: 50px;">Match Score</label><br>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><b>85%</b></div>
                                    </div>
                                </div>
                                
                                    <div class="card-body col-12 col-sm-12 col-md-12 col-xl-6 col-lg-6 mb-5" >
                                        <h6 class="card-title text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                        </svg> verified</h6>
                                        <p class="card-text"><h1><?php print $sss4['name'];?></h1><span style="color: #7c7575;"><?php print $sss4['identity'];?> | Profile Created by <?php print $sss4['fore'];?></span><br><b><!-- <?php print $sss4['Address'];?> --></b></p><br><hr>
                                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
                                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                            <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                        </svg>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn">Chat Now</button>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                            <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                        </svg>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn">Don't show</button>&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn">Shortlist</button></p>
                                            <h5 style="float: right;"><button class="btn">Like her profile?</button>&nbsp;<button class="btn">Connect now</button> <button class="btn bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg></button></h5>
                                           
                                    </div>
                                    <?php
                            }
                            ?>
                                                
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 mb-5">
                                                <img src="image/img_8/mm.png" class="img-fluid">
                                            </div>       
                                            
                                          
                                                    <div><hr></div>
                    
                        <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 page">
                            <b>page 1 of 3</b>
                        </div>
                        <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-end but">
                            <button class="btn">1</button>
                            <button class="btn">2</button>
                            <button class="btn">3</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn">Next</buton>
                        </div>
                            </div>    
                    </div>    
                </div>
                </div>
                    
                    
                
    </div>
</body>
</html>