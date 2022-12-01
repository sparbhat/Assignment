
<link rel="stylesheet" href="assignment.css"> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 





    
  <?php
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
?>




    <div class="container" style=" margin-left: 25%">
<div class="row">
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
<br><br>
</div>
