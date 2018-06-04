@include ('header1');
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: grey;
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
    margin: 5px 0 22px 0;
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

</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Add/Edit User</h1>
    <!-- <p>Please fill in this form to create an account.</p> -->
    <hr>
    <div class="container">
  <div class="row">
    <div class="col-sm-6 error_down">

    <label for="Name"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="First Name" required>
</div>
    <div class="col-sm-6">
    <label for="Name"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="Last Name" required>
</div>

<div class="col-sm-6">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    </div>
    <div class="col-sm-6">
    <label for="psw"><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="psw" required>
    </div>
    


<div class="col-sm-6">
     <label for="Name"><b>User Name</b></label>
    <input type="text" placeholder="User Name" name="User Name" required>  
    </div>
<div class="col-sm-6">
    <label for="psw"><b> Password</b></label>
    <input type="password" placeholder=" Password" name="psw" required>
    </div>

    <div class="col-sm-6">
    <label for="role" style="padding-bottom: 8px;"><b>Role</b></label>
      <select class="custom-select select" >
    <option selected>Choose...</option>
    <option value="1">Active</option>
    <option value="2">InActive</option></select>
    </div>
    <div class="col-sm-6">
    <label for="note"><b>Note</b></label>
    <input type="text" placeholder=" Note" name="note" required>
    </div>

 <div class="col-sm-6">
    <label for="status"> <b>Status</b></label>
      <select class="custom-select select">
    <option selected>Choose...</option>
    <option value="1">Active</option>
    <option value="2">InActive</option></select>
    </div>
    </div></div>
    <hr>

    <div class="container">
  <div class="button_move">
  <div class=" mx-auto">
  <button type="button" class="btn btn-primary">Save</button>
  <button type="button" class="btn btn-info">Cancel</button>
  </div>

   
</div></div>
  
    </div>
  </div>
</form>

</body>
</html>
