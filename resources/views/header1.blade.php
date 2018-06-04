<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/mystyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    /* float: right; */
    /* background-color: #333; */
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

.bgcolor{
  background-color:#112e51
}
.navtext-move{
  float: right;
  padding-left: 680px;
}

a:hover {
    color: #fff  !important;
     text-decoration:none !important;
}
</style>
<body>
<nav class="navbar navbar-expand-sm  bgcolor navbar-dark navbar-fixed-top">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#">Logo</a> -->

  <!-- Links -->

   <!-- <a class="navbar-brand" href="#">
    <img src="./../assets/sass/download" alt="logo" style="width:40px;">
  </a> -->
  
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
   
    <li class="nav-item ">
     <a class="hover" href="#" data-toggle="tab">Manage Roles</a>
    </li>
    <li class="nav-item">
      <a class="" href="#" data-toggle="tab">Add/Edit Roles</a>
    </li>
    <li class="nav-item">
      <a class="" href="#" data-toggle="tab">Manage Users</a>
    </li>
    <li class="nav-item">
     <a class="" href="#" data-toggle="tab">Add/Edit Users</a>
    </li>
</div>
  </ul>
</nav>

<!-- <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav> -->
<br>
  
<!-- <div class="container">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p>
</div> -->


