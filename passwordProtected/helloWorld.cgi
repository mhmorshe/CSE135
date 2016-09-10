#!/usr/bin/perl

print "Content-Type: text/html\n\n";
# Note there is a newline between 
# this header and Data

# Simple HTML code follows
print "<title>Hello World cgi</title>";
print "<html> <head>\n";
print "</head>\n";
print "<body>\n";
$dateAndTime = localtime();
print '<h1 style = "text-align:center">Hello Web World From cgi with perl on ';
print "$dateAndTime </h1>";

$randomNum = rand(3);
if($randomNum < 1)
{
  print "<style>body{background-color: #FF0000;}</style>";
}
if($randomNum < 2 && $randomNum > 1)
{
  print "<style>body{background-color: #0000FF;}</style>";
}




  print "<a>Red White or Blue is randomly picked to be the background color
            of this page every time it is generated.  A date and time stamp
            is also displayed on the page to prove that the page was actually
            dynamicaly generated.  The code for the page is writen in cgi
            with pearl and is here to demonstrait my ability to dynamically 
            generate pages in cgi with perl</a>";


print "</body> </html>\n";




