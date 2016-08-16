<?php

  print "<title>EnvVars php</title>";
  print "<html><head>\n";
  print "</head>\n";
  print "<body>\n";

  print '<h1 style = "text-align:center"> Environment Variables Are </h1>';

  foreach($_SERVER as $key => $val)
  {
    print "<br>".$key.":</b>$val<br />\n";
  }
?>
