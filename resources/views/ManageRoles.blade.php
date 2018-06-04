@include ('header1'); 
<!DOCTYPE html>
<html lang="en">
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


.cancelbtn, .signupbtn {
  float: right;
  /* align: center; */
  width: 10%;
}

.container {
    padding: 16px;
}

/* The Modal (background) */
/* .modal {
    display: none; 
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: #474e5d;
    padding-top: 50px;
} */

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    /* border: 1px solid #888; */
    width: 50%; 
}

/* Style the horizontal ruler */
hr {
    /* border: 1px solid #f1f1f1; */
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
 .manageroles_move{
    padding-top: 15px;
 }


 .modal-backdrop.show {
    opacity: 0;
}
.modal-content{
    width: 80%;
    height: 100%;
}

.error_msg{
  text-align: center;
  color: red;
}

.grid_button_width{
    width: 30%;
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    padding: 6px 12px;
}
.addrole_modelbutton{
    width: 80%;
}
.error_down{
    padding-bottom: 20px;
}

</style>


<!-- <body>

<div class="container">
  
</div>

</body> -->




<div class="col-md-12">
<div class="table-responsive">          
  <table class="table table-bordered table-hover table_style">
    <thead class="table_headline">
 
    <div class="container">
    <form action="/ManageRoles/" method="POST"  method="POST"  id="formId" name="formId">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
    <input type = "hidden" name = "customerId" value = ""> 
    <div class="row"> 
    <div class="col-md-10 manageroles_move">
        <h4>MANAGE ROLES</h4></div> 
        <div class="col-md-2 ">  
        <button onclick="document.getElementById('modelclose').style.display='block'" type="button" class="btn btn-primary addrole_modelbutton" data-toggle="modal" data-target="#largeShoes">+ Add Role</button>
        
        </div></div></div>

<div id="modelclose" class="modal">


<!-- <span onclick="document.getElementById('modelclose').style.display='none'" class="close" title="Close Modal">&times;</span> -->
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<h4>Add/Edit Roles</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" style="margin-right: -599px;">&times;</span>
</button>
</div>

<div class="modal-body ">
        <div><label><b>ROLE NAME</b></label></div>
       <div>
        <input type="text" name="rolename" id="rolename" placeholder="Enter Role" value="" >   
           <span id="rolenameErroId" style="color: red;font-weight: bold;" ></span>              
      </div>
    
       <div><label><b>ROLE DESCRIPTION</b></label></div>
       <div>
         <textarea class="form-control" name="description" id="description" placeholder="Enter Roll Description" rows="3" id="comment" required> </textarea>
     </div>

       <br>
      <!-- <textarea class="form-control"  placeholder="Enter Roll Description" rows="3" id="comment" required></textarea><br> -->
      <div><label><b>STATUS</b></label></div>
      <!-- <label for="status"><b>STATUS</b></label> -->
      <div>
      <select class="custom-select" name="status" id="status">
    <option value="" selected>Choose...</option>
    <option value="Active">Active</option>
    <option value="InActive">InActive</option>   
    <span id="statusErroId" style="color: red;font-weight: bold;"></span>    
  </select>
   
  </div>
      <br>
      
<hr>
    
<div class="container">
  <div class="">
  <div class=" mx-auto ">
  
  <button type="submit" name="submit" id="submit" value="submit"  class="btn btn-primary save_button_move" onclick="great();">Save</button>
  <button type="button" class="btn btn-info cancel_button_move" onclick="cancelform();">Cancel</button>
  </div>  
</div></div>
 </div>
</form>
</div>



        
        <div class="col-md-12">


      <tr>
        <th class="myclass"><span class="faa-burst">#</span></th>
        <th class="table_style"><span class="glyphicon glyphicon-cog"></span>&nbsp;Role Name</th>
        <th class="table_style"> <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Description</th>
        <th class="table_style"><i class="fa fa-rupee"></i>&nbsp;Status</th>
        <th></th>
     </tr>

 </thead>  
 
 <?php if($idss!= null){?>
<tbody class="table_body">
      <tr>
    @foreach ($idss  as $ids)
         <td>{{$ids->id}}</td> 
         <td>{{$ids->role_name}}</td> 
          <td>{{$ids->description}}</td> 
           <td>{{$ids->status}}</td>

          <td><button type="button" class="btn btn-primary grid_button_width" id="div1" onClick="ShowManageRoles({{$ids->id}})">
      <i class="icon-check2"></i> EDIT
                        </button></td>
              </tr>
              @endforeach
     
       </tbody>
    </table>

    <?php }
    else {?>
   <tbody>
     <tr>
       <td class="error_msg" colspan="6"><b> No Results Found </b></td>
     </tr>
   </tbody>
   <?php }?>
 
 
 
 
 
 </div>
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


function ShowManageRoles(id){ 
 $.get('ManageRoles/' + id,
          function (data) {
            // cancel1();
            // alert ("data")
            console.log(data);
           $('#customerId').val(data[0].id);
            $('#role_name').val(data[0].role_name);
              $('#description').val(data[0].description);
             $('#status').val(data[0].status);
     });  

 }

//  function great() {
      
//       var flag=true;
//       var rolenameValue = document.getElementById("rolename").value;
//       if(null == rolenameValue || rolenameValue == ""){
        
//         document.getElementById("rolenameErroId").innerHTML = " Please Enter Role Name.";
//         flag = false;
//       }else{
//         document.getElementById("rolenameErroId").innerHTML = "";
        
//       }

//       var statusValue = document.getElementById("status").value;
//       if(null == statusValue || statusValue == ""){

        
//     document.getElementById("statusErroId").innerHTML = " Please Choose Status.";
//         flag = false;
//       }else{
//         document.getElementById("statusErroId").innerHTML = "";
        
//       }

  



//      if(flag){
// 			$('#formId').submit();

// 				return true;
// 			}else{
// 				return false;
// 			}
// 			  return false;
        
//     }

</script>

</html>
