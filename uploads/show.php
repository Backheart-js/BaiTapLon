<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$result = mysqli_connect_error("SELECT * FROM db_images ORDER BY uploaded_on DESC");

if( mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>