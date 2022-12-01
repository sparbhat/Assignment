function Check() {
  console.log("check is worked")
  if (document.getElementById("roweight").checked){
      document.getElementById('ifYes').style.visibility = 'visible';
  }
  else 
   document.getElementById('ifYes').style.visibility = 'hidden';
}


  $(document).ready(function() {
    $("#submit-button").click(function(){
        if($('input[type=radio][name=inlineRadioOptions]:checked').length == 0)
        {
           alert("Please select atleast one Title");
        }     else if ($('input[type=radio][name=inlineRadioOptions1]:checked').length == 0){
          alert("plese select Marital status")
        }else if ($('input[type=radio][name=inlineRadioOptions3]:checked').length == 0){
          alert("plese select any option")
        }
      })
    jQuery.validator.addMethod("regex", function(value, element, param) {return value.match(new RegExp("^" + param + "$")); });
    var ALPHA_REGEX = "[a-zA-Z]*";
    
    $("#alldata").validate({
      rules: {
        Birthdate :{
         required : true
        },
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
          minlength:5,
          digits : true
        },
        ename:{
        required : true
        },
        occupation:{
          regex: ALPHA_REGEX,
          required : true,
          minlength:5
        },
        cellphones:{
          required : true,
          minlength:10,
          digits: true
        },
        cell:{
          required : true,
          minlength:10,
          digits: true,
       
        },
        homephones:{
          required : true,
          minlength:10,
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
          minlength:10,
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

        
       
      },
      messages : {
        Birthdate :{
          required : "please fill your birthdate "
         },
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
          required: "Please enter social security",
          min: "Field should be at least 5 characters"
        },
        city:{
          regex : "City should be only in letters",
          required: "Please enter city name",
          min: "city should be at least 5 characters",
        },
        state:{
          regex : "State should be only in letters",
          required: "Please enter state name",
          min: "state should be at least 5 characters",
        },
        parent:{
          regex : "Parent should be only in letters",
          required: "Please enter parent name",
          min: "Parent name should be at least 5 characters",
      },
        referredby:{
          regex : "Numbers not allowed",
        required: "Field should not be empty",
        min: "should be at least 5 characters",
      },
         zip:{  
          required: "Please enter zip name",
          min: "zip should be at least 6 characters",
          digits : "Only Digits allowed in zip"
         },
         occupation:{  
          regex : "occupation should be only in letters",
          required: "Please enter occupation name",
          min: " should be at least 5 characters",
         },
         cellphones:{  
          required: "Please enter cellphone number",
          min: "should be at least 10 characters",
          digits : " Please enter digits only"
         },
         cell:{  
          required: "Please enter cell number",
          digits : " Please enter digits only",
          min: "should be at least 10 characters",
          
         },
         homephones:{  
          required: "Home Phones is required Field",
          min: " should be at least 10 characters",
          digits : " Please enter digits only"
         },
         employername:{  
          regex : "Employer name Field is required",
          required: "Please enter city name",
          min: " should be at least 5 characters",
         },
         mobilesphones:{  
          required: "mobiles phones Field is required",
          min: " should be at least 10 characters",
          digits : " Please enter digits only",
         },
         employeremail:{  
          required: "Employer email Field is required",
          min: "should be at least 10 characters",
          email: "Please fill proper email format"
         },
         aname:{
          regex : "digits not allowed",
          required:  "Field is required",
          min: "should be at least 5 characters",
         },
         bname:{
          regex : "digits not allowed",
          required: "Field is required",
          min: " should be at least 5 characters",
         },
         cname:{
          regex : "digits not allowed",
          required: "Field is required",
          min: " should be at least 5 characters",
         },
         dname:{
          regex : "digits not allowed",
          required: "Field is required",
          min: "should be at least 5 characters",
         },
         ename:{
          required: "Field is required",
         },
         fname:{
          regex : "digits not allowed",
          required: "Field is required",
          min: "should be at least 5 characters",
         },
         insurancename:{
          regex : "digits not allowed",
          required: "Field is required",
          min: "should be at least 5 characters",
         },
        
         insurancename2:{
          regex : "digits not allowed",
          required: "THis Field is required",
          min: "should be at least 5 characters",
         },
        Employer1:{
          regex : "digits not allowed",
          required: "This Field is required",
          min: "should be at least 5 characters",
         },
      Employer2:{
        regex : "digits not allowed",
        required: "This Field is required",
      min: " should be at least 5 characters",
    },
      insuredname:{regex : "digits not allowed",
        required: "This Field is required",
      min: " should be at least 5 characters",
    },
    insuredname1:{
      regex : "digits not allowed",
      required: "This Field is required",
    min: "should be at least 5 characters",
    },
    Birthdate1:{
      regex : "digits not allowed",
      required: "This Field is required",
        min: " should be at least 5 characters",
    },
    Birthdate2:{
      regex : "digits not allowed",
      required: "This Field is required",
        min: " should be at least 5 characters",
    },
    insuredss:{
      regex : "digits not allowed",
      required: "This Field is required",
        min: "should be at least 5 characters",
    },
    insuredss2:{
      regex : "digits not allowed",
      required: "This Field is required",
        min: "should be at least 5 characters",
    },
  },
  submitHandler: function(form){
          form.submit();
        }
})

});
