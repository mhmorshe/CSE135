#!/usr/bin/perl
#hello.pl - My first CGI program

print "Content-Type: text/html\n\n";
print "<title>EnvVars cgi</title>";
print "<html> <head>\n";
print "</head>\n";
print "<body>\n";


print '<a>This page is here to demonstrate my ability access and use
            environment variables in cgi with perl.  The page simply prints the 
            environment variables</a>';




print '<h1 style = "text-align:center">The Environment Variables Are </h1>';
foreach $variable (sort keys %ENV)
{
  print "<b>$variable:</b> $ENV{$variable}<br />\n";
}

print "</body> </html>\n";
exit;
