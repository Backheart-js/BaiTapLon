<?php
// Include the database configuration file
include '../../db.php';

// Get images from the database

    $sql="SELECT * FROM avt_images ORDER BY uploaded_on DESC";
    $result = mysqli_query($conn,$sql);

    ?>
    <div class="" style="height:100px">
    <!-- <img src="data_upload/hinh-anh-den-si_122547418.jpg" alt="" style="height:100px" /> -->
        <?php
            
            if(mysqli_num_rows($result)){       
                while($row=mysqli_fetch_assoc($result)){
                    $imageURL = './data_upload/'.$row["file_name"];
                    
                    // $imageURL = ('./../data_upload/') . '/'.$row["file_name"];
        ?>
        <img src="<?php echo $imageURL; ?>" alt="" style="height:100px" />
            <?php }
                }else{ 
            ?>
                <p>No image(s) found...</p>
            <?php } ?>
    <div>






