<html>
<head>
	<title>Patient details</title>
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
.tbody{
    color:white;
}

        </style>
</head>
<body class="bg">
    <?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
     $query="select * from doctorapp where contact='$contact'";
    $result=mysqli_query($con,$query);
    echo "<div class='container-fluid' style='margin-top:50px;'>
    <div class'card' style='background-color:#0a3a61;color:#ffffff;'>
    <div class='card-body'><a href='trainer_details.php' class='btn brn-light' style='background-color:white; '>Go Back</a></div>
    
   
    <table class='table table-hover'>
        <thead class='tbody'>
     <tr>
         <th>First name</th>
         <th>Last name</th>
         <th>Email id</th>
         <th>Contact</th>
         <th>Trainer ID</th>
        </tr>   
        </thead>
        <tbody class='tbody'>
        </div></div>";
    while ($row=mysqli_fetch_array($result)){
          $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $docapp=$row ['docapp'];
        echo " <tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td>
        </tr>";
        }
        echo "</tbody></table></div></div></div>";
}
    ?>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
        </html> 