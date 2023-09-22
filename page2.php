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

  <!-- Favicons -->d
  <link href="img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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




  
  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">


  


       

  </script>

<style>
   body {
    margin: 0px auto;
    color: #070707;
    text-align: left;
    line-height: 15px;
    background: #eee;
    font-family: 'Poppins', sans-serif;
}

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

<script>
function abczzz()
{
  var prf=document.getElementById("DOBVALUE11").value;
  var gender1=document.getElementById("RELIGION11").value;
  var name1=document.getElementById("MOTHERTONGUE11").value;
  var regno=document.getElementById("EMAIL11").value;
  var regn2=document.getElementById("PASSWORD11").value;
  

 if(prf=="")
{
document.getElementById('bbbb').innerHTML="Please fill all the fileds";
}
else if(gender1=="")
{
document.getElementById('bbbb').innerHTML="Please fill all the fileds";
}
else if(name1=="")
{
document.getElementById('bbbb').innerHTML="Please fill all the fileds";
}
else if(regno=="")
{
document.getElementById('bbbb').innerHTML="Please fill all the fileds";
}
else if(regn2=="")
{
document.getElementById('bbbb').innerHTML="Please fill all the fileds";
}

else{ 
 
        $.ajax({
         
                  url:'insertproc1.php',
                  data:{
                    cast1: prf,
                    cast21: gender1,
                    cast22: name1,
                    SUDDHAJADHAGAMON: regno,
                    regn23: regn2,
                  },
                  type:'POST',
            success:function(res)
            {        
              
               var withoutSpaces = res.replace(/\s/g, '')
              if(withoutSpaces=='al')
              {
               alert("Invalid email already exist");
              }
              else{
               document.getElementById("bbbb").innerHTML="success";
               window.location.href="page3.php"; 
            }
         }
         
        });   
}
}
</script>
<body>
  <?php
  require(__DIR__.'/class/db.php');
  ?>
<?php
  include('header1.php');
?>
  <section  class="d-flex align-items-center">
  <div class="container">


<iframe src="https://www.keralamatrimony.com/register/registrationstorage.php" style="display:none;height:0px;width:0px;"></iframe>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Indian Matrimony - Free Matrimonial - Register for FREE, Bharatmatrimony.com - Free matrimonials add your profile.">
<meta name="keywords" content="Indian matrimony, free matrimonial, Add Profile, matrimonials, Telugu, tamil, sindhi, assamese, gujarati, malayalee, hindu, christian, muslim, register profile, matrimonial, add profile, success stories, search profiles, matrimonial website, Indian matrimony, marwadi, oriya, kannada, hindi, Free matrimonials, matrimony, desi match maker, match maker, online matrimony">
<title></title>
<script src="//cdn.freshmarketer.com/384416/994594.js"></script>
<link rel="stylesheet" href="https://imgs.keralamatrimony.com/bmstyles/regis-style-track-y.css?random=02032019">
<script type="text/javascript" language="javascript" src="https://imgs.keralamatrimony.com/scripts/home-register-err-msg-track-y.js?random=17052023052023"></script>
<script type="text/javascript" language="javascript" src="https://imgs.keralamatrimony.com/scripts/home-register-validation-track-y.js?random=17052023052023"></script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-7FB3FXSRX8"></script>
<style>
.hp-button {
  border-radius: 66px;
  background: #eb2727;
  color: #fff;
  cursor: pointer;
  border: none !important;
  display: inline-block;
  font-family: arial;
  margin: 0;
  outline: medium none;
  text-decoration: none;
  font-size: 16px;
  padding:  13px 66px 16px 66px;
  margin-bottom: 20px;
}
</style>
<script>

                       
function GApushMotherTongue()
{
    _gaq.push(['_trackEvent', 'Keralahomepage-Desktop', 'Keralahomepage-Desktop-Default', 'MotherTongue-SelectedFilled']);
}
 window.dataLayer = window.dataLayer || [];
 function gtag(){ dataLayer.push(arguments);}
 gtag('js', new Date());
 gtag('config', 'G-7FB3FXSRX8');

 function gaq(){ 
    this.push = function(ev){ 
       if(ev[0] == '_trackPageview') {
          gtag('event','page_view',{'page_title':'','page_location':ev[1]});
       }
       else {
          gtag('event',ev[1],{'event_category':ev[2],'event_label':ev[3]});
       }
    }
 }

 function ga(se,ev,category,gamodule,action,nan){			
    gtag('event',category,{'event_category':action,'event_label':gamodule});
 }
 var _gaq = new gaq();
                         </script>
<form name="registrationform2" onload="HpGAeventTrk(); hpstorage();"> 



<div class="regis-width">

   
   
   
 </div>
 <div class="clear"></div>
  
 <!-- Header End -->
 <!-- Container Start-->
 <?php
          require(__DIR__.'/class/db.php');
  ?>
 <div class="regis-level">Great! You have completed <span class="fs30">20% </span> </div>
 <div class="regis-container">
    <div class="txt-center regis-left" style="background : #eb2727;color:#fff;font-size: 28px;">
       <div class="paddb30 mobcouplft iconspaddtop"><img src="https://imgs.keralamatrimony.com/bmimgs/reg-1.png" class="imgcrtcouple"></div>
       <div class="paddb40 mobcouprgt">Your search for a loving companion  </div>
    </div>
    <div class="regis-right">
       <div class="paddl5 paddt35 mob-rgtpadd">
          <div class="paddlh2"><h2> &nbsp Tell us about yourself </h2></div>
          <div class="paddt40 h50">
             <div class="regis-col1 paddt7">Date Of Birth </div>
             <div class="regis-col2 posrelative" id="dob-border">
          <input type="date" value="" id="DOBVALUE11" name="" maxlength="10" placeholder="DD / MM / YYYY" onchange="valDobFub();" onblur="valDobFub_Blur()" onclick="valDobFub_Focus()" onkeydown="return isNumberKey(event);" class="DOBVALUE1 regis-input hasDatepicker">
          
                
             <div class="regis-errtxt" id="dob-err" style="margin-left:0;"></div>
             </div>
                       <div class="regis-col3" style="display:none;" id="dobalert_late">
                <div class="paddl25 dobalert-txt">
            
                   Birthday coming up! Happy birthday <span id="dobnamevalues_1"></span>!  
                
                </div>
             </div>
              <div class="regis-col3" style="display:none;" id="dobalert_today">
                <div class="paddl25 dobalert-txt">
                    Happy birthday, <span id="dobnamevalues_2"></span>!  	
                </div>
             </div> 
          <div class="regis-col3" style="display:none;" id="dobalert_fifteenday">
                <div class="paddl25 dobalert-txt">
                    Belated happy birthday <span id="dobnamevalues_3"></span>!   
                </div>
             </div>
           <div class="regis-col3 dobalertfocus" style="display:block;" id="">
                <div class="paddl25 dobalert-txt">
                   Your date of birth helps us find the perfect match 
                </div>
             </div>
             <div class="clear"></div>
         
          </div>   
            
       
        <div class="paddt10 h50">
             <div class="regis-col1 paddt7">Religion </div>
             <div class="regis-col2 regis-select" id="religion-border">
                <select name="RELIGION" id="RELIGION11" size="1" onchange="makeDrequest1(this.value); _gaq.push(['_trackEvent', 'Keralahomepage-Desktop', 'Keralahomepage-Desktop-Default', 'Religion-SelectedFilled']); religioncountval(this.value);">
               <option value="0">Select</option>
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
            </select>
             </div> 
          <div class="regis-col3" style="display:none;" id="religionalert">
                <div class="paddl25 regis-protxt dobalert-txt">
                   Great! We have<br> <span id="religioncount"></span> <span id="religionvalues"></span> profiles
                </div>
             </div>
             <div class="clear"></div>
          <div class="regis-errtxt" id="religion-err"></div>
          </div>
        
          <div class="paddt10 h50">
             <div class="regis-col1 paddt7">Mother Tongue </div>
             <div class="regis-col2 regis-select" id="mothertongue-border">
                <select name="MOTHERTONGUE" id="MOTHERTONGUE11" size="1" class="paddl5" onchange="makeDrequest(this.value); _gaq.push(['_trackEvent', 'Keralahomepage-Desktop', 'Keralahomepage-Desktop-Default', 'MotherTongue-SelectedFilled']); GApushMotherTongue();" style="color:#000;">
                                                       <option value="0">Select</option>
                                     <optgroup label="    --Frequently used--">
                                                                <option value="Bengali">Bengali</option>
                                                                <option value="Gujarati">Gujarati</option>
                                                                <option value="Hindi">Hindi</option>
                                                                
                                                                <option value="Kannada">Kannada</option>
                                                                <option value="Malayalam">Malayalam</option>
                                                                <option value="Marathi">Marathi</option>
                                                                <option value="Marwari">Marwari</option>
                                                                <option value="Oriya">Oriya</option>
                                                                <option value="Punjabi">Punjabi</option>
                                                                <option value="Sindhi">Sindhi</option>
                                                                <option value="Tamil">Tamil</option>
                                                                <option value="Telugu">Telugu</option>
                                                                <option value="Urdu">Urdu</option>
                                      
                                     </optgroup>
                                     
                                     <optgroup label="    --More--">
                      <option value="1">Arunachali</option>
                                                                <option value="Assamese">Assamese</option>
                                                                <option value="Awadhi">Awadhi</option>
                                                                <option value="Bhojpuri">Bhojpuri</option>
                                                                <option value="Brij">Brij</option>
                                                                <option value="Bihari">Bihari</option>
                                                                <option value="Badaga">Badaga</option>
                                                                <option value="Chatisgarhi">Chatisgarhi</option>
                                                                <option value="Dogri">Dogri</option>
                                                                <option value="English">English</option>
                                                                <option value="French">French</option>
                                                                <option value="Garhwali">Garhwali</option>
                                                                <option value="Garo">Garo</option>
                                                                <option value="Haryanvi">Haryanvi</option>
                                                              
                                                                      </optgroup>
                                  </select>
             </div>
            <div class="regis-col3" style="display:none;" id="mothertonguealert">
                <div class="paddl25 dobalert-txt">
                   Go <span id="mothertonguevalues"></span>!
                </div>
             </div>
             <div class="clear"></div>
          <div class="regis-errtxt" id="mothertongue-err"></div>
          </div> 
       
          
       <div class="paddt10 h50">
             <div class="regis-col1 paddt7">Email ID</div>
             <div class="regis-col2 posrelative" id="email-border"><input type="text" name="EMAIL" id="EMAIL11" placeholder="" maxlength="50" value="" autocomplete="email" onblur="valEmailFub(); _gaq.push(['_trackEvent', 'Keralahomepage-Desktop', 'Keralahomepage-Desktop-Default', 'Email-FieldSelected']);" class="regis-input "> 
         
          </div>
           <div class="regis-col3" style="display:none;" id="emailalert">
                <div class="paddl25 dobalert-txt">
                    Remember to check your <br> e-mail for matches                  </div>
              </div>
          <div class="regis-col3 emailalertfocus" style="display:none;">
                <div class="paddl25 dobalert-txt">
                    We send you matches on your e-mail ID                  </div>
              </div>
          
             <div class="clear"></div>
          
          <div class="regis-errtxt" id="email-err"></div>	
                            <div id="smtpvalid" class="regis-errtxt" style="display: none;">
                            <div id="EMAILIDSMTP" style="margin: 5px 20px 10px 20px; display:none;">
                   <div class="fleft" style="padding: 0px 10px;"><img src="https://imgs.keralamatrimony.com/bmimgs/alert-icon-yellow-new.png" width="36" height="32" border="0" alt=""></div>
                      <div class="fleft" style="padding: 5px 0px 5px 10px;width:90%;margin-bottom:5px;"><font class="bigtxt clr4">Alert! </font>
                         <font class="hdtxt" style="color:red;">
                         Please enter a valid email address or your profile will be rejected.									</font>
                      </div><div style="clear:both"></div>
                </div>	
             </div>	
             <script>setTimeout(function(){document.getElementById("smtpvalid").style.display="none"},3000);</script>					
          </div>
       
       
       
          <div class="paddt10 h50">
             <div class="regis-col1 paddt7">Password </div>
             <div class="regis-col2 posrelative" id="pass-border"><input type="password" class="regis-input" placeholder="" name="PASSWD1" id="PASSWORD11" maxlength="20" value="" autocomplete="off" onblur="valPassFub(); _gaq.push(['_trackEvent', 'Keralahomepage-Desktop', 'Keralahomepage-Desktop-Default', 'Password-FieldSelected']);" onclick="valPassFub_Focus();">
          <!--<img src="//imgs.bharatmatrimony.com/bmimgs/registration-dobalert.png" style="display:none;" width="22" height="22" id="" class="passwordalertfocus regisdob-alert"/>-->
          </div>
           <div class="regis-col3 passwordalertfocus" style="display:none;">
                <div class="paddl25 dobalert-txt">
                   Password must have between 6-20 characters 
                </div>
              </div>
          
             <div class="clear"></div>
          <div class="regis-errtxt" id="pass-err"></div>	
          </div>
       
       <input type="hidden" value="Kerala-B" name="trackhidden" id="trackhidden"><input type="hidden" name="formfeed" value="y"><input type="hidden" name="type" value="internal"><input type="hidden" name="hpgtrack" value="hpg"><input type="hidden" name="xternal" value="fm">
       <input type="hidden" name="trackid" value="0020000002006">
       <input type="hidden" name="uetsid" value="3d9bc3a030fc11ee8cb17943dbf23f97">
          <div class="paddt30 paddb30 txt-center">
          <!-- <input class="hp-button" alt="Continue" value="Continue"  onclick="return validateregistrationform(2);" type="submit"> -->

          <input class="hp-button" alt="Continue" value="Continue" onclick="abczzz()" type="button"><br>
          <b id="bbbb"  ></b>
          </div>
       </div>
    </div>

   
    <div class="clear"></div>
 </div>
</div>
</form>




</div>	</div>
</section><!-- End Hero -->



<footer>

     <?php

  include('footer.php');

?>

   
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="js/jquery-1.8.2.min.js"></script>
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