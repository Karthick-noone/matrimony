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
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <link href="css/style_upgde.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    .navbar-nav{
      margin-left:55%;
    }
    .nav-item{
      margin-left:50px;
    }
    .im{
      width:250px;
      border-radius:10%;
    }
    .aaa{
      padding-left:70px;  
    }
  </style>
</head>

<body>
<?php
  require(__DIR__.'/class/db.php')
?>
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
$email=$_SESSION['user'];
$sss=$connect->prepare("select * from client where email='$email'");
$sss->execute();
$ppp=$sss->fetch();
?>
     <!--  <div class="row mt-3 ml-5">
            <div class="col-md-12">
              <div class="pt-3 bg-primary-subtle">
              <p class="ml-5 fs-5 ">want to find your perfect match<b class="fs-2 ml-5">10 times faster?</b><a href="tharshini/work2/special offer.html"><button  class="ml-5"><i class="pl-5 pr-5">Get the paid advantages<i class="bi bi-caret-right-fill pl-5"></i></button></a>
        </p>
            </div>
          </div>
        </div> 
     
<!--profile-->
        <div class="row">
          <div class="col-xl-12 ">
            <div class="card p-3 ">
              <div class="pv">
             <div class="im"><img src="image/uploaded/<?php print $ppp['image']?>" class="img-fluid m-5  rounded-circle" style="width:250px"></div>
             <div class="pl- m-5 aaa" style="margin-left:50px">
             <div class="ml-4 ">
              <h3><?php print $ppp['name'];?></h3>
              <h><?php print $ppp['identity'];?>  |  Profile created by <?php print $ppp['fore'];?></h><br><br>
              <h style="color: blue;"><i class="mdi mdi-verified"></i> Verified</h><br><br>
              </div>
              <div class="i" style="display:flex;">
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
<!-- <div class="pl-5 mt-5">
<p class="fs-6">how your profile looks<br>
  to others<br>
  <a href="karthick/profile3/profile.php"><button type="menu" class="bi bi-eye-fill text-primary border-light">profile view</button></a></p></div> -->
          </div>
        </div>
        </div>
      </div>
     <!--blue tag-->

     <div class="row">
        <div class="col-md-12">
          <div class="card p-3 m-3 bg-primary text-light">
            <div><p class="fs-5"><b>Photos are the first thing that prospects look at.</b></p><br>
                <p>Add <?php print $ppp['name'];?>'s photo and get 10 times more responses!</p></div>
                <div><button class="text-light bg-primary border-primary-subtle pl-2 pr-2 mr-3">skip</button>
                    <a href="photoupld.php"><button class="bg-warning text-light border border-light rounded-pill pl-2 pr-2 ml-2">upload photos now</button></a>
                       </div>
        </div>
      </div>
    </div> 
        <!--personal information-->
        <h3 class="m-3">Personal information 

          <button class="btn btn-lg btn-success float-end text-light ml-3"onclick="upt('<?php print $ppp['id'];?>')" style="display:none;" id="s2<?php print $ppp['id'];?>">save</button>


<button class="btn btn-lg btn-primary float-end text-light ml-3" id="s1<?php print $ppp['id'];?>" onclick="upt1('<?php print $ppp['id'];?>')">Edit</button></h3><br>
        
        <div class="row">
            <div class="col-md-12">
              <div class="card p-3 m-1">
               
          <p>     
        <h4>A few words about him</h4>
        I'm <?php print $ppp['name'];?> from <?php print $ppp['state'];?>.I'm employed in <?php print $ppp['empoyed_in'];?> , currently living in <?php print $ppp['city'];?> and I'm comes from a <?php print $ppp['family_status'];?> <?php print $ppp['family_type'];?> family with <?php print $ppp['family_values'];?> values<br></p>
            </div>
          </div>
        </div>
        <!--basic detail-->
        <div class="row">
            <div class="col-md-12">
               <div class="card p-3 m-1">
                <div>

              </div>
                <h4>Basic details</h4>
                <div class="dff">
                <div class="df pr-5 mt-3">
<p>
<b>Name </b>: <span id="c1<?php print $ppp['id'];?>"><?php print $ppp['name'];?></span> <span><input type="text" style="height:30; display:none;" id="a1<?php print $ppp['id'];?>"></span><br><br>

<b>Height</b> : <span id="c2<?php print $ppp['id'];?>"><?php print $ppp['height'];?></span> <select class="custom-select line-input1" id="a2<?php print $ppp['id'];?>" style="height:30px; display:none;">
                        <option selected disabled value="<?php print $ppp['height'];?>">Select Height</option>
                        <option value="5ft/60inches">5ft/60inches</option>
                        <option value="5.1ft/61.2inches">5.1ft/61.2inches</option>
                        <option value="5.2ft/62.4inches">5.2ft/62.4inches</option>
                        <option value="5.3ft/63.6inches">5.3ft/63.6inches</option>
                        <option value="5.4ft/64.8inches">5.4ft/64.8inches</option>
                        <option value="5.5ft/65inches">5.5ft/65inches</option>
                      </select>



</p>

                    </div>
                      

            </div>
          </div>
          
         <!--religion-->
         <div class="row">
            <div class="col-md-12 ">
              <div class="card p-3 m-1">
              <div>
                <h4>Religion details</h4>
                <div class="dff">
                <div class="df pr-5 mt-3">
                    <p>
                     <b>Religion</b> : <span id="c3<?php print $ppp['id'];?>"><?php print $ppp['religion'];?></span>

                     <select  id="a3<?php print $ppp['id'];?>" style="height:30; display:none;">
               <option selected disabled value="<?php print $ppp['religion'];?>">Select Religion</option>
               <option value="Hindu">Hindu</option>
               <option value="Muslim - Shia">Muslim - Shia</option>
               <option value="Muslim - hra">Muslim - hra</option>
               <option value="Muslim - Others">Muslim - Others</option>
               <option value="Christian">Christian</option>
               <option value="Sikh">Sikh</option>
               <option value="Jain - Digambar">Jain - Digambar</option>
               <option value="Jain - Shwetambar">Jain - Shwetambar</option>
               <option value="Jain - Others">Jain - Others</option>
               <option value="Parsi">Parsi</option>
               <option value="Buddhist">Buddhist</option>
               <option value="Inter-Religion">Inter-Religion</option>
            </select><br><br>
            
              <b>Caste</b>: <span id="c13<?php print $ppp['id'];?>"><?php print $ppp['caste'];?></span> 
              
              <select id="a13<?php print $ppp['id'];?>" style="height:30; display:none;">
	        <option selected disabled value="<?php print $ppp['caste'];?>">Select Caste</option>
          <option value="24 Manai Telugu Chettiar">24 Manai Telugu Chettiar</option>
          <option value="Achirapakkam Chettiar">Achirapakkam Chettiar</option>
          <option value="Agamudayar / Arcot / Thuluva Vellala">Agamudayar / Arcot / Thuluva Vellala</option>
          <option value="Agaram Vellan Chettiar">Agaram Vellan Chettiar</option>
          <option value="Brahmin - Baidhiki/Vaidhiki">Brahmin - Baidhiki/Vaidhiki</option>
          <option value="Brahmin - Bardai">Brahmin - Bardai</option>
          <option value="Brahmin - Bhargav">Brahmin - Bhargav</option>
          <option value="Brahmin - Embrandiri">Brahmin - Embrandiri</option>
          <option value="Brahmin - Iyer">Brahmin - Iyer</option>
          <option value="Brahmin - Khadayata">Brahmin - Khadayata</option>
          <option value="Brahmin - Khedaval">Brahmin - Khedaval</option>
          </select>
            </p>         
            </div>
            </div>
          </div>
          </div>
   
        
        <!--grooms-->
        <div class="row">
            <div class="col-md-12">
              <div class="card p-3 m-1">
              <div>
                <h4>Location details</h4>
                <div class="dff">
                    <div class="df pr-5">
                    <p>
                    <b>State</b> : <span id="c4<?php print $ppp['id'];?>"><?php print $ppp['state'];?></span>
                    <select  id="a4<?php print $ppp['id'];?>" style="height:30; display:none;">
                    <option selected disabled value="<?php print $ppp['state'];?>">Select State</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Telungana">Telungana</option>
                    <option value="Delhi">Delhi</option>
                  </select>  <br><br>
                  
                     <b>City</b>  : <span id="c5<?php print $ppp['id'];?>"><?php print $ppp['city'];?></span> <span><input type="text" style="height:30; display:none;" id="a5<?php print $ppp['id'];?>"></span><br>
                      </p>
                        
                 </div>
            </div>
          </div>
        </div>
        </div>
        </div>
   
         <!--professional information-->
         <div class="row">
            <div class="col-lg-12">
              <div class="card p-3 m-1">
              <div><!-- <button class="bi  bg-success float-end text-light mr-4 border-light-subtle"onclick="upt('<?php print $ppp['id'];?>')" style="display:none;" id="s2<?php print $ppp['id'];?>">save</button>


<button class="bi  bg-primary float-end text-light mr-4 border-light-subtle" id="s1<?php print $ppp['id'];?>" onclick="upt1('<?php print $ppp['id'];?>')">edit</button> -->
<div>
                <h4>Professional information</h4>
                <div class="dff">
                    <div class="df">
                      <p>
                      
                      <b>Employed in</b> : <span id="c6<?php print $ppp['id'];?>"><?php print $ppp['empoyed_in'];?></span>
                    <select  id="a6<?php print $ppp['id'];?>" style="height:30; display:none;">
                    <option selected disabled value="<?php print $ppp['empoyed_in'];?>" >Select Employed</option>
                    <option value="Government/PSU">Government/PSU</option>
                    <option value="Finance">Finance</option>
                    <option value="Medical">Medical</option>
                    <option value="Self Employed">Self Employed</option>
                    <option value="Media and News">Media and News</option>
                    <option value="Entertainment">Entertainment</option>
            
                  </select><br><br>
                      <b>Occupation</b> : <span id="c7<?php print $ppp['id'];?>"><?php print $ppp['occupation'];?></span>
                      <select  id="a7<?php print $ppp['id'];?>" style="height:30; display:none;">
                    <option selected disabled value="<?php print $ppp['occupation'];?>">Select Occupation</option>
                    <option value="Businessman">Businessman</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Paramedic">Paramedic</option>
                    <option value="Devoleper">Devoleper</option>
                    <option value="Ticket collector">Ticket collector</option>
                    <option value="Pilot">Pilot</option>
                    <option value="Police Officer">Police Officer</option>
                    <option value="Electrician">Electrician</option>
                    <option value="Salesperson">Salesperson</option>
                    <option value="Gangster">Gangster</option>
                  </select><br><br>                                          
                      <b>Annual income</b> : <span id="c8<?php print $ppp['id'];?>"><?php print $ppp['salary_amount'];?></span>
                      <select  id="a8<?php print $ppp['id'];?>" style="height:30; display:none;">
                    <option selected disabled value="<?php print $ppp['salary_amount'];?>">Select Amount</option>
                    <option value="0-1 lakh">0-1 lakh</option>
                    <option value="1-2 lakhs">1-2 lakhs</option>
                    <option value="2-3 lakhs">2-3 lakhs</option>
                    <option value="3-4 lakhs">3-4 lakhs</option>
                    <option value="4-5 lakhs">4-5 lakhs</option>
                    <option value="Above 5 Lakhs">Above 5 Lakhs</option>
                    </select><br>
                    
                      </p>
                      
                        </div>
                    </div>
                   

            </div>
          </div>
        </div>
        
         <!--family-->
         <div class="row">
            <div class="col-md-12 ">
                <div class="card p-3 m-1">
                <div>
                    <h4>Family details</h4>
                    <div class="dff">
                        <div class="df pr-5">
                        <p>
                       <b>Family status</b> : <span id="c10<?php print $ppp['id'];?>"><?php print $ppp['family_status'];?></span>
                       <select  id="a10<?php print $ppp['id'];?>" style="height:30; display:none;">
                            <option selected disabled value="<?php print $ppp['family_status'];?>">Status</option>
                            <option value="Middle Class">Middle Class</option>
                            <option value="Upper Middle Class">Upper Middle Class</option>
                            <option value="Rich">Rich</option>
                            <option value="Affluent">Affluent</option>
                        </select><br><br>
                        <b>Family type </b> : <span id="c11<?php print $ppp['id'];?>"><?php print $ppp['family_type'];?></span>
                       <select  id="a11<?php print $ppp['id'];?>" style="height:30; display:none;">
                            <option selected disabled value="<?php print $ppp['family_type'];?>">Type</option>
                            <option value="Joint">Joint</option>
                            <option value="Nuclear">Nuclear</option>  
                        </select><br><br>
                        <b>Family values </b> : <span id="c12<?php print $ppp['id'];?>"><?php print $ppp['family_values'];?></span>
                       <select  id="a12<?php print $ppp['id'];?>" style="height:30; display:none;">
                            <option selected disabled value="<?php print $ppp['family_values'];?>">Value </option>
                            <option value="Orthodox">Orthodox</option>
                            <option value="Traditional">Traditional</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Liberal">Liberal</option>
                        </select>

                       </b> <br>
                     
                        </p>
                      
              </div>
            </div>
          </div>
          </div>
          
      
        
        <!--about my famly-->
       <!--  <div class="row">
            <div class="col-md-12">
              <div class="card p-3 m-3">
                <div><button class="bi  bg-primary float-end text-light mr-4 border-light-subtle">edit</button></div>
                <h4>About my family</h4><br>
                <p  class="">Not specified</p>
            </div>
          </div>
        </div> -->
        <!--Hoppies and interest-->
      <!--   <div class="row">
            <div class="col-md-12">
              <div class="card p-3 m-3">
                <div><button class="bi  bg-primary float-end text-light mr-4 border-light-subtle">edit</button></div>
                <h4>Hobbies and interest</h4><br>
                <p  class="">Not specified</p>
            </div>
          </div>
        </div> -->
       <!--edit pref-->
       <div class="row">
        <div class="col-md-12">
          <div class="card p-3 m-1">
           <div><p  class="fs-5">Edit your partner preferences to get relevant matches</p></div>
            <div><a href="akshay/matches.php"><button class="bg-warning text-light border border-light rounded-pill pl-3 pr-3">edit preferences</button></a></div>
        </div>
      </div>
    </div>
        
    <footer class="footer">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020   All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">
                </div>
            </div>
        </div>
        
    </footer>
             
        
      
         
             <!-- partial:partials/_navbar.html -->
    
         
      <!-- partial -->
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  <script>
          function upt1(idd){           
            document.getElementById("a1"+idd).style.display="block";
            
            document.getElementById("a2"+idd).style.display="block";
            document.getElementById("a3"+idd).style.display="block";
            
            document.getElementById("a4"+idd).style.display="block";
            
            document.getElementById("a5"+idd).style.display="block";
            
            document.getElementById("a6"+idd).style.display="block";
            
            document.getElementById("a7"+idd).style.display="block";
            
            document.getElementById("a8"+idd).style.display="block";
            
            document.getElementById("a10"+idd).style.display="block";
            
            /* document.getElementById("a9"+idd).style.display="block"; */
            document.getElementById("a11"+idd).style.display="block";
           
            document.getElementById("a12"+idd).style.display="block";

            document.getElementById("a13"+idd).style.display="block";
            
            document.getElementById("s1"+idd).style.display="none";
            
           
            document.getElementById("s2"+idd).style.display="block";
            
          }

          function upt(id) {
          
            var pqr=document.getElementById("a1"+id).value;
            var cont=document.getElementById("a2"+id).value;
            var reli=document.getElementById("a3"+id).value;
            var ste=document.getElementById("a4"+id).value;
            var city=document.getElementById("a5"+id).value;
            var employ=document.getElementById("a6"+id).value;
            var occu=document.getElementById("a7"+id).value;
            var slry=document.getElementById("a8"+id).value;
          
            var fmlysts=document.getElementById("a10"+id).value;
            var fmlytyp=document.getElementById("a11"+id).value;
            var fmlyvlu=document.getElementById("a12"+id).value;
            var cast=document.getElementById("a13"+id).value;
           

            if(pqr==""){
              pqr1=document.getElementById("c1"+id).innerHTML;
            }
            else{
              pqr1=pqr;
            }
            if(cont==""){
              cont1=document.getElementById("c2"+id).innerHTML;
              
            }
            else{
              cont1=cont;
            }
            if(reli==""){
              reli1=document.getElementById("c3"+id).innerHTML;
              
            }
            else{
              reli1=reli;
            }
            if(ste==""){
              ste1=document.getElementById("c4"+id).innerHTML;
              
            }
            else{
              ste1=ste;
            }
            if(city==""){
              city1=document.getElementById("c5"+id).innerHTML;
              
            }
            else{
              city1=city;
            }
            if(employ==""){
              employ1=document.getElementById("c6"+id).innerHTML;
              
            }
            else{
              employ1=employ;
            }
            if(occu==""){
              occu1=document.getElementById("c7"+id).innerHTML;
              
            }
            else{
              occu1=occu;
            }
            if(slry==""){
              slry1=document.getElementById("c8"+id).innerHTML;
              
            }
            else{
              slry1=slry;
            }
            /* if(abt==""){
              abt1=document.getElementById("c9"+id).innerHTML;
              
            }
            else{
              abt1=abt;
            } */
            if(fmlysts==""){
              fmlysts1=document.getElementById("c10"+id).innerHTML;
              
            }
            else{
              fmlysts1=fmlysts;
            }
            if(fmlytyp==""){
              fmlytyp1=document.getElementById("c11"+id).innerHTML;
              
            }
            else{
              fmlytyp1=fmlytyp;
            }
            if(fmlyvlu==""){
              fmlyvlu1=document.getElementById("c12"+id).innerHTML;
              
            }
            else{
              fmlyvlu1=fmlyvlu;
            }
            if(cast==""){
              cast1=document.getElementById("c12"+id).innerHTML;
              
            }
            else{
              cast1=cast;
            }
          
          
            var formData=new FormData();
            formData.append("updateid",id);
            formData.append("newname",pqr1);
            formData.append("cont",cont1);
            formData.append("reli",reli1);
            formData.append("state",ste1);
            formData.append("city",city1);
            formData.append("employ",employ);
            formData.append("occu",occu1);
            formData.append("slry",slry1);
           /*  formData.append("abt",abt1); */
            formData.append("fmlysts",fmlysts1);
            formData.append("fmlytyp",fmlytyp1);
            formData.append("fmlyvlu",fmlyvlu1);
            formData.append("caste",cast1);
         
            $.ajax({
            url:'insert.php',
            data:formData,            
            type:"POST",
            contentType: false,
            processData: false,
            success:function(result)
            {
                alert(result);
            }
            });
            
          }

        </script>
</body>

</html>
