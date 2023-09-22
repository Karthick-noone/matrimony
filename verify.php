<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <link href="css/style_otp.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.min.js" ></script>
</head>


<script>
function abc()
{
    
var code=document.getElementById("vcode").value;

$.ajax({
    url:"vinsert.php",
    data:{vericode:code,
        },
    type:'POST',
    success:function(result)
    {
        if(result=="success")
        {
            window.location.href="test.html";
        }
        else
        {
           document.getElementById("errrmsg").innerHTML="Wrong OTP";
        }
        
    }
});
}
</script>


<body>


    <header class="ms-5" >
         <small class="ms-5">From Bharathmatrimony<br>
        <img src="image/img_4/logo.png" height="10%" width="10%" class="ms-5"></small>
    </header>
    <form method="post">
        <center>
            
                <div class="col-lg-12">

                
            
    <div class="body"><br>
        <p>You have successful registered with tekmatrimony </p>
        <p>Your matrimony ID is E7020773 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16" >
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
          </svg></p>
        <label>
           <input type="checkbox"> Keep me logged in (recommended) Stay logged in always with tekmatrimony.com
        </label><br><br>
    <hr class="line">
           <h1>Verify Your Mobile Number</h1>
           <p>You will receive a 6 degit confirmation code in via SMS to 9489318959<small><a href="#" class="zzz">(edit)</small></a></p><br>
        <label>
            <input type="number" placeholder="Enter Code" class="code" id="vcode" required>&nbsp;
            
            <button type="button" class="xyz" onclick="abc()">&nbsp;&nbsp;Verify&nbsp;&nbsp;</button><br>
            <span style="color:red" class="text-center" id="errrmsg"></span>
            <p class="pt-2">Didn't receive code yet? &nbsp;<a href="#" class="zzz">Resend code</a> </p>
        </label><br>
        <div class="row ms-5">
            <div class="col-xl-12 ">
                <button type="button" class="btn "><a href="index.php" class="zzz" >Skip</button></a><br><br>
            </div>
        </div>
           
       
        
<hr>
</div>



<footer class="fo">
    
   <b> OTHER WAY TO VERIFY</b>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16" id="icon">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
      </svg>
    <a href="#" class="zzz">Verify with missed calls</a>&nbsp;
    
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16" id="icon">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
      </svg>
    <a href="#" class="zzz">Request automated IVR call</a>
    
</footer>

</div>


</center>





</form>
</body>
</html>