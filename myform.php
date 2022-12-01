<?php
error_reporting(E_ALL);
ini_set('display_errors', '0');

?>

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
  
  

<form method="post" action="assignment.php" id="alldata" name ="alldata"  enctype='multipart/form-data' >
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

  $name = "";
  $socialsecurity = "";
  $address = "";
  $city = "";
  $parent = "";
  $state = "";
  $referredby = "";
  $zip = "";
  $cellphones = "";
  $homephones = "";
  $employername = "";
  $mobilesphones = "";
  $employeremail = "";
  $aname = "";
  $bname= "";
  $cname = "";
  $dname = "";
  $ename = "";
  $fname = "";
  $insurancename = "";
  $insurancename2 = "";
  $Employer1 = "";
  $Employer2 = "";
  $insuredname = "";
  $insuredname1 ="";
  $Birthdate1 ="";
  $Birthdate2 = "";
  $insuredss = "";
  $insuredss2 = "";




if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['submit'])) {
  
    if (empty($_POST["name"])) {
       $nameErr = "Name is required";
     }
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
        {
        $nameErr = "Only letters and white space allowed";
            } else{
        $name = test_input($_POST["name"]);
            }

    if (empty($_POST["socialsecurity"])) {
       $socialsecurityErr = "required";
     }
     if (!preg_match("/^[a-zA-Z ]*$/",$socialsecurity)) 
        {
                      $socialsecurityErr = "Only letters and white space allowed";
            } else{
        $socialsecurity = test_input($_POST["name"]);
            }
     
     if (empty($_POST["employeremail"])) {
      $emailErr = "Email is required";
   }else {
      $email = test_input($_POST["employeremail"]);
      
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format"; 
      }
   }
   if (empty($_POST["Birthdate"])) {
    $BirthdateErr = "address is required";
 }else {
    $Birthdate = test_input($_POST["Birthdate"]);
    
 }
   
   if (empty($_POST["address"])) {
    $addressErr = "address is required";
 }else {
    $address = test_input($_POST["address"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$address)) 
        {
                        $addressErr = "Only letters and white space allowed";
            }
 }
 if (empty($_POST["city"])) {
  $cityerror = "city is required";
}else {
  $city = test_input($_POST["city"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$city)) 
        {
                        $cityErr = "Only letters and white space allowed";
            }
}
if (empty($_POST["referredby"])) {
  $referrederror = " **Field is required";
}else {
  $referred = test_input($_POST["referredby"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$referred)) 
        {
                        $referrederror = "Only letters and white space allowed";
            }
}
if (empty($_POST["parent"])) {
  $parenterror = "**Field is required";
}else {
  $parent = test_input($_POST["parent"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$parent)) 
        {
                        $parenterror = "Only letters and white space allowed";
            }
}
if (empty($_POST["state"])) {
  $stateerror = " **Field is required";
}else {
  $state = test_input($_POST["state"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$state)) 
        {
                        $stateerror = "Only letters and white space allowed";
            }
}
if (empty($_POST["zip"])) {
  $ziperror = " **Field is required";
}else {
  $zip = test_input($_POST["zip"]);
  if (!preg_match("/^[0-9]{6}*$/",$zip)) 
        {
            $ziperror = "only number allowed";
            }
  }
  if (empty($_POST["occupation"])) {
    $occupationerror = " required";
  }else {
    $occupation = test_input($_POST["occupation"]);
    }
  if (empty($_POST["cellphones"])) {
    $cellphoneserror = " required";
   } 
   else{
     $cellphones = test_input($_POST["cellphones"]);
      if (!preg_match("/^[0-9]{10}*$/",$cellphones)) 
        {
            $cellphoneserror = "Phone number should be of 10 digits";
            }
      }
  if (empty($_POST["cell"])) {
        $cellerror = " required";
  }else {
        $cell = test_input($_POST["cell"]);
         if (!preg_match("/^[0-9]{10}*$/",$cell)) 
        {
            $cellerror = "Phone number should be of 10 digits";
            }
        }
  if (empty($_POST["homephones"])) {
          $homephoneserror = " required";
     }else {
          $homephones = test_input($_POST["homephones"]);
          if (!preg_match("/^[0-9]{10}*$/",$homephones)) 
        {
            $homephoneserror = "Phone number should be of 10 digits";
            }
          }
          if (empty($_POST["employername"])) {
            $employernameerror = " required";
          }else {
            $employername = test_input($_POST["employername"]);
            }
            if (empty($_POST["mobilesphones"])) {
              $mobilephoneerror = " required";
            }else {
              $mobilephone= test_input($_POST["mobilesphones"]);
                if (!preg_match("/^[0-9]{10}*$/",$mobilephone)) 
        {
              $mobilephoneerror = "Phone number should be of 10 digits";
            }
              } 
              if (empty($_POST["aname"])) {
                $anameerror = " required";
              }else {
                $aname= test_input($_POST["aname"]);
                } 
                if (empty($_POST["bname"])) {
                  $bnameerror = " required";
                }else {
                  $bname = test_input($_POST["bname"]);
                  }
                  if (empty($_POST["cname"])) {
                    $cnameerror = " required";
                  }else {
                    $cname = test_input($_POST["cname"]);
                    }  
                    if (empty($_POST["dname"])) {
                      $dnameerror = " required";
                    }else {
                      $dname = test_input($_POST["dname"]);
                      }  
                      if (empty($_POST["ename"])) {
                        $enameerror = " required";
                      }else {
                        $ename = test_input($_POST["ename"]);
                        }  
                        if (empty($_POST["fname"])) {
                          $fnameerror = " required";
                        }else {
                          $fname= test_input($_POST["fname"]);
                          }   
                          if (empty($_POST["fname"])) {
                            $fnameerror = " required";
                          }else {
                            $fname = test_input($_POST["fname"]);
                            }  
                            if (empty($_POST["insurancename"])) {
                              $insurancenameerror = " required";
                            }else {
                              $insurancename = test_input($_POST["insurancename"]);
                              }        
                              if (empty($_POST["insurancename2"])) {
                                $insurancename2error = " required";
                              }else {
                                $insurancename2 = test_input($_POST["insurancename2"]);
                                } 
                                if (empty($_POST["Employer1"])) {
                                  $Employer1error = " required";
                                }else {
                                  $Employer1 = test_input($_POST["Employer1"]);
                                  }        
                           if (empty($_POST["Employer2"])) {
                                    $Employer2error = " required";
                                  }else {
                                    $Employer2 = test_input($_POST["Employer2"]);
                                    }        
                                    if (empty($_POST["insuredname"])) {
                                      $Insurednameerror = " required";
                                    }else {
                                      $Insuredname = test_input($_POST["insuredname"]);
                                      }        
                                      if (empty($_POST["insuredname1"])) {
                                        $Insuredname1error = " required";
                                      }else {
                                        $Insuredname1 = test_input($_POST["insuredname1"]);
                                        }
                                        if (empty($_POST["Birthdate1"])) {
                                          $Birthdate1error = " required";
                                        }else {
                                          $Birthdate1 = test_input($_POST["Birthdate1"]);
                                          }
                                          if (empty($_POST["Birthdate2"])) {
                                            $Birthdate2error = " required";
                                          }else {
                                            $Birthdate2 = test_input($_POST["Birthdate2"]);
                                            }
                                          
                                          if (empty($_POST["insuredss"])) {
                                            $insuredsserror = " required";
                                          }else {
                                            $insuredss = test_input($_POST["insuredss"]);
                                            } 
                                            if (empty($_POST["insuredss2"])) {
                                              $insuredss2error = " required";
                                            }else {
                                              $insuredss2= test_input($_POST["insuredss2"]);
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
            <div class="col-4 second"><input id ="socialsecurity" name="socialsecurity" ><?php echo $socialsecurityErr;?></div>
             
        </div>
         <div class="row">
            <div class="col-2 first">Address</div>
            <div class="col-4 second"><input id="address" name="address"><?php echo $addressErr;?></div>
            <div class="col-2 first">Birth Date</div>
            <div class="col-4 second"><input id="Birthdate" type="date" name="Birthdate"><?php echo $BirthdateErr;?></div>
         
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
          <div class="col-sm-8 fourth second"><input id ="rowone" name="aname"><?php echo $anameerror;?></div>
          <!-- <input id="rowone" class="col-sm-8 fourth" type="text"  name="lname" required> -->
        </div>
        <div class="row">
            <div class="col-sm-4 third">Medications are you presently taking</div>
            <div class="col-sm-8 fourth second"><input id ="rowtwo" name="bname"><?php echo $bnameerror;?></div>
            <!-- <input id="rowtwo" class="col-sm-8 fourth" type="text" name="lname" required> -->
        </div>
        <div class="row">
            <div class="col-sm-4 third">Name of Family doctor</div>
            <div class="col-sm-8 fourth second"><input id ="rowthree" name="cname"><?php echo $cnameerror;?></div>
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
            <div class="col-sm-8 fourth second"><input id ="rowsix" name="dname"><?php echo $dnameerror;?></div>
            <!-- <input id="rowsix"  class="col-sm-8 fourth" type="text" name="lname" required> -->
          </div>
          <div class="row">
            <div class="col-sm-4 third">Date of last exam</div>
            <div class="col-sm-8 fourth second"><input id ="rowseven" type="date" name="ename"><?php echo $enameerror;?></div>
            <!-- <input id="rowseven" class="col-sm-8 fourth" type="date" name="lname" required> -->
          </div>
          <div class="row">
            <div class="col-sm-4 third">Do you ever wear glasses or contact lenses?</div>
            <div class="col-sm-8 radiobutton fourth text-start">
                <div class="form-check form-check-inline">
                    <input id="roweight" class="form-check-input" type="radio" name="inlineRadioOptions3" onclick="Check();" value="show">Yes   
                  </div>
                  <div class="form-check form-check-inline">
                    <input id="rownine" class="form-check-input" type="radio" name="inlineRadioOptions3" id="NoCheck"  onclick="Check();" value="hide">No&nbsp&nbsp&nbsp&nbsp
                    <a style="visibility:hidden" id="ifYes">How old are they?&nbsp&nbsp;<input type='text'><br></a>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 third">Family history of eye disorders</div>
            <div class="col-sm-8 fourth second"><input id ="rowten" name="fname"><?php echo $fnameerror;?></div>
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
        <div class="col-4 second "><input id ="Detail1" name="insurancename"><?php echo $insurancenameerror;?></div>
        
         <div class="col-2 first">Insurance Name</div>
         <div class="col-4 second "><input id ="Detail2" name="insurancename2"><?php echo $insurancename2error;?></div>
         
    </div>
    <div class="row text-start">
        <div class="col-2 first">Employer</div>
        <div class="col-4 second "><input id ="Detail3" name="Employer1"><?php echo $Employer1error;?></div>
        
         <div class="col-2 first">Employer </div>
         <div class="col-4 second "><input id ="Detail4" name="Employer2"><?php echo $Employer2error;?></div>
         
    </div>
    <div class="row text-start">
        <div class="col-2 first">Insured's Name</div>
        <div class="col-4 second "><input id ="Detail5" name="insuredname"><?php echo $Insurednameerror;?></div>
         <div class="col-2 first">Insured's Name </div>
         <div class="col-4 second "><input id ="Detail6" name="insuredname1"><?php echo $Insuredname1error;?></div>
    </div>
    <div class="row text-start">
        <div class="col-2 first">Birth Date</div>
        <div class="col-4 second "><input id ="Detail7" type="date" name="Birthdate1"><?php echo $Birthdate1error;?></div>
        <!-- <input id = "Detail7" required type="date" class="col-4 second"> -->
         <div class="col-2 first">Birth Date</div>
         <div class="col-4 second "><input id ="Detail8" type="date" name="Birthdate2"><?php echo $Birthdate2error;?></div>
         
    </div>
    <div class="row text-start">
        <div class="col-2 first">Insured's SS</div>
        <div class="col-4 second "><input id ="Detail9" name="insuredss"><?php echo $insuredsserror;?></div>
        <!-- <input id = "Detail9" required class="col-4 second"> -->
         <div class="col-2 first">Insured's SS</div>
         <div class="col-4 second "><input id ="Detail10" name="insuredss2"><?php echo $insuredss2error;?></div>
        
    </div> 

    <!-- <?php
$target_dir = "upload/";
$file = ($_FILES["myfile"]["name"]);
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  if ($_FILES["myfile"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png") {
  echo "Sorry, only JPG, PNG files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else{
  if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["myfile"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

}
?> -->


<!--Third Section Ends-->
<br><br>
<div class= container>
<label class="first"  style="width: 200px; background-color: #003366; margin-left: 200px;" for="inlineRadio1">Upload Image</label>
<input type="file" id="myfile" name="myfile"><br>
</div>                    
</div>
    <div onclick="" class="d-flex justify-content-center" style="margin-top: 30px"> <button id="submit-button" name="submit" type="submit" class="btn btn-primary">Sign up</button> </div>
</div>

<html>
 <body>
<br>
<div class="container" style=" margin-left: 25%">


<!-------show data --->
 
  
  <!-- <div class="row">
    <div class="col-8 first text-center"><span style="font-size : 30px;"><b>Here are Your details</span></b>
</div></div>
<div class="row">
  <div class="col-8 second text-center">
<?php  echo "<img src = ' ".$target_file." '>";?>
</div></div>

   <div class="row">
    <div class="col-4 first">Name</div>
    <div class="col-4 second"><?php echo $_POST["name"]; ?><br></div>
  </div>
   
   

<div class="row">
    <div class="col-4 first">Social Security is</div>
   <div class="col-4 second"><?php echo $_POST["socialsecurity"]; ?><br></div>
  </div>

<div class="row">
    <div class="col-4 first">Birthdate is </div>
   <div class="col-4 second"><?php echo $_POST["Birthdate"]; ?><br></div>
  </div>

<div class="row">
    <div class="col-4 first">Address </div>
   <div class="col-4 second"><?php echo $_POST["address"]; ?><br></div>
  </div>



<div class="row">
    <div class="col-4 first">City </div>
   <div class="col-4 second"><?php echo $_POST["city"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Parent </div>
   <div class="col-4 second"><?php echo $_POST["parent"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">State </div>
   <div class="col-4 second"><?php echo $_POST["state"]; ?><br></div>
  </div>


  <div class="row">
    <div class="col-4 first">Reffered by </div>
   <div class="col-4 second"><?php echo $_POST["referredby"]; ?><br></div>
  </div>


  <div class="row">
    <div class="col-4 first">Zip Code</div>
   <div class="col-4 second"><?php echo $_POST["zip"]; ?><br></div>
  </div>


  <div class="row">
    <div class="col-4 first">Cellphones </div>
   <div class="col-4 second"><?php echo $_POST["cellphones"]; ?><br></div>
  </div>

   <div class="row">
    <div class="col-4 first">Homephones </div>
   <div class="col-4 second"><?php echo $_POST["homephones"]; ?><br></div>
  </div>

   <div class="row">
    <div class="col-4 first">employer name </div>
   <div class="col-4 second"><?php echo $_POST["employername"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Mobilesphones </div>
   <div class="col-4 second"><?php echo $_POST["mobilesphones"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Employer Email </div>
   <div class="col-4 second"><?php echo $_POST["employeremail"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Other Conditions </div>
   <div class="col-4 second"><?php echo $_POST["aname"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Medications are you presently taking </div>
   <div class="col-4 second"><?php echo $_POST["bname"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Name of family doctor </div>
   <div class="col-4 second"><?php echo $_POST["cname"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">List any allergies to medication </div>
   <div class="col-4 second"><?php echo $_POST["dname"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Date of Last exam </div>
   <div class="col-4 second"><?php echo $_POST["ename"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Family history of eye disorders </div>
   <div class="col-4 second"><?php echo $_POST["fname"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-4 first">Primary Insurance </div>
   <div class="col-4 first">Secondary Insurance</div>
  </div>

  <div class="row">
    <div class="col-2 first">Insurance Name </div>
    <div class="col-2 second"><?php echo $_POST["insurancename"]; ?><br></div>

    <div class="col-2 first">Insurance Name  </div>
   <div class="col-2 second"><?php echo $_POST["insurancename2"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-2 first">Employer </div>
    <div class="col-2 second"><?php echo $_POST["Employer1"]; ?><br></div>
  
    <div class="col-2 first">Employer </div>
   <div class="col-2 second"><?php echo $_POST["Employer2"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-2 first">Insured Name </div>
   <div class="col-2 second"><?php echo $_POST["insuredname"]; ?><br></div>

    <div class="col-2 first">Insured's Name </div>
   <div class="col-2 second"><?php echo $_POST["insuredname1"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-2 first">Birthdate </div>
   <div class="col-2 second"><?php echo $_POST["Birthdate1"]; ?><br></div>
  
  
    <div class="col-2 first">Birthdate</div>
   <div class="col-2 second"><?php echo $_POST["Birthdate2"]; ?><br></div>
  </div>

  <div class="row">
    <div class="col-2 first">Insured SS </div>
   <div class="col-2 second"><?php echo $_POST["insuredss"]; ?><br></div>

    <div class="col-2 first">Insured SS</div>
   <div class="col-2 second"><?php echo $_POST["insuredss2"]; ?><br></div>
  </div>

</div> -->

</div>
</body>
</html> 
</form>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
  <script src="assignmentne.js"></script>   
</body>
</html>


