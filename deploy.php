<?php
<<<<<<< HEAD
// Set Variables
$LOCAL_ROOT         = "/var/www/";
$LOCAL_REPO_NAME    = "/var/www/html";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:mhmorshe/CSE135.git";
$BRANCH             = "master";

  if($_POST['payload'])
  {
    shell_exec("cd /var/www/html");
    shell_exec("git pull");
    die("done " . mktime());
  }
/*
if ( $_POST['payload'] ) {
  // Only respond to POST requests from Github
  if( file_exists($LOCAL_REPO) ) {

    // If there is already a repo, just run a git pull to grab the latest changes
    shell_exec("cd {$LOCAL_REPO} && git pull");

    die("done " . mktime());
  } else {

    // If the repo does not exist, then clone it into the parent directory
    shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO}");

    die("done " . mktime());
  }
}
*/
=======
	/**
	 * GIT DEPLOYMENT SCRIPT
	 *
	 * Used for automatically deploying websites via github or bitbucket, more deets here:
	 *
	 *		https://gist.github.com/1809044
	 */
	// The commands
	$commands = array(
		'echo $PWD',
		'whoami',
		'git pull',
		'git status',
		'git submodule sync',
		'git submodule update',
		'git submodule status',
	);
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}
	// Make it pretty for manual user access (and why not?)
>>>>>>> 5bd35c61e2175eec1676d7bd8df3eabbb9b5819d
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | Git Deployment Script v0.1 |
 |___==___|  /              &copy; oodavid 2012 |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>
