<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbupload";
$conn = new mysqli($servername, $username, $password, $dbname);
    // if(isset($_POST['post'])){
        $pname = $_POST['name'];
        $price = $_POST['price'];

        if(isset($_FILES['files'])){
            $errors = array();
            $uploadedFiles = array();
            $extension = array("jpeg","jpg","png","gif","JPG","PNG");
            $bytes = 1024;
            $KB = 1024;
            $totalBytes = $bytes * $KB;
            $UploadFolder = "uploads";
            $url = "http://ci-inventory.dev/phpUpload/";

            //create directory foloder
            if (!file_exists($UploadFolder)) {
			    mkdir($UploadFolder, 0777, true);
			}
             
           
    		//insert to tbl_product
            $sql = "INSERT INTO tbl_products (name,price) values ('$pname','$price')";
            if ($conn->query($sql) === TRUE) {
                $last_id= mysqli_insert_id($conn);
                echo "You have successfull post product.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

 			$counter = 0;
 			//
            foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
                $temp = $_FILES["files"]["tmp_name"][$key];
                $name = $_FILES["files"]["name"][$key];
                $imgurl = $url.$UploadFolder.'/'.$name;
                $counter++;
                $UploadOk = true;

                if($UploadOk == true){
                    move_uploaded_file($temp,$UploadFolder."/".$name);
                    //insert to tbl_images
                    echo $name;
                    $insertProImage = "INSERT INTO tbl_images (pro_id,image,image_url) 
                    					values ('$last_id','$name','$imgurl')";
                    if ($conn->query($insertProImage) === TRUE) {
		                array_push($uploadedFiles, $name);

		            } else {
		                echo "Error: " . $sql . "<br>" . $conn->error;
		            }
                    
                }
            }
        // }
    }
?>