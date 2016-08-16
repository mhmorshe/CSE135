#!/usr/bin/perl -wT
use CGI qw(:standard);
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);
use strict;

print header;
print start_html("form collection cgi2");

my %form;
my $dateAndTime = localtime;

print "<style>body{background-color:";
print  param('color');
print  ";}</style>";



print '<h1 style = "text-align:center">';
print "Hello ";
print param('firstname');
print " ";
print param('lastname');
print " from a Web app written in CGI with Perl on $dateAndTime";
print '</h1>';

print end_html;
