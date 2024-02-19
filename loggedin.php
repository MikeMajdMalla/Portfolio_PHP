<?php

session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mike Almalla</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styleLog.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    
  </head>
<body>

<?php
// Set session variables
if(isset($_POST["username"]))
{
  if (($_POST["username"] == "mike" && $_POST["password"] == "123") )
  {
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["inloggad"] = "ja";
    // echo "<a href='logout.php'>Click here to log out</a> <br/>"; 
      
      echo "<p>now you are logged in ". $_SESSION["username"] ."</p>";    
    // echo "<a href='schlesson.php'>". $_SESSION["username"] ." click here to schedual a lesson</a>"; 
    
    
  }
  else
  {
      echo "<p>Wrong Password, you a have to be an admin ". $_POST["username"] ."</p>";   
      echo file_get_contents('index.php'); 
    // echo "<a href='index.php'>". $_POST["username"] ." click here to return to the main site</a>";    
  }
}
?>
 <!--here statrs the log in html--> 


 <div id="id01" class="modal">
  
  <form class="modal-content animate" action="loggedin.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="picwish.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button id="btn4" type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

   <!--here ends the log in html-->

 <header id="headerNav">
      <a href="loggedin.php"><img id="mylogo" src="picwish.png" /> </a>
      <a href="loggedin.php" class="logo">Mike Majd Almalla</a>
      <nav class="navigation">
      <form method="POST" action="index.php">
        <a href="#bioclass">Bio</a>
        <a href="#gearclass">Gear</a>
        <a href="#favband">Favorite musicians</a>
        <a href="schlesson.php">schedual lesson</a>
        <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

        
        <button>Log out</button>
        </form>
        
      
    </header>

    <section class="main">
      <div>
        <h2>Raise your game<br /><span>musician and composer</span></h2>
        <h3>Now you can level up your guitar techniuqe with me</h3>
        <a href="#project" class="main-btn"></a>
        <div class="social-class">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="ytclass">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/ZstpKDv663A"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </section>

    

    <!-- Here starts the BIO section-->

    <section id="bioclass">
      <h1 class="headerInBio">Biography</h1>
      <h1>
        Mike Majd was born in <span>Damascus/Syria 1991</span> <br />
        He took up the guitar at age 15 after being<br />
        inspired by the Swedish icon <span>Yngwie Malmsteen</span> and
        developed<br />
        a love for the instrument. At that point he started he’s journey<br />
        as a self-learner musician, but with time when he took the guitar<br />
        into serious he decided to study music in a professional way <br />where
        he started taking lessons with the most well known musician<br />
        in Syria <span>Yasser Al khadra</span>. Mike’s main technique on
        guitar<br />
        is alternate picking and legato since his idols focus on<br />
        the same approach on guitar. He’s truly addicted to musicians like<br />
        <span
          >John Petrucci, Guthrie govan, Plini, Michael Romeo, Steve Vai,<br />
          Marco Sfogli, Richard Henshall and many more</span
        >. <br />Mike’s favorite genres are
        <span>Progressive Metal, Fusion Jazz and Djent</span> <br />
        and his favorite band is <span>Dream Theater</span>.<br />
        Since the war began in Syria 2011, <br />Mike fled to Dubai in order to
        escape from <br />the compulsory military service<br />
        and in 2015 he moved to Sweden and settled down there.
      </h1>
    </section>

    <!-- Here starts the GEAR section-->

    <section id="gearclass">
      <h1 id="titleinGear">Gear</h1>
      <div id="picOfGuitarOne">
      <h1><span>Majesty John Petrucci Blue Honu</span></h1>
      <h3 id="instruinfo">The guitar that changed the way i play guitar</h3>
      
        <img id="guitar1" src="imeges/majesty.png" alt="" />
      </div>
      <h1><span>Ibanez Prestige 1552 Black 7 Strings</span></h1>
      <h3 id="instruinfo">Very harsh sound with singing pick ups that fit Djent och proggy tone</h3>
      <div id="picOfGuitarOne">
        <img id="guitar2" src="imeges/ibanez7.png" alt="" />
      </div>
    
    
      <div id="picOfGuitarThree">
    <h1><span>Ibanez Prestige 2250z Mystic night</span></h1>
    <h3 id="instruinfo">Pretty suitbale for shredding with pick ups based on Petrucci sound</h3>
    <div >
      <img id="guitar3" src="imeges/ibanezrg6.png" alt="" />
    </div>
    </section>

    <section class="favbandclass" id="favband">
      <a id="titleinfav">My favorite musicians</a>
      

    </section>
    
      

      <script src="script.js">
        
        
      </script>
</body>
</html>