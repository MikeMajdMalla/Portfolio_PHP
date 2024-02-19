<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schedual lessons</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    
</head>

<body>
<?php

session_start();
?>
 <?php 
if ($_SESSION['username']= "mike"  && $_SESSION['password']= "123") {
    echo "<h3>You are authorized to schedule lessons</h3> ";
       echo "<a class='btn btn-primary' href='logout.php' role='button'>Log out</a><br>";    
}

else {
    echo "<a href='index.php'>". $_POST["username"] ." go back to the main site</a>"; 
    
   
    
}
?>  


    

    <div class ="conainer my-5">
        <h2> List of lessons that already booked</h2>
       <a class="btn btn-primary" href="booklesson.php" role="button">New Lesson</a>
      <br>  
      <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>place</th>
            <th>Time</th>
            
            </tr>
         </thead>
          <tbody>
            <?php
             $host = "localhost";
             $user = "mial0013";
             $pass = "DREAMtheater373";
             $db = "mial0013";

             $connection =  mysqli_connect($host, $user, $pass, $db );

             if ($connection->connect_error){
                die("there is no connection " . $$connection->connect_error);
             }
              

              // get the data from db

             $sql = "SELECT * FROM schlesson";
             $result = $connection->query($sql);

             if (!$result) {
                die("invalid input " . $connection->error);
             }

             while($row = $result->fetch_assoc()){
                echo "
                <tr>
          <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[place]</td>
            <td>$row[lessonTime]</td>
           

          </tr>
                ";
             }
            
            ?>
          
        </tbody>
      </table>
 </div>
</body>
</html>