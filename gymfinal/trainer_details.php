<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     <style>
        .bg {
  background-image: url('images/5og.jpg');
  
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
   z-index: -1;
  
}

        </style>
</head>
<body class="bg">

 <div class="container" style="padding:50px">
<div class="card">
     <div class="card-body" style="background-color:#0a3a61;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3>Members Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="trainer_search.php" method="post">
          <div class="row">
   <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter Member Id"></div>
              <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search">
 </div></div>   <br>
 <form class="form-group" action="func.php" method="post">
          <div class="row">
   <div class="col-md-10"><input type="text" name="delete" class="form-control" placeholder="enter Member id to delete"></div>
              <div class="col-md-2"><input type="submit" name="patient_delete_submit" class="btn btn-light" value="delete">
 </div></div>         
                 </form></div></div></div>
     <div class="card-body" style="background-color:#0a3a61;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>First Name</th>
            <th>Last Name</th>
         <th>Email id</th>
         <th>Member ID</th>
         <th>Trainer ID</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_member_details(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>