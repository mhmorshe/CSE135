<?php

  print "<title>EnvVars php</title>";
  print "<html><head>\n";
  print "</head>\n";
  print "<body>\n";


  print '<a>This page is here to demonstrate my ability access and use
            environment variables in PHP.  The page simply prints the 
            environment variables</a>';

  print '<h1 style = "text-align:center"> Environment Variables Are </h1>';

  foreach($_SERVER as $key => $val)
  {
    print "<br>".$key.":</b>$val<br />\n";
  }
?>
