#!/usr/bin/perl
use strict;
use warnings;

use CGI;
use CGI::Carp qw(fatalsToBrowser); # show errors in browser
use CGI::Session;


# new query object
my $q = CGI->new();

# new session object, will get session ID from the query object
# will restore any existing session with the session ID in the query object
my $s = CGI::Session->new($q);


# print the HTTP header and set the session ID cookie
print $s->header();


# print some info

#print "<pre>\n";

#print "Hello!\n\n";
#printf "Your session ID is: %s\n", $s->id;
#printf "This sessin is: %s\n", $s->is_new ? 'NEW': 'old';
#printf "Stored session 'name' value: '%s'\n", $q->escapeHTML($s->param('name'));
#printf "CGI Params: %s\n", join ', ', $q->param;


# handle the form submit

if(defined $q->param('startSess')){
    # save param value in the session
    $s->param('name', $q->param('name'));
    #printf "Set session value: '%s'\n", $q->escapeHTML($s->param('name'));
}

print "\n</pre>\n";


# simple HTML form

printf <<'_HTML_', $q->escapeHTML($s->param('name'));
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
  <title>Session Page 1 in CGI</title>

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


    <a>This page is here to demonstarte my ability to handle sessioning in CGI
       with perl.  If a value is entered for name and start session is 
       clicked.  The value of name will be displayed on session page 2.  If a 
       value is not entered for name or start session in not clicked, session 
       page 2 will display a message indicating that a value was not entered 
       on session page 1. Session page 2 will have a button to clear the 
       session, wich will end the current session and a button to go back to 
       this page </a>


    <h1>Session Page 1!</h1>


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

    <a href="/passwordProtected/session2.cgi" class="page-scroll btn btn-xl">Session Page 2</a></br></br>
  
    </div>
    </div>
    </header>

</body>

</html>

_HTML_

# eof (linebreak needed after _HTML_)
