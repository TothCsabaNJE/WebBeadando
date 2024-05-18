<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
    <?php
        $host = 'localhost';
        $dbname = 'web';
        $username = 'root';
        $password = '';
        ?>
</head>
<div class="container">
    <div class="col-xl-12">
        <nav>
            <ul>
                <?php foreach ($oldalak as $url => $oldal) { 
                    if($url!="sendMessage" && $url!="imgUpload"){ ?>
                        <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                        <a href="mainpage.php<?= ($url == '/') ? '' : ('?oldal=' . $url) ?>">
                        <?= $oldal['szoveg'] ?></a>
                        </li>
				<?php } } ?>
            </ul>  
        </nav>
    </div>
</div>

<body>
    <div class="container">
        <div id="content" class="col-xl-12">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
</body>
</html>