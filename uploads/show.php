<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$sql = "SELECT * FROM data_images ORDER BY uploaded_on DESC"; 
$result=mysqli_query($db,$sql);
?>
<div style="display:flex;">
<?php

if( mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $imageURL = ('./../uploads/') . '/'.$row["file_name"];
        $i++;
        
?>
   <img src="<?php echo $imageURL; ?> " alt="" style='width:10%;'/>
</div>
    
    
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>