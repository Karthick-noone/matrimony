<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tek matrimony</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



  
  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">


  <script src="js/jquery-1.8.2.min.js"></script>
  <script>

  function abc()
  {
   
    var prf=document.getElementById("profilefor").value;
    var gender1=document.getElementById("gender").value;
    var name1=document.getElementById("name").value;
    var regno=document.getElementById("mobilenumber").value;

if(prf=="")
{
 document.getElementById('foralert').innerHTML="Please fill all the fileds";
}
else if(gender1=="")
{
 document.getElementById('foralert').innerHTML="Please fill all the fileds";
}
else if(name1=="")
{
 document.getElementById('foralert').innerHTML="Please fill all the fileds";
}
else if(regno=="")
{
 document.getElementById('foralert').innerHTML="Please fill all the fileds";
}

else{ 
     $.ajax({ 
                    url:'insertproc.php',
                    data:{
                    prf1: prf,
                    gen1: gender1,
                    nm1: name1,
                    reg1: regno,
                    },
                    type:'POST',
                    
          });
          document.getElementById('foralert').innerHTML="success";
          window.location.href = "page2.php"; 
}


       
  }
  </script>

<style>

.PreferenceForm_formWrapper__YyKIr {
    width: 100%;
    left: 0;
    right: 0;
    font-family: Roboto,sans-serif;
    background: rgba(25, 21, 21, 0.32);
    border-radius: 3px;
    padding: 1em;
    color: aliceblue;
    border-radius: 20px;
    
}
</style>

<body>
  <?php
  if(isset($_GET['id'])){
    session_destroy();
  }
  ?>
  <?php
  require(__DIR__.'/class/db.php');

  ?>

<?php
  include('header1.php');

?>

  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100"> 
      <h1>Welcome to <span>Tek matrimony</span>
      <h2>Hey the perfect match you are looking for is here!</h2>
      <br>
      <br>
      

      
    
 
    <div class="container  col-xl-12 PreferenceForm_formWrapper__YyKIr">
       <div class="row">
 
      <div class="col-xl-2 col-md-4 ">
        <label for="profile_for1" >Profile For:</label>
            <select id="profilefor" name="reg_forr" class="form-control"  placeholder="forwhom??">
            <option value="" selected disabled>Select an option</option>    
            <optgroup label="Family" style="width: 100%;" >
                        <option value="relative" >Son</option>
                        <option value="relative">Daughter</option>
                        <option value="relative">Brother</option>
                        <option value="relative">Sister</option></optgroup>
                        <optgroup label="Self">
                        <option value="myself">Myself</option>
                    </optgroup>
                    <optgroup label="Other">
                        <option value="relative">Friend</option>
                    </optgroup>
              </div>
                </select>
            </div>

      
            <div class="col-xl-2 col-md-4" id="rad1" >
            <label for="reg_gennn">Gender:</label>
            <select id="gender" name="reg_gennn" class="form-control">
            <option value="" selected disabled>Choose gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>  
            </div>

            <div class="form-group col-xl-3 col-md-6" >
                <label for="name1">Name:</label>
                <input type="text" id="name" name="reg_name" class="form-control" required>
            </div>

            <div class="col-xl-3 col-md-6">
                <label for="mobile_number1">Mobile Number:</label>
                <input type="tel" id="mobilenumber" name="reg_no" pattern="[0-9]{10}" class="form-control" required>
                
            </div>
            <div class="col-xl-2 col-md-4" >
              
             
            <button onclick="abc()" class="btn btn-primary" style="margin-top: 31px;" name="reg_sub" >Register</button></div>

            </div>
            <center>
              <small id="foralert"  > </small>
            </center>
           
            
      
            
    </div>



   
   




      </div>
</div>
</section><!-- End Hero -->



<footer>

     <?php

  include('footer.php');

?>

   
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>