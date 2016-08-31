<?php
 $action = $_POST['action'];

 
 $title = '';
 $studio = '';
 $year = NULL;
 $box_office = NULL;
 $picture = NULL;

 if ($action == "Update") {
   
    $id = $_POST['id']; 
    define('DB_USER','crudUser');
    define('DB_PASSWORD','password');
    define('DB_HOST','localhost');
    define('DB_NAME','films');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT title,studio,year, box_office, picture FROM data where id = ".$id;
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
    
	 $title = $row['title'];
	 $studio = $row['studio'];
	 $year = $row['year'];
	 $box_office = $row['box_office'];
         $picture = $row['picture'];
	}
	 
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?= $action ?> Record</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="container">
	
<h1><?= $action ?> Record</h1>

<form action="action.php" method="POST" class="form"enctype="multipart/form-data">
	<div class="form-group">
	 <label for="title">Title</label>
	 <input type="text" name="title" value="<?= $title ?>"  class="form-control">
	</div>

	<div class="form-group">
	<label for="studio">studio</label>
	<input type="text" name="studio" value="<?= $studio ?>"  class="form-control">
	</div>

	<div class="form-group">
	<label for="year">Year</label>
	<input type="text" name="year" value="<?= $year ?>"  class="form-control">
	</div>




	<div class="form-group">
	<label>Box Office</label>
	<input type="text" name="box_office" value="<?= $box_office ?>"  class="form-control">
	</div>


	<div class="form-group">
	<label>Movie Poster Picture</label>
	<input type="file" name="picture"  class="form-control">
	</div>

	<input type="hidden" name="id" value="<?= $id ?>">




	
	<div class="form-group">
	<input type="submit" value="<?= $action ?>" name="action" class="btn btn-primary">
	<input type="submit" value="Cancel" name="action"  class="btn btn-default">	
	</div>
        
   
</form>

</div>

</body>
</html>
