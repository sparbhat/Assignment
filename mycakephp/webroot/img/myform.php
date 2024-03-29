<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assignment.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Assignment</title>
    
</head>
<body>
  
  

<form method="post" action="" id="alldata" name ="alldata" >
    <div class="container text-center">
        <div class="row">
          <div class="col-12 heading text-center" style="min-height: 50px; margin-top: 20px;" >
            <span class="form">PATIENT REGISTRATION FORM</span>
          </div>
        </div>
        </div>
<br>
<!--First Section starts-->



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = "";
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
     }else {
        $name = test_input($_POST["name"]);
     }
     if (empty($_POST["employeremail"])) {
      $emailErr = "Email is required";
   }else {
      $email = test_input($_POST["employeremail"]);
      
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format"; 
      }
   }
   if (empty($_POST["address"])) {
    $addressErr = "address is required";
 }else {
    $addressErr = test_input($_POST["address"]);
 }
 if (empty($_POST["city"])) {
  $cityerror = "city is required";
}else {
  $cityerror = test_input($_POST["city"]);
}
if (empty($_POST["referredby"])) {
  $referrederror = " required";
}else {
  $referrederror = test_input($_POST["referredby"]);
}
if (empty($_POST["parent"])) {
  $parenterror = "parent is required";
}else {
  $parenterror = test_input($_POST["parent"]);
}
if (empty($_POST["state"])) {
  $stateerror = " required";
}else {
  $stateerror = test_input($_POST["state"]);
}
  }
  function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
?>






<div class="container text-start fill-form align-middle">
        <div class="row">
          
            <div class="col-2 first ">Title</div>
            <div class="col-4 radiobutton second ">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio1" value="Dr." id="radiobutton1" >
                    <label class="form-check-label" for="inlineRadio1">Dr.</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio1" value="Mr." id="radiobutton2"  >
                    <label class="form-check-label" for="inlineRadio2">Mr.</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio1" value="Ms." id="radiobutton3" >
                    <label class="form-check-label" for="inlineRadio3">Ms.</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio1" value="Miss" id="radiobutton4" >
                    <label class="form-check-label" for="inlineRadio4">Miss</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" class="inlineRadio1" value="Mrs." id="radiobutton5" >
                    <label class="form-check-label" for="inlineRadio5">Mrs</label>
                  </div>
            </div>
            <div class="col-2 first ">Marital Status</div>
            <div class="col-4 radiobutton second">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="radiobutton6" value="Married" >
                    <label class="form-check-label" for="inlineRadio6">Married</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="radiobutton7" value="Unmarried">
                    <label class="form-check-label" for="inlineRadio7">Unmarried</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="radiobutton8" value="Widowed">
                    <label class="form-check-label" for="inlineRadio8">Widowed</label>
                  </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-2 first">Name</div>
            <div class="col-4 second"><input id="textname"  name="name"> <?php echo $nameErr;?></div>
            <div class="col-2 first">Social Security</div>
            <div class="col-4 second"><input id ="socialsecurity" name="socialsecurity" ><?php echo $socialsecurity;?></div>
             
        </div>
         <div class="row">
            <div class="col-2 first">Address</div>
            <div class="col-4 second"><input id="address" name="address"><?php echo $addressErr;?></div>
            <div class="col-2 first">Birth Date</div>
            <input id="Birthdate" type="date" class="col-4 second">
        </div>
        <div class="row">
            <div class="col-2 first">City</div>
            <div class="col-4 second"><input id ="city" name="city"><?php echo $cityerror;?></div>
            <div class="col-2 first">Parent/Guardian </div>
            <div class="col-4 second"><input id ="parent" name="parent"><?php echo $parenterror;?></div>
        </div>
        <div class="row">
            <div class="col-2 first">State</div>
            <div class="col-4 second"><input id ="state" name="state" ><?php echo $stateerror;?></div>
            <div class="col-2 first">Referred By</div>
            <div class="col-4 second"><input id ="referredby" name="referredby" ><?php echo $referrederror;?></div>
           
        </div>
        <div class="row">
            <div class="col-2 first">zip</div>
            <div class="col-4 second"><input id ="zip" name="zip" ><?php echo $ziperror;?></div>
            <div class="col-2 first">Occupation</div>
            <div class="col-4 second"><input id ="occupation" name="occupation" ><?php echo $occupationerror;?></div>
            
        </div>
        <div class="row">
            <div class="col-2 first" >Cell Phones</div>
            <div class="col-4 second"><input id ="cellphones" name="cellphones" ><?php echo $cellphoneserror;?></div>
            <div class="col-2 first">Cell Phones</div>
            <div class="col-4 second"><input id ="cell" name="cell" ><?php echo $cellerror;?></div>
            
        </div>
        <div class="row">
            <div class="col-2 first">Home phones</div>
            <div class="col-4 second"><input id ="homephones" name="homephones" ><?php echo $homephoneserror;?></div>
            <div class="col-2 first">Employer's Name </div>
            <div class="col-4 second"><input id ="employer" name="employername" ><?php echo $employernameerror;?></div>
            
        </div>
        <div class="row">
            <div class="col-2 first" >Mobiles phones</div>
            <div class="col-4 second"><input id ="mobilesphones" name="mobilesphones" ><?php echo $mobilephoneerror;?></div>
            <div class="col-2 first">Employer's Email</div>
            <div class="col-4 second"><input id ="employeremail" name="employeremail"><?php echo $emailErr;?></div>
            
        </div>
    </div>
<!--First Section Ends-->
   
<br>

<!--Second Section Starts-->
     <div class="container text-start align-self-center">
        <div class="row">
          <div class="col-sm-4 third">Other Conditions(s)</div>
          <div class="col-sm-8 fourth second"><input id ="rowone" name="aname"></div>
          <!-- <input id="rowone" class="col-sm-8 fourth" type="text"  name="lname" required> -->
        </div>
        <div class="row">
            <div class="col-sm-4 third">Medications are you presently taking</div>
            <div class="col-sm-8 fourth second"><input id ="rowtwo" name="bname"></div>
            <!-- <input id="rowtwo" class="col-sm-8 fourth" type="text" name="lname" required> -->
        </div>
        <div class="row">
            <div class="col-sm-4 third">Name of Family doctor</div>
            <div class="col-sm-8 fourth second"><input id ="rowthree" name="cname"></div>
            <!-- <input  id="rowthree" class="col-sm-8 fourth" type="text" name="lname" required> -->
        </div>
        <div class="row">
            <div class="col-sm-4 third">Do you Smoke?</div>
            <div class="col-sm-8 radiobutton fourth text-start">
                <div class="form-check form-check-inline">
                    <input id="rowfour" class="form-check-input" type="radio" name="inlineRadioOption"  value="Yes" >
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                  <div class="form-check form-check-inline">
                    <input id="rowfive" class="form-check-input" type="radio" name="inlineRadioOption"  value="No" >
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-sm-4 third">List any allergies to medication</div>
            <div class="col-sm-8 fourth second"><input id ="rowsix" name="dname"></div>
            <!-- <input id="rowsix"  class="col-sm-8 fourth" type="text" name="lname" required> -->
          </div>
          <div class="row">
            <div class="col-sm-4 third">Date of last exam</div>
            <div class="col-sm-8 fourth second"><input id ="rowseven" name="ename"></div>
            <!-- <input id="rowseven" class="col-sm-8 fourth" type="date" name="lname" required> -->
          </div>
          <div class="row">
            <div class="col-sm-4 third">Do you ever wear glasses or contact lenses?</div>
            <div class="col-sm-8 radiobutton fourth text-start">
                <div class="form-check form-check-inline">
                    <input id="roweight" class="form-check-input" type="radio" name="inlineRadioOptions3" onclick="Check();" value="show">Yes   
                  </div>
                  <div class="form-check form-check-inline">
                    <input required id="rownine" class="form-check-input" type="radio" name="inlineRadioOptions3" id="NoCheck"  onclick="Check();" value="hide">No&nbsp&nbsp&nbsp&nbsp
                    <a style="visibility:hidden" id="ifYes">How old are they?&nbsp&nbsp;<input type='text'><br></a>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 third">Family history of eye disorders</div>
            <div class="col-sm-8 fourth second"><input id ="rowten" name="fname"></div>
            <!-- <input required id="rowten" class="col-sm-8 fourth" type="text" id="lname" name="lname"> -->
          </div>
</div> 
<!--Second Section Ends-->

<br>

<!--Third Section Starts-->
 <div class="container text-center">
    <div class="row">
      <div class="col" style="background-color:  #003366; min-height: 35px; border: 2px solid black; color: white; font-weight: bold;">
        Primary Insurance
      </div>
      <div class="col" style="background-color: #003366; min-height: 35px;  border: 2px solid black; color: white; font-weight: bold;">
        Secondary Insurance
      </div>
    </div>
    <div class="row text-start">
        <div class="col-2 .col-sm-4 first">Insurance Name</div>
        <div class="col-4 second "><input id ="Detail1" name="insurancename"></div>
        
         <div class="col-2 first">Insurance Name</div>
         <div class="col-4 second "><input id ="Detail2" name="insurancename2"></div>
         
    </div>
    <div class="row text-start">
        <div class="col-2 first">Employer</div>
        <div class="col-4 second "><input id ="Detail3" name="Employer1"></div>
        
         <div class="col-2 first">Employer </div>
         <div class="col-4 second "><input id ="Detail4" name="Employer2"></div>
         
    </div>
    <div class="row text-start">
        <div class="col-2 first">Insured's Name</div>
        <div class="col-4 second "><input id ="Detail5" name="insuredname"></div>
         <div class="col-2 first">Insured's Name </div>
         <div class="col-4 second "><input id ="Detail6" name="insuredname1"></div>
    </div>
    <div class="row text-start">
        <div class="col-2 first">Birth Date</div>
        <div class="col-4 second "><input id ="Detail7" name="Birthdate1"></div>
        <!-- <input id = "Detail7" required type="date" class="col-4 second"> -->
         <div class="col-2 first">Birth Date</div>
         <div class="col-4 second "><input id ="Detail8" name="Birthdate2"></div>
         
    </div>
    <div class="row text-start">
        <div class="col-2 first">Insured's SS</div>
        <div class="col-4 second "><input id ="Detail9" name="insuredss"></div>
        <!-- <input id = "Detail9" required class="col-4 second"> -->
         <div class="col-2 first">Insured's SS</div>
         <div class="col-4 second "><input id ="Detail10" name="insuredss2"></div>
        
    </div> 
<!--Third Section Ends-->
<br><br>
<div class= container>
<label class="first"  style="width: 200px; background-color: #003366; margin-left: 200px;" for="inlineRadio1">Upload Image</label>
<input type="file" id="myfile" name="myfile"><br>
</div>                    
</div>
    <div onclick="" class="d-flex justify-content-center" style="margin-top: 30px"> <button id="submit-button" type="submit" class="btn btn-primary">Sign up</button> </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<!-- <script src="assignmentne.js"></script>  -->

</body>

</html>


