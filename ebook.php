<?php 

// Store the file name into variable 
$file = 'filename.pdf'; 
$filename = 'filename.pdf'; 

// Header content type 
header('Content-type: application/pdf'); 

header('Content-Disposition: inline; filename="' . $filename . '"'); 

header('Content-Transfer-Encoding: binary'); 

header('Accept-Ranges: bytes'); 

// Read the file 
@readfile($file); 

?>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" size="50" />
<br />
<input type="submit" value="Upload" />
</form>