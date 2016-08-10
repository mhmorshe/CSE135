README file for HW1

1.Employ Password protection
  The statusPage on my site is password protected.  The username is "username"
  and the password is "password".  This was done by using a .htaccess file and
  a .htpasswd file.  The .htaccess file is in a sub directory of my root
  directory with the html file for the status page.  It specifies a path to 
  the .htpasswd file which is in the apache2 directory.  The .htaccess file
  prompts the user to enter a username and password and the .htpasswd file has
  the valid username and password.  The the correct password is entered by the
  user, they are taken to the status page, if an incorrect username password
  combo is entered, a 401 error appears

2.Have a status page
  The status page comes up when you click "VIEW STATUS PAGE" from the start page

3.Use custom error pages
  Custome 404,401,and,403 pages have been created as html files and put in the
  root directory.  Appache's configuration has also been changed so that these
  pages are used and not the default ones.

4.Have a favicon
  A file called favicon.ico has been put in the root directory as well as img a
  sub directory of the root directory.  In addition, the html code to use the
  file has been added to every page on the site.

5.Hace a robots.txt file
  A robots.txt file has been added to the root directory. It blocks all
  bots from the site.

6.Deploy from Github
  A php script from the interned called deploy.php has been added to the root
  directory.  A github hook has also been added with the url 
  http://138.68.63.72/deploy.php
  So, whenever code is pushed to github, the site is updated

7.Log Properly
  Apache creats the log files error.log and access.log.  They are in 
  /var/log

8.Compress Textual Content
  mod_deflate was configured on the server.  To verify that is was compressing
  properly I wen to www.whatsmyip.org then clicked on the http compression tab
  and entered the urls for my site.  It confirmed that my pages were being 
  compressed and that I was saving about 57% space per page.

9.Obscure server identity
  I added the line
  ServerTokens Prod to the apache2.conf file to obscure the server identity

10.Run PHP
   Click "VIEW PHP INFO" on the status page to view a page that verifies that
   PHP runs on the surver.

11.Deliver Clean URLS
   All the URLS were already clean



The code for this site can be found at 
http://github.com/mhmorshe/CSE135

