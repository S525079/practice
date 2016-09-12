<?php

/* this program takes location as input and when submitted displays all the photos that are taken in that location
 
 */
if(!empty($_GET['location'])){
    $maps_url='https://maps.googleapis.com/maps/api/geocode/json?address='.$GET['location'];
    $maps_json=  file_get_contents($maps_url);
    $maps_array=  json_decode($maps_json,true);
    $lat=$maps_array['results'][0]['geometry']['location']['lat'];
    $lng=$maps_array['results'][0]['geometry']['location']['lng'];
    // need to get a client id from instagram and pass the lat and lng variables to the 
    //intagram url inorder to obtain the photos 
}


?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>REST test</title>
    </head>
    <body>
        <form action="">
            <input type=text" name="location"/>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>