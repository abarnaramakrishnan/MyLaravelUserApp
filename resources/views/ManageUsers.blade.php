@include ('header1'); 

<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    /* margin: 5px 0 22px 0; */
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}


.signin {
    background-color: #f1f1f1;
    text-align: center;
}

.select{
    height: 49px;
    background: #f1f1f1;

}
.button_move{
    padding-left: 500px;
}
.error_down{
    padding-bottom: 20px;
}
</style>
<div class="col-md-12">
<div class="table-responsive">          
  <table class="table table-bordered table-hover table_style">
    <thead class="table_headline">
    <div class="container">
    <form action="/ManageUsers/" method="POST"  method="POST"  id="formId" name="formId">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
    <input type = "hidden" name = "customerId" value = "">

    <div class="row"> 
    <div class="col-md-10 manageroles_move">
        <h4>MANAGE USERS</h4></div> 
        <div class="col-md-2 ">  
        <button onclick="document.getElementById('modelclose').style.display='block'" type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeShoes">+ Add User</button>
        
        </div></div></div>
<br>


<div id="modelclose" class="modal">
<span onclick="document.getElementById('modelclose').style.display='none'" class="close" title="Close Modal">&times;</span>
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<h1>Add/Edit User</h1><hr>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="container">
  <div class="row">
    <div class="col-sm-6 error_down">

    <label for="Name"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="first_name" id="first_name" >
    <span id="firstnameErroId" style="color: red;font-weight: bold;" ></span>  
</div>
    <div class="col-sm-6 error_down">
    <label for="Name"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="last_name" id="last_name">
    <span id="lastnameErroId" style="color: red;font-weight: bold;" ></span> 
</div>

<div class="col-sm-6 error_down">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  id="email">
    <span id="emailErroId" style="color: red;font-weight: bold;" ></span>
    </div>
    <div class="col-sm-6 error_down">
    <label for="psw"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="phone_no" id="phone_no">
    <span id="phonenumberErroId" style="color: red;font-weight: bold;" ></span>
    </div>
    


<div class="col-sm-6 error_down">
     <label for="Name"><b>User Name</b></label>
    <input type="text" placeholder="User Name" name="user_name" id="user_name">  
    <span id="usernameErroId" style="color: red;font-weight: bold;" ></span>
    </div>
<div class="col-sm-6 error_down">
    <label for="psw"><b> Password</b></label>
    <input type="password" placeholder=" Password" name="password" id="password">
    <span id="passwordErroId" style="color: red;font-weight: bold;" ></span>
    </div>

    <div class="col-sm-6 error_down" >
    <label for="role" ><b>Role</b></label>
    
    <select class="custom-select select"  name="role" id="role">
    <option value="" selected>Choose...</option>
    <option value="1">Active</option>
    <option value="2">InActive</option></select>
    <span id="roleErroId" style="color: red;font-weight: bold;" ></span>
   
    </div>
    

    <div class="col-sm-6 error_down">
    <label for="note"><b>Note</b></label>
    <input type="text" placeholder=" Note" name="note" id="note">
    <span id="noteErroId" style="color: red;font-weight: bold;" ></span>
    </div>

 <div class="col-sm-6 error_down">
    <label for="status"> <b>Status</b></label>
      <select class="custom-select select"  name="status" id="status">
    <option value="" selected>Choose...</option>
    <option value="1">Active</option>
    <option value="2">InActive</option></select>
    <span id="statusErroId" style="color: red;font-weight: bold;" ></span>
    </div>
    </div></div>
    <hr>

  <div class="container">
  <div class="button_move">
  <div class=" mx-auto">
  <button type="button" name="submit" id="submit" value="submit"  class="btn btn-primary" onclick="great();">Save</button>
  <button type="button" class="btn btn-info"  onclick="cancelform();">Cancel</button>
  </div>

   
</div></div>
  
    </div>
  </div>


  












         <tr>
        <th class="myclass"><span class="faa-burst">#</span></th>
        <th class="table_style"><span class="glyphicon glyphicon-cog"></span>Name</th>
        <th class="table_style"> <span class="glyphicon glyphicon-shopping-cart"></span>User Name</th>
        <th class="table_style"><i class="fa fa-rupee"></i>Phone</th>
        <th class="table_style"> <span class="glyphicon glyphicon-shopping-cart"></span>Role</th>
        <th></th>
    
        <!-- <td><button type="button" class="btn btn-primary" id="div1">
      <i class="icon-check2"></i> EDIT
                        </button></td> -->
  
       
      </tr>
    </thead>
    </tbody>
  </table>
  </div>

  
  
  
<!-- </div> -->


</div>
</div>

<script>

var modal = document.getElementById('modelclose');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



function cancelform() {
  location.reload();
}





 function great() {
      
      var flag=true;
      var firstnameValue = document.getElementById("first_name").value;
      if(null == firstnameValue || firstnameValue == ""){
        
        document.getElementById("firstnameErroId").innerHTML = " Please Enter First Name.";
        flag = false;
      }else{
        document.getElementById("firstnameErroId").innerHTML = "";
        
      }

      var lastnameValue = document.getElementById("last_name").value;
      if(null == lastnameValue || lastnameValue == ""){

        
    document.getElementById("lastnameErroId").innerHTML = " Please Enter Last Name.";
        flag = false;
      }else{
        document.getElementById("lastnameErroId").innerHTML = "";
        
      }

       var emailValue = document.getElementById("email").value;
      if(null == emailValue || emailValue == ""){

    document.getElementById("emailErroId").innerHTML = " Please Enter Email.";
        flag = false;
      }else{
        document.getElementById("emailErroId").innerHTML = "";
        
      }

       var phonenumberValue = document.getElementById("phone_no").value;
      if(null == phonenumberValue || phonenumberValue == ""){

    document.getElementById("phonenumberErroId").innerHTML = " Please Enter Phone Number.";
        flag = false;
      }else{
        document.getElementById("phonenumberErroId").innerHTML = "";
        
      }

      var usernameValue = document.getElementById("user_name").value;
      if(null == usernameValue || usernameValue == ""){

    document.getElementById("usernameErroId").innerHTML = " Please Enter User Number.";
        flag = false;
      }else{
        document.getElementById("usernameErroId").innerHTML = "";
        
      }

      var passwordValue = document.getElementById("password").value;
      if(null == passwordValue || passwordValue == ""){

    document.getElementById("passwordErroId").innerHTML = " Please Enter Password.";
        flag = false;
      }else{
        document.getElementById("passwordErroId").innerHTML = "";
        
      }

       var roleValue = document.getElementById("role").value;
      if(null == roleValue || roleValue == ""){

    document.getElementById("roleErroId").innerHTML = " Please Choose Role.";
        flag = false;
      }else{
        document.getElementById("roleErroId").innerHTML = "";
        
      }

       var noteValue = document.getElementById("note").value;
      if(null == noteValue || noteValue == ""){

    document.getElementById("noteErroId").innerHTML = " Please Enter Note.";
        flag = false;
      }else{
        document.getElementById("noteErroId").innerHTML = "";
        
      }

      var statusValue = document.getElementById("status").value;
      if(null == statusValue || statusValue == ""){

    document.getElementById("statusErroId").innerHTML = " Please Choose Status.";
        flag = false;
      }else{
        document.getElementById("statusErroId").innerHTML = "";
        
      }


  

     if(flag){
			$('#formId').submit();

				return true;
			}else{
				return false;
			}
			  return false;
        
    }

</script>

</html>