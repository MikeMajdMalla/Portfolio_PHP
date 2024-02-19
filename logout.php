<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<body>

<?php

    echo "<p>you are logged out</p>";   
    echo file_get_contents('index.php');  
 
?>

</body>
</html>