<?php

  $colorNum = rand ( 0, 2);
  print "<title>Hello World php</title>";

  if($colorNum == (int) 0)
  {
    print "<style>body{background-color: #FF0000;}</style>";
  }
  else if($colorNum == (int) 1)
  {
    print "<style>body{background-color: #0000FF;}</style>";
  }

  print '<h1 style = "text-align:center"> Hello Web World From  php on ';


  print date("Y-m-d h:i:sa");

  print '</h1>'


?>
