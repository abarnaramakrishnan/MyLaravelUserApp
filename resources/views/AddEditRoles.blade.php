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

<script>


function showModal() {
  $('#Mymodel').modal('show');
}


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
            $('#Mymodel').modal('show');
            console.log(data);
           $('#customerId').val(data[0].id);
            $('#role_name').val(data[0].role_name);
              $('#description').val(data[0].description);
             $('#status').val(data[0].status);
     });  

 }




</script>