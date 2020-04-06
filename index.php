<?php

// path of image
$img_path = './images/test.jpg';

// get the extension of the image to generate base64 string
$type = pathinfo($img_path, PATHINFO_EXTENSION);

// get the file data
$img_data = file_get_contents($img_path);

// get base64 encoded code of the image
$base64_code = base64_encode($img_data);

// create base64 string of image
$base64_str = 'data:image/' . $type . ';base64,' . $base64_code;

?>


<h3>Convert an image to base64 encoded string - <a href="https://www.cluemediator.com" target="_blank">Clue Mediator</a></h3>
<img src="<?= $base64_str; ?>" width="300" style="border:1px solid #ddd;"/>
