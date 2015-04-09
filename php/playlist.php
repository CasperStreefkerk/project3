<?php
    $data = json_decode(file_get_contents("http://ws.spotify.com/search/1/album?q=foo"));

    print_r($data);
?>