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
    <b class="ft1">Great! you have completed <span class="fs-3">60%</span></b>
    </div>
</section>

<section>
    <div class="bg-white">
        <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>
                <img src="image/img_2/one.png" width="100%" height="575px">
            </div>
        </div>

        <div class="col-lg-8 col-md-12 mt-3">
            <div class="ft">
                <p><b>Tell us about your relative's personal details</b></p>
            </div>

        <div class="alp">
            <div class="col-xl-2 ft2" style="margin-right: 60px;">
                 Marital Status
             </div>
             <div class="text-nowrap form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined"  id="never-married" autocomplete="off" checked value="Never Married">
                <label class="btn btn-outline-secondary" for="never-married">Never Married</label>
            </div>
            <div class="form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined" id="widowed" autocomplete="off" value="Widowed">
                <label class="btn btn-outline-secondary" for="widowed">Widowed</label>
            </div>
            <div class="form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined" id="divorced" autocomplete="off" value="Divorced">
                <label class="btn btn-outline-secondary" for="divorced">Divorced</label>
            </div>
            <div class="text-nowrap form-check">             
                <input type="radio" class="btn-check" name="optionsoutlined" id="awaiting-divorce" autocomplete="off" value="Awaiting divorce">
                <label class="btn btn-outline-secondary" for="awaiting-divorce">Awaiting divorce</label>
            </div>
        </div>
        <div class="selt">
            <div class="mt-2 ft3">
            A change in marital status awaits you
        </div></div>
        <div class="helt" style="display: none;">
            <div class="mt-2 ft3">
                Choose to believe in second chances
            </div>
            <div class="alp ft4"  id="f2">
                <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                    No. of Children
                </div>
                <div class="text-nowrap form-check">             
                    <input type="radio" class="btn-check" name="optionsoutlined1" id="None" autocomplete="off" checked value="None">
                    <label class="btn btn-outline-secondary" for="None">None</label>
                </div>
                <div class="form-check">             
                    <input type="radio" class="btn-check" name="optionsoutlined1" id="1" autocomplete="off" value="1">
                    <label class="btn btn-outline-secondary" for="1">1</label>
                </div>
                <div class="form-check">             
                    <input type="radio" class="btn-check" name="optionsoutlined1" id="2" autocomplete="off" value="2">
                    <label class="btn btn-outline-secondary" for="2">2</label>
                </div>
                <div class="text-nowrap form-check">             
                    <input type="radio" class="btn-check" name="optionsoutlined1" id="3" autocomplete="off" value="3">
                    <label class="btn btn-outline-secondary" for="3">3</label>
                </div>
                <div class="text-nowrap form-check">             
                    <input type="radio" class="btn-check" name="optionsoutlined1" id="4-and-above" autocomplete="off" value="4 and above">
                    <label class="btn btn-outline-secondary" for="4-and-above">4 and above</label>
                </div>
            </div>
            <div class="alp ft4" id="f3">
                <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                    
                </div>
                <div class="text-nowrap form-check">             
                    <input type="radio" class="btn-check" name="optionsoutlined2" id="children-living-with-me" autocomplete="off" checked value="Children living with me">
                    <label class="btn btn-outline-secondary" for="children-living-with-me">Children living with me</label>
                </div>
                <div class="form-check">             
                    <input type="radio" class="btn-check" name="optionsoutlined2" id="children-not-living-with-me" autocomplete="off" value="Children not living with me">
                    <label class="btn btn-outline-secondary" for="children-not-living-with-me">Children not living with me</label>
                </div>
            </div>
        </div>
            <div class="alp ft4">
                <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                    Height
                </div>
                <div class="select w-100">
                    <select class="custom-select line-input1" id="f4" style="color: rgb(134, 132, 132);">
                        <option selected>Feet/Inches</option>
                        <option value="5ft/60inches">5ft/60inches</option>
                        <option value="5.1ft/61.2inches">5.1ft/61.2inches</option>
                        <option value="5.2ft/62.4inches">5.2ft/62.4inches</option>
                        <option value="5.3ft/63.6inches">5.3ft/63.6inches</option>
                        <option value="5.4ft/64.8inches">5.4ft/64.8inches</option>
                        <option value="5.5ft/65inches">5.5ft/65inches</option>
                      </select>
                </div>
            </div>
            <div class="alp ft4" id="f5">
                <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                    Family Status
                </div>
                    <div class="text-nowrap form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined3" id="middle-class" autocomplete="off" checked value="Middle Class">
                        <label class="btn btn-outline-secondary" for="middle-class">Middle Class</label>
                    </div>
                    <div class="form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined3" id="upper-middle-class" autocomplete="off" value="Upper Middle Class">
                        <label class="btn btn-outline-secondary" for="upper-middle-class">Upper Middle Class</label>
                    </div>
                    <div class="form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined3" id="rich" autocomplete="off" value="Rich">
                        <label class="btn btn-outline-secondary" for="rich">Rich</label>
                    </div>
                    <div class="text-nowrap form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined3" id="affluent" autocomplete="off" value="Affluent">
                        <label class="btn btn-outline-secondary" for="affluent">Affluent</label>
                    </div>
                </div>
                <div class="alp ft4" id="f6">
                    <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                        Family Type
                    </div>
                    <div class="text-nowrap form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined4" id="joint" autocomplete="off" checked value="Joint">
                        <label class="btn btn-outline-secondary" for="joint">Joint</label>
                    </div>
                    <div class="form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined4" id="nuclear" autocomplete="off" value="Nuclear">
                        <label class="btn btn-outline-secondary" for="nuclear">Nuclear</label>
                    </div>
                </div>
                <div class="alp ft4" id="f7">
                    <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                        Family Values
                    </div>
                    <div class="text-nowrap form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined5" id="orthodox" autocomplete="off" checked value="Orthodox">
                        <label class="btn btn-outline-secondary" for="orthodox">Orthodox</label>
                    </div>
                    <div class="form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined5" id="traditional" autocomplete="off" value="Traditional">
                        <label class="btn btn-outline-secondary" for="traditional">Traditional</label>
                    </div>
                    <div class="form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined5" id="moderate" autocomplete="off" value="Moderate">
                        <label class="btn btn-outline-secondary" for="moderate">Moderate</label>
                    </div>
                    <div class="text-nowrap form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined5" id="liberal" autocomplete="off" value="Liberal">
                        <label class="btn btn-outline-secondary" for="liberal">Liberal</label>
                    </div>
                </div>
                <div class="alp ft4" id="f8">
                    <div class="col-lg-2 col-md-2 ft2" style="margin-right: 60px;">
                        Any Disability
                    </div>
                    <div class="text-nowrap form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined6" id="none" autocomplete="off" checked value="None">
                        <label class="btn btn-outline-secondary" for="none">None</label>
                    </div>
                    <div class="form-check">             
                        <input type="radio" class="btn-check" name="optionsoutlined6" id="physically-challenged" autocomplete="off" value="Physically Challenged">
                        <label class="btn btn-outline-secondary" for="physically-challenged">Physically Challenged</label>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <a href="tekmatrii2.php"></a><button class="bc" onclick="ads()"> Continue </button>
                </div>

</div>
</section>
</div>
</body>

</html>

