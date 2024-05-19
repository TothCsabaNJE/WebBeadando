    <form action="templates/pages/imgUpload.tpl.php" method="post" enctype="multipart/form-data">
        <label><b>Upload a file:</b></label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <h2>Gallery</h2>
    <div class="gallery">
        <?php
        $files = glob("../../images/*.*");
        foreach ($files as $image) {
            $supported_file = array('gif', 'jpg', 'jpeg', 'png');
            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
                echo "<div class='gallery-item'>";
                echo "<img src='../../images/" . basename($image) . "' alt='" . basename($image) . "'>";
                echo "</div>";
            }
        }
        ?>
    </div>
