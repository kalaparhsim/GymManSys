<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost:3306";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1  
    

$result1 = mysqli_query($connect, $query);

?>
<html>
  <head>
  
  <title>Admin Home Page</title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body class="bg">
    <div class="sidenav"> 
            <div  >
                <a href="trainer_details.php" >Member</a>
                <a href="package.php" >Package details</a>
                <a href="payment.php" >Payments</a>
            </div>
            <hr>
            <div  >
              <a href="trainer.php" >Trainer</a>
              
            </div>         
          </div>
    
    <div class="container">
      
                <h3 >Hello! Admin, Register new members here!</h3>
                
                <form  action="func.php" method="post">
                    <label>First Name:</label><input type="text" name="fname" placeholder="enter first name" required/><br>
                    <label>Last Name:</label><input type="text" name="lname"placeholder="enter last name"required/><br> 
                        <label>Email ID:</laDDbel><input type="text" name="email" placeholder="enter email id"required/><br>
                        <label>Member ID:</lDDabel><input type="text" name="contact" placeholder="enter member id"required/><br>        
                        <label>Trainer's Name:</label> 
                        <select name="docapp" placeholder="enter the trainer's name" style="width: 100%;background-color: #244661;border-radius: 4px;padding: 0.9rem 0.7rem;font-size: 17px;color: white; margin-bottom: 1rem;" required>
                        <option value="" selected="selected">enter the trainer's name</option>
                <?php while($row1 = mysqli_fetch_array($result1)):;?>
    
                <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
    
                <?php endwhile;?>
    
            </select>
            <br> 
            <button type="submit" id="inputbtn" name="pat_submit" class="btn" >Register<button>                                
                    
                    </form>
    </div>
  

   
     

  </body>
    
</html>