<?php 
 
 $file = $_FILES['images'];
 $filename = uniqid('_img').strrchr($file['name'],'.');
 echo $filename;   
 move_uploaded_file($file['tmp_name'],'upload/'.$filename);