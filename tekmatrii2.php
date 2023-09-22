<?php  
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/tekscript1.js"></script>
    <link href="css/styletek2.css" rel="stylesheet">
    <title>TEK matrimony - free matrimony</title>
</head>
<body>
    <?php
require(__DIR__.'/class/db.php');
?>
    <div class="container">    
        <div class="row">
            <header>
            <div class="mt-2 col-lg-12 col-md-12 col-sm-12" >
                <img src="image/img_2/teklogo.png" class="pic">
            </div>
        </header>
    </div>
    <section>
        <div class="col-lg-12 col-md-12 col-sm-12" >
        <b class="ft1">Great! you have completed <span class="fs-3">80%</span></b>
        </div>
    </section>

<section>
    <div class="bg-white">
        <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>
                <img src="image/img_2/two.png" width="100%" height="525px">
            </div>
        </div>
        <div class="col-lg-8 col-md-12 mt-3">
            <div class="ft4">
                <p><b>Professional details help us to find the best companion</b></p>
        </div>

        <div class="alp ft5">
            <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                Highest Education
            </div>
            <div class="select alp1">
                <select class="custom-select" id="f9">
                    <option selected>--Any Bachelors in Engineering/Computer--</option>
                    <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                    <option value="B.Arch">B.Arch</option>
                    <option value="B.E">B.E</option>
                    <option value="B.C.A">B.C.A</option>
                    <option value="B.Plan">B.Plan</option>
                    <option value="B.sc IT/Computer Science">B.sc IT/Computer Science</option>
                    <option value="B.Tech">B.Tech</option>
                  </select>
            </div>
        </div>

        <div class="alp ft5">
            <div class="col-lg-2 ft2" style="margin-right: 90px;">
                Education in Detail
            </div>
        <div>
            <input type="text" id="f10" class="line-input1" placeholder="Educational Detail">
        </div>
        </div>

        <div class="alp ft4">
            <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                Employed in
            </div>
            <div class="form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined7" id="Government/PSU" autocomplete="off" value="Government/PSU">
                <label class="btn btn-outline-secondary" for="Government/PSU">Government/PSU</label>
            </div>
            <div class="form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined7" id="Finance" autocomplete="off" value="Finance">
                <label class="btn btn-outline-secondary" for="Finance">Finance</label>
            </div>
            <div class="text-nowrap form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined7" id="Medical" autocomplete="off" value="Medical">
                <label class="btn btn-outline-secondary" for="Medical">Medical</label>
            </div>
        </div>
        <div class="alp ft4" id="f3">
            <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                
            </div>
            <div class="text-nowrap form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined7" id="Self-Employed" autocomplete="off" checked value="Self Employed">
                <label class="btn btn-outline-secondary" for="Self-Employed">Self Employed</label>
            </div>
            <div class="form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined7" id="Media-and-News" autocomplete="off" value="Media and News">
                <label class="btn btn-outline-secondary" for="Media-and-News">Media and News</label>
            </div>
            <div class="text-nowrap form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined7" id="Entertainment" autocomplete="off" value="Entertainment">
                <label class="btn btn-outline-secondary" for="Entertainment">Entertainment</label>
            </div>
        </div>
        <div class="alp ft5">
            <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                Occupation
            </div>
            <div class="select alp1">
                <select class="custom-select line-input1" id="f12">
                    <option selected>Occupation</option>
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
                  </select>
            </div>
        </div>
        <div class="alp ft5">
            <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                Salery
            </div>
            <div class="select alp1">
                <select class="custom-select line-input1" id="f13">
                    <option selected>Currency Type</option>
                    <option value="Rupees(Rs)">Rupees(Rs)</option>
                    <option value="Dollar($)">Dollar($)</option>
                    <option value="Yen">Yen</option>
                    <option value="Euro">Euro</option>
                    <option value="Dollar(CAD)">Dollar(CAD)</option>
                    <option value="Dirham(DH)">Dirham(DH)</option>
                    </select>
            </div>
            <div class="col-lg-2"></div>
            <div class="select alp1">
                <select class="custom-select line-input1" id="f14">
                    <option selected>Amount</option>
                    <option value="0-1 lakh">0-1 lakh</option>
                    <option value="1-2 lakhs">1-2 lakhs</option>
                    <option value="2-3 lakhs">2-3 lakhs</option>
                    <option value="3-4 lakhs">3-4 lakhs</option>
                    <option value="4-5 lakhs">4-5 lakhs</option>
                    <option value="Above 5 Lakhs">Above 5 Lakhs</option>
                    </select>
            </div>
        </div>
        <div class="alp ft5">
            <div class="col-lg-2 ft2" style="margin-right: 60px;">
                Work Location
            </div>
            <div class="select alp1">
                <select class="custom-select line-input1" id="f15">
                    <option selected>Work Location</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="Japan">Japan</option>
                    <option value="US">US</option>
                    <option value="Canada">Canada</option>
                    <option value="UAE">UAE</option>
                  </select>
            </div>
        </div>
        <div class="alp ft5">
            <div class="col-lg-2 ft2" style="margin-right: 60px;">
                State
            </div>
            <div class="select alp1">
                <select class="custom-select line-input1" id="f16">
                    <option selected>Select</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Telungana">Telungana</option>
                    <option value="Maharastra">Maharastra</option>
                    <option value="Delhi">Delhi</option>
                  </select>
            </div>
        </div>
        <div class="mt-3 text-center">
            <a href="qqqqq.php"><button class="bc" onclick="adds()"> Continue </button></a>
        </div>
        </div>
        </div>
    </div>
</section>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get all radio buttons by name
      const radioButtons = document.getElementsByName("optionsoutlined7");
    
      // Loop through and uncheck each radio button
      radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
      });
    });

    function adds()
    {                                                                               
        var h_e = document.getElementById("f9").value;
        var e_i_d = document.getElementById("f10").value;


      var radios = document.getElementsByName('optionsoutlined7');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var e_i = radios[i].value;
        }
      }

        var oc = document.getElementById("f12").value;
        var c_t = document.getElementById("f13").value;
        var am = document.getElementById("f14").value;
        var w_l = document.getElementById("f15").value;
        var st = document.getElementById("f16").value;
        
      $.ajax({
            url: "insert2.php",
            data: {
                
                f109: h_e,
                f110: e_i_d,
                f111: e_i,
                f112: oc,
                f113: c_t,
                f114: am,
                f115: w_l,
                f116: st
            },
            type: 'POST',
            success: function(result) {
                alert(result);
                 //window.location.href = '#';
            }
        });
        
    }

</script>
</html>