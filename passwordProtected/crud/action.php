<?php

  $toGo = 'index.php';//location to redirect to, changes if there are errors
                      //in the data entry

  //boolean flags for form validation
  $titleError = false;
  $studioError = false;
  $yearError = false;
  $box_officeError = false;
  $pictureError = false;
  

	
  define('DB_USER','crudUser');
  define('DB_PASSWORD','password');
  define('DB_HOST','localhost');
  define('DB_NAME','films');
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 
  if (!$conn) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  $action = $_REQUEST['action'];




	
  if ($action == 'Add') 
  {
    $title = $_REQUEST['title'];
    $studio = $_REQUEST['studio'];
    $year = $_REQUEST['year'];
    $box_office = $_REQUEST['box_office'];
    $picture = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
    $pictureType = $_FILES['picture']['type'];

 

    

    // SHOULD HAVE VALIDATION HERE!?

    //validate picture
    if($pictureType != "image/jpeg")    
    {
      $pictureError = true;
    }

           
    //validate title    
    if(strlen($title) > 50)//if it is too long
    {
      $titleError = true;
    }
    else if(preg_match('/[^a-zA-Z\\s\d]/', $title))//if it has special chars
    {
      $titleError = true;
    }
    

    //validate title     
    if(strlen($studio) > 25)//if it is too long
    {
      $studioError = true;
    }    
    else if(preg_match('/[^a-zA-Z\\s\d]/', $studio))//if it has special chars
    {
      $studioError = true;
    }


    //validate year
    if(strlen($year)  > 4 || strlen($year) < 4)
    {
      $yearError = true;
    }      
    else if(preg_match('/[^0-9\d]/', $year))//if has non numeric chars
    {
      $yearError = true;
    }

    //validate box_office
    if(strlen($box_office) > 15)
    {
      $box_officeError = true;
    } 
    else if(preg_match('/[^0-9\d]/', $box_office))//if has non numeric chars
    {
      $box_officeError = true;
    }
    //end form validation





          
    //if there was an error
    if($titleError || $studioError || $yearError || $box_officeError 
       || $pictureError)
    {
      //set coockies for prior form data
      setcookie('action', $action, time() + 60);
      setcookie('title', $title, time() + 60);
      setcookie('studio', $studio, time() + 60);
      setcookie('year', $year, time() + 60);
      setcookie('box_office', $box_office, time() + 60);
     
      //set cookies for errors
      setcookie('titleError', $titleError, time() + 60); 
      setcookie('studioError', $studioError, time() + 60);
      setcookie('yearError', $yearError, time() + 60);
      setcookie('box_officeError', $box_officeError, time() + 60);
      setcookie('pictureError', $pictureError, time() + 60);

      $toGo = 'editError.php';
           
    }
    else
    {
      $sql = "INSERT INTO data (title,studio,year,box_office, picture) 
      VALUES ('$title' , '$studio' , '$year' , '$box_office'
              ,'$picture')";
      $result = mysqli_query($conn, $sql);
    }	
	
  }





 
  else if ($action == "Update") 
  {
		
    $title = $_REQUEST['title'];
    $studio = $_REQUEST['studio'];
    $year = $_REQUEST['year'];
    $box_office = $_REQUEST['box_office'];
    $id = $_REQUEST['id'];
    $pictureName = $_FILES['picture']['name'];
    $pictureType = $_FILES['picture']['type'];



    //form validation here too


    //validate picture
    if($pictureType != "image/jpeg" && $_FILES['picture']['name'] != NULL)    
    {
      $pictureError = true;
    }

           
    //validate title    
    if(strlen($title) > 50)//if it is too long
    {
      $titleError = true;
    }
    else if(preg_match('/[^a-zA-Z\\s\d]/', $title))//if it has special chars
    {
      $titleError = true;
    }
    

    //validate title     
    if(strlen($studio) > 25)//if it is too long
    {
      $studioError = true;
    }    
    else if(preg_match('/[^a-zA-Z\\s\d]/', $studio))//if it has special chars
    {
      $studioError = true;
    }


    //validate year
    if(strlen($year)  > 4 || strlen($year) < 4)
    {
      $yearError = true;
    }      
    else if(preg_match('/[^0-9\d]/', $year))//if has non numeric chars
    {
      $yearError = true;
    }

    //validate box_office
    if(strlen($box_office) > 15)
    {
      $box_officeError = true;
    } 
    else if(preg_match('/[^0-9\d]/', $box_office))//if has non numeric chars
    {
      $box_officeError = true;
    }
    //end form validation


    
    







    //if there was an error
    if($titleError || $studioError || $yearError || $box_officeError 
       || $pictureError)
    {
      //set coockies
      setcookie('action', $action, time() + 60);
      setcookie('title', $title, time() + 60);
      setcookie('studio', $studio, time() + 60);
      setcookie('year', $year, time() + 60);
      setcookie('box_office', $box_office, time() + 60);
      setcookie('id', $id, time() + 60);



      //set cookies for errors
      setcookie('titleError', $titleError, time() + 60); 
      setcookie('studioError', $studioError, time() + 60);
      setcookie('yearError', $yearError, time() + 60);
      setcookie('box_officeError', $box_officeError, time() + 60);
      setcookie('pictureError', $pictureError, time() + 60);



      $toGo = 'editError.php';
           
    }
    else
    {
      //update the image if a new one was provided
      if($_FILES['picture']['name'] != '')
      {
        $picture = addslashes(file_get_contents
                              ($_FILES['picture']['tmp_name']));
        $sql = "UPDATE data SET title='" .$title.
               "' ,studio='".$studio.
               "' ,year='".$year.
               "' ,box_office='".$box_office. 
               "',picture ='". $picture. 
               "'WHERE id='".$id."'";
      }
      else//don't upload a new image if one was not provided
      {
      
        $sql = "UPDATE data SET title='" .$title.
               "' ,studio='".$studio.
               "' ,year='".$year.
               "' ,box_office='".$box_office. 
               "'WHERE id='".$id."'";
      }
        $result = mysqli_query($conn, $sql);
    }	
  }









  
  else if ($action == "Delete") 
  {		
    $sql = "DELETE FROM data WHERE id='".$_POST['id']."'"; 
    $result = mysqli_query($conn, $sql);		
  }

  header('Location: '.$toGo);
	
?>
