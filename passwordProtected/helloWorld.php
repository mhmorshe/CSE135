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

  print '</h1>';


  print "<a>Red White or Blue is randomly picked to be the background color
            of this page every time it is generated.  A date and time stamp
            is also displayed on the page to prove that the page was actually
            dynamicaly generated.  The code for the page is writen in PHP and 
            is here to demonstrait my ability to dynamically generate pages
            in PHP</a>";


?>
