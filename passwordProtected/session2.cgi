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
if(defined $q->param('clearSess')){
    # delete session
    $s->delete;
    #print "Session will be deleted.\n";
}

print "\n</pre>\n";


# simple HTML form

printf <<'_HTML_', $q->escapeHTML($s->param('test'));
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
  <title>Session Page 2 in CGI</title>

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
    <h1>Session Page 2!</h1><br><br><br>


_HTML_

my $name = $s->param('name');
if($name != '')
{
  print "<h1>Hi $name nice to meet you</h1>";
}
else
{
  print "<h1>Howdy stranger...tell me your name on page1</h1>"
}

printf <<'_HTML_', $q->escapeHTML($s->param('test'));
    <form id = "formID" action = "" method = "post">
    <input type="submit" name="clearSess" value = "Clear Session"
    style = "color: #000000">
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="/passwordProtected/session1.php" class="page-scroll btn btn-xl">Session Page1</a></br></br>


    </div>
    </div>
    </header>
</body>
</html>

_HTML_

# eof (linebreak needed after _HTML_)
