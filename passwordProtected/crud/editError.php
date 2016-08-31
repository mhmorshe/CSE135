<?php
  $action = $_COOKIE['action']; 
  $title = $_COOKIE['title'];
  $studio = $_COOKIE['studio'];
  $year = $_COOKIE['year'];
  $box_office = $_COOKIE['box_office']; 
  $id = $_COOKIE['id'];
 

  $titleErrorMessage = "";
  $studioErrorMessage = "";
  $yearErrorMessage = "";
  $box_officeErrorMessage = "";
  $pictureErrorMessage = "";

  $titleError = $_COOKIE['titleError'];
  if($titleError)
  {
    $titleErrorMessage = "Invalid data was entered for the title";
  }

  
  $studioError = $_COOKIE['studioError'];
  if($studioError)
  {
    $studioErrorMessage = "Invalid data was entered for the studio";
  }

  $yearError = $_COOKIE['yearError'];
  if($yearError)
  {
    $yearErrorMessage = "Invalid data was entered for the year";
  }

  $box_officeError = $_COOKIE['box_officeError'];
  if($box_officeError)
  {
    $box_officeErrorMessage = "Invalid data was entered for the box office";
  }


  $pictureError = $_COOKIE['pictureError'];
  if($pictureError)
  {
    $pictureErrorMessage = "Invalid data was entered for the picture";
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
	
<h1 style = "color:red">An Error Occured With The Data Entry</h1>
<h3 style = "color:red">Please make sure the data was entered correctly</h3>
<h5 style = "color:red"><?=$titleErrorMessage?></h5>
<h5 style = "color:red"><?=$studioErrorMessage?></h5>
<h5 style = "color:red"><?=$yearErrorMessage?></h5>
<h5 style = "color:red"><?=$box_officeErrorMessage?></h5>
<h5 style = "color:red"><?=$pictureErrorMessage?></h5>
<h1><?= $action ?> Record</h1>

<form action="action.php" method="POST" class="form"enctype="multipart/form-data">
	<div class="form-group">
	 <label for="title">Title:this can only contain numeric and alphabetic 
                            characters and spaces with a max length of 50</label>
	 <input type="text" name="title" value="<?= $title ?>"  class="form-control">
	</div>

	<div class="form-group">

	 <label for="studio">Studio: this can only contain numeric and 
         alphabetic characters and spaces with a max length of 25</label>
	<input type="text" name="studio" value="<?= $studio ?>"  class="form-control">
	</div>

	<div class="form-group">
	<label for="year">Year: This must contain exactly 4 numeric characters</label>
	<input type="text" name="year" value="<?= $year ?>"  class="form-control">
	</div>




	<div class="form-group">
	<label>Box Office: This can only contain numeric characters with 
               a max length of 15</label>
	<input type="text" name="box_office" value="<?= $box_office ?>"  class="form-control">
	</div>


	<div class="form-group">
	<label>Movie Poster Picture: This can only be a file containing an
               image in jpeg format</label>
	<input type="file" name="picture" value = ''  class="form-control">
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
