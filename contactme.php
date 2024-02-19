<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact me</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="contactform.css" />
  </head>
  <body>
    <h1 id="head">This is a form to contact me <br>in order to book a lesson with me </h1>
    

    




<div class="container">
  <form action="index.php">
    <label  for="fname">Your Name</label>
    <input id="tha" type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Lesson time </label>
    <input type="text" id="lname" name="lessonTime" placeholder="Lesson time">

    
    

    
    <textarea id="subject" name="subject" placeholder="Write to me how I can help you" style="height:200px"></textarea>
     
    
    <input type="submit" value="Go to the menu">

    <input type="submit" value="Submit"  id="btnThanks" onclick="thanks(document.getElementById('tha').value)">
  
  </form>
  
</div>

</body>




</html>
