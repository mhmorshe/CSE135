<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Box Office!</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="container">
<br><br>
<a>This basic App demonstrates my ability to use a database.  Information about
   various movies is stored in a database, and the information is displayed.
   The user is able to alter the data stored in the data base by adding 
   movies and deleting movies and editing information associated with a movie.
   The user is able to alter the display of the
   movies by clicking the headings 'title', 'studio', 'year' and 'box office',
   which will change the order in which the movies are displayed.  3 movies
   are displayed per page and the page can be changed by clicking next page or
   previous page.</a><br><br>

<a>Data was taken from the link below</a><br>  
<a href = http://www.boxofficemojo.com/alltime/world/>http://www.boxofficemojo.com/alltime/world/</a>	



<h1>Box Office Tracker!</h1>

<?php

  //pagination info
  if(isset($_GET['page']))
  {
    
    $pageNum = $_GET['page'];
  }
  else
  {
    $pageNum = 1;
  }
  

  // PLEASE CHANGE THESE LINES!!!!!!
  define('DB_USER','crudUser');
  define('DB_PASSWORD','password');
  define('DB_HOST','localhost');
  define('DB_NAME','films');

  // CONNECT TO DB
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
  if (!$conn) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }
    

  // FORM AND EXECUTE SOME QUERY
  $sql = "SELECT * FROM data";
  $result = mysqli_query($conn, $sql);

  //validate page number
  $maxPage = ceil(mysqli_num_rows($result) / 3);
  if($pageNum > $maxPage)
  {
    $pageNum = $maxPage;
  }
  else if($pageNum < 1)
  {
    $pageNum = 1;
  }
  $_SESSION['pageNum'] = $pageNum;

  $start = ($pageNum - 1)* 3;
   
  // USE THE QUERY RESULT
  print "<table class='table'>";
  print "<tr>
         <th><a href='index.php?order=title'>Title</a></th>
         <th><a href='index.php?order=studio'>Studio</a></th>
         <th><a href='index.php?order=year'>Year</a></th>
         <th><a href='index.php?order=box_office'>Box Office</a></th>
         <th>Picture</th><th></th></tr>";   

  //set the order
  if(isset($_GET['order']))
  {
    $order = $_GET['order'];
  }
  else
  {
    $order = 'title';
  }

  //validate the oder
  if($order != 'title' && $order != 'studio' && $order != 'year' && 
     $order != 'box_office')
  { 
    $order = 'title';
  }
 
  $sql = "SELECT * FROM data ORDER BY $order LIMIT $start, 3";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
    
    
    while($row = mysqli_fetch_assoc($result)) 
    {
      print "<tr>";
      print "<td>". $row['title'] . "</td>" ;
      print "<td>". $row['studio'] . "</td>" ;
      print "<td>". $row['year'] . "</td>" ;
      print "<td>$". $row['box_office'] . "</td>";
            
      //display the image
      print "<td>";
      print "<img src = showImage.php?id=".$row['id']." >";
      print "</td>";	  



      print "<td><div class='row'>";
	    	    
      print "<div class='col-sm-6'><form action='edit.php' method='POST' class='form-horizontal'><input type='hidden' name='id' value='".$row['id']."'>
	    <div class='form-group'><button type='submit' name='action' value='Update' class='btn btn-default'>
  <span class='glyphicon glyphicon-pencil'></span></button></div></form></div>";
	    
      print "<div class='col-sm-6'><form action='delete.php' method='POST' class='form-horizontal'><input type='hidden' name='id' value='".$row['id']."'><div class='form-group'><button type='submit' class='btn btn-default' name='action' value=delete'>
  <span class='glyphicon glyphicon-trash'></span></button></div></form></div>";

      print "</div></td></tr>\n";

    }
  } 
  else 
  {
    print "<tr><td colspan='4'>No Films</td></tr>";
  }

  print "</table>"
?>


<form action="edit.php" method="POST">
	<input type="submit" name="action" value="Add" class="btn btn-lg btn-primary">
</form>	

  <br>
  <br>
  <br>

  <div style="text-align:center">
      <h4>
      <?php

        if($pageNum > 1)
        {
          $nextPage = $pageNum -1;
          print"<a href=index.php?order=".$order."&page=".$nextPage.">";
          print'<input type = "submit" value = "previous Page"> </a>';
        }

      ?>      
      <a> &nbsp;</a>
      <a> &nbsp;</a>
      <a> &nbsp;</a>
      <a> &nbsp;</a>
      <?=$pageNum?>
      <a> &nbsp;</a>
      <a> &nbsp;</a>
      <a> &nbsp;</a>
      <a> &nbsp;</a>
      <?php

        if($pageNum < $maxPage)
        {
          $nextPage = $pageNum +1;
          print"<a href=index.php?order=".$order."&page=".$nextPage.">";
          print'<input type = "submit" value = "next Page"> </a>';
        }

      ?>
   
  </div>


<br><br>
<hr>
<br><br>


</div>

</body>
</html>
