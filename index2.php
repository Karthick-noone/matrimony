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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style_main.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    .navbar-nav{
      margin-left:55%;
    }
    .nav-item{
      margin-left:50px;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-success ">
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
        
     <a href="index.php?id=lgt"><button type=button class="btn btn-md btn-danger text-light ml-3">Logout</button></a>
    </div>
  </div>
</nav>
  

<?php
  require(__DIR__.'/class/db.php')
?>





  <?php
    //  include('header/header.php')
  ?>
  



    <section class="container-fluid" id="sec">
     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 pt-3 reg d-flex justify-content-between align-items-center"> 
      
        <div class="line "></div>
      <center>
        <div class="">
        <button class="btn btn-success"><b>Regular</b></button><span>PRIME</span>
        </div>
      </center>
        <div class="line "></div>
     
<?php
$email=$_SESSION['user'];
$sss=$connect->prepare("select * from client where email='$email'");
$sss->execute();
$ppp=$sss->fetch();
?>


      </div>
      <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class=" ">
            <div class="card subcard " >
              <center><img src="image/uploaded/<?php print $ppp['image'];?>"  style="width:300px" class="card-img-top rounded-circle img-fluid mt-2" alt="...">
              <div class="card-body">
                <h5 class="card-title text-reset"><b>WELCOME TEK MATRIMONY</b></h5>
                <h5 class="card-title text-light"><?php print $ppp['name'];?></h5>
                <p class="card-text"><?php print $ppp['about'];?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div></center>
            </div>
      
            <div class="p-5 ulli ">
              <ul class="text-light">
                <li><a href="#"><i class="bi bi-pencil-square "></i>&emsp;Edit profile</a></li>
                <li><a href="#"><i class="bi bi-person-lines-fill"></i>&emsp; Edit Preference</a></li><br><br>
                <li><a href="#"><i class="bi bi-check-circle"></i>&emsp;Verify Your profile</a></li>
                <li><a href="#"><i class="bi bi-calendar-heart"></i>&emsp;Daily Recomendation</a></li><br><br>
                <li><a href="#"><i class="bi bi-chat-left-text"></i>&emsp;Your Conversation</a></li>
                <li><a href="#"><i class="bi bi-telephone-fill"></i>&emsp;Your Calls</a></li><br><br>
                <li><a href="#"><i class="bi bi-gear"></i>&emsp;Settings</a></li>
                <li><a href="#"><i class="bi bi-h-circle"></i>&emsp;Help</a></li>
                <li><a href="#"><i class="bi bi-envelope-open-heart-fill"></i>&emsp;Our Matchmaking Services</a></li>
                <li><a href="#"><i class="bi bi-heart-arrow"></i>&emsp;Wedding Services</a></li>
                <li><a href="#"><i class="bi bi-arrow-through-heart-fill"></i>&emsp;Success Storices</a></li>
              </ul>
            </div>
        </div>
      </div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
          <div class="rinu text-center mb-5">
          <b>Your profile is Pending Verification Verify to get better respose</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="profile.php" id=<?php print $ppp['id'];?>><button class="btn btn-warning">verify profile</button></a>
         </div>
            <div class="rinu2 mb-5">
            <div class="d-flex justify-content-between ">
              <div>
              <b>Your daily recomentation for 2nd Aug </b>
              </div>
              <div>Time left to view this profile 12:15:22
              </div>
            </div>
            <center>
            <div class="scrollmenu mt-3 pb-4">

<!-- scroller -->
                 
<script>
  function asd(id)
   document.getElementById("www",id).style.display=none;
</script>

<?php
$eee=$connect->prepare("select * from client where gender!='$ppp[gender]' and email!='$ppp[email]'");
$eee->execute();
$sss=$eee->fetchAll();
foreach($sss as $sss2)
{
  ?>
    <a href="profile.php?id=<?php print $sss2['id'];?>"><img src="image/uploaded/<?php print $sss2['image'];?>"  width="150px" height="150px" onclick="asd()" class="rounded-circle"/><?php print $sss2['name'];?></a>
    
 
  <?php

}
?>
              

            </div>
          </center>
             
          </div>

          <div class="rinu3 mb-5 p-2 ">
            <div class="d-flex justify-content-between">
            <div>
              <h4><b>4 New Matches</b></h4>
              New member who have joined in the last one month
            </div>
            <div>
              <a href="#" >see all</a>
            </div>
          </div>

            
            <div class="row scrollmenu">
              
                            

<?php
$eee3=$connect->prepare("select * from client where religion='$ppp[religion]' and email!='$ppp[email]'limit 4");
$eee3->execute();
$sss3=$eee3->fetchAll();
foreach($sss3 as $sss4)
{
  ?>
              <div class="card col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" >
              <img src="image/uploaded/<?php print $sss4['image'];?>"class="card-img-top" height="60%"alt="...">
              <div class="card-body">
                <h6 class="card-title"><?php print $sss4['name'];?></h6>
                <p class="card-text"><b>PH:</b><?php print $sss4['number'];?></p>
              </div>
              </div>
  <?php
}
?>
                <!-- <img src="images/rs1.png" width="200px" height="200px" />
                <img src="images/my.png" width="200px" height="200px" />
                <img src="images/my.png" width="200px" height="200px" />
                <img src="images/my.png" width="200px" height="200px" /> -->
              
                
            </div>
        
          </div>



          <div class="rinu4 mb-5 p-3 ">
            <div class="d-flex justify-content-between">
            <div>
              <h4><b>50 Total Matches</b></h4>
              Members who match your partner Preference
            </div>
            <div>
              <a href="matches.php" >see all</a>
            </div>
          </div>
      
            <div class=" row img2">
            
<?php
$eee4=$connect->prepare("select * from client where gender!='$ppp[gender]' and email!='$ppp[email]' limit 3");
$eee4->execute();
$sss5=$eee4->fetchAll();
foreach($sss5 as $sss6)
{
?>
                <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" >
                  <img src="image/uploaded/<?php print $sss6['image'];?>"class="card-img-top " height="60%"alt="...">
                  <div class="card-body">
                    <h6 class="card-title"><?php print $sss6['name'];?></h6>
                    <p class="card-text"><?php print $sss6['gender'];?></p>
                  </div>
                </div>
<?php
}
?>
                
                <!-- <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <img src="images/rs1.png" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Sanjana</h6>
                    <p class="card-text">29 yrs 5,0'</p>
                  </div>
                </div>
                <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <img src="images/rs1.png" ;class="card-img-top " alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Sanjana</h6>
                    <p class="card-text">29 yrs 5,0'</p>
                  </div> 
               </div>
         -->
          </div>
      </div>


      <div class="rinu5 mb-5 p-3 ">
        <div>
          <h4><b>Your Profile is only 33% complete</b> </h4>
         Add below detail to complete your Profile
        </div>
        
        <div class=" row ">
            <div class="rinu5sub m-5 d-flex justify-content-between">
              <div class=" pt-2">
                  <h6>90% of members prefer to connect profiles with photo</h6>
              </div>
              <div class="">
                <a href="photoupld.php"><button class="btn btn-warning" >Add photo</button></a>
            </div>
          </div>
         </div>
    
           </div>




           <div class="rinu6 rinu11 mb-5 p-3 text-white">
            <div class="d-flex justify-content-between">
            <div >
              <h4 ><b>Discover Matches</b></h4>
              Explore profile from different categories that match your preference
            </div>
            <div>
              <a href="#" class="text-white">see all</a>
            </div>
          </div>
            <div class=" row d-flex ">
        <?php
        $ddd=$connect->prepare("select * from client where religion='$ppp[religion]'and gender!='$ppp[gender]' and email!='$ppp[email]'");
        $ddd->execute();
        $aaa=$ddd->fetchAll();
        foreach($aaa as $vvv){
           ?>
                 <div class="card col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12 car1 " style="height:200px;width:100px; margin-left:10px; border-radius:20px;">
                 <center>
                  <div class="card-body " >
                   <h6 class="card-title"><?php print $vvv['name'];?></h6>
                   <p class="card-text"></p>
                 </div>
        <?php
        $ddd2=$connect->prepare("select * from client where name='$vvv[name]'");
        $ddd2->execute();
        $aaa2=$ddd2->fetchAll();
        foreach($aaa2 as $vvv2){
      ?>
          <img src="image/uploaded/<?php print $vvv2['image'];?>" alt="..." style="width:100px;height:100px;">
      <?php
        }
        ?>
        <div class="card-body ">
        <a href="#" class="text-white"></a>
        </div>
        </center>
        </div>
        <?php
         }
        ?>
            </div>
          </div>
          


          <div class="rinu7 mb-5 p-3 ">
            <div>
              <h4><b>Tip to get better matches faster</b></h4>
            Know our time-tested tips to find your better match faster
            </div>
            
            <div class=" row ">
                <div class="rinu7sub m-5 d-flex justify-content-between">
                  <div class="  text-center pt-3 ">
                      <h6>Get 10X more respose by verifying your profile</h6>
                  </div>
                  <div class="">
                    <button class="btn btn-warning" >get yor profile verified</button>
                </div>
              </div>
             </div>
        
          </div>


          <div class="rinu8 mb-5 p-3 ">
            <div class="d-flex justify-content-between">
            <div>
              <h4><b>4 Premium Matches</b></h4>
             Premium members who match your preference
            </div>
            <div>
              <a href="#" >see all</a>
            </div>
            </div>
            
            <div class=" row d-flex justify-content-between">

                <div class="card col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" >
                  <img src="image/img_5/rs1.png"class="card-img-top " alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Sanjana</h6>
                    <p class="card-text">29 yrs 5,0'</p>
                  </div>
                </div>
                <div class="card col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                  <img src="image/img_5/rs1.png" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Sanjana</h6>
                    <p class="card-text">29 yrs 5,0'</p>
                  </div>
                </div>
                <div class="card col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                  <img src="image/img_5/rs1.png" ;class="card-img-top " alt="...">
                  <div class="card-body">
                    <h6 class="card-title">Sanjana</h6>
                    <p class="card-text">29 yrs 5,0'</p>
                  </div>
               
                
            </div>
        
          </div>
        </div>




        <div class="rinu9 mb-5 p-3 ">
          <div class="d-flex justify-content-between">
          <div>
            <h4><b>11 Mutual Matches</b></h4>
          Members whose preference match your profile and vice versa
          </div>
          <div>
            <a href="#" >see all</a>
          </div>
          </div>
          
          <div class=" row d-flex justify-content-between">

<?php
$eee5=$connect->prepare("select * from client where mt='$ppp[mt]' and gender!='$ppp[gender]' and email!='$ppp[email]'");
$eee5->execute();
$sss7=$eee5->fetchAll();
foreach($sss7 as $sss8)
{
?>
              <div class="card col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 " >
                <img src="image/uploaded/<?php print $sss8['image'];?>"class="card-img-top " height="60%" alt="...">
                <div class="card-body">
                  <h6 class="card-title">hello<br><?php print $ppp['name']?></h6>
                  <p class="card-title">I'm&emsp;<?php print $sss8['name'];?></p>
                </div>
              </div>
<?php
}
?>
             
              <!-- <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                <img src="images/rs1.png" class="card-img-top " alt="...">
                <div class="card-body">
                  <h6 class="card-title">Sanjana</h6>
                  <p class="card-text">29 yrs 5,0'</p>
                </div>
              </div>
              <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                <img src="images/rs1.png" ;class="card-img-top " alt="...">
                <div class="card-body">
                  <h6 class="card-title">Sanjana</h6>
                  <p class="card-text">29 yrs 5,0'</p>
              </div>
              </div>
              <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                <img src="images/rs1.png" ;class="card-img-top " alt="...">
                <div class="card-body">
                  <h6 class="card-title">Sanjana</h6>
                  <p class="card-text">29 yrs 5,0'</p>
              </div>
              </div>
              <div class="card col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                <img src="images/rs1.png" ;class="card-img-top " alt="...">
                <div class="card-body">
                  <h6 class="card-title">Sanjana</h6>
                  <p class="card-text">29 yrs 5,0'</p>
              </div> -->
            <!-- </div> -->
          </div>
        </div>



        <div class="rinu10 mb-5 p-3 ">
          <div class="d-flex justify-content-between">
          <div>
            <h5><b>We organize more marriages than anyone else in the world!</b></h5>
         Featured in the Limca Book of Records
          </div>
          <div>
            <img src="image/img_4/logo.png" alt="logo" class="img-fluid mb-2" style="width:200px">
          </div>
          </div>
          
          <div class=" row d-flex justify-content-around">

              <div class="card col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" >
                <img src="image/img_5/rs2.png"class="card-img-top " alt="...">
                <div class="card-body">
                  <p class="card-text">Akhil krishna & Sukanya</p>
                </div>
              </div>
              <div class="card card col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <img src="image/img_5/rs2.png" class="card-img-top " alt="...">
                <div class="card-body">
                  <p class="card-text">Akhil krishna & Sukanya</p>
                </div>
              </div>
              <div class="card card col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <img src="image/img_5/rs2.png" ;class="card-img-top " alt="...">
                <div class="card-body">
                  <p class="card-text">Akhil krishna & Sukanya</p>
              </div>
              </div>
              
          </div>
        </div>



        <div class="rinu11 mb-5 p-3 ">
          
          <div class=" row ">
              <div class="rinu7sub m-5 d-flex justify-content-between">
                <div class="">
                    <h6>Need help to find a life partner?</h6>
                  Get personalized service from a dedicated Relationship Manager
                </div>
                <div class="">
                  <button class="btn btn-warning" >Know More</button>
              </div>
            </div>
           </div>
        </div>


        <div class="rinu12 mb-5 p-3 text-center">
          <h4>Our Wedding services</h4>
          <div class=" row ">
              <div class="m-5 mx-auto d-flex justify-content-between">
                <div class="">
                    <img src="image/img_5/rs3.png" class="img-fluid "/>
                </div>
                &nbsp; &nbsp; &nbsp;
                <div class="">
                    <img src="image/img_5/rs3.png" class="img-fluid"/>
              </div>
            </div>
           </div>
        </div>
      
      

        </div>
         </div>
      </div>
    </section>


    <?php
    include('footer.php')
    ?>






    
        
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

