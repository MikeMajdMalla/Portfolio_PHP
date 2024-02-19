<?php
$name="";
$email="";
$phone="";
$place="";
$lessonTime="";


$host = "localhost";
$user = "mial0013";
$password = "DREAMtheater373";
$database = "mial0013";

//creat a connection to the database
$connection = new mysqli($host, $user, $password, $database );


$errorMessage="";
$successMessage ="";

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=  $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $place= $_POST["place"];
    $lessonTime= $_POST["lessonTime"];

    do {
        if ( empty($name)  || empty($email) || empty($phone) || empty($place) || empty($lessonTime) ) {
            $errorMessage = "There are empty fields";
            break;
        }
        
        // insert lesson booking into db

        $sql = "INSERT INTO schlesson (name, email, phone, place, lessonTime) " . 
        "VALUES ('$name', '$email', '$phone', '$place', '$lessonTime')";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid input " . $connection->error;
            break;
        }



        $name="";
        $email="";
        $phone="";
        $place="";
        $lessonTime="";

        $successMessage = "lesson has been booked";

         

       
    } while(false);
    
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book lesson</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class ="container my-4">
    <h2>New lesson</h2>

    <?php
  
  if( !empty($errorMessage) ){
    echo "
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    ";

  }
?>
    <form method = "post">
    <div class="row mb-3">
    
    <label class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-6">
    <input type="text" class ="form-control" name="name" value="<?php echo $name; ?>">
    </div>
    </div>
    <div class="row mb-3">
    
    <label class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-6">
    <input type="text" class ="form-control" name="email" value="<?php echo $email; ?>">
    </div>
    </div>
    <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-6">
                <input type="text" class ="form-control" name="phone" value="<?php echo $phone; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class=" col-sm-3 col-form-label">Place</label>
            <div class="col-sm-6">
                <input type="text" class ="form-control" name="place" value="<?php echo $place; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Time</label>
            <div class="col-sm-6">
                <input type="text" class ="form-control" name="lessonTime" value="<?php echo $lessonTime; ?>">
            </div>
        </div>

        <?php
 if( !empty($successMessage) ){
    echo "
     <div class='row mb-3'>
    <div class='offset-sm-3 col-sm-6'>
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>$successMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    </div>
    </div>
    ";

  }
        ?>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-6 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>
        <div class="row mb-3">
        <div class="offset-sm-3 col-sm-6 d-grid">
           <a class="btn btn-outline-primary" href="schlesson.php" role="button">Cancel</a> 

        </div>
        </div>

    </form>
</body>
</html>