<?php

class Model_profile extends CI_Model
{

	public function upload(){
		$file=$_FILES['file'];

		/*when uploading a file it system store 5 type of information those are taken to variable*/ 
		$fileName=$_FILES['file']['name'];
		$fileTmpName=$_FILES['file']['tmp_name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];

		/*put restrictions on file type extract file type*/
		$fileExt=explode('.', $fileName);
		$fileActualExt=strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png');//allowed types

		if(in_array($fileActualExt, '$allowed')){
			$fileNameNew=uniqid('',TRUE).".".$fileActualExt;
			$fileDesti="base_url()/upload/".$fileNameNew; //in this point will have an error
			move_uploaded_file($fileTmpName, $fileDesti);
		}

	}
}