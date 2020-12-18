@extends('master')
@section('content')

    <script>

   function signup()
   {
     var bx=document.getElementById("bx");
        bx.style.left="50%";

      /*x=document.getElementById("signi").style.color="black";
     if(x==true)
      {
       x=document.getElementById("signi").style.color="green";

      }
      else{
       x=document.getElementById("signi").style.color="#fff105";
      }*/

      y= document.getElementById("F1").style.display="block";
l= document.getElementById("F2");

if(y===true)
{
 document.getElementById("F2").style.display="block";
  document.getElementById("F1").style.display="none";
}
else{ 
 document.getElementById("F2").style.display="block";
 document.getElementById("F1").style.display="none";
 }
   
   
   }


   function login()
   {
     var kx=document.getElementById("bx");
     kx.style.left="5%";


     y= document.getElementById("F1").style.display="block";
l= document.getElementById("F2");

if(y===true)
{
 document.getElementById("F1").style.display="block";
  document.getElementById("F2").style.display="none";
}
else{ 
 document.getElementById("F1").style.display="block";
 document.getElementById("F2").style.display="none";
 }
   
   

   }
   </script>


<br>
<br>
 <div class="container-fluid">
   <div class="row mx-2">
  
     <div class="card  col-12 col-sm-6 col-md-6 col-lg-3 m-auto" style="box-shadow: 0 0 20px 6px #86C232;">
       <div class="card-body p-2">
         <div class="row font-weight-bold proper-of-login-and-signup">
           <div class="btn-bg-color" id="bx"></div>
       <div class="col same-property text-center" onclick=login() id="logi">Login</div>
       <div class="col same-property text-center"  onclick="signup()" id="signi">SignUp</div>
     </div>




   <br>


  <script>



 

function validateemailoflogin()
   {
  
      var status=true;
   
   var txt=document.getElementById("login_email");
    

  if(txt.value.length==0)
  {
     
       status=false;
       txt.style.border="1px solid red";
  }   
  else if(!txt.value.match())
  
  { 

   status=false;
       txt.style.border="1px solid red";
  }

  else
  {
      
       txt.style.border="1px solid green";

  }
 
 return status;

   
    
     
   }


function validatepassoflogin()
   {
  
      var status=true;
   
   var txt=document.getElementById("login_pass");
    

  if(txt.value.length==0)
  {
     
       status=false;
       txt.style.border="1px solid red";
  }   
  else if(!txt.value.match())
  
  { 

   status=false;
       txt.style.border="1px solid red";
  }

  else
  {
  
       txt.style.border="1px solid green";

  }
 
 return status;

   
    
     
   }
   function submitdataoflogin()
    {
     var status=true;
    
     if(validateemailoflogin()==false)
     {
       status=false;
     }
     
      if(validatepassoflogin()==false)
     {
       status=false;
     }
    return status;
 
    }
 
   
   
   </script>





   <form class="F1-bg" id="F1"  method="POST" action="/login/login.php" onsubmit="return submitdataoflogin()">
     <h3 class="text-center" style="color: #61892F;" >Login</h3>
     
     <div>
     <p class="bg-success text-white px-4 rounded"></p>
     
   </div>


<div class="form-group">

   <div class="col-auto">

 <label >Email address</label>
  <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-envelope"></i></div>
     </div>
 
 <input type="email" class="form-control"   placeholder="Enter email" name="lemail" id="login_email" maxlength="30" >

</div>
</div>
</div>

<div class="form-group">
 <div class="col-auto">
 <label >Password </label>
 <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-lock"></i></div>
     </div>
 <input type="password" class="form-control"  placeholder="Password" name="lpassword"  id="login_pass" maxlength="20">
</div>
</div>
</div>

<div class="form-check">
 <input type="checkbox" class="form-check-input" >
 <label class="form-check-label" >Check me out</label>
</div>
<button type="submit" class="btn btn-primary m-auto d-block" name="login">Submit</button>

<br>
<div class="text-center">-OR-

<br><small >login with</small>

<div><i class="fab fa-google-plus" style="color: red; font-size: 45px;" ></i>
&nbsp;&nbsp;
<i class="fab fa-facebook" style="color: #3b5998; font-size: 45px;" ></i>
</div>
</div>

<small class="Forgot" style="float: right"  onMouseOver="this.style.textDecoration='underline'"
     onMouseOut="this.style.textDecoration='none'" id="k89" ><a style="color: red;text-decoration:none;" href="forgot_pass.php">Forgot Passward</a></small>

</form>




<!--form2---------------------------------------form2------------------------------->




<script>



 

function validateuserofsignup()
   {
  
      var status=true;
   
   var txt=document.getElementById("singup_user");
    

  if(txt.value.length==0)
  {
     
       status=false;
       txt.style.border="1px solid red";
  }   
  else if(!txt.value.match())
  
  { 

   status=false;
       txt.style.border="1px solid red";
  }

  else
  {
  
       txt.style.border="1px solid green";

  }
 
 return status;

   
    
     
   }


function validateemailofsignup()
   {
  
      var status=true;
   
   var txt=document.getElementById("singup_email");
    

  if(txt.value.length==0)
  {
     
       status=false;
       txt.style.border="1px solid red";
       
  }   
  else if(!txt.value.match())
  
  { 

   status=false;
       txt.style.border="1px solid red";
  }

  else
  {
  
       txt.style.border="1px solid green";

  }
 
 return status;

   }
   
   
   function validatemobileofsignup()
   {
  
      var status=true;
   
   var txt=document.getElementById("singup_mobile");
    

  if(txt.value.length==0)
  {
     
       status=false;
       txt.style.border="1px solid red";
       
  }   
  else if(!txt.value.match())
  
  { 

   status=false;
       txt.style.border="1px solid red";
  }

  else
  {
  
       txt.style.border="1px solid green";

  }
 
 return status;

   }
   
    
   function validatepassofsignup()
   {
  
      var status=true;
   
   var txt=document.getElementById("signup_pass");
    

  if(txt.value.length==0)
  {
     
       status=false;
       txt.style.border="1px solid red";
        alert("minimum length sould be 8");
        
       
  }   
  else if(txt.value.length<8){
      status=false;
       txt.style.border="1px solid red";
        alert("minimum length of pass should be 8");
      
  }
  
  else if(!txt.value.match())
  
  { 

   status=false;
       txt.style.border="1px solid red";
  }

  else
  {
  
       txt.style.border="1px solid green";

  }
 
 return status;

   }
   
    function validatecpassofsignup()
    {
          var status=true;
       var txt1=document.getElementById("signup_pass");
       var txt=document.getElementById("signup_cpass");
       
       if(txt.value.length==0)
  {
     
       status=false;
       txt.style.border="1px solid red";
       
  }
  else if(txt.value!=txt1.value)
  {
      status=false;
      txt.style.border="1px solid red";
      alert("passward and confirm Passward not same");
  }
  else
  {
      txt.style.border="1px solid green";
  }
  return status;
      
      
  }
    
   
   
   function submitdataofsingup()
    {
     var status=true;
    
     if(validateuserofsignup()==false)
     {
       status=false;
     }
     
     if(validatemobileofsignup()==false)
     {
       status=false;
     }
     
      if(validateemailofsignup()==false)
     {
       status=false;
     }
     
      if(validatepassofsignup()==false)
     {
       status=false;
     }
     
     if(validatecpassofsignup()==false)
     {
       status=false;
     }
    return status;
 
    }
 
   
   
   </script>












<form class="F2-bg" id="F2" method="POST" action="/login/login.php" onsubmit="return submitdataofsingup()" >
<h3 class="text-center" style="color: #61892F;">Signup</h3>


 <div class="form-group">

 
 
      <div class="col-auto">

 <label >UserName</label>
  <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-user"></i></div>
     </div>
 
<input type="text" class="form-control"   placeholder="UsernName(Ex-Rahul745)"  name="user"   id="singup_user"  maxlength="20">

</div>
</div>

</div>



<div class="form-group">


   <div class="col-auto">

 <label >Email address</label>
  <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-envelope"></i></div>
     </div>
 
 <input type="email" class="form-control"   placeholder="Enter email"  name="email" id="singup_email" maxlength="30">
 <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
</div>
</div>
</div>

<div class="form-group">


   <div class="col-auto">

 <label >Mobile No</label>
  <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
     </div>
 
 <input type="text" class="form-control"   placeholder="Enter Mobile" id="singup_mobile" name="mobile" maxlength="10" >
 <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
</div>
</div>
</div>



<div class="form-group">


   <div class="col-auto">

 <label >Branch</label>
  <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-code-branch"></i></div>
     </div>
 
 <select class="form-control"  name="sbranch" required>
     <option disabled selected value> -- select an option -- </option>
<option>CIVIL ENGINEERING</option>
<option>COMPUTER SCIENCE & ENGINEERING</option>
<option>ELECTRONICS ENGINEERING</option>
 <option>MECHANICAL ENGINEERING (AUTOMOBILE)</option>
</select>
</div>
</div>
</div>











<div class="form-group">
 <div class="col-auto">
 <label >Password </label>
 <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-lock"></i></div>
     </div>
 <input type="password" class="form-control"  placeholder="Password" id="signup_pass" name="password" maxlength="20">
</div>
</div>
</div>


<div class="form-group">
 <div class="col-auto">
 <label > Retype Password </label>
 <div class="input-group mb-2">
     <div class="input-group-prepend">
       <div class="input-group-text"><i class="fas fa-lock"></i></div>
     </div>
 <input type="password" class="form-control"  placeholder="Password" id="signup_cpass" name="cpassword" maxlength="20">
  
</div>
</div>
</div>




<button type="submit" class="btn btn-primary m-auto d-block" name="submit1">Submit</button>


</form>

       </div>

       
       



     </div>

     
   </div>
  


 </div>
 @endsection('content')







