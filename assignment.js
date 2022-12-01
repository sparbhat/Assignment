function Check() {
  console.log("check is worked")
  if (document.getElementById("roweight").checked){
      document.getElementById('ifYes').style.visibility = 'visible';
  }
  else 
   document.getElementById('ifYes').style.visibility = 'hidden';
}
  // var name = document.getElementById("textname").value;
  $(document).ready(function() {
  });  
/*    
      // $("#submit-button").click(function() {   
        
      //   $("#alldata").validate();
          
      // });

      $("#alldata").validate();

      
      $("#alldata").validate({
        rules: {
          name : {
            regex: ALPHA_REGEX,
            required: true,
            minlength: 5,
          
          },
          messages : {
            name: {
              regex : "Name should be only in letters",
              required: "Please enter your name",
              minlength: "Name should be at least 5 characters"
            },
          }
        
        }
      });

    }); 

        
       /* if($('input[type=radio][name=inlineRadioOptions]:checked').length == 0)
        {
           alert("Please select atleast one Title");
        }     else if ($('input[type=radio][name=inlineRadioOptions1]:checked').length == 0){
          alert("plese select Marital status")
        }else if ($('input[type=radio][name=inlineRadioOptions3]:checked').length == 0){
          alert("plese select any option")
        }*/

  

    //jQuery.validator.addMethod("regex", function(value, element, param) {return value.match(new RegExp("^" + param + "$")); });
    //var ALPHA_REGEX = "[a-zA-Z]*";
   /* var ALPHA_REGEX = "";
    $("#alldata").validate({
      rules: {
        name : {
          regex: ALPHA_REGEX,
          required: true,
          minlength: 5,
        
        },
        socialsecurity:{
          regex: ALPHA_REGEX,
          required: true,
          minlength:5
        },
        address: {
          required: true,
          minlength: 5
        },
        city: {
          regex: ALPHA_REGEX,
          required: true,
          minlength: 5,
        },
        parent:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        state:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        referredby:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        zip:{
          required : true,
          minlength:5
        },
        occupation:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        cellphones:{
          required : true,
          minlength:5,
          digits: true
        },
        cell:{
          required : true,
          minlength:5,
          digits: true,
          range: [10, 10]
        },
        homephones:{
          required : true,
          minlength:5,
          digits: true
        },
        employername:{
          required : true,
          minlength:5
        },
        mobilesphones:{
          required : true,
          minlength:5,
          digits: true
        },
        employeremail:{
          required : true,
          minlength:5,
          email: true
        },
        aname:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        bname:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        cname:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        dname:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        ename:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        fname:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        insurancename:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        insurancename2:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        Employer1:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        Employer2:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        insuredname:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        insuredname1:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        Birthdate1:{
          
          required : true,
          minlength:5
        },
        Birthdate2:{
          required : true,
          minlength:5
        },
        insuredss:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        insuredss2:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },

        submitHandler: function(form){
          form.submit();
        }
       
      },
      messages : {
        name: {
          regex : "Name should be only in letters",
          required: "Please enter your name",
          minlength: "Name should be at least 5 characters"
        },
        address: {
          required: "Please enter your address",
          min: "Address should be at least 5 characters long"
        },
        socialsecurity:{
          regex : "Social Security should be only in letters",
          required: "This field is required",
          min: "Field should be at least 5 characters"
        },
        city:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
        },
        state:{
          regex : "Name should be only in letters",
          required: "Please enter state name",
          min: "state should be at least 5 characters",
        },
        parent:{
          regex : "Name should be only in letters",
          required: "Please enter parent name",
          min: "Parent name should be at least 5 characters",
      },
        referredby:{
          regex : "Name should be only in letters",
        required: "Field should not be empty",
        min: "Field should be at least 5 characters",
      },
         zip:{  
          required: "Please enter zip name",
          min: "zip should be at least 6 characters",
         },
         occupation:{  
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         cellphones:{  
          required: "Please enter city name",
          min: "city should be at least 5 characters",
          digits : " Please enter digits only"
         },
         cell:{  
          required: "Please enter city name",
          digits : " Please enter digits only",
          min: "city should be at least 5 characters",
          range : " phone number should be of 10 digits only"
         },
         homephones:{  
          required: "Please enter city name",
          min: "city should be at least 5 characters",
          digits : " Please enter digits only"
         },
         employername:{  
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         mobilesphones:{  
          required: "Please enter city name",
          min: "city should be at least 5 characters",
          digits : " Please enter digits only",
         },
         employeremail:{  
          required: "Please enter city name",
          min: "city should be at least 5 characters",
          email: "Please fill proper email format"
         },
         aname:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         bname:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         cname:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         dname:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         ename:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         fname:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         insurancename:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
         insurancename2:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
        Employer1:{
          regex : "Name should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
         },
      Employer2:{
        regex : "Name should be only in letters",
        required: "Please enter city name",
      min: "city should be at least 5 characters",
    },
      insuredname:{regex : "Name should be only in letters",
        required: "Please enter city name",
      min: "city should be at least 5 characters",
    },
      insuredname1:{
        regex : "Name should be only in letters",
        required: "Please enter city name",
      min: "city should be at least 5 characters",
    },
      Birthdate1:{
        regex : "Name should be only in letters",
        required: "Please enter city name",
          min: "city should be at least 5 characters",
      },
      Birthdate2:{
        regex : "Name should be only in letters",
        required: "Please enter city name",
          min: "city should be at least 5 characters",
      },
      insuredss:{
        regex : "Name should be only in letters",
        required: "Please enter city name",
          min: "city should be at least 5 characters",
      },
      insuredss2:{
        regex : "Name should be only in letters",
        required: "Please enter city name",
          min: "city should be at least 5 characters",
      },
      }})})

 



     

  //allRadiobuttons
    // var radiobutton1 = document.getElementById("radiobutton1");
    // var radiobutton2 = document.getElementById("radiobutton2");
    // var radiobutton3 = document.getElementById("radiobutton3");
    // var radiobutton4 = document.getElementById("radiobutton4");
    // var radiobutton5 = document.getElementById("radiobutton5");
    // var radiobutton6 = document.getElementById("radiobutton6");
    // var radiobutton7 = document.getElementById("radiobutton7");
    // var radiobutton8 = document.getElementById("radiobutton8");
    // var rowfour = document.getElementById("rowfour");
    // var rowfive = document.getElementById("rowfive");
    // var roweight = document.getElementById("roweight");
    // var rownine = document.getElementById("rownine");
    
    // //radiobuttonend
    // var name = document.getElementById("textname").value;
    // var address = document.getElementById("address").value;
    // var city = document.getElementById("city").value;
    // var state = document.getElementById("state").value;
    // var zip = document.getElementById("zip").value;
    // var cellphones = document.getElementById("cellphones").value;
    // var homephones = document.getElementById("homephones").value;
    // var mobilesphones = document.getElementById("mobilesphones").value;
    // var socialsecurity = document.getElementById("socialsecurity").value;
    // var Birthdate = document.getElementById("Birthdate").value;
    // var parent = document.getElementById("parent").value;
    // var referredby = document.getElementById("referredby").value;
    // var occupation = document.getElementById("occupation").value;
    // var cell = document.getElementById("cell").value;
    // var employer = document.getElementById("employer").value;
    // var employeremail = document.getElementById("employeremail").value;
    // //Section - othercondition
    // var rowone = document.getElementById("rowone").value;
    // var rowtwo = document.getElementById("rowtwo").value;
    // var rowthree = document.getElementById("rowthree").value;
    // var rowsix = document.getElementById("rowsix").value;
    // var rowseven = document.getElementById("rowseven").value;
    // var rowten = document.getElementById("rowten").value;
    // var inlineRadio1 = document.getElementsByClassName("inlineRadio1").checked;
    // var ifYes = document.getElementById("ifYes").value

    // var details1 = document.getElementById("Detail1").value;
    // var details2 = document.getElementById("Detail2").value;
    // var details3 = document.getElementById("Detail3").value;
    // var details4 = document.getElementById("Detail4").value;
    // var details5 = document.getElementById("Detail5").value;
    // var details6 = document.getElementById("Detail6").value;
    // var details7 = document.getElementById("Detail7").value;
    // var details8 = document.getElementById("Detail8").value;
    // var details9 = document.getElementById("Detail9").value;
    // var details10 = document.getElementById("Detail10").value;
    

    // var emailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    // var firstname = /^[a-zA-Z\s]+$/;
    // var cityname = /^[a-zA-Z\s]+$/;
    // var statename = /^[a-zA-Z\s]+$/;
    
    //   if(name == "" || address == "" || city == "" || state == "" || zip == "" || cellphones == "" || homephones == "" || mobilesphones == "" || socialsecurity == "" || Birthdate == "" || 
    //   parent == "" || referredby == "" || occupation == "" || cell == "" || employer == "" || employeremail == "" || rowone == "" || rowtwo == "" || rowthree == "" || rowfour.checked ==false && rowfive.checked==false && roweight.checked==false && rownine.checked==false|| 
    //   rowsix == "" || rowseven == ""  || rowten == "" || inlineRadio1 == "" || details1 == "" || details2 == "" || details3 == "" || details4 == "" || details5 == "" || details6 == "" || details7 == "" || details8 == "" || details9 == "" || details10 == ""|| (radiobutton1.checked==false && radiobutton2.checked==false && radiobutton3.checked==false && radiobutton4.checked==false && radiobutton5.checked==false) || (radiobutton6.checked==false && radiobutton7.checked==false && radiobutton8.checked==false) || 
    //   (rowfour.checked==false && rowfive.checked==false) || (roweight.checked==false && rownine.checked==false)
    //   ){
    // alert("Please fill up the all values")
    //   }
    //   else if( cellphones.length != 10 || homephones.length != 10 || mobilesphones.length != 10 || cell.length != 10 || isNaN(cellphones) || isNaN(mobilesphones) || isNaN(homephones) || isNaN(cell))
    //     {
    //     alert("Contacts columns should be 10 digits & only number allowed");
    //     }

    //   else if (!employeremail.match(emailformat))
    //   {
    //   alert("please fill mail in proper format")
    //   }

    //   else if (zip.length != 6 || isNaN(zip))
    //   {
    //     alert("Zip code should be 6 number digits")
    //     }  

    //     else if (!name.match(firstname) || name<20 )
    //     {
    //       alert("Only characters allowed in name")
    //       } 

    //       else if (!city.match(cityname))
    //     {
    //       alert("Only characters allowed in City")
    //       } 

    //       else if (!state.match(statename) || state<25)
    //     {
    //       alert("Only characters allowed in state")
    //       } 
          

    //   else{

  
      /*------1st Section------*/

      






























      
//             var myname = document.getElementById("textname").value;
//             document.getElementById("newname").innerText = myname;
       
//             var myaddress = document.getElementById("address").value;
//             document.getElementById("newaddress").innerText = myaddress;
       
//             var mycity = document.getElementById("city").value;
//             document.getElementById("newstate").innerText = mycity;
            
//             var mystate = document.getElementById("state").value;
//             document.getElementById("newcity").innerText = mystate;
       
//             var myzip = document.getElementById("zip").value;
//             document.getElementById("newzip").innerText = myzip;
      
//             var mycellphones = document.getElementById("cellphones").value;
//             document.getElementById("newcellphones").innerText = mycellphones;
      
//             var myhomephones = document.getElementById("homephones").value;
//             document.getElementById("newhomephones").innerText = myhomephones;
      
//             var mymobilesphones = document.getElementById("mobilesphones").value;
//             document.getElementById("newmobilesphones").innerText = mymobilesphones
      
//             var mysocialsecurity = document.getElementById("socialsecurity").value;
//             document.getElementById("newsocialsecurity").innerText = mysocialsecurity;
      
//             var mybirthdate = document.getElementById("Birthdate").value;
//             document.getElementById("newbirthday").innerText = mybirthdate;
            
//             var myparent = document.getElementById("parent").value;
//             document.getElementById("newparent").innerText = myparent;
      
//             var myrefferedby = document.getElementById("referredby").value;
//             document.getElementById("newreffered").innerText = myrefferedby;
      
//             var myoccupation = document.getElementById("occupation").value;
//             document.getElementById("newoccupation").innerText = myoccupation;
      
//             var mycell = document.getElementById("cell").value;
//             document.getElementById("newcell").innerText = mycell;
      
//             var myemployer = document.getElementById("employer").value;
//             document.getElementById("newemployer").innerText = myemployer;
           
//             var myemployeremail = document.getElementById("employeremail").value;
//             document.getElementById("newemployeremail").innerText = myemployeremail;
      
//             var myrowone = document.getElementById("rowone").value;
//             document.getElementById("one").innerText = myrowone;

//             var myrowtwo = document.getElementById("rowtwo").value;
//             document.getElementById("two").innerText = myrowtwo;

//             var myrowthree = document.getElementById("rowthree").value;
//             document.getElementById("three").innerText = myrowthree;

//             var allergies1 = document.getElementById("rowsix").value;
//             document.getElementById("allergies").innerText = allergies1;
            
//             var lastexam1 = document.getElementById("rowseven").value;
//             document.getElementById("lastexam").innerText = lastexam1;

//             var rowten1 = document.getElementById("rowten").value;
//             document.getElementById("eyedisorder").innerText = rowten1;

//             var primaryinsurance1 = document.getElementById("Detail1").value;
//             document.getElementById("primaryinsurance").innerText = primaryinsurance1;

//             var primaryemployer1 = document.getElementById("Detail3").value;
//             document.getElementById("primaryemployer").innerText = primaryemployer1;

//             var PrimaryName1 = document.getElementById("Detail5").value;
//             document.getElementById("Primaryname").innerText = PrimaryName1;

//             var Primarybirthdate1= document.getElementById("Detail7").value;
//             document.getElementById("Birthdate").innerText = Primarybirthdate1;

//             var Primaryinsured1= document.getElementById("Detail9").value;
//             document.getElementById("Insuredss").innerText = Primaryinsured1;

//             var secondaryinsurance1 = document.getElementById("Detail2").value;
//             document.getElementById("secondaryinsurance").innerText = secondaryinsurance1;

//             var secondaryemployer1 = document.getElementById("Detail4").value;
//             document.getElementById("secondaryemployer").innerText = secondaryemployer1;

//             var secondaryName1 = document.getElementById("Detail6").value;
//             document.getElementById("secondaryname").innerText = secondaryName1;

//             var secondarybirthdate1= document.getElementById("Detail8").value;
//             document.getElementById("secondaryBirthdate").innerText = secondarybirthdate1;

//             var secondaryinsured1= document.getElementById("Detail10").value;
//             document.getElementById("secondaryInsuredss").innerText = secondaryinsured1;

//             var radiofirst= document.getElementById("radiobutton1").value;
//             document.getElementById("newTitle").innerText = radiofirst;
            
//             var radiosecond= document.getElementById("radiobutton2").value;
//             document.getElementById("newTitle").innerText = radiosecond;

//             /*var radiothird= document.getElementById("radiobutton3").value;
//             document.getElementById("newTitle").innerText = radiothird;

//             var radiofourth= document.getElementById("radiobutton4").value;
//             document.getElementById("newTitle").innerText = radiofourth;

//             var radiofive= document.getElementById("radiobutton5").value;
//             document.getElementById("newTitle").innerText = radiofive;
// */
//             var radiosix= document.getElementById("radiobutton6").value;
//             document.getElementById("newmaritalstatus").innerText = radiosix;

//             var radioseven= document.getElementById("radiobutton7").value;
//             document.getElementById("newmaritalstatus").innerText = radioseven;

//             var radioeight= document.getElementById("radiobutton8").value;
//             document.getElementById("newmaritalstatus").innerText = radioeight;


 

//             var hideform = document.getElementById("alldata");
//             hideform.style.display= "none";
//             var alldetails = document.getElementById("newdata");
//             alldetails.style.display = "block";
//             alert("success")}
//            }
           
//         function returnform(){
//         var hideform = document.getElementById("alldata");
//         hideform.style.display= "block";
//         var alldetails = document.getElementById("newdata");
//         alldetails.style.display = "none";
        
//       }