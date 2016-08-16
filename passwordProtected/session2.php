<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is the status page">
  <meta name="author" content="Mahir Morshed">
	
  <link rel="shortcut icon" type="image/x-icon" href="/../img/favicon.ico">
  <link rel=" icon" type="image/x-icon" href="/../img/favicon.ico">
  <title>Session Page 2 in PHP</title>

  <!-- Bootstrap Core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="../css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

  <!-- Header -->
  <header>
    <div class="container">
    <div class="intro-text">
    <h1>Session Page 2!</h1><br><br><br>

    <?php
      print "<title>Session Page 2 php</title>";
      session_start();
      if(isset ($_SESSION['name']))
      {
        print "<h1>Hi ".$_SESSION['name']." nice to meet you</h1>";
      }
      else
      {
        print "<h1>Howdy stranger...tell me your name on page1!</h1>";
      }
    ?>
   
  

    <?php
      session_start();
      if($_POST['clearSess'])
      {
        session_destroy();
      }
    ?>

    <form id = "formID" action = "" method = "post">
    <input type="submit" name="clearSess" value = "Clear Session"
    style = "color: #000000">
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="/passwordProtected/session1.php" class="page-scroll btn btn-xl">Session Page1</a></br></br>


    </div>
    </div>
    </header>
</body>
</html>
