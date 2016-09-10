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
  <title>Session Page 1 in PHP</title>

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

    <a>This page is here to demonstarte my ability to handle sessioning in PHP.
       If a value is entered for name and start session is clicked.  The value
       of name will be displayed on session page 2.  If a value is not entered
       for name or start session in not clicked, session page 2 will display 
       a message indicating that a value was not entered on session page 1.
       Session page 2 will have a button to clear the session, wich will 
       end the current session and a button to go back to this page </a>


    <h1>Session Page 1!</h1>


    <?php
      session_start();
      if($_POST['startSess'])
      {
         if($_POST['name'] != "")
         {
           $_SESSION['name'] = $_POST['name'];
         }
      }
    $sessionVal = $_SESSION['name'];
    ?>

    <form id = "formID" action = "" method = "post">

       Name:<br> <input type = "text" style = "color: #000000" 
                       name = "name" value = "">
        <br>
        <br>
        <input type="submit" name="startSess" value = "start session"
        style = "color: #000000">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </form>

    <a href="/passwordProtected/session2.php" class="page-scroll btn btn-xl">Session Page 2</a></br></br>
  
    </div>
    </div>
    </header>

</body>

</html>
