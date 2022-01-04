<?php
$url  = file_get_contents('https://api.giphy.com/v1/gifs/search?api_key=Sg5olltEJfU9II6z674VKqy5fOEfXV4O&q=emelec&limit=10');
$json = json_decode( $url );
foreach ( $json as $values ) {
 
    foreach ( $values as $value ) {

        if ( isset( $value->images->original->url ) ) {

            echo "<img src='{$value->images->original->url}' width='100' height='100'>";
        }
    }
}


?>