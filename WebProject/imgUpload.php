<?php

// Fájl feltöltés kezelés
if (isset($_POST['submit'])) {

    $target=$_FILES["fileToUpload"]["name"];
    $targetDir = "/images/".$path; // Hova rakja fel a képet 
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Kép ellenörzés
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Fájl nem kép formátum.";
        $uploadOk = 0;
    }

    // Állítható kép méret
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // 5 MB
        echo "Túl nagy fájlméret.";
        $uploadOk = 0;
    }

    // Kép formátum ellenörzése
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Csak JPG, JPEG, PNG, GIF engedélyezett.";
        $uploadOk = 0;
    }

    // Hiba jelzés ha uploadOk 0 adna ki.
    if ($uploadOk == 0) {
        echo "Sikertelen feltöltés";
    } else {
        // Feltöltött fájl áthelyezése
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetDir)) {
            echo "Az  alábbi: " . basename($_FILES["fileToUpload"]["name"]) . " fájl ikeresen feltöltve.";
        } else {
            echo "Sikertelen feltöltés.";
        }
    }
}

?>
