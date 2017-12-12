<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="file" size="20" /><br />
    <input type="submit" value="Upload" name="ok" />
</form>


<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name       = $_FILES['file']['name'];  
            $temp_name  = $_FILES['file']['tmp_name'];  
            if(isset($name)){
                if(!empty($name)){      
                    $location = 'data/';      
                    if(move_uploaded_file($temp_name, $location.$name)){
                        echo 'File uploaded successfully';
                    }
                }       
            }  else {
                echo 'You should select a file to upload !!';
            }
    }

 ?>