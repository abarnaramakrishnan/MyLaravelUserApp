@include ('header1');
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

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


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: right;
  /* align: center; */
  width: 10%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 50%; 
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 

.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
    
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
    
}

.save_button_move{
    width: 100px;
}
.cancel_button_move{
    width: 100px;
}
.button_move{
    padding-left: 190px;
}

    </style>


<h2>Modal Signup Form</h2>

<button onclick="document.getElementById('modelclose').style.display='block'" style="width:auto;">Sign Up</button>

<div id="modelclose" class="modal">
  <span onclick="document.getElementById('modelclose').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
     
      <hr>
      <label for="Name"><b>ROLE NAME</b></label>
      <input type="text" placeholder="Enter Name" name="email" required>
      
      <label for="Description"><b>ROLE DESCRIPTION</b></label>
      <!-- <input type="text" placeholder="Enter Roll Description" name="Enter Roll Description" required> -->
      <textarea class="form-control"  placeholder="Enter Roll Description" rows="3" id="comment" required></textarea><br>

      <label for="status"><b>STATUS</b></label>
      <!-- <input type="text" placeholder="Status" name="Status" required> -->
      <select class="custom-select" id="inputGroupSelect04">
    <option selected>Choose...</option>
    <option value="1">Active</option>
    <option value="2">InActive</option>
    
  </select>
      <br><br>
      
<hr>
    
<div class="container">
  <div class="">
  <div class=" mx-auto ">
  <button type="button" class="btn btn-primary save_button_move">Save</button>
  <button type="button" class="btn btn-info cancel_button_move">Cancel</button>
  </div>
   
</div></div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('modelclose');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
    