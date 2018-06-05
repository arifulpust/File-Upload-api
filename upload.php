<?php
  
    $file_path = "files/";
     $associativeArray = array();
 $response = array();
 
    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path) ){
		$response["error"] = false;
                $response["message"] = "Successfully Uploaded";
        echo json_encode($response);
    } else{
		$response["error"] = true;
                $response["message"] = "Oops! An error occurred while registereing";
        echo json_encode($response);
    }
 ?>