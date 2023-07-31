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
   background-repeat: repeat-y;
  
}

        </style>
</head>
<body class="bg">

 <div class="container" >
<div class="card " >
     <div class="card-body" style="background-color:#0a3a61;color:#ffffff;" >
         <div class="row">
             <div class="col-md-1" >
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3>Payment Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#0a3a61;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Payment ID </th>
            <th>Amount</th>
            <th>Payment Type</th>
            <th>Customer ID</th>
            
         
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#0a3a61;color:FFFFFF; ">
                <h3>Add New Payment Details</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post" >
                    <label>Payment ID</label>
                    <input type="text" name="Payment_id" class="form-control" required><br>
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"required><br>
                    <label>Customer ID</label>
                    <input type="text" name="customer_id" class="form-control"required><br>
                    <label>Payment Type</label>
                    <input type="text" name="payment_type" class="form-control"required><br> 
                    <input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
                </form>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>