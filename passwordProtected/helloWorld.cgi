#!/usr/bin/perl
#hello.pl - My first CGI program

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


print "</body> </html>\n";

