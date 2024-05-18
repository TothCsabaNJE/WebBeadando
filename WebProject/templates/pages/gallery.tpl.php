<form action="mainpage.php?oldal=imgUpload" method="post" enctype="multipart/form-data">
            <label><b>Upload a file:</b></label>
            <input type="file" id="image" name="image">
            <input type="submit">
        </form>
        <table>
        <tr>
        <th>Image Name</th>
        <th>Image</th>
        </tr>
        <?php
        $files = glob("images/*.*");
        for ($i = 0; $i < count($files); $i++) {
            $image = $files[$i];
            $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
            );

            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
            echo "<tr><td>";
            echo basename($image);
            echo "</td><td>";
            echo '<img src="' . $image . '" alt="Random image"/><br>';
            echo "</td></tr>";
        } else {
        continue;
        }
        }
        ?>
        </table>