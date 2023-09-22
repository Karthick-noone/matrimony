<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login page</title>
    <link rel="stylesheet" href="css/style1.css">
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/main.js"></script>
</head>

<body>
  
<?php
require(__DIR__.'/class/db.php');
if(isset($_GET['outofsession']))
{
  session_destroy();
}
?>

<div class="login-container" id="modal">
      <button type="button" class="close" onclick="hideElement('modal')">&times;</button>
        <h1><span class="glyphicon glyphicon-lock"></span><b>Login</b></h1><br>
        <form>
            <div class="form-group">
                <label for="usrname">Username</label>
                <input type="text" id="usrname" name="usrname" required>
            </div>
            <div class="form-group">
                <label for="psw">Password</label>
                <input type="password" id="psw" name="psw" required>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" value="" checked>Keep me logged in</label>
            </div>
            <div class="form-group">            
            <button  type="button" onclick="abc()"  class="btn btn-info btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            <span style="color:red;" id="Errormsg"></span>
            </div>
            <div class="modal-footer">
                <a href="">Forgot Password</a>&nbsp;&nbsp;&nbsp;
                <a href="">Login Via OTP</a>
            </div>
        </form>
    </div>

    <script>
function abc()
{ 
  var uname=document.getElementById("usrname").value;
  var psw=document.getElementById("psw").value;
   
  $.ajax({
    url:"insert.php",
    data:{username:uname,pasword:psw},
    type:'POST',
    success:function(result)
    {
      if(result.trim()=="success"){
        alert("successful login");
        window.location.href="specialoffer.php";
      }
      else
        {
          document.getElementById("Errormsg").innerHTML="Invalid Username and Password";
          alert(result)
        }
    }
  });
  
}
</script>
</body>
</html>