<?php

/*******w******** 
    
    Name:Kwinton Cochrane
    Date:May 16th
    Description: php assignment

****************/

$config = [

    'gallery_name' => 'ART GALLERY',
 
    'unsplash_categories' => [
        ['cat' => 'Travel' , 'link' => 'https://source.unsplash.com/600x800/?travel'],
        ['cat' => 'Street', 'link' => 'https://source.unsplash.com/600x800/?street-photography'],
        ['cat' => 'Food', 'link' => 'https://source.unsplash.com/600x800/?food'],
        ['cat' => 'Nature', 'link' => 'https://source.unsplash.com/600x800/?nature'],
        ['cat' => 'Film', 'link' => 'https://source.unsplash.com/600x800/?film'],
        ['cat' => 'Health', 'link' => 'https://source.unsplash.com/600x800/?health'],
    ],
    'local_images' => [ 
        ['pic' => 'one', 'name' => 'jojoyuen', 'link' => 'https://unsplash.com/@jojoyuen'], 
        ['pic' => 'two', 'name' => 'mosdesign', 'link' => 'https://unsplash.com/@mosdesign'], 
        ['pic' => 'three', 'name' => 'ryan_le', 'link' => 'https://unsplash.com/@ryan_le'], 
        ['pic' => 'four', 'name' => 'simonppt', 'link' => 'https://unsplash.com/@simonppt']
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
    <title><?=  $config['gallery_name']; ?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1>
        <?php    
            echo $config['gallery_name'];
        ?>    
    </h1> 
    <div id = "gallery">
        <?php
            foreach($config['unsplash_categories'] as $j => $k){
                echo "<h2>{$k['cat']}</h2>";
                echo "<img src ='{$k['link']}' alt='design'>";
            }
        ?>
    </div>
    <div id ="large-images">
        <h1><?php echo count($config['local_images'])." Large Images";?></h1>
        <?php
            foreach($config['local_images'] as $i => $a){
                echo "<img src = 'images/{$a['pic']}.jpg' ". 'alt="design"'.">";
                echo "<h3><a href ='{$a['link']}' target='_blank'>{$a['name']}</a></h3>";
            }
        ?>
    </div>
</body>
</html>