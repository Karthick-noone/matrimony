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
  
 
  <link rel="stylesheet" href="./vendors/mdi/css/materialdesignicons.min.css"/>
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style_prof.css">
 
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="./../images/favicon.png" /> -->
  <style>
    .navbar-nav{
      margin-left:55%;
    }
    .nav-item{
      margin-left:60px;
    }
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
      <a href="index.php?id=lgt"><button type=button style="margin-left:30px" class="btn btn-md btn-danger text-light ml-3">Logout</button></a>
    </div>
  </div>
</nav>
<?php
 require(__DIR__ .'/class/db.php');
 //$abc=$connect->fetchall('', 'name', 'ma_id', 'age','place','religious','caste','marrital_status','education')
?>

<?php
$email=$_SESSION['user'];
$sss=$connect->prepare("select * from client where email='$email'");
$sss->execute();
$ppp=$sss->fetch();
?>
<?php
if(isset($_GET['id']))
{
  $fff=$_GET['id'];
  $sss=$connect->prepare("select * from client where id='$fff'");
  $sss->execute();
  $ppp=$sss->fetch();
}
$email=$_SESSION['user'];
$sss1=$connect->prepare("select * from client where email='$email'");
$sss1->execute();
$ppp1=$sss1->fetch();
?>

      <!-- partial -->
      <div class="main-panel " style="width:100%">
        <div>
          <?php
          if($ppp==$ppp1)
          {
          ?>
          <div class="a" id="www">
           <a href="orgtable22.php"><button type="button" class="btn btn-light btn-fw "><b>Upgrade Now</b></button></a> 
        </div>
          <?php
          }
          ?>
        
        <div class="j">
          <div class="col-lg-4">
            <div class="img12">
            
            <img src="image/uploaded/<?php print $ppp['image'];?>" style="width:250px;" alt="image" class="m2">
          </div>
            </div>
            <div class="col-lg-8">
            <div class="l">
            <div>
              <h3><?php print $ppp['name'];?></h3>
              <h><?php print $ppp['identity'];?>  |  Profile created by <?php print $ppp['fore'];?></h><br><br>
              <h style="color: blue;"><i class="mdi mdi-verified"></i> Verified</h><br><br>
              </div>
              <div class="i">
                <ul>
                <li>27 years and two months,6'0"</li><br>
                <li>Mother tongue is <?php print $ppp['mt'];?></li><br>
                <li>Lives in nagercoil</li><br>
                <li><?php print $ppp['state'];?></li><br>
                </ul>
                <ul class="ui">
                <li>Studied in Nagercoil</li><br>
                <li> Builder</li><br>
                <li>Earns <?php print $ppp['salary_amount'];?></li><br>
                </ul>
                </div>
              </div>
            </div>
        </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin ">
              <div class="card">
                <div class="card-body">
                  <div class="container">
                    <div>
                        <h3><i class="mdi mdi-pencil"></i> About him</h3><br>
                        <p><?php print $ppp['about'];?></p><br>
                    </div>
                    <div class="uu">
                        <div>
                        <label ><i class="mdi mdi-human-male"></i> 27 years and two months,<?php print $ppp['height'];?></label>
                        <br><br>
                        <i class="mdi mdi-ring"></i> <?php print $ppp['marital_status'];?>
                        </div>
                        <div class="iii">
                      <i class="mdi mdi-map-marker"></i> Lives in nagercoil<br><br>
                        <i class="mdi mdi-flag"></i> Indian<br>
                        </div>
                    </div><hr>
                    <div>
                        <h3><i class="mdi mdi-temple-hindu"></i>  His religious background</h3><br>
                        <i class="mdi mdi-church"></i><?php print $ppp['religion'];?><br><br>
                        <i class="mdi mdi-book"></i> <?php print $ppp['caste'];?>
                    </div><hr>
                    <div >
                        <h3><i class="mdi mdi-tie"></i> His professional details</h3><br>
                        <div class="d">
                        <div>
                        <i class="mdi mdi-school"></i> <?php print $ppp['occupation'];?><br><br>
                        <i class="mdi mdi-account-card-details"></i> <?php print $ppp['empoyed_in'];?>
                        </div>
                        <div class="jjj">
                        <i class="mdi mdi-wallet-travel"></i> Builder<br><br>
                        <i class="mdi mdi-cash"></i> <?php print $ppp['salary_amount'];?>
                        </div>
                        </div>
                    </div><hr>
                    <div>
                        <h3><i class="mdi mdi-account-multiple"></i> About his loved ones</h3><br>
                        <p><?php print $ppp['family_status'];?> <?php print $ppp['family_type'];?> family with <?php print $ppp['family_values'];?> values.</p>
                    </div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="container">
                   
                    <div>
                      <h3><i class="mdi mdi-cellphone"></i>Profile verification</h3><br>
                      <div><p>Mobile number verified</p></div>
                      <div><p>Contact details have been verified</p></div>
                    </div>
                </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="container">
                    <div>
                        <h3>See how well your profile matches his preference</h3>
                    </div><hr>
        
                    <div>
                      <h3>His basic preferences</h3>
                      <table class="ff">
                          <tr><td>Age Brides</td><td>25-35</td></tr>
                          <tr><td>Height</td><td><?php print $ppp['height'];?></td></tr>
                          <tr><td>Marrital status</td><td><?php print $ppp['marital_status'];?></td></tr>
                          <tr><td>Mother tongue</td><td><?php print $ppp['mt'];?></td></tr>
                          <tr><td>Any disability</td><td><?php print $ppp['any_disability'];?></td></tr>
                          <tr><td>Eating habbit</td><td>Doesn't matter</td></tr>
                          <tr><td>Drinking habbit</td><td>Doesn't matter</td></tr>
                          <tr><td>Smoking habbit</td><td>Doesn't matter</td></tr>
                      </table>
                  </div><br>
                  
                    <div>
                        <h3>His religious preferences</h3>
                        <table class="f">
                            <tr><td>Religion</td><td><?php print $ppp['religion'];?></td></tr>
                            <tr><td>Caste</td><td><?php print $ppp['caste'];?></td></tr>
                            <tr><td>Subcaste</td><td><?php print $ppp['Subcaste'];?></td></tr>
                            <tr><td>Star</td><td>Any</td></tr>
                            <tr><td>Dhosam</td><td>Doesn't matter</td></tr>
                        </table>
                    </div><br>
                    
                    <div>
                        <h3>His professional preferences</h3>
                        <table class="oo">
                            <tr><td>Education</td><td><?php print $ppp['highest_education'];?></td></tr>
                            <tr><td>employed in</td><td><?php print $ppp['empoyed_in'];?></td></tr>
                            <tr><td>Occupation</td><td><?php print $ppp['occupation'];?></td></tr>
                            <tr><td>Annual income</td><td><?php print $ppp['salary_amount'];?></td></tr>
                            
                        </table>
                    </div><br>
                    <div>
                        <h3>His location preferences</h3>
                        <table class="g">
                            <tr><td>Country</td><td>India</td></tr>
                            <tr><td>Residing city</td><td>Nagercoil</td></tr>
                            <tr><td>Residing state</td><td><?php print $ppp['state'];?></td></tr>
                            <tr><td>Citizenship</td><td>Any</td></tr>
                        </table>
                    </div>
                </div> 
                </div>
              </div>
            </div>
             <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
            

        <hr>
            
            <div class="h" style="display: flex;">
              <div class="col-sm-4">
                  <h5>About us</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nam iusto. Nobis deleniti iusto voluptatibus corporis iure voluptas nemo officiis doloribus sequi accusantium molestias impedit labore reprehenderit culpa cupiditate a enim laudantium veniam adipisci.</p>
              </div>
              <div class="col-sm-4 ">
              <div>
                  <h5>Help and support</h5>
                  <lable>24*7 live help</lable>
                  <lable>Contact us</lable>
                  <lable>Feedback </lable>
                  <lable>FAQ</lable>
              </div>
              <div>
              <h5>Our other services</h5>
              <label>Elitematrimony.com</label>
             
              </div>
              <div>
                  <h5>Social incentives</h5>
                  <label>Ebilitymatrimony.com</label>
                  <label>Happymarriage.com</label>
          
                  </div>
                  <div>
                    <h5>Our wedding services</h5>
                    <label>Matrimony.com</label>
                    <label>MarriageBazaaar.com</label>
                  
          </div>
        </div>
          <div class="col-sm-4">
              <h5>Information</h5>
              <label>About us</label>
              <label>Awards</label>
              <label>Milesstone</label>
              <label>Successstories</label>
              <label>Careers</label>
              <label>Media room</label>
          
              <h5>Related matrimony services</h5>
              <label>Happymarriage.com </label>
              <label>Safe C</label>
              <label>Happymarriage tools.com</label>
              <label>Happymarriage sites</label>
              <label>Kerala matrimonial</label>
              <label>Matrimonial websites</label>
          </div>
          </div>
        
       
           
        <footer class="footer" style="width:100%;padding:2px">
            <div class="card"  >
                <div class="card-body" >
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">All rights reserved.
                    </div>
                </div>    
            </div>        
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <!-- <script src="../../vendors/js/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
<!--   <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject --> -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>