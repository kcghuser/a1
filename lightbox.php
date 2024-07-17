<?php

/*******w******** 
    
    Name:Kwinton Cochrane
    Date:May 16th
    Description: php assignment

****************/

$config = [

    'gallery_name' => 'ART GALLERY',
 
    'local_images' => [ 
        ['pic' => 'one.jpg', 'thumb' => 'one_thumbnail.jpg'], 
        ['pic' => 'two.jpg', 'thumb' => 'two_thumbnail.jpg'], 
        ['pic' => 'three.jpg', 'thumb' => 'three_thumbnail.jpg'], 
        ['pic' => 'four.jpg', 'thumb' => 'four_thumbnail.jpg']
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>

    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1>
        <?php    
            echo $config['gallery_name'];
        ?>    
    </h1> 
    <div id ="large-images">
        <h1><?php echo count($config['local_images'])." Large Images";?></h1>
    </div>
        <span>
        <?php
            foreach($config['local_images'] as $i => $a){
                echo 
                "<a href ='images/{$a['pic']}'>
                    <img src = 'images/{$a['thumb']}' alt ='alternative text'>
                </a>";
            }
        ?>
        </span>
    <script>
        new LuminousGallery(document.querySelectorAll(".image a"));
    </script>

</body>
</html>