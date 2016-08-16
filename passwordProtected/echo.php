<?php

  print "<title>Form Collection PHP2</title>";

  if(sizeof($_GET) > 0)
  {
    print "<style>body{background-color:". $_GET['color'].";}</style>";

    print '<h1 style = "text-align:center">';
    print "Hello " .$_GET['firstname'] . " ". $_GET['lastname'].
           " from a Web app written in php on ". date("Y-m-d h:i:sa");
    print '</h1>';
  }
  else if(sizeof($_POST) > 0)
  {
    print "<style>body{background-color:". $_POST['color'].";}</style>";

    print '<h1 style = "text-align:center">';
    print "Hello " .$_POST['firstname'] . " ". $_POST['lastname'].
           " from a Web app written in php on ". date("Y-m-d h:i:sa");
    print '</h1>';
  }


?>
